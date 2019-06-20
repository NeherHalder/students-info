<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Settings\Department;
use App\Image;
use App\Student;

class StudentsController extends Controller
{
    private $path = "images/students";
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->get();
        $title = "All Students";
        return view('backend.hr.students.index', compact('students', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::orderBy('name', 'asc')->get();
        return view('backend.hr.students.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreRequest $request)
    {
        $student = new Student;
        $student->department()->associate($request->department_id);
        $student->name = trim(preg_replace('/\s\s+/', ' ', $request->name));        
        $student->roll_no = $request->roll_no;
        $student->reg_no = $request->reg_no;  
        $student->save();    

        return back()->withSuccess('Create Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $title = 'Edit - '.$student->name;
        return view('backend.hr.students.edit', compact('title', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $student->name = trim(preg_replace('/\s\s+/', ' ', $request->name));        
        $student->save();    

        return redirect('dashboard/students')->withSuccess('Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->images()->each(function ($item, $key) {
            unlink($item->src);
            $item->delete();
        });

        $student->delete();

        return back()->withSuccess('Deleted Success!');
    }
}
