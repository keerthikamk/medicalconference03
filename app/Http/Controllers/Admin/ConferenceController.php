<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if ($request->get('search')) {
            $search = $request->get('search');

            $conferences = DB::table('conferences')
            // ->where('status', 'active')
            ->whereAny([
                'title',
                'sub_title',
                'location',
            ], 'LIKE', "%$search%")
            ->orderBy('start')
            ->paginate(20)->withQueryString();
    
        } else {

            $date = today()->format('Y-m-d');
            $conferences = DB::table('conferences')
            ->where('start', '>=', $date)
            ->orderBy('start')
            ->paginate(20)->withQueryString();
        }

        // return $conferences;
    
        return view('admin.conferences', compact('conferences','search'));
    }

    public function create()
    {
        return view('admin.conference-add');
    }

    public function store(Request $request)
    {
        $conference = new Conference;
        $conference->title = $request->input('title');
        $conference->sub_title = $request->input('sub_title');
        $conference->location = $request->input('location');
        $conference->start = $request->input('start');
        $conference->end = $request->input('end');
        $conference->save();

        return redirect('/admin/conferences')->with('success','Conference Added!');
    }

    public function edit(Request $request, string $id)
    {
        $conference = Conference::find($id);
        return view('admin.conference-edit', compact('conference'));
    }

    public function update(Request $request, string $id)
    {
        $conference = Conference::find($id);
        $conference->title = $request->input('title');
        $conference->sub_title = $request->input('sub_title');
        $conference->location = $request->input('location');
        $conference->start = $request->input('start');
        $conference->end = $request->input('end');
        $conference->update();

        return redirect('/admin/conferences')->with('success','Conference Updated!');
    }

    public function destroy(Request $request, string $id)
    {

        $item = Conference::find($id);
        $item->delete();
        return back()->with('success','Conference Deleted!');

    }
}
