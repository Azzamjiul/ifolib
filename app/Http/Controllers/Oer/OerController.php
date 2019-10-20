<?php

namespace App\Http\Controllers\Oer;

use App\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OerController extends Controller
{
    public function index(){
        return view('front_end.oer.index');
    }

    public function search(Request $request)
    {
        $items = DB::table('resources')->when($request->keyword, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->keyword}%")
                ->orWhere('subject_id', 'like', "%{$request->keyword}%")
                ->orWhere('description', 'like', "%{$request->keyword}%")
                ->orWhere('creator', 'like', "%{$request->keyword}%")
                ->orWhere('publisher', 'like', "%{$request->keyword}%");
         })->get();
         $keyword = $request->keyword;
         return view('front_end.oer.search_results', compact('items', 'keyword'));
    }

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }

    public function resources_show($id)
    {
        $resource = Resource::find($id);
        return view('front_end.oer.resources_show', compact('resource'));
    }

    public function resources_view($id){
        $resource = Resource::find($id);
        $pathToFile = public_path('oer_upload/resource_file') . "/" .$resource->file;
        return response()->file($pathToFile);
    }
}
