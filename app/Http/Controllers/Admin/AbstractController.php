<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AbstractSubmission;

class AbstractController extends Controller
{

    private function dateConv($dated_at) {

        $today = date('Ymd');
        $toyear = date('Y');

        $date = date('Ymd', strtotime($dated_at));
        $year = date('Y', strtotime($dated_at));

        if ($date == $today) {
            $date = date("g:i a", strtotime($dated_at));
        } elseif($year == $toyear) {
            $date = date("d M", strtotime($dated_at));
        } else {
            $date = date("d M Y", strtotime($dated_at));
        }

        return $date;

    }


    public function index(Request $request)
    {
        $search = '';
        if ($request->get('search')) {
            $search = $request->get('search');

            $abstracts = DB::table('abstract_submissions')
            ->where('status', 'active')
            ->whereAny([
                'fname',
                'lname',
                'email',
                'phone',
                'organization'
            ], 'LIKE', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(20)->withQueryString();
    
        } else {

            $abstracts = DB::table('abstract_submissions')
            ->where('status', 'active')
            ->orderBy('id', 'desc')
            ->paginate(20)->withQueryString();
        }

        $today = date('Ymd');
        $toyear = date('Y');

        foreach($abstracts as $abstract)
        {
            $abstract->date = $this->dateConv($abstract->created_at);
        }

        // return $abstracts;
    
        return view('admin.abstracts', compact('abstracts','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $abstract = AbstractSubmission::find($id);
        $abstract->date = $this->dateConv($abstract->created_at);
        // return $abstract;
        return view('admin.abstract-show', compact('abstract'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abstract = AbstractSubmission::find($id);
        $abstract->status = 'disabled';
        $abstract->update();

        return back();
    }
}
