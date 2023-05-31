<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaneController extends Controller
{
	public function index()
	{
		$planes = Plane::all();
		return view('planes.index', ['planes' => $planes]);
	}

	public function create()
	{
		return view('planes.create');
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

		if ($request->has('image')) {
			$image = $request->file('image');
			$name = Str::slug($request->input('name')) . '_' . time();
			$folder = '/uploads/images/';
			$filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$validatedData['image'] = $filePath;
		}

		$plane = Plane::create($validatedData);

		return response()->json($plane, 201);
	}

	public function show(Plane $plane)
	{
		return view('planes.show', ['plane' => $plane]);
	}

	public function edit(Plane $plane)
	{
		return view('planes.edit', ['plane' => $plane]);
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