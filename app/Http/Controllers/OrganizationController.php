<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\Staff;
use Redirect;
class OrganizationController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $organization = Organization::join('staffs','organizations.psu_passport','=','staffs.psu_passport')
        ->select('organizations.*','staffs.title','staffs.firstname','staffs.lastname')->get();

        return view('staff.in_organize')->with('organization',$organization);
    }

    public function create() {
    	return view('staff.add_organize');
    }

    public function insert(Request $request) {
    	$organization = new Organization;
        $organization->psu_passport = $request->input('id');
    	$organization->org_name = $request->input('org_name');
    	$organization->org_acronym = $request->input('org_acronym');
    	$organization->org_status = $request->input('org_status');
    	$organization->org_attribute = $request->input('org_attribute');
    	$organization->save();

    	$staffs = new Staff;
    	$staffs->psu_passport = $request->input('id');
    	$staffs->title = $request->input('title');
    	$staffs->firstname = $request->input('firstname');
    	$staffs->lastname = $request->input('lastname');
    	$staffs->role = "Advisor";
    	$staffs->email = $request->input('email');
    	$staffs->begin_date = $request->input('begin_date');
    	$staffs->end_date = $request->input('end_date');
    	$staffs->save();

    	return Redirect::to('organizeation');
    }

    public function edit($id) {
        $organization = Organization::join('staffs','organizations.psu_passport','=','staffs.psu_passport')
        ->select('organizations.*','staffs.*')
        ->where('organizations.org_id','=',$id)->get();

        return view('staff.edit_organization')->with('organization',$organization);
    }

    public function update($id,Request $request) {
        $organization = Organization::find($id);
        $organization->psu_passport = $request->input('id');
        $organization->org_name = $request->input('org_name');
        $organization->org_acronym = $request->input('org_acronym');
        $organization->org_status = $request->input('org_status');
        $organization->org_attribute = $request->input('org_attribute');
        $organization->save();

        /*$staffs = new Staff;
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Advisor";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');
        $staffs->save();*/

        return Redirect::to('organizeation');
    }

    public function destroy($id) {
        $organization = Organization::find($id);
        $organization->delete();

        return Redirect::to('organizeation');
    }
}
