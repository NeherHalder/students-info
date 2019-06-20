<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Student;

class PublicController extends Controller
{
    public function index()
    {
        $search = request('q');
        $students = $search ? Student::search($search)->get() : Student::all();
        $page_title = 'Home | Student Infos';
        return view('frontend.pages.index', compact('page_title', 'students'));
    }

    public function contact_us(){
        $page_title = 'Contact | Student Infos';
        return view('frontend.pages.contact', compact('page_title'));
    }
}
