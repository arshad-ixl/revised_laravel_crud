<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index',['all_student_details' => student::all(),'state_data'=>DB::table('states')->get(),'city_data'=>DB::table('cities')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_states = DB::table('states')->get();
        // dd($all_states);
        return view('pages.create',['states_data'=>$all_states]);
    }

    public function cities(Request $request)
    {
        // dd($request);
        $selected = $request->get('state');
        $data = DB::table('cities')->where('state_id',$selected)->get();
        $output = "";
        foreach($data as $row){
            $output .= '<option value="'.$row->id.'">'.$row->city.'</option>';
        }
        return $output;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $std = new student();
        $std->student_roll = $request->input('roll');
        $std->student_name = $request->input('name');
        $std->student_state = $request->input('state');
        $std->student_city = $request->input('city');

        if($request->hasFile('img')){
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . "." . $ext;
            $file->move('uploads/emp_img/' , $filename);
            $std->student_img = $filename;
        }

        $std->save();
        return redirect()->route('students.index');
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
        return view('pages.update', ['student' => student::find($id),'states_data'=>DB::table('states')->get(),'city_data'=>DB::table('cities')->get()]);
    
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
        // saving all data into db
        $student = student::find($id);
        $student->student_roll = $request->input('up_roll');
        $student->student_name =  $request->input('up_name');
        $student->student_state = $request->input('up_state');
        $student->student_city = $request->input('up_city');

        //image update
        if ($request->hasFile('up_img')) {
            $file = $request->file('up_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . "." . $ext;
            $file->move('uploads/emp_img/' , $filename);
            $student->student_img = $filename;
        }

        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/students');

    }
}

//
// INSERT INTO `students`(`student_roll`, `student_name`, `student_state`, `student_city`, `student_img`) VALUES (1,'Ash','Maha','Mum','ash.jpg');