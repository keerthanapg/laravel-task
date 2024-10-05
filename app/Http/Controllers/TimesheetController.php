<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index()
    {
        return response()->json(Timesheet::all(), 200);
    }

    public function store(Request $request)
    {
        $timesheet = Timesheet::create($request->all());
        return response()->json($timesheet, 201);
    }

    public function show($id)
    {
        return response()->json(Timesheet::findOrFail($id), 200);
    }

    public function update(Request $request)
    {
        $timesheet = Timesheet::findOrFail($request->id);
        $timesheet->update($request->all());
        return response()->json($timesheet, 200);
    }

    public function destroy(Request $request)
    {
        $timesheet = Timesheet::findOrFail($request->id);
        $timesheet->delete();
        return response()->json(null, 204);
    }
}
