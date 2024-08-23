<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = DB::table('members')
        // ->where('status', 'active')
        // ->orderBy('start')
        ->paginate(20)->withQueryString();

        // return $members;
    
        return view('admin.members', compact('members'));
    }

    public function store(Request $request)
    {
        // return $request;
        if ($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads/members';
            $file->move($destinationPath,urlencode($file->getClientOriginalName()));

            $member = new Member;
            $member->img = '/'.$destinationPath.'/'.urlencode($file->getClientOriginalName());
            $member->name = $request->input('name');
            $member->description = $request->input('description');

            $member->save();
            return redirect('/admin/members')->with('success','Committee Member Added!');
        }

    }

    public function destroy(Request $request, string $id)
    {
        $item = Member::find($id);
        $item->delete();
        return back()->with('success','Member Deleted!');

    }
}
