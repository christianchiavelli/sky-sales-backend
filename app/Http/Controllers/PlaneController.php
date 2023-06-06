<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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
			$image->move(storage_path($folder), $name . '.' . $image->getClientOriginalExtension());
			$validatedData['image'] = 'storage/images/planes/' . $name . '.' . $image->getClientOriginalExtension();
		}

		Plane::create($validatedData);

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
			$image->move(storage_path($folder), $name . '.' . $image->getClientOriginalExtension());
			$validatedData['image'] = 'storage/images/planes/' . $name . '.' . $image->getClientOriginalExtension();

			// Check if the plane has a previous image
			if ($plane->image) {
				$oldImage = str_replace('storage', 'public', $plane->image);
				if (File::exists($oldImage)) {
					File::delete($oldImage);
				}
			}
		}

		$plane->update($validatedData);

		return redirect()->route('planes.edit', ['plane' => $plane])->with('success', 'Avião atualizado com sucesso!');
	}

	public function purchase(Plane $plane)
	{
		return view('planes.purchase', ['plane' => $plane]);
	}

	public function destroy(Plane $plane)
	{
		$plane->delete();

		return redirect()->route('planes.index')->with('success', 'Avião excluído com sucesso!');
	}
}