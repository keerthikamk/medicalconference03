<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Download;
use App\Models\AbstractSubmission;
use App\Models\Page;
use App\Models\Mail;

class FrontController extends Controller
{
    private function myList() {
        $settings = DB::table('settings')->first();
        $clients = DB::table('clients')->get();

        return [$settings, $clients];
    }

    public function index() {

        $page = Page::find(1);
        $sections = DB::table('sections')->where('page_id',1)->get();
        foreach($sections as $section) {
            $section->contents = DB::table('contents')->where('section_id', $section->id)->get();
        }

        $date = today()->format('Y-m-d');
        $conferences = DB::table('conferences')
            ->where('start', '>=', $date)
            ->orderBy('start')->get();

        $myList = $this->myList(); 
        // return compact('myList');
        return view('index', compact('page','sections','conferences','myList'));
    }

    public function about() {
        $page = Page::find(2);
        $section = DB::table('sections')->where('page_id',2)->first();
        $contents = DB::table('sections')
            ->join('contents','contents.section_id','sections.id')
            ->where('sections.page_id', 2)
            ->select('contents.*')
            ->get();
        $date = today()->format('Y-m-d');
        $conference = DB::table('conferences')
            ->where('start', '>=', $date)
            ->orderBy('start')->first();
        $conference->date = date('j', strtotime($conference->start));
        $conference->month = date('F', strtotime($conference->start));

        $features = DB::table('contents')
            ->where('section_id', 2)
            ->where('column', 2)->get();

        // return $features;
        $myList = $this->myList(); 
        return view('about', compact('page','section','contents','conference','features','myList'));
    }

    public function organizing() {
        $page = Page::find(3);

        $members = DB::table('members')->get();

        $myList = $this->myList(); 
        return view('organizing', compact('page','members','myList'));
    }

    public function scientific() {

        $count = DB::table('scientifics')->count();
        $limit = round($count / 2);
        // return $limit;
        $scientifics = DB::table('scientifics')->orderBy('id')
            ->limit($limit)
            ->get();

        foreach($scientifics as $scientific)
        {
            $scientific->lists = DB::table('scientific_lists')->where("sci_id", $scientific->id)->get();
        }

        // Coloum 2
        $scientifics2 = DB::table('scientifics')
            ->orderBy('id')
            ->offset($limit)
            ->limit($limit)
            ->get();

        foreach($scientifics2 as $scientific)
        {
            $scientific->lists = DB::table('scientific_lists')->where("sci_id", $scientific->id)->get();
        }

        $page = Page::find(4);
        $myList = $this->myList(); 
        return view('scientific', compact('scientifics','scientifics2','page','myList'));
    }

    public function abstract() {
        // For select option
        $options = DB::table('scientifics')
        ->orderBy('id')
        ->get();
        // return $options;

        $tracks = DB::table('scientifics')
        ->limit(10)
        ->get();

        $page = Page::find(5);
        $section = DB::table('sections')->where('page_id',5)->first();
        $contents = DB::table('sections')
            ->join('contents','contents.section_id','sections.id')
            ->where('sections.page_id', 5)
            ->select('contents.*')
            ->get();

        $myList = $this->myList(); 
        return view('abstract', compact('options','tracks','section','contents','page','myList'));
    }

    public function speaker() {
        $page = Page::find(6);
        $myList = $this->myList(); 
        return view('speaker', compact('page','myList'));
    }

    public function sponsorship() {
        $page = Page::find(7);
        $myList = $this->myList(); 
        return view('sponsorship', compact('page','myList'));
    }

    public function terms() {
        $page = Page::find(8);
        $myList = $this->myList(); 
        return view('terms', compact('page','myList'));
    }

    public function contact() {
        $page = Page::find(9);
        $myList = $this->myList(); 
        return view('contact', compact('page','myList'));
    }

    public function privacy() {
        $page = Page::find(12);
        $myList = $this->myList(); 
        return view('privacy', compact('page','myList'));
    }

    public function refund() {
        $page = Page::find(13);
        $myList = $this->myList(); 
        return view('refund', compact('page','myList'));
    }


    // Post
    public function download(Request $request) {
        $download = new Download;
        $download->name = $request->input('name');
        $download->email = $request->input('email');
        $download->phone = $request->input('phone');
        $download->save();

        // Initialize a file URL to the variable 
        $url = "Brochure_Advanced_Surgery_2024.pdf";
        $redirect = redirect()->back();
        return response()->download($url);

    }

    public function abstract_sub(Request $request) {
        $abs = new AbstractSubmission;
        $abs->fname = $request->input('fname');
        $abs->lname = $request->input('lname');
        $abs->email = $request->input('email');
        $abs->phone = $request->input('phone');
        
        $abs->organization = $request->input('organization');
        $abs->address1 = $request->input('address1');
        $abs->address2 = $request->input('address2');
        $abs->city = $request->input('city');
        $abs->country = $request->input('country');
        $abs->code = $request->input('code');
        $abs->category = $request->input('category');
        $abs->track_name = $request->input('track_name');
        $file = $request->file('file');
        // $abs->file = $request->input('file');

        $filename = date("Ymd-His_").urlencode($file->getClientOriginalName());

        // return $file->getClientOriginalName();
        //Move Uploaded File
        $destinationPath = 'uploads/abstracts';
        $file->move($destinationPath, $filename);
        $abs->file = $filename;
        $abs->status = 'active';
        // return $filename;
        $abs->save();

        return redirect('abstract')->with('message','Your Abstract Submitted Successfully!');

    }

    public function contactForm(Request $request) {
        
        $mail = new Mail;
        $mail->name = $request->input('name');
        $mail->email = $request->input('email');
        $mail->phone = $request->input('phone');
        $mail->subject = $request->input('subject');
        $mail->message = $request->input('message');
        $mail->label = 'inbox';
        $mail->status = 'unread';
        $mail->save();        
        
        return redirect('contact')->with('message','Mail Sent Successfully!');


        // $to = 'advancedsurgerycongress@bluggleconferences.online';
        // $subject = $request->input('subject') . ' - Contact form - Bluggle Confrence';


        // $message = "Name : ".$name." <br>"
        //          . "Email : ".$email." <br>"
        //          . "Phone : ".$request->input('phone')." <br>"
        //          . "Subject : ".$subject." <br>"
        //          . "Message : ".$request->input('message');

        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


        // $headers .= 'From: '. $email . "\r\n";


        // if(mail($to, $subject, $message, $headers)) {
        //     return back()->with('message','Your message has been sent!');
        // }
        // else {
        //     return back()->with('error','Oops! Something went wrong!!');
        // }
    }
}
