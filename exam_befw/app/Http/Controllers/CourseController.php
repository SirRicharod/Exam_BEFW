<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /* 3. controller
    Maak een CourseController met:
    index()
    store()
    In store(): - sla een nieuwe course op; index -> laat alles courses zien!*/

    public function index()
    {
        /*2. eloquent queries
        Schrijf de code in de controller:

        Haal alle actieve cursussen op
        Sorteer alfabetisch op titel
        Toon ze in de view*/

        $courses = Course::where('active', 1)->orderBy('title')->get();
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        // title - description - active (checkbox) Validatie: - title verplicht, min 3 karakters - description verplicht
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect('/courses');
    }

    public function create()
    {
        return view('courses.create');
    }

    public function toggle(Course $course)
{
    $course->active = !$course->active;
    $course->save();

    return redirect('/courses');
}
}
