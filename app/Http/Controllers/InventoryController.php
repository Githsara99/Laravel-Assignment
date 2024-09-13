<?php

namespace App\Http\Controllers;

use App\Models\Inventory; // Use your Inventory model
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $inventories = Inventory::all();
        return view('inventory.index', ['inventories' => $inventories]);
    }

    public function create(){
        return view('inventory.create');
    }

    public function store(Request $request){
        // Validate incoming data
        $data = $request->validate([
            // 'id' => 'required',
            'itemName' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        $newInventory = Inventory::create( $data);

        // Store data in the database
        // Inventory::create([
        //     'itemID' => $request->itemID,
        //     'itemName' => $request->itemName,
        //     'description' => $request->description,
        //     'quantity' => $request->quantity,
        //     'price' => $request->price,
        // ]);

        // Redirect or return response
        return redirect()->route('inventory.index')->with('success', 'Item added successfully');
    }

    public function edit(Inventory $inventory){
        return view('inventory.edit', ['inventory' => $inventory]);
    }

    public function update(Inventory $inventory, Request $request){
        
        $data = $request->validate([
            // 'itemID' => 'required',
            'itemName' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        $inventory -> update($data);
        
        return redirect()->route('inventory.index')->with('success', 'Item updated successfully');

}

    public function delete(Inventory $inventory){
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully');
    }
}
