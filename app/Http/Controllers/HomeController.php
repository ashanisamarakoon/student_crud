<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::paginate(5); // Adjust the number as needed
        return view('home', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
