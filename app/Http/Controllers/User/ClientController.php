<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormReply;
use App\Mail\ContactFormSubmitted;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Event;
use App\Models\GalleryImage;
use App\Models\ProjectImage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index()
    {
      
        // $sliders = Slider::all(); // Fetch all records from sliders table
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get(); // Fetch sliders in ascending order

        return view('user.index', compact('sliders')); // Pass data to the view
    }

    public function about()
    {

        return view('user.about');
    }

    public function event_page()
    {
        $events = Event::where('status', 1)
            ->latest()
            ->get();

        return view('user.events', compact('events'));
    }

    // public function event_details($id)
    // {
    //     $event = Event::findOrFail($id);

    //     return view('user.event-details', compact('event'));
    // }

    public function event_details($id)
    {
        $event = Event::findOrFail($id);

        $recentEvents = Event::where('status', 1)
            ->where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('user.eventsdetails', compact(
            'event',
            'recentEvents'
        ));
    }

    public function gallery()
    {

        // return view('user.gallery');
        $categories = Category::with('images')->get();

        return view('user.gallery', compact('categories'));
    }

    public function achievements()
    {

        return view('user.achievements');
    }

    public function curriculum()
    {

        return view('user.curriculum');
    }

    public function calendar()
    {

        return view('user.calendar');
    }

    public function services()
    {

        return view('user.services');
    }

    // public function gallery_view()
    // {
    //     $categories = Category::with('projectImages')->get();

    //     return view('gallery', compact('categories'));
    // }

    public function projects()
    {
        $imagecategories = Category::where('status', 1)->get();
        $galleries = ProjectImage::where('status', 1)->get();

        return view('user.projects', compact('imagecategories', 'galleries'));
    }

    // In GalleryController.php
    public function show($id)
    {
        // Fetch the project image and related gallery images
        $projectImage = ProjectImage::with('category')->findOrFail($id);
        $galleryImages = GalleryImage::where('project_image_id', $projectImage->id)->get();

        return view('user.project_details', compact('projectImage', 'galleryImages'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function contactstore(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_no' => 'required|digits:10', // Exactly 10 digits
            'subject' => 'required|string', // Minimum of 5 characters for subject
            'enquiry' => 'required|string', // Minimum of 10 characters for enquiry
        ]);

        // dd($request);
        // Create a new contact entry
        $contact_info = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile_no' => $request->input('mobile_no'),
            'subject' => $request->input('subject'),
            'enquiry' => $request->input('enquiry'),
        ]);

        // $user_mail = $request->input('email');
        // // Send "Thank You" email to the user
        // Mail::to($user_mail)->send(new ContactFormReply($contact_info));

        $adminEmail = env('MAIL_USERNAME', 'sangeethafullstackdeveloper@gmail.com'); // Fetch the admin email from the .env file
        // $adminEmail = env('MAIL_USERNAME', 'info.fioarchitects@gmail.com'); // Fetch the admin email from the .env file
        // dd( $adminEmail );

        // Send email to admin or default email
        Mail::to($adminEmail)->send(new ContactFormSubmitted($contact_info));

        // Redirect or return a view after storing
        return redirect()->back()->with('success', 'We will get back to you soon...');
    }
}
