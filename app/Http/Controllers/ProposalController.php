<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proposals = Proposal::all();
        return view('welcome', ['proposals' => $proposals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Proposal::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $proposal = Proposal::find($request->id);
        $proposal->status = "принято";

        return redirect('/');

        // без понятия как эту функцию написать, чтобы она возвращала хотя бы ошибку
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
