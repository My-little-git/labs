<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function getAll(){
        return view('lab_four', [
            'persons' => Person::get(),
            'departments' => Department::get()
        ]);
    }

    public function searchEmployee(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $surname = $req->input('surname');
        // dd($req);
        return view('lab_four', [
            'persons' => Person::where([
                ['department_id', 'like', '%'.$id.'%'], 
                ['name', 'like', '%'.$name.'%'],
                ['surname', 'like', '%'.$surname.'%']])->get(),
            'departments' => Department::get()
            ]);
    }
}
