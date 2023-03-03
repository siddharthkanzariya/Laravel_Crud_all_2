<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentarray = Student::all();
        return view('student.index',compact('studentarray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $original_filename = $file->getClientOriginalName();
        Storage::disk('public')->put($original_filename, File::get($file));

        $st_hobby = $request->get('st_hobby');
        $hobby = implode(',',$st_hobby);

        $studentq = new Student([
            'st_name' => $request->get('name'),
            'st_gender' => $request->get('gender'),
            'st_hobby' => $hobby,
            'st_email' => $request->get('email'),
            'st_mobile' => $request->get('mobile'),
            'st_password' => $request->get('password'),
            'st_bloodgroup' => $request->get('bloodgroup'),
            'st_address' => $request->get('address'),
            'st_image' => $original_filename,
        ]);

        $studentq->save();
        //echo 'added';
        return redirect('/student')->with('success','Student Information Has Been Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studentdata = Student::where('id','=',$id)->first();
        return view('student.show',compact('studentdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentdata = Student::where('id',$id)->first();
        return view('student.edit',compact('studentdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file = $request->file('image');
        $original_filename = $file->getClientOriginalName();
        Storage::disk('public')->put($original_filename, File::get($file));

        $st_hobby = $request->get('st_hobby');
        $hobby = implode(',',$st_hobby);

        $student = Student::where('id',$id)->first();
        $student->st_name = $request->get('name');
        $student->st_gender = $request->get('gender');
        $student->st_mobile = $request->get('mobile');
        $student->st_email = $request->get('email');
        $student->st_bloodgroup = $request->get('bloodgroup');
        $student->st_address = $request->get('address');
        $student->st_hobby = $st_hobby;

        if(isset($request->st_image)){
            if(file_exists('..public/uploads' . $student->st_image))
            unlink('..public/uploads'. $student->st_image);
        }
        $student->st_image = $original_filename;

        if($request->get('password') != ''){
            $student->st_password = md5($request->get('password'));
        }

        $student->save();
        return redirect('/student')->with('success','Student Information Has Been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentarray = Student::where('id',$id)->first();
        if(file_exists('uploads/' . $studentarray->st_image)){
            unlink('uploads/' . $studentarray->st_image);
        }

        Student::find($id)->delete();
        return redirect('/student')->with('success','Student Information Has Been Deleted Successfully!');
    }
}
