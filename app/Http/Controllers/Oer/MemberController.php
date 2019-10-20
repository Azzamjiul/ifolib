<?php

namespace App\Http\Controllers\Oer;

use App\Resource;
use App\Subject;
use App\Collection;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->path_resource_image = public_path('oer_upload/resource_image');
        $this->path_resource_file = public_path('oer_upload/resource_file');
        $this->middleware(['auth', 'verified']);
    }

    public function dashboard()
    {
        return view('member.dashboard');
    }

    /**
     * Resource CRUD
     */
    public function resource_list()
    {
        $resources = Resource::where('contributor_id', Auth::user()->id)->get();
        return view('member.resources.index', compact('resources'));
    }

    public function resource_create()
    {
        $subjects = Subject::all();
        $collections = Collection::all();
        return view('member.resources.create', compact('subjects','collections'));
    }

    public function resource_store(Request $request)
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
            return redirect()->route('member.oer.resource.index')->with('status','Resource berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            // return $th;
            return redirect()->route('member.oer.resource.index')->with('status','Resource gagal ditambahkan');
        }
    }

    public function resource_edit($id)
    {

    }

    public function resource_update(Request $request, $id)
    {

    }

    public function resource_delete($id)
    {

    }
}
