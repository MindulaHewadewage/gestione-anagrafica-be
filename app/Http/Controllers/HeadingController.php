<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $query = Heading::orderBy('lastname');
        if ($search) $query->where('lastname', 'LIKE', "%$search%");
        $headings = $query->paginate(10);
        return view('headings.index', compact('headings', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('headings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $heading = new Heading();

        $heading->fill($data);

        $heading->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Heading $heading)
    {

        return view('headings.show', compact('heading'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
