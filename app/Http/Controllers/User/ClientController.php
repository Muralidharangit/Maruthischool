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
        try {
            $categories = Category::with(['images' => function ($q) {
                $q->where('status', 1);
            }])->where('status', 1)->get();

            if ($categories->isEmpty()) {
                $categories = Category::with('images')->get();
            }
        } catch (\Exception $e) {
            $categories = collect();
        }

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

    public function circular()
    {
        return view('user.circular');
    }

    public function services()
    {
        return view('user.services');
    }

    public function projects()
    {
        try {
            $imagecategories = Category::where('status', 1)->get();
            $galleries = ProjectImage::where('status', 1)->get();
        } catch (\Exception $e) {
            $imagecategories = collect();
            $galleries = collect();
        }

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

        try {
            // Create a new contact entry
            $contact_info = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_no' => $request->input('mobile_no'),
                'subject' => $request->input('subject'),
                'enquiry' => $request->input('enquiry'),
            ]);

            $adminEmail = env('MAIL_USERNAME', 'info@maruthischool.edu.in');

            // Attempt to send email, ignore error if SMTP server is offline locally
            try {
                Mail::to($adminEmail)->send(new ContactFormSubmitted($contact_info));
            } catch (\Exception $mailEx) {
                // Ignore local SMTP sending exception
            }

            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
        } catch (\Illuminate\Database\QueryException $dbEx) {
            return redirect()->back()->with('error', 'Database connection error. Please make sure MySQL is running in your XAMPP Control Panel on port 3306.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
