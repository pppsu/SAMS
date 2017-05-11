<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;

class AssistantPresidentController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $staffs = Staff::where('role','=','Assistant to the President for Student Development')->paginate(20);
        $staffs->setPath('presidentForStudent');

        return view('staff.presidentForStudent')->with('staffs',$staffs);
    }

    public function create() {
        return view('staff.addPresidentForStudent');
    }

    public function insert(Request $request) {
        $staffs = new Staff;
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Assistant to the President for Student Development";
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

        return Redirect::to('presidentForStudent');
    }

    public function edit($id) {
        $staffs = Staff::find($id);
        return view('staff.edit_presidentForStudent')->with('staffs',$staffs);
    }

    public function update($id,Request $request) {
        $staffs = Staff::find($id);
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Assistant to the President for Student Development";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');

        $staffs->save();
        return Redirect::to('presidentForStudent');
    }

    public function destroy($id) {
        $staffs = Staff::find($id);
        $staffs -> delete();
        return Redirect::to('presidentForStudent');
    }
}
