<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class AdminController extends Controller
{
    public function index()
    {
        $count = Setting::find(1);
        $count->mails = DB::table('mails')->where('label','inbox')->where('status','unread')->count();
        $count->abstracts = DB::table('abstract_submissions')->where('status','active')->count();
        $count->downloads = DB::table('downloads')->count();
        $date = today()->format('Y-m-d');
        $count->conferences = DB::table('conferences')
            ->where('start', '>=', $date)
            ->orderBy('start')->count();

        // return $count;
        return view('admin.index', compact('count'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
