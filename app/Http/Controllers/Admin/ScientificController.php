<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scientific;
use App\Models\ScientificList;

class ScientificController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = "";
        if ($request->get('search')) {
            
            $search = $request->get('search');

            $scientifics = DB::table('scientifics')
            ->where('title', 'like', "%$search%")
            ->paginate(20)->withQueryString();
    
        } else {
            
            $scientifics = DB::table('scientifics')
            ->paginate(20)->withQueryString();
        }
    
        return view('admin.scientifics', compact('scientifics','search'));
    }

    public function create()
    {
        return view('admin.scientific-add');
    }

    public function store(Request $request)
    {
        $scientific = new Scientific;
        $scientific->title = $request->input('title');
        $scientific->content = $request->input('content');
        $scientific->save();

        return redirect('/admin/scientifics/'.$scientific->id);
    }

    public function show(string $id)
    {
        $scientific = Scientific::find($id);
        $list = DB::table('scientific_lists')->where('sci_id', $id)->get();
        // return $list;
        return view('admin.scientific-show', compact('scientific', 'list'));
    }

    public function edit(string $id)
    {
        $scientific = Scientific::find($id);
        // $list = DB::table('scientific_lists')->where('sci_id', $id)->get();
        // return $list;
        return view('admin.scientific-edit', compact('scientific'));
    }

    public function update(Request $request, string $id)
    {

        if ($request->input('title')){

            $scientific = Scientific::find($id);
            $scientific->title = $request->input('title');
            $scientific->content = $request->input('content');
            $scientific->update();

        } else {

            $list = new ScientificList;
            $list->sci_id = $id;
            $list->list = $request->input('list');
            $list->save();
            
        }

        return redirect('/admin/scientifics/'.$id);
    }

    public function destroy(Request $request, string $id)
    {
        if ($request->input('scientific') == 'del') {

            $scientific = Scientific::find($id);
            $scientific->delete();
            return redirect('/admin/scientifics');

        } else {

            $list = ScientificList::find($id);
            $list->delete();
            return redirect('/admin/scientifics/'.$id);

        }

    }
}
