<?php

namespace App\Http\Controllers\Admin\EventController;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {

        $eventDetails = Event::OrderBy('created_at', 'DESC')->get();

        return view('admin.event_management.index', compact('eventDetails'));
    }

    public function create()
    {

        return view('admin.event_management.create');
    }

    public function edit($id)
    {
        // Find Event
        $event = Event::findOrFail($id);

        // Return Edit Blade
        return view('admin.event_management.edit', compact('event'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:255',

            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',

            'event_date' => 'required|date',

            'description' => 'nullable|string',

            'status' => 'required|in:0,1',
        ]);

        // Store Image
        $imagePath = $request->file('image')->store(
            'images/events',
            'public'
        );

        // Create Event
        Event::create([

            'title' => $request->title,

            'image' => $imagePath,

            'event_date' => $request->event_date,

            'description' => $request->description,

            'status' => $request->status,
        ]);

        // return redirect()->back()
        //     ->with('success', 'Event Created Successfully');

        return redirect()->route('event.index')->with('success', 'Event added Successfully');
    }

    public function update(Request $request, $id)
    {
        // Find Event
        $event = Event::findOrFail($id);

        // Validation
        $request->validate([

            'title' => 'required|max:255',

            'event_date' => 'required|date',

            'description' => 'nullable|string',

            'status' => 'required|in:0,1',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

        ]);

        // Update Image
        if ($request->hasFile('image')) {

            // Delete Old Image
            if ($event->image && Storage::disk('public')->exists($event->image)) {

                Storage::disk('public')->delete($event->image);

            }

            // Store New Image
            $imagePath = $request->file('image')->store(
                'images/events',
                'public'
            );

            $event->image = $imagePath;
        }

        // Update Data
        $event->title = $request->title;

        $event->event_date = $request->event_date;

        $event->description = $request->description;

        $event->status = $request->status;

        $event->save();

        return redirect()
            ->route('event.index')
            ->with('success', 'Event Updated Successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image && Storage::disk('public')->exists($event->image)) {

            Storage::disk('public')->delete($event->image);

        }

        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'Event Deleted Successfully');
    }

    //    public function destroy($id)
    // {
    //     $project_image = ProjectImage::findorfail($id);
    //     $project_image->delete();

    //     return redirect()->route('project.index')->with('success', 'Deleted Successfully');
    // }
}
