<?php

namespace App\Http\Controllers\Admin\SliderManagement;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('order', 'asc')->get();
        return view('admin.slider_management.index', compact('sliders'));
    }
    public function create()
    {
        $sliderCount = \App\Models\Slider::count(); // Count total sliders
        return view('admin.slider_management.create', compact('sliderCount'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:50',
            'description' => 'nullable|string|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:3072',
            'order' => 'required|integer|min:1',
            'status' => 'required|in:0,1'
        ]);

        // Shift orders if needed
        Slider::where('order', '>=', $request->order)
            ->increment('order'); // Push existing orders down

        // Store image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/sliders', 'public');
            $imagePath = $request->file('image')->move(public_path('storage/images/sliders'), $request->file('image')->getClientOriginalName());
        }

        // Save to database
        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ?? null,
            'order' => $request->order,
            'status' => $request->status,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider added successfully!');
    }

    public function edit($id)
    {
        $slider_data = Slider::findOrFail($id);
        return view('admin.slider_management.edit', compact('slider_data'));
    }
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:50',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:3072',
            'order' => 'required|integer|min:1',
            'status' => 'required|in:0,1'
        ]);

        // Shift orders only if order is changed
        // if ($slider->order != $request->order) {
        //     Slider::where('order', '>=', $request->order)
        //         ->where('id', '!=', $id) // Exclude the current slider
        //         ->increment('order');
        // }

        $oldOrder = $slider->order;
        $newOrder = $request->order;
        if ($oldOrder != $newOrder) {
            if ($oldOrder > $newOrder) {
                // Moving UP: Shift down the range
                Slider::whereBetween('order', [$newOrder, $oldOrder - 1])
                    ->increment('order');
            } else {
                // Moving DOWN: Shift up the range
                Slider::whereBetween('order', [$oldOrder + 1, $newOrder])
                    ->decrement('order');
            }
        }

        // Store image if uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }

            $imagePath = $request->file('image')->store('images/sliders', 'public');
            $slider->image = $imagePath;
        }

        // Update database
        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
            'order' => $request->order,
            'status' => $request->status,
        ]);
        return redirect()->route('slider.index')->with('success', 'Slider updated successfully!');
    }
    // public function destroy($id)
    // {

    //     // Find and delete the slider
    //     $slider = Slider::findOrFail($id);

    //     if ($slider->image) {
    //         Storage::disk('public')->delete($slider->image);
    //     }

    //     $slider->delete();

    //     // Reorder the remaining sliders
    //     $sliders = Slider::orderBy('order', 'asc')->get();
    //     foreach ($sliders as $index => $item) {
    //         $item->order = $index + 1; // Assign new order values sequentially
    //         $item->save();
    //     }

    //     return redirect()->route('slider.index')->with('success', 'Deleted Successfully and reordered');
    // }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        // Reorder the remaining sliders
        $sliders = Slider::orderBy('order', 'asc')->get();
        foreach ($sliders as $index => $item) {
            $item->order = $index + 1;
            $item->save();
        }

        return redirect()->route('slider.index')->with('success', 'Deleted Successfully');
    }
}
