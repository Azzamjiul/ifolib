<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use App\Subject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resource::all();
        return view('admin.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.resources.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        Resource::create([
            'title' => $request->title,
            'subject_id'    =>  $request->subject_id,
            'description'   =>  $request->description,
            'creator'   => $request->creator,
            'source'    => $request->source,
            'publisher' => $request->publisher,
            'date'  => Carbon::now(),
            'contributor_id'    => Auth::user()->id,
            'rights'    => $request->rights,
            'format'    => $request->format,
            'language'  => $request->language,
            'type_id'   => $request->type_id,
            'file'      => $request->file,
            'image'     => $request->image,
            'collection_id' => $request->collection_id,
            'citation'  => null
        ]);

        return redirect()->route('admin.oer.resource.index')->with('status','Resource Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
