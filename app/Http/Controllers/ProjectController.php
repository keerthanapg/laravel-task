<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::all(), 200);
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }

    public function show($id)
    {
        return response()->json(Project::findOrFail($id), 200);
    }

    public function update(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->update($request->all());
        return response()->json($project, 200);
    }

    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->delete();
        return response()->json(null, 204);
    }
}
