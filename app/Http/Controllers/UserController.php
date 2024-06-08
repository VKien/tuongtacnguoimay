<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function employee()
    {
        return view('employees.home');
    }

    public function doctor()
    {
        return view('doctors.home');

    }

    public function manager()
    {
        return view('managers.home');
    }

    public function createEmployee()
    {
        return view('managers.create-employee');
    }

    public function PostCreateEmployee(Request $request)
    {
        echo "ok";
    }
}
