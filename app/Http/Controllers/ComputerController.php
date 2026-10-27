<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        $count = Computer::count(); // Bazadaky kompýuterleriň sanyny sanaýar

        return view('computers.index', compact('computers', 'count'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|url',
        ]);

        Computer::create($request->all());

        return redirect()->route('computers.index');
    }

    public function destroy($id)
    {
        $computer = Computer::find($id);

        if ($computer) {
            $computer->delete();
            return redirect()->route('computers.index')->with('success', $computer->name . ' üstünlikli pozuldy!');
        }

        return redirect()->route('computers.index')->with('error', 'Kompýuter tapylmady!');
    }
}
