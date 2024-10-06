<?php

namespace App\Http\Controllers;

use App\Models\visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        visitor::create([

            'company' => $request->get('company'),
            'name' => $request->get('name'),
            'assignment' => $request->get('assignment'),
            'deadline' => $request->get('deadline'),
            'difficulty' => $request->get('difficulty'),


        ]);

        return redirect('/projects');

    }

    /**
     * Display the specified resource.
     */
    public function show(visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitor $visitor)
    {
        //
    }
}
