<?php

namespace App\Http\Controllers;

use App\Models\Cama;
use Illuminate\Http\Request;

/**
 * Class CamaController
 * @package App\Http\Controllers
 */
class CamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camas = Cama::paginate();

        return view('cama.index', compact('camas'))
            ->with('i', (request()->input('page', 1) - 1) * $camas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cama = new Cama();
        return view('cama.create', compact('cama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cama::$rules);

        $cama = Cama::create($request->all());

        return redirect()->route('camas.index')
            ->with('success', 'Cama created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cama = Cama::find($id);

        return view('cama.show', compact('cama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cama = Cama::find($id);

        return view('cama.edit', compact('cama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cama $cama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cama $cama)
    {
        request()->validate(Cama::$rules);

        $cama->update($request->all());

        return redirect()->route('camas.index')
            ->with('success', 'Cama updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cama = Cama::find($id)->delete();

        return redirect()->route('camas.index')
            ->with('success', 'Cama deleted successfully');
    }
}
