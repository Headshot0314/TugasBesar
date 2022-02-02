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
    }

    public function add()
    {
        return view('beli.index');
    }
   
    public function addProses(Request $request)
    {
        return view('beli.tampilan',[
            'data'=>$request
        ]);
    }
    public function create()
    {
        $pss = Ps1::all();
        return view('ps1.create', compact('pss'));
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
            'name' => 'required',
            'kategori' => 'required',
            'tahun' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:30000'
        ]);

        $image =  $request->file('image');
        if($image){
            $new_image = $image->getClientOriginalName();
            $image->move('image', $new_image);
            $baru = array(
                'name'=> $request->name,
                'kategori'=> $request->kategori,
                'tahun'=> $request->tahun,
                'image'=> $request->image
            );
        }
        Ps1::create($baru);
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
     * Display the specified resource.
     *
     *
     * @param  \App\Ps1  $ps1
     * @return \Illuminate\Http\Response
     */
    public function show(Ps1 $ps1)
    {
        return view('ps1.detail', compact('ps1'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ps1  $ps1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ps1 $ps1)
    {

        $ps1->delete();
        return redirect('ps1');
    }

}
