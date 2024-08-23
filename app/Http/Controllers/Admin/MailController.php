<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('status')){

            $status = $request->get('status');
            
            $mails = DB::table('mails')
            ->where('status', $status)->where('label', '!=' ,'trash')
            ->orderBy('id', 'desc')
            ->paginate(20)->withQueryString();

        } elseif ($request->get('label')) {

            $label = $request->get('label');

            $mails = DB::table('mails')
            ->where('label', $label)
            ->orderBy('id', 'desc')
            ->paginate(20)->withQueryString();

        } else {

            $mails = DB::table('mails')
            ->where('label', 'inbox')
            ->orderBy('id', 'desc')
            ->paginate(20)->withQueryString();
        }

        $today = date('Ymd');
        $toyear = date('Y');

        $sl = 0;
        foreach($mails as $mail)
        {
            $sl++;
            $mail->sl = $sl;
            $date = date('Ymd', strtotime($mail->created_at));
            $year = date('Y', strtotime($mail->created_at));

            if ($date == $today) {
                $mail->date = date("g:i a", strtotime($mail->created_at));
            } elseif($year == $toyear) {
                $mail->date = date("d M", strtotime($mail->created_at));
            } else {
                $mail->date = date("d M Y", strtotime($mail->created_at));
            }
        }
        
        $unread = DB::table('mails')->where('label', 'inbox')->where('status', 'unread')->count();
        
        return view('admin.mails', compact('mails','unread'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','status','label');
        // return $data;

        if ($request->post('status')) {
            $status = $request->post('status');
            foreach ($data as $key => $value) {
                $id = substr($key,3);
                $mail = Mail::find($id);
                $mail->status = $status;
                $mail->update();
            }
        } elseif ($request->post('label')) {
            $label = $request->post('label');
            // return $labe;
            foreach ($data as $key => $value) {
                $id = substr($key,3);
                $mail = Mail::find($id);
                $mail->label = $label;
                $mail->update();
            }
        }
        return back();
    }

    public function show(string $id)
    {
        $mail = Mail::find($id);
        if ($mail->status == 'unread') {
            $mail->status = 'read';
            $mail->update();
        }
        $today = date('Ymd');
        $toyear = date('Y');

        $mail->date = date('D d/m/Y  g:i a', strtotime($mail->created_at));

        $unread = DB::table('mails')->where('label', 'inbox')->where('status', 'unread')->count();

        return view('admin.mail-show', compact('mail','unread'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $mail = Mail::find($id);
        if($mail->status == 'starred') {
            $mail->status = 'unstarred';
        } else $mail->status = 'starred';
        $mail->update();
        return $mail;
    }

    public function destroy(string $id)
    {
        //
    }
}
