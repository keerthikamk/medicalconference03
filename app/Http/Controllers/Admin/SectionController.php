<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Section;
use App\Models\Content;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $view)
    {
        $section = DB::table('sections')->where('page_id', 1)->first(); //return $sections;
        $contents = DB::table('sections')
            ->join('contents','contents.section_id','sections.id')
            ->where('sections.page_id', 1)
            ->select('contents.*')
            ->get();
        $downloads = DB::table('downloads')->orderBy('id', 'DESC')->paginate(20)->withQueryString();

        return view('admin.sections.'.$view, compact('section','downloads'));
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
        //
    }
}
