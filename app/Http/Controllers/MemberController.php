<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Organization;
use App\User;
use Redirect;

class MemberController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $students = Student::where('role','=','Member')->paginate(20);
        $students->setPath('Member');

        return view('staff.in_clubmember')->with('students',$students);
    }

    public function create() {
        $organization = Organization::select('org_id','org_name')->get();
    	
        return view('staff.add_clubmember')->with('organization',$organization);
    }

    public function insert(Request $request) {
    	$student = new Student;
    	$student->psu_passport = $request->input('id');
    	$student->title = $request->input('title');
    	$student->firstname = $request->input('firstname');
    	$student->lastname = $request->input('lastname');
    	$student->faculty = $request->input('faculty');
    	$student->major = $request->input('major');
        $student->org_id = $request->input('org_id');
        $student->position = $request->input('position');
    	$student->role = 'Member';
    	$student->begin_date = $request->input('begin_date');
    	$student->end_date = $request->input('end_date');
    	$student->phone = $request->input('phone');
    	$student->email = $request->input('email');

    	$student->save();

        $user = new User;
        $user->psu_pass = $request->input('id');
        $user->name = $request->input('firstname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('phone'));
        $user->admin = 0;

        $user->save();
    	return Redirect::to('Member');
    }

    public function edit($id) {
        $student = Student::find($id);
        $organization = Organization::select('org_id','org_name')->get();
        //echo $student;
        return view('staff.edit_clubmember')->with('student',$student)
        ->with('organization',$organization);
    }

    public function update($id,Request $request) {
        $student = Student::find($id);
        $student->psu_passport = $request->input('id');
        $student->title = $request->input('title');
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->faculty = $request->input('faculty');
        $student->major = $request->input('major');
        $student->org_id = $request->input('org_id');
        $student->position = $request->input('position');
        $student->role = 'Member';
        $student->begin_date = $request->input('begin_date');
        $student->end_date = $request->input('end_date');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');

        $student->save();
        return Redirect::to('Member');
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return Redirect::to('Member');
    }
}
