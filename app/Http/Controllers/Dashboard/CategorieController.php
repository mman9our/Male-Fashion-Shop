<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();


        return view('admin.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {

        Categorie::create($request->all());

        return redirect()->route('categorie.index');
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
        $category = Categorie::findOrFail($id);
        return view('admin.categorie.edit', compact('category'));
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
        $category = Categorie::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function archive()
    {
        $categories = Categorie::onlyTrashed()->get();
        return view('admin.categorie.archive', compact('categories'));

    }
    public function restore($id)
    {
        $categories = Categorie::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('categorie.index');

    }

    public function force($id)
    {
        $categories = Categorie::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('categorie.archive');

    }

    public function destroy($id)
    {
        $category = Categorie::destroy($id);
        return redirect()->route('categorie.index');


    }
}
