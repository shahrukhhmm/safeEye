<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class BranchController extends Controller
{
    public function index()

    {
        $branch = Branch::count();

        return view('admin.branches.index',compact('branch'));
    }

        // yajra pagination
    public function getBranch(Request $request)
    {
        if ($request->ajax()) {

            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');

            if($fromDate == null && $toDate == null){

                $data = Branch::get();
            }

            else{
                //Date Filter
                $data = Branch::whereBetween('created_at', [$fromDate, $toDate])->get();
            }

            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {

                    $btn = '<button class="btn btn-sm  btn-info ml-2 my-3 edit" value="' . $row->id . '" type="button"><i class="fa fa-edit"></i></button>';
                    $btn = $btn .  '<a class="btn btn-sm btn-danger ml-2 my-3" href="'.url('/branch-delete/'.$row->id).'" role="button"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->addColumn('created_by', function ($row) {

                    $created_at = $row->created_at;

                    $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');
                    return $formatted_date;
                })
                ->rawColumns(['action', 'created_by'])
                ->make(true);

        }
    }


    public function addBranch(Request $req){

        Branch::insert([
            'name' => $req->name,
            'address' => $req->address,
            'created_at' => now(),
        ]);

        return redirect()->back();
    }


    // edit
    public function editBranch($id){

        $branch = Branch::find($id);

        return response()->json([
            'branch'=>$branch,
        ]);
    }



    // update Branch
    public function updateBranch(Request $req){

        $branch = Branch::find($req->branchId);

        $branch->name = $req->name;

        $branch->address = $req->address;

        $branch->save();


        return redirect()->back();

    }



    // delete Branch
    public function deleteBranch($id){

        $Branch=Branch::find($id);

        if ($Branch) {
            $Branch->delete();
        }

        session()->flash('message', 'Branch deleted successfully!');

        return redirect()->back();
    }
}
