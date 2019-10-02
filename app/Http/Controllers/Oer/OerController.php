<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OerController extends Controller
{
    public function index(){
        return view('front_end.oer.index');
    }
 
    public function search(Request $request)
    {
         $items = DB::table('migrations')->when($request->keyword, function ($query) use ($request) {
             $query->where('migration', 'like', "%{$request->keyword}%")
                 ->orWhere('id', 'like', "%{$request->keyword}%")
                 ->orWhere('batch', 'like', "%{$request->keyword}%");
         })->get();
         return $items;
         return view('front_end.oer.search', compact('items'));
    }
 
    public function dashboard(){
        return view('admin.dashboard.index');
    }
}
