<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //add new relative type
    public function addRelative(){
        return view('backend.pages.admin_pages.relativeType');
    }

    //display Supervisors
    public function addSupervisors(){
        return view('backend.pages.admin_pages.supervisors');
    }

    //disply Guards
    public function addGuards(){
        return view('backend.pages.admin_pages.Guirds');
    }

    //display Faculties blade
    public function addFaculties(){
        return view('backend.pages.admin_pages.faculties');
    }

     //display Sections
    public function addSections(){
        return view('backend.pages.admin_pages.section');
    }

    //disply Students
    public function addStudents(){
        return view('backend.pages.admin_pages.students');
    }

}
