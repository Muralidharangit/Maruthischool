<?php

namespace App\Http\Controllers\Admin\GalleryManagement;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {

        $project_images = ProjectImage::with('category')->get();
        $gallery_images = GalleryImage::with('projectImage.category')->get();

        return view('admin.gallery_management.project_image.index', compact('project_images', 'gallery_images'));
    }

    public function create()
    {

        $categories = Category::all();

        return view('admin.gallery_management.project_image.create', compact('categories'));
    }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'category_id' => 'required',
    //         'name' => 'nullable',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp'
    //     ]);
    //     // dd("testinf");
    //     $project_image = new ProjectImage();
    //     $project_image->name = $request->input('name');
    //     $project_image->category_id = $request->input('category_id');

    //     if ($request->hasFile('image')) {

    //         $imagePath = $request->file('image')->store('images/Facult_student', 'public');
    //         $project_image->image = $imagePath;
    //     }

    //     $project_image->save();
    //     return redirect()->route('project.index')->with('success', 'Created successfully');
    // }
    // public function store(Request $request)
    // {
    //     // Validate incoming request
    //     $request->validate([
    //         'category_id' => 'required',
    //         'name' => 'nullable|string|max:255',
    //         'description' => 'nullable|string|max:255',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
    //         'gallery_images' => 'nullable|array',
    //         'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Multiple gallery images
    //     ]);

    //     // Create a new ProjectImage entry
    //     $project_image = new ProjectImage();
    //     $project_image->name = $request->input('name');
    //     $project_image->category_id = $request->input('category_id');
    //     $project_image->description = $request->input('description');

    //     // Handle storing the main project image
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('images/Project_Images', 'public');
    //         $project_image->image = $imagePath;
    //     }

    //     // Save the project image
    //     $project_image->save();

    //     // If gallery images are provided, store them
    //     if ($request->hasFile('gallery_images')) {
    //         $files = $request->file('gallery_images');

    //         // Optionally, limit the number of gallery images (e.g., 15 images)
    //         if (count($files) > 15) {
    //             return redirect()->back()->withErrors(['gallery_images' => 'You can only upload up to 15 gallery images.'])->withInput();
    //         }

    //         // Store each gallery image and associate it with the project image
    //         foreach ($files as $file) {
    //             $galleryImageName = time() . '_' . $file->getClientOriginalName();
    //             $file->move(public_path('gallery_images'), $galleryImageName);

    //             // Save the gallery image to the database, linking it with the project image
    //             GalleryImage::create([
    //                 'project_image_id' => $project_image->id,
    //                 'image' => $galleryImageName,
    //             ]);
    //         }
    //     }

    //     // Redirect with success message
    //     return redirect()->route('project.index')->with('success', 'Project and gallery images created successfully!');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',

            'name' => 'nullable|string|max:255',

            'description' => 'nullable|string',

            // One Main Image
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $project_image = new ProjectImage;

        $project_image->name = $request->name;

        $project_image->description = $request->description;

        $project_image->category_id = $request->category_id;

        // Store Main Image
        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->store(
                'images/Project_Images',
                'public'
            );

            $project_image->image = $imagePath;
        }

        $project_image->save();

        return redirect()
            ->route('project.index')
            ->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $project_image = ProjectImage::findOrFail($id);

        // Fetch related gallery images using `project_image_id`
        $project_related_images = GalleryImage::where('project_image_id', $id)->get();

        // Debugging the data
        // dd($project_image, $project_related_images);

        return view('admin.gallery_management.project_image.edit', compact('project_image', 'categories', 'project_related_images'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'category_id' => 'required',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Multiple gallery images
        ]);

        // Find the ProjectImage instance
        $project_image = ProjectImage::findOrFail($id);
        $project_image->name = $request->input('name');
        $project_image->category_id = $request->input('category_id');
        $project_image->status = $request->input('status');
        $project_image->description = $request->input('description');
        // Handle main project image update
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if (Storage::exists('public/'.$project_image->image)) {
                Storage::delete('public/'.$project_image->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images/Project_Images', 'public');
            $project_image->image = $imagePath;
        }

        // Save the project image record
        $project_image->save();

        // Handle gallery images
        if ($request->hasFile('gallery_images')) {
            $files = $request->file('gallery_images');

            // Optionally, limit the number of gallery images (e.g., 15 images)
            if (count($files) > 15) {
                return redirect()->back()->withErrors(['gallery_images' => 'You can only upload up to 15 gallery images.'])->withInput();
            }

            // Store each gallery image and associate it with the project image
            foreach ($files as $file) {
                $galleryImageName = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('gallery_images'), $galleryImageName);

                // Save the gallery image to the database, linking it with the project image
                GalleryImage::create([
                    'project_image_id' => $project_image->id,
                    'image' => $galleryImageName,
                ]);
            }
        }

        // Redirect with success message
        return redirect()->route('project.index')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $project_image = ProjectImage::findorfail($id);
        $project_image->delete();

        return redirect()->route('project.index')->with('success', 'Deleted Successfully');
    }

    public function destroy_gallery_image($id)
    {
        // Find the gallery image by its ID
        $galleryImage = GalleryImage::findOrFail($id);

        // Delete the image file from storage if it exists
        if (Storage::exists('gallery_images/'.$galleryImage->image)) {
            Storage::delete('gallery_images/'.$galleryImage->image);
        }

        // Delete the gallery image record from the database
        $galleryImage->delete();

        // Return a response (redirect back or return a success message)
        return redirect()->back()->with('message', 'Gallery image removed successfully.');
    }
}
