<?php

namespace App\Http\Controllers;
use App\Model\grades;
use Illuminate\Http\Request;

class gradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = new grades();

        $grades ->esNo = "";
        $grades ->sNo = "";
        $grades ->prelim = "";
        $grades ->midterm = "";
        $grades ->finals = "";
        $grades ->remarks = "";

        $grades->save();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
