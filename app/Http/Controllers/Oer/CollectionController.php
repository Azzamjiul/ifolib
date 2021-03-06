<?php

namespace App\Http\Controllers\Oer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::orderBy('code', 'ASC')->get();
        // return $collections;
        return view('admin.collection.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::all();
        return view('admin.collection.create', compact('collections'));
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
        $request->validate([
            'code' => 'required|unique:collections|max:255',
            'name' => 'required',
            'description' => ''
        ]);

        Collection::create([
            'parent_id' => $request->parent_id,
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('admin.oer.koleksi.index')->with('message-success', 'Koleksi berhasil ditambahkan');
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
        $collection = Collection::find($id);
        $collections = Collection::all();
        return view('admin.collection.edit', compact('collection','collections'));
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
        $collection = Collection::find($id);
        $collection->update([
            'parent_id' =>  $request->parent_id,
            'code'  => $request->code,
            'name'  =>  $request->name,
            'description'   => $request->description
        ]);
        $collection->save();
        return redirect()->route('admin.oer.koleksi.index')->with('message-success', 'Koleksi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }

    public function delete($id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        return redirect()->route('admin.oer.koleksi.index')->with('message-success', 'Koleksi berhasil dihapus');
    }
}
