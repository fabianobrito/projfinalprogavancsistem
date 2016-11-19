<?php namespace App\Http\Controllers;

use App\Usuarios;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsuariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = Usuarios::all();
        return response()->json($usuarios);
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
		$usuarios = new Usuarios();
        $usuarios->fill($request->all());
        $usuarios->save();

        return response()->json($usuarios, 201);
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
		$usuarios = Usuarios::find($id);

        if(!$usuarios) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $usuarios->fill($request->all());
        $usuarios->save();

        return response()->json($usuarios);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usuarios = Usuarios::find($id);

        if(!$usuarios) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $usuarios->delete();
	}
}