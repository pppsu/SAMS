<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;

class VicePresidentController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index() {
        $staffs = Staff::where('role','=','Vice President for Academic Affairs')->paginate(20);
        $staffs->setPath('presidentForAcademic');

        return view('staff.presidentForAcademic')->with('staffs',$staffs);
    }

    public function create() {
    	return view('staff.addPresidentForAcademic');
    }

    public function insert(Request $request) {
    	$staffs = new Staff;
    	$staffs->psu_passport = $request->input('id');
    	$staffs->title = $request->input('title');
    	$staffs->firstname = $request->input('firstname');
    	$staffs->lastname = $request->input('lastname');
    	$staffs->role = "Vice President for Academic Affairs";
    	$staffs->email = $request->input('email');
    	$staffs->begin_date = $request->input('begin_date');
    	$staffs->end_date = $request->input('end_date');

    	$staffs->save();

                $user = new User;
        $user->psu_pass = $request->input('id');
        $user->name = $request->input('firstname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('phone'));
        $user->admin = 3;

        $user->save();
        
    	return Redirect::to('presidentForAcademic');
    }

    public function edit($id) {
        $staffs = Staff::find($id);
        return view('staff.edit_presidentForAcademic')->with('staffs',$staffs);
    }

    public function update($id,Request $request) {
        $staffs = Staff::find($id);
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Vice President for Academic Affairs";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');

        $staffs->save();
        return Redirect::to('presidentForAcademic');
    }

    public function destroy($id) {
        $staff = Staff::find($id);
        $staff->delete();

        return Redirect::to('presidentForAcademic');
    }
}

