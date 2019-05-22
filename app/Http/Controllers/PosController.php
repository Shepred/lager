<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = $request->input('reol').$request->input('row').$request->input('niveau').$request->input('palle');
        $sku = $request->input('sku');

        $checkPosition = DB::table('positions')->where('name', '=', $position)->first();
        if($checkPosition === null) {
            DB::table('positions')->insert([
                'name' => $position,
                'sku' => $sku,
                'created_at' =>  Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ]);

            flash("Positionen {$position} er oprettet!")->success();

            return redirect ('/position/create');
        }
        elseif($sku !== null) {
            DB::table('positions')->where('name', $position)->update([
                'sku' => $sku,
                'updated_at' => Carbon\Carbon::now(),
            ]);

            flash("Positionen {$position} eksister allerede og er nu opdateret med SKU'en {$sku}.")->success();

            return redirect ('/position/create');
        }

        else {
            return 'Altså, prøv nu lige at høre engang. Positionen findes allerede, og du har ikke indtastet en SKU, så jeg kan ikke engang redde din røv & blot opdatere den allerede eksisterende position.. better luck next time :-)';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $position = $request->input('position');
        
        $position = DB::table('positions')->where('name', $position)->first();

        return view('positions.results')->with('position', $position);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('positions.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $position = $request->input('name');
        $ean = $request->input('ean');
        $sku = DB::table('ean_to_sku')->where('ean', $ean)->first();
        $sku = $sku->sku;

        DB::table('positions')->where('name', $position)->update([
            'sku' => $sku,
            'updated_at' => Carbon\Carbon::now(),
        ]);

        if($sku !== null) {
            flash("Positionen {$position} er nu opdateret med {$sku}.")->success();
        }
        else {
            flash("Varen på position {$position} er nu udleveret.")->success();
        }

        return redirect('/position/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($position)
    {
        DB::table('positions')->where('name', $position)->update([
            'sku' => null,
            'updated_at' => Carbon\Carbon::now(),
        ]);

        flash("Varen på position {$position} er nu udleveret.")->success();
        return redirect('/');
    }
}
