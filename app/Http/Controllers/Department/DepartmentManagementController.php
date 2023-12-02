<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentManagementController extends Controller
{
    public function index()
    {
        return view('pages.department.department_view') ;
    }
}
