<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Response;

class EmployeeController extends Controller
{
     public function Index(){
		return Employee::all();
	 }
	 
	 public function create(Request $request){
		Employee::create($request->all());
		return response()->json(['message' => 'Successfully created ']);
	 }
	
	public function delete(Request $request,$id){
		$employee = Employee::findorfail($id);
		$employee->delete();
		return response()->json(['message' => 'Deleted Successfully']);
	}
	
	public function edit(Request $request,$id){
		return Employee::findorfail($id);
		//return response()->json(['message' => 'Updated Successfully']);
	}
	
	public function update(Request $request,$id){
		Employee::findorfail($id)->update($request->all());
		return response()->json(['message' => 'Updated Successfully']);
	}
}
