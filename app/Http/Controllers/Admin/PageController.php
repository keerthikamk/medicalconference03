<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Page;
use App\Models\Section;
use App\Models\Content;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        // $page = Page::find(1);
        return view('admin.pages', compact('pages'));
    }

    public function show(string $id)
    {
        $pages = Page::all();
        $page = Page::find($id);
        $sections = DB::table('sections')->where('page_id', $id)->get(); //return $sections;
        $contents = DB::table('sections')
            ->join('contents','contents.section_id','sections.id')
            ->where('sections.page_id', $id)
            ->select('contents.*')
            ->get();
        // return $contents;
        
        if ($sections->count()) {
            return view('admin.pages.'.$page->slug, compact('pages','page','sections','contents'));
        } else {
            return view('admin.page-edit', compact('pages','page','sections','contents'));
        }
    }

    public function edit(string $id)
    {
        $pages = Page::all();
        $page = Page::find($id);
        $sections = DB::table('sections')->where('page_id','1')->get();
        $contents = DB::table('contents')->offset(0)->limit(11)->get();
        // return $contents;
        return view('admin.page-edit', compact('pages','page','sections','contents'));
    }

    public function update(Request $request, string $id)
    {
        if ($request->input('form') == 'general') {
            $section = Section::find(1);
            $section->page_id = $id;
            $section->title = $request->input('title');
            $section->sub_title = $request->input('sub_title');
            $section->update();
            $content = Content::find(3);
            $content->content = $request->input('content');
            $content->update();

            if ($request->file('image1')) {
                $file = $request->file('image1');
                //Move Uploaded File
                $destinationPath = 'uploads/home-page';
                $file->move($destinationPath,$file->getClientOriginalName());

                $content = Content::find(1);
                $content->content = '/'.$destinationPath.'/'.$file->getClientOriginalName();
                $content->update();

            }

            if ($request->file('image2')) {
                $file = $request->file('image2');
                //Move Uploaded File
                $destinationPath = 'uploads/home-page';
                $file->move($destinationPath,$file->getClientOriginalName());

                $content = Content::find(2);
                $content->content = '/'.$destinationPath.'/'.$file->getClientOriginalName();
                $content->update();

            }

            return back()->with('success', 'Page Updated!');
        }

        if ($request->input('form') == 'feature') {

            // return $request;
            $section = Section::find(2);
            $section->page_id = $id;
            $section->title = $request->input('title');
            $section->sub_title = $request->input('sub_title');
            $section->update();

            $content = Content::find(4); 
            $content->content = $request->input('content');
            $content->update();
            
            $content1 = Content::find(5); 
            $content1->type = $request->input('icon1');
            $content1->content = $request->input('title1');
            $content1->update();
            
            $content2 = Content::find(6); 
            $content2->type = $request->input('icon2');
            $content2->content = $request->input('title2');
            $content2->update();
            
            $content3 = Content::find(7); 
            $content3->type = $request->input('icon3');
            $content3->content = $request->input('title3');
            $content3->update();
            
            $content4 = Content::find(8); 
            $content4->type = $request->input('icon4');
            $content4->content = $request->input('title4');
            $content4->update();

            return back()->with('success', 'Page Updated!');
        }

        if ($request->input('form') == 'section') {
            $content = Content::find(11); 
            $content->content = $request->input('content');
            $content->update();

            if ($request->file('image3')) {
                $file = $request->file('image3');
                //Move Uploaded File
                $destinationPath = '/uploads/home-page';
                $file->move($destinationPath,$file->getClientOriginalName());

                $content = Content::find(9);
                $content->content = '/'.$destinationPath.'/'.$file->getClientOriginalName();
                $content->update();

            }

            if ($request->file('image4')) {
                $file = $request->file('image4');
                //Move Uploaded File
                $destinationPath = '/uploads/home-page';
                $file->move($destinationPath,$file->getClientOriginalName());

                $content = Content::find(10);
                $content->content = '/'.$destinationPath.'/'.$file->getClientOriginalName();
                $content->update();

            }

            return back()->with('success', 'Page Updated!');
        }

        if ($request->input('form') == 'about') {
            
            // return $request;
            $section = Section::find(4);
            $section->title = $request->input('title');
            $section->sub_title = $request->input('sub_title');
            $section->update();

            $content = Content::find(12);
            $content->content = $request->input('content');
            $content->update();

            $content1 = Content::find(13); 
            $content1->type = $request->input('title1');
            $content1->content = $request->input('count1');
            $content1->update();
            
            $content2 = Content::find(14); 
            $content2->type = $request->input('title2');
            $content2->content = $request->input('count2');
            $content2->update();
            
            $content3 = Content::find(15); 
            $content3->type = $request->input('title3');
            $content3->content = $request->input('count3');
            $content3->update();

            return back()->with('success', 'Page Updated!');
        }

        if ($request->input('form') == 'abstract') {
            
            // return $request;
            $section = Section::find(5);
            $section->title = $request->input('title');
            $section->update();

            $content = Content::find(16);
            $content->content = $request->input('content1');
            $content->update();

            $content1 = Content::find(17); 
            $content1->type = $request->input('title2');
            $content1->content = $request->input('content2');
            $content1->update();
            
            // File
            if ($request->file('file')) {
                $file = $request->file('file');
                //Move Uploaded File
                $destinationPath = 'uploads/abstracts';
                $file->move($destinationPath,urlencode($file->getClientOriginalName()));

                $content2 = Content::find(18);
                $content2->content = '/'.$destinationPath.'/'.urlencode($file->getClientOriginalName());
                $content2->update();

            }
            
            return back()->with('success', 'Page Updated!');
        }

        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->keywords = $request->input('keywords');
        $page->description = $request->input('description');
        $page->update();
        return back()->with('success', 'Page Updated!');
    }

}
