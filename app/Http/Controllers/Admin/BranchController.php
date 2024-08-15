<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()

    {
        $branch = Branch::count();

        return view('admin.branches.index',compact('branch'));
    }
}