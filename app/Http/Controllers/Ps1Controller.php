<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ps1;
use App\Http\Controllers\Controller;


class Ps1Controller extends Controller
{
    public function index()
    {
        $pss = Ps1::all();
        return view('ps1.index', compact('pss'));

        $pss = Ps1::where('id', 'id')->get();
        return view('ps1.detail', compact('pss'));
        

    }

    public function add(){
        return view('beli.input');
    }
   
    public function addProses(Request $request){
        

        return view('beli.tampilan',[
            'data'=>$request
            
        ]);
    }
    public function create()
    {
        $ps1s = Ps1::all();
        return view('ps1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000'
        ]);
        $image =  $request->file('image');
        $new_image = rand() . '.' . $image->getClientOriginalName();
        $image ->move(public_path('/images/'), $new_image);
        
        Ps1::create($request->all());
        return redirect('ps1');
        
    }

    public function edit(Ps1 $ps1)
    {
        //
        return view('ps1.edit', compact('ps1'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ps1t  $ps1
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Ps1 $ps1)
    {
        //
        $ps1->update($request->all());
        return redirect('ps1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ps1  $ps1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ps1 $ps1)
    {
        //
        $ps1->delete();
        return redirect('ps1');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ps1  $ps1
     * @return \Illuminate\Http\Response
     */
    public function beli(Ps1 $ps1)
    {

        $ps12 = Ps1::where('kategori', 'Action')->count();
        return view('ps1.index', compact('ps12'));
    }
}
