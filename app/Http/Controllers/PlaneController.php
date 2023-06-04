<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaneController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin', ['only' => ['edit', 'update', 'destroy', 'create', 'store']]);
	}
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
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		if ($request->has('image')) {
			$image = $request->file('image');
			$name = Str::slug($request->input('model')) . '_' . time();
			$folder = '/app/public/images/planes/';
			$imagePath = $folder . $name . '.' . $image->getClientOriginalExtension();
			$image->move(storage_path($folder), $name . '.' . $image->getClientOriginalExtension());
			$validatedData['image'] = 'storage/images/planes/' . $name . '.' . $image->getClientOriginalExtension();
		}

		$plane = Plane::create($validatedData);

		return redirect()->route('planes.index')->with('success', 'Avião adicionado com sucesso!');
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
			'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		if ($request->has('image')) {
			$image = $request->file('image');
			$name = Str::slug($request->input('model')) . '_' . time();
			$folder = '/app/public/images/planes/';
			$imagePath = $folder . $name . '.' . $image->getClientOriginalExtension();
			$image->move(storage_path($folder), $name . '.' . $image->getClientOriginalExtension());
			$validatedData['image'] = 'storage/images/planes/' . $name . '.' . $image->getClientOriginalExtension();
		}

		$plane->update($validatedData);

		return redirect()->route('planes.edit', ['plane' => $plane])->with('success', 'Avião atualizado com sucesso!');
	}

	public function destroy(Plane $plane)
	{
		$plane->delete();

		return redirect()->route('planes.index')->with('success', 'Avião excluído com sucesso!');
	}
}