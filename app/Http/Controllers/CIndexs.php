<?php

namespace App\Http\Controllers;

use App\MAbout;
use App\MProfile;
use App\MArtikel;
use App\MPortfolio;
use App\Mfeed;
use App\MPhoto;
use App\MIndexs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CIndexs;

class CIndexs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MAbout::all();
        $post = MProfile::all();
        $user = MArtikel::orderBy('created_at','desc')->limit(3)->get();
        $oke  = MPortfolio::orderBy('created_at','desc')->limit(3)->get();
        $iya  = MPhoto::all();
       /** $data = DB::table('m_abouts')
            ->join('artikel', 'data.id', '=', 'artikel.user_id')
            ->join('m_portfolios', 'data.id', '=', 'm_portfolios.user_id')
            ->join('proflecompany', 'data.id', '=', 'proflecompany.user_id')
            ->select('m_abouts.*', 'artikel.*', 'm_portfolios.*','proflecompany.*')
            ->get(); **/
        return view ('mypage',compact('data','post','user','oke','iya'));
    }
    public function post(){

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        $datas = \App\MPortfolio::orderBy('id','desc')->paginate(10);
       return view ('portfolio',compact('datas'));
    }

    public function artikel()
    {
        $user = \App\MArtikel::orderBy('id','desc')->paginate(10);
       return view ('artikel',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = MArtikel::where('slug','=',$slug )->first();
        return view('artikelv')->withuser($user);
        //return view ('artikelv',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
         $data = MPortfolio::where('slug','=',$slug )->first();
        return view('portfoliov',compact('data'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
