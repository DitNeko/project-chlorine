<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->katakunci;
        if(strlen($keyword)) {
            $data = ModelsUser::where("name","like","%$keyword%")->orWhere("email","like","%$keyword%")->paginate(4);
        }else {
            $data = ModelsUser::orderBy("id","desc")->paginate(4);
        }
        $totalUser = ModelsUser::count();
        return view("root.dashboard", compact('totalUser'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = ModelsUser::where('id', $id)->first();
        return view('forms.editUser')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required'
        ]);


        $data = [
            'name'=> $request->name,
            'email'=> $request->email
        ];

        ModelsUser::where('id', $id)->update($data);
        return redirect()->to('dashboard')->with('success', 'Berhasil melakukan Edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelsUser::where('id', $id)->delete();
        return redirect()->to('dashboard')->with('success','Berhasil menghapus data');
    }
}
