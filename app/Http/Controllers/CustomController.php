<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        $tests = Test::latest()->paginate(10);
        return view('tests.index', compact('tests'));
    }

    public function create()
    {
        return view('tests.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:tests,email',
        ]);

        Test::create($validated);

        return redirect()->route('tests.index')->with('success', 'Record created successfully.');
    }

    public function show(Test $test)
    {
        return view('tests.show', compact('test'));
    }

    public function edit(Test $test)
    {
        return view('tests.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:tests,email,' . $test->id,
        ]);

        $test->update($validated);

        return redirect()->route('tests.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(Test $test)
    {
        $test->delete();

        return redirect()->route('tests.index')->with('success', 'Record deleted successfully.');
    }
}
