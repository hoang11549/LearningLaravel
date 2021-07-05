<?php

namespace App\Http\Controllers;

use Nagy\LaravelRating\Traits\Rate\Rateable;
use Illuminate\Pagination\CursorPaginator;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /** hieenr thi danh sach student
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
        $student = Student::paginate(10);
        return view('listStudent')->with('student', $student);
    }

    /** tao bai viet tren form
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createStudent');
    }

    /**  luu bai viet
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new Student();
        $student->name = $request->namestu;
        $student->email = $request->Emailstu;
        $student->age = $request->ageStu;
        $student->save();
        return redirect()->route('listStudent.create')->with('msg', 'Them hoc sinh thanh cong');
    }

    /** xem bai viet
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /** show form hien thi
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /** sua bai viet
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /** xoa bai viet
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
