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
        //
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
}
