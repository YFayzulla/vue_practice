<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\SkillCollection;
use App\Http\Resources\SkillResource;
use App\Models\Skil;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return new SkillCollection(Skil::all());

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {

        Skil::create($request->validated());
        return response()->json('successful created', 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Skil $skill)
    {
        return new SkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSkillRequest $request, Skil $skill)
    {
        $skill->update($request->validated());
        return response()->json('successful updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skil::destroy($id);

        return response()->json('successful deleted', 200);


    }
}
