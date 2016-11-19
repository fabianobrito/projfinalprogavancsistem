<?php namespace App\Http\Controllers;

use App\Comentarios;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ComentariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$comentarios = Comentarios::all();
        return response()->json($comentarios);
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
		$comentarios = new Comentarios();
        $comentarios->fill($request->all());
        $comentarios->save();

        return response()->json($comentarios, 201);
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
		$comentarios = Comentarios::find($id);

        if(!$comentarios) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $comentarios->fill($request->all());
        $comentarios->save();

        return response()->json($comentarios);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comentarios = Comentarios::find($id);

        if(!$comentarios) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $comentarios->delete();
	}

}