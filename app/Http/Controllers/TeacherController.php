<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use PhpParser\ErrorHandler\ThrowingTest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['teachers'] = Teacher::all()->toArray();
        return view('teacher.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('teacher.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $teacher = new Teacher();

        $teacher = $teacher->fill($data)->toArray();

        $founded = Teacher::where('user_ufba', '=', $teacher['user_ufba'])
            ->get();

        if(!$founded->isEmpty()){
            $data['error'] = true;
            return view('teacher.create_edit')->with($data);
        }

        $response = Teacher::create($teacher)->toArray();

        $data['teachers'] = Teacher::all()->toArray();
        return view('teacher.index')->with($data);

    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param Teacher $teacher
     */
    public function show($id)
    {
        $teacher = Teacher::find($id)->toArray();

        return view('teacher.create_edit')->with($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request)
    {
        $data = $request->all();

        $teacher = new Teacher();
        $teacher = $teacher->fill($data);

        $teacher = Teacher::where('id', '=', $teacher->id)
            ->update($teacher->toArray());

        $data['teachers'] = Teacher::all()->toArray();
        return view('teacher.index')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $teacher = Teacher::where('id', '=', $id)->delete();

        $data['teachers'] = Teacher::all()->toArray();
        return view('teacher.index')->with($data);

    }
}
