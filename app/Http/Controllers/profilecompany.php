<?php

namespace App\Http\Controllers;

use App\MProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class profilecompany extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MProfile::all();
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('profilecompany',compact('data'));
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
        return view ('profileinput');
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
            'address' => 'required|min:4',
            'nophone' => 'required|min:4|int',
            'email' => 'required|min:4|email',
        ]);
        $data = new MProfile();
        $data->address = $request->address;
        $data->nophone = $request->nophone;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('profilecompany.index')->with('alert-success','Data berhasil ditambah!');
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
        $data = MProfile::where('id',$id)->get();
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('profileupdate',compact('data'));
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
            'address' => 'required|min:4',
            'nophone' => 'required|min:4|int',
            'email' => 'required|min:4|email',
        ]);
        $data = MProfile::where('id',$id)->first();
        $data->address = $request->address;
        $data->nophone = $request->nophone;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('profilecompany.index')->with('alert-success','Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MProfile::where('id',$id)->first();
        $data->delete();
        return redirect()->route('profilecompany.index')->with('alert-success','Data berhasi dihapus!');

    }
}
