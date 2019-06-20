<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Student;

class StudentImagesController extends Controller
{
    private $path = "images/students";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        $images = $student->images()->get();
        $title = $student->name." - All Images";
        return view('backend.hr.students.images.index', compact('images', 'student', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        $images = $student->images()->get();      
        $title = $student->name.": Add Images";
        return view('backend.hr.students.images.create', compact('images', 'student', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, student $student)
    {
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100']);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->path), $imageName);
        
        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $student->images()->save($image);  

        return back()->withSuccess('You have successfully add an image.');
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
    public function edit($student_id, $image_id)
    {
        $image = Image::find($image_id);
        $title = $image->imageable->name.': Edit Image';
        return view('backend.hr.student.images.edit', compact('title', 'student_id', 'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student, Image $image)
    {       
        $image->status = $request->status;
        $image->save();

        return back()->withSuccess('Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $student_id, $image_id)
    {
        if(file_exists($request->avatar)){
            unlink($request->avatar);
        }
                
        $image = Image::find($image_id)->delete();
        return back()->withSuccess("Delation Success!");
    }   
}
