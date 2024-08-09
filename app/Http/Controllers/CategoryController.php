<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->katakunci;
        if(strlen($keyword)) {
            $data = Category::where("name","like","%$keyword%")->orWhere("email","like","%$keyword%")->paginate(4);
        }else {
            $data = Category::orderBy("id","desc")->paginate(5);
        }
        $totalUser = Category::count();
        return view("root.dashboard-category", compact('totalUser'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('is_publish', $request->status);

        $request->validate([
            'name'=> 'required',
            'status'=> 'required'
        ]);


        $data = [
            'name' => $request->name,
            'is_publish'=> $request->status
        ];

        Category::create($data);
        return redirect()->to('category')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::where('id', $id)->first();
        return view('forms.edit-category')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = [
            'name'=> $request->name,
            'is_publish'=> $request->status
        ];

        Category::where('id', $id)->update($data);
        return redirect()->to('category')->with('success', 'Berhasil melakukan Edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect()->to('category')->with('success','Berhasil menghapus data');
    }
}
