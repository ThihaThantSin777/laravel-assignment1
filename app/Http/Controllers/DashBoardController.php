<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function showProfile(){
        return view('myProfile');
    }
    public function showSubjects(){
        return view('subjects');
    }
    public function showClasses(){
        return view('class');
    }

    public function showTeachers(){
        return view('teacher');
    }

    public function showStudents(){
        return view('student');
    }
    public function showSchedule(){
        return view('schedule');
    }
}
