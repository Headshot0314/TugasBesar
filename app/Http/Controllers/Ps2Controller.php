<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ps2;
use App\Http\Controllers\Controller;

class Ps2Controller extends Controller
{
    public function index()
    {
        $pss = Ps2::all();
        return view('ps2.index', compact('pss'));  
    }
    public function addProses(Request $request)
    {
        return view('beli.tampilan',[
            'data'=>$request
        ]);
    }
    public function create()
    {
        $pss = Ps2::all();
        return view('ps2.create', compact('pss'));
    }

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
            $image ->move('image', $new_image);
            $baru = array(
                'name'=> $request->name,
                'kategori'=> $request->kategori,
                'tahun'=> $request->tahun,
                'image'=> $request->new_image
            );
        }
        Ps2::create($baru);
        return redirect('ps2');

    }

    public function edit(Ps2 $ps2)
    {
        //
        return view('ps2.edit', compact('ps2'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ps2  $ps2
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Ps2 $ps2)
    {
        //
        $ps2->update($request->all());
        return redirect('ps2');
    }

     /**
     * Display the specified resource.
     *
     *
     * @param  \App\Ps2  $ps2
     * @return \Illuminate\Http\Response
     */
    public function show(Ps2 $ps2)
    {
        return view('ps2.detail', compact('ps2'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ps2  $ps2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ps2 $ps2)
    {

        $ps2->delete();
        return redirect('ps2');
    }


}
