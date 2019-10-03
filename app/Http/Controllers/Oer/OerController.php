<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OerController extends Controller
{
    public function index(){
        // return "wkwk";
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
        //  return $items;
         return view('front_end.oer.index', compact('items'));
    }
 
    public function dashboard(){
        return view('admin.dashboard.index');
    }
}
