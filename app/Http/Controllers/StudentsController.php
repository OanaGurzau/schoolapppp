<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Classe;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::pluck('name', 'id');

        return view('student.create')->with('classesView', $classes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //create Students
        $student = new Student;
        $student->name = $request->input('prenume');
        $student->surname = $request->input('nume');
        $student->parent_i = $request->input('initiala');
        $student->save();

        $student->classes()->attach($class);


        return redirect('/students')->with('success', 'Elevul a fost adaugat in baza de date!');
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
    public function edit($id)
    {
        $classes = Classe::pluck('name', 'id');
        $student = Student::find($id);

        return view('student.edit')->with('student', $student)->with('classesView', $classes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('prenume');
        $student->surname = $request->input('nume');
        $student->parent_i = $request->input('initiala');

        $student->save();

        return redirect('/students')->with('success', 'Noile informatii au fost salvate cu succes!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Elevul a fost sters din baza de date!');
    }
}
