<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $clients = DB::table('clients')
        // ->where('status', 'active')
        // ->orderBy('start')
        ->paginate(20)->withQueryString();

        // return $clients;
    
        return view('admin.clients', compact('clients'));
    }

    public function store(Request $request)
    {
        // return $request;
        if ($request->file('image')) {
            $file = $request->file('image');
            //Move Uploaded File
            $destinationPath = 'uploads/clients';
            $file->move($destinationPath,$file->getClientOriginalName());

            $client = new Client;
            $client->img = '/'.$destinationPath.'/'.$file->getClientOriginalName();
            $client->link = $request->input('link');

            $client->save();
            return redirect('/admin/clients')->with('success','Client Added!');
        }

    }

    public function destroy(Request $request, string $id)
    {

        $item = Client::find($id);
        $item->delete();
        return back()->with('success','Client Deleted!');

    }
}
