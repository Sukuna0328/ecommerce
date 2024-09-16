<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function destroy($id)

    {
        $item = Item::findOrFail($id);

        $item->delete();
        
        return redirect()->route('items.index')->with('success', 'Item deleted successfully');



    }
    //
}
