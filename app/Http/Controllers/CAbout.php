<?php

namespace App\Http\Controllers;

use App\MAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CAbout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MAbout::all();
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('viewabout',compact('data'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view ('vaboutinput');
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'about' => 'required|min:4',
            'misi' => 'required|min:4',
            'visi' => 'required|min:4',
        ]);
        $data = new MAbout();
        $data->about = $request->about;
        $data->misi = $request->misi;
        $data->visi = $request->visi;
        $data->save();
        return redirect()->route('viewabout.index')->with('alert-success','Data berhasil ditambah!');
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
        $data = MAbout::where('id',$id)->get();
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('vaboutedit',compact('data'));
    }
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
        $this->validate($request, [
            'about' => 'required|min:4',
            'misi' => 'required|min:4',
            'visi' => 'required|min:4',
        ]);
        $data = MAbout::where('id',$id)->first();
        $data->about = $request->about;
        $data->misi = $request->misi;
        $data->visi = $request->visi;
        $data->save();
        return redirect()->route('viewabout.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MAbout::where('id',$id)->first();
        $data->delete();
        return redirect()->route('viewabout.index')->with('alert-success','Data berhasi dihapus!');
    }
}
