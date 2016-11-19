<?php namespace App\Http\Controllers;

use App\Bairro;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BairroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bairro = Bairro::all();
        return response()->json($bairro);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$bairro = new Bairro();
        $bairro->fill($request->all());
        $bairro->save();

        return response()->json($bairro, 201);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$bairro = Bairro::find($id);

        if(!$bairro) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $bairro->fill($request->all());
        $bairro->save();

        return response()->json($bairro);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$bairro = Bairro::find($id);

        if(!$bairro) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $bairro->delete();
	}
}