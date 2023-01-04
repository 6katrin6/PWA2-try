<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all(); // vytiahnut z databazy
        // $departments = Department::orderBy('name','acs')->get(); // zoradit podla abecedy
        return view('departments.index')->with('departments', $departments);
        }
}
