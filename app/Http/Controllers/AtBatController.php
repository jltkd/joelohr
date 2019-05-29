<?php

namespace App\Http\Controllers;

use App\AtBat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtBatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atbats = AtBat::orderByDesc('date')->get();
        $ab = $atbats->count();
        $balls = DB::table('at_bats')->pluck('balls')->sum();
        $strikes = DB::table('at_bats')->pluck('strikes')->sum();
        $homeruns = DB::table('at_bats')->where('outcome', '=', 'Home Run')->count();
        $singles = DB::table('at_bats')->where('outcome', '=', 'Single')->count();
        $doubles = DB::table('at_bats')->where('outcome', '=', 'Double')->count();
        $triples = DB::table('at_bats')->where('outcome', '=', 'Triple')->count();
        $hits = $singles + $doubles + $triples + $homeruns;
        $ba = $hits / $ab;
        return view('atbat.index', compact('atbats', 'ab', 'balls', 'strikes', 'outcome', 'homeruns', 'hits', 'ba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AtBat  $atBat
     * @return \Illuminate\Http\Response
     */
    public function show(AtBat $atBat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AtBat  $atBat
     * @return \Illuminate\Http\Response
     */
    public function edit(AtBat $atBat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AtBat  $atBat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtBat $atBat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AtBat  $atBat
     * @return \Illuminate\Http\Response
     */
    public function destroy(AtBat $atBat)
    {
        //
    }
}
