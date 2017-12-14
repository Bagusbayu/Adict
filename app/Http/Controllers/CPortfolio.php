<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CPortfolio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\MPortfolio::orderBy('id','desc')->paginate(10);
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view ('vportfolio',compact('data'));
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
        return view ('vportfolioinput');
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
            'judul' => 'required|min:4',
            'desc' => 'required|min:4',
            'webdev' => 'required|min:4',
            'launched' => 'required|min:4|date',
            'category' => 'required|min:4',
            'website' => 'required|min:4',
            'pict' => 'required',
        ]);
        $data = new \App\MPortfolio();
        $data->judul = $request->input('judul');
        $data->slug = str_slug($data->judul);
        $data->desc = $request->input('desc');
        $data->webdev = $request->input('webdev');
        $data->launched = $request->input('launched');
        $data->category = $request->input('category');
        $data->website = $request->input('website');
        $file = $request->file('pict');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->pict = $newName;
        $data->save();
        return redirect()->route('vportfolio.index')->with('alert-success','Data berhasil ditambahkan!');
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
        $data = \App\MPortfolio::findOrFail($id);
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('vportfolioedit',compact('data'));
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
            'judul' => 'required|min:4',
            'desc' => 'required|min:4',
            'webdev' => 'required|min:4',
            'launched' => 'required|min:4|date',
            'category' => 'required|min:4',
            'website' => 'required|min:4',
            'pict' => 'required',
        ]);
        $data = \App\MPortfolio::findOrFail($id);
        $data->judul = $request->input('judul');
        $data->slug = str_slug($data->judul);
        $data->desc = $request->input('desc');
        $data->webdev = $request->input('webdev');
        $data->launched = $request->input('launched');
        $data->category = $request->input('category');
        $data->website = $request->input('website');
        if (empty($request->file('pict'))){
            $data->pict = $data->pict;
        }
        else{
            unlink('uploads/file/'.$data->pict); //menghapus file lama
            $file = $request->file('pict');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->pict = $newName;
        }
        $data->save();
        return redirect()->route('vportfolio.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\MPortfolio::findOrFail($id);
        $data->delete();
        return redirect()->route('vportfolio.index')->with('alert-success','Data berhasil dihapus!');
    }
}
