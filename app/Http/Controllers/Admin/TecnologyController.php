<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tecnology;

class TecnologyController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.tecnologies.index')->only('index');
        $this->middleware('can:admin.tecnologies.create')->only('create', 'store');
        $this->middleware('can:admin.tecnologies.edit')->only('edit', 'update');
        $this->middleware('can:admin.tecnologies.destroy')->only('destroy');
    }

    public function index()
    {
        $tecnologies = Tecnology::all();

        return view('admin.tecnologies.index', compact('tecnologies'));
    }

    public function create()
    {
        return view('admin.tecnologies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tecnologies',
        ]);

        $tecnology = Tecnology::create($request->all());

        return redirect()->route('admin.tecnologies.index', compact('tecnology'))->with('info', 'La tecnología se creó con éxito.');
    }

    public function edit(Tecnology $tecnology)
    {
        return view('admin.tecnologies.edit', compact('tecnology'));
    }

    public function update(Request $request, Tecnology $tecnology)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tecnologies,slug,$tecnology->id",
        ]);

        $tecnology->update($request->all());

        return redirect()->route('admin.tecnologies.edit', $tecnology)->with('info', 'La tecnología se actualizó con éxito.');
    }

    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();

        return redirect()->route('admin.tecnologies.index')->with('info', 'La tecnología se eliminó correctamente.');
    }
}
