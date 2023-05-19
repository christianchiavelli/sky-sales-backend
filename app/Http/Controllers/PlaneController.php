<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
	public function index()
	{
		$planes = Plane::all();
		return response()->json($planes);
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'model' => 'required|max:255',
			'manufacturer' => 'required|max:255',
			'year' => 'required|numeric',
			'seats' => 'required|integer',
			'runway_length' => 'required|integer',
			'price' => 'required|numeric',
			'image' => 'nullable|string',
		]);

		$plane = Plane::create($validatedData);

		return response()->json($plane, 201);
	}

	public function show(Plane $plane)
	{
		return response()->json($plane);
	}

	public function update(Request $request, Plane $plane)
	{
		$validatedData = $request->validate([
			'model' => 'required|max:255',
			'manufacturer' => 'required|max:255',
			'year' => 'required|numeric',
			'seats' => 'required|integer',
			'runway_length' => 'required|integer',
			'price' => 'required|numeric',
			'image' => 'nullable|string',
		]);

		$plane->update($validatedData);

		return response()->json($plane);
	}

	public function destroy(Plane $plane)
	{
		$plane->delete();

		return response()->json(null, 204);
	}
}
