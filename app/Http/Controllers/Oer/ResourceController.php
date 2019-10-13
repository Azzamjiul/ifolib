<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use App\Subject;
use App\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    public function __construct()
    {
        $this->path_resource_image = public_path('oer_upload/resource_image');
        $this->path_resource_file = public_path('oer_upload/resource_file');
    }
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
        $collections = Collection::all();
        return view('admin.resources.create', compact('subjects','collections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * melakukan validasi
         */
        $this->validate($request, [
            'title',
            'type',
            'creator',
            'format',
            'file' => 'required',
            'image' => 'required'
        ]);

        DB::beginTransaction();
        try {
             // simpan tanpa gambar dan file
            $resource = Resource::create([
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
                'file'      => null,
                'image'     => null,
                'collection_id' => $request->collection_id,
                'citation'  => null
            ]);

            $current_id = $resource->id;

            // olah gambar dan file
            $file = $request->file('file');
            if($file != NULL){
                $fileExt = $file->getClientOriginalExtension();
                $fileName = 'resource_' . $current_id . '.' . $fileExt;
                $tujuan_file = $this->path_resource_file;
                $file->move($tujuan_file,$fileName);
                
                $image = $request->file('image');
                $imageExt = $image->getClientOriginalExtension();
                $imageName = 'image_' . $current_id . '.' . $imageExt;
                $tujuan_image = $this->path_resource_image;
                $image->move($tujuan_image,$imageName);
                   
                // update dengan gambar dan file
                $resource_2 = Resource::find($current_id);
                
                $resource_2->update([
                    'file'  =>  $fileName,
                    'image' =>  $imageName
                ]);
                $resource->save();
            }
            DB::commit();
            return redirect()->route('admin.oer.resource.index')->with('status','Resource berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.oer.resource.index')->with('status','Resource gagal ditambahkan');
        }
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
        $subjects = Subject::all();
        $collections = Collection::all();
        $resource = Resource::find($id);
        return view('admin.resources.edit', compact('resource','subjects','collections'));
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
        // return $request;
        /**
         * melakukan validasi
         */
        $this->validate($request, [
            'title',
            'type',
            'creator',
            'format',
            'file' => '',
            'image' => ''
        ]);

        DB::beginTransaction();
        try {
            $resource = Resource::find($id);
             // simpan tanpa gambar dan file
            $resource->update([
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
                'collection_id' => $request->collection_id,
                'citation'  => null
            ]);
            $resource->save();

            // olah gambar dan file
            $file = $request->file('file');
            if($file != NULL){
                $fileExt = $file->getClientOriginalExtension();
                $fileName = 'resource_' . $id . '.' . $fileExt;
                $tujuan_file = $this->path_resource_file;
                $file->move($tujuan_file,$fileName);
                
                $image = $request->file('image');
                $imageExt = $image->getClientOriginalExtension();
                $imageName = 'image_' . $id . '.' . $imageExt;
                $tujuan_image = $this->path_resource_image;
                $image->move($tujuan_image,$imageName);
                
                $resource->update([
                    'file'  =>  $fileName,
                    'image' =>  $imageName
                ]);
                $resource->save();
            }
            DB::commit();
            return redirect()->route('admin.oer.resource.index')->with('status','Resource berhasil diupdate');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('admin.oer.resource.index')->with('status','Resource gagal diupdate');
        }
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

    public function delete($id)
    {
        $resource = Resource::find($id);
        $file = $this->path_resource_file.'/'.$resource->file;
        if(file_exists($file)){
            File::delete($file);
        }
        $image = $this->path_resource_image.'/'.$resource->image;
        if(file_exists($image)){
            File::delete($image);
        }
        $resource->delete();
        return redirect()->route('admin.oer.resource.index')->with('message-success', 'Resource berhasil dihapus');
    }
}
