<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Content;
use Illuminate\Http\Request;
use Response;
use File;
class ContentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index";
    }

    public function download($id)
    {
        $content=Content::findorfail($id);
        $file = public_path().$content->file_link;
        //dd($link,$file);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Type' => 'image/jpeg',
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            'Content-Type' => 'application/vnd.ms-powerpoint',
            'Content-Type' => 'image/png',
            'Content-Type' => 'application/msword',
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Type' => 'text/plain',
         ];
        return Response::download($file, $content->file_name,$headers);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->file);
        $data = request()->validate([
            'course_id'=>'required',
            'category'=>'required',
            'file' => 'required|max:100000000|mimes:doc,docx,pdf,jpg,jpeg,vnd.ms-powerpoint,pptx,mp4,png,txt'
        ]);


        $fileName = request()->file->getClientOriginalName();
        $fileName = str_replace("-","_",$fileName);
        $fileNameGen = time().'_'.$fileName;
        $fileType = request()->file->getClientOriginalExtension();
        
        request()->file->move(public_path('files/'.$data['category']),$fileNameGen);

        $content = new Content();
        $content->uploader_id = Auth::user()->id;
        $content->uploader_role = Auth::user()->role;
        $content->course_id = $data['course_id'];
        $content->category = $data['category'];
        $content->file_name = $fileName;
        $content->file_type = $fileType;
        $content->file_link = "/files/".$data['category']."/".$fileNameGen;

        $content->save();

        return redirect()->route('index')->with('status','File is uploaded successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //dd($content->file_link);
        File::delete($content->file_link);
        $content->delete();
        return redirect()->route('index')->with('status','File is Deleted successfuly');
    }
}
