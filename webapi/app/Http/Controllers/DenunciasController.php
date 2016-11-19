<?php namespace App\Http\Controllers;

use App\Denuncias;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DenunciasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$denuncias = Denuncias::all();
        return response()->json($denuncias);
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
		$denuncias = new Denuncias();
        $denuncias->fill($request->all());
        $denuncias->save();

        return response()->json($denuncias, 201);
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
		$denuncias = Denuncias::find($id);

        if(!$denuncias) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $denuncias->fill($request->all());
        $denuncias->save();

        return response()->json($denuncias);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$denuncias = Denuncias::find($id);

        if(!$denuncias) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $denuncias->delete();
	}
}