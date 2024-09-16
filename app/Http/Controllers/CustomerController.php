<?php

// app/Http/Controllers/CustomerController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home()
    {
        // Logic to display customer home page
        return view('customer');
    }
}
