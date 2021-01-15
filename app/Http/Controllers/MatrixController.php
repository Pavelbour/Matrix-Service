<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatrixController extends Controller
{

    public function calculateDiagonals(Request $request)
    {
        $matrixJson = $request->input('matrix');
        $matrix = json_decode(matrixJson, true);

        $sumMainDiagonal = 0;
        $sumSecondaryDiagonal = 0;

        foreach ($matrix as $i => $value)
        {
            $sumMainDiagonal += $value['col' + $i];
            $sumSecondaryDiagonal += $value['col' + sizeof($value) - $i];
        }

        return response()->json([
            'mainDiagonal' => $sumMainDiagonal,
            'secondaryDiagonal' => $sumSecondaryDiagonal
        ]);
    }
    
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
