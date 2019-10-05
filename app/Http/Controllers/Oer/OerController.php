<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;

class OerController extends Controller
{
    public function index()
    {
        $items = DB::table('resources')->get();
        return view('front_end.oer.index', compact('items'));
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
        return view('front_end.oer.search_results', compact('items', 'request'));
    }

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }

    public function show($id){
        // return view('front_end.oer.resource_detail');
        $resource = Resource::find($id);
        return view('front_end.oer.resource_detail', compact('resource'));
    }
}
