<?php

namespace App\Http\Controllers\Admin\ContactManagement;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormReply;
use App\Mail\ContactFormSubmitted;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {

        $contactDetails = Contact::OrderBy('created_at', 'DESC')->get();
        return view('admin.contact_management.index', compact('contactDetails'));
    }

    public function create()
    {

        return view('admin.contact_management.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_no' => 'required|digits:10', // Exactly 10 digits
            'subject' => 'required|string|min:5', // Subject is now optional // Minimum of 5 characters for subject
            'enquiry' => 'required|string|min:10', // Minimum of 10 characters for enquiry
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

        $adminEmail = env('MAIL_USERNAME'); // Fetch the admin email from the .env file

        // Send email to admin or default email
        Mail::to($adminEmail)->send(new ContactFormSubmitted($contact_info));

        // Redirect or return a view after storing
        return redirect()->back()->with('success', 'We will get back to you soon...');
    }
}
