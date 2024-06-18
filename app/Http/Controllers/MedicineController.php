<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('employees.medicines.index', compact('medicines'));
    }

    public function create()
    {
        return view('employees.medicines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'cost' => 'required',
            'manufacture_date' => 'required|date',
            'expiry_date' => 'required|date',
        ]);

        Medicine::create($request->all());

        return redirect()->route('medicines.index')
            ->with('success', 'Medicine created successfully.');
    }

    public function show(Medicine $medicine)
    {
        return view('employees.medicines.show', compact('medicine'));
    }

    public function edit(Medicine $medicine)
    {
        return view('employees.medicines.edit', compact('medicine'));
    }

    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'cost' => 'required',
            'manufacture_date' => 'required|date',
            'expiry_date' => 'required|date',
        ]);

        $medicine->update($request->all());

        return redirect()->route('medicines.index')
            ->with('success', 'Medicine updated successfully');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('employees.medicines.index')
            ->with('success', 'Medicine deleted successfully');
    }
}
