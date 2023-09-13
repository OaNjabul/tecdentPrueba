<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

function index()
{
    // Return the home view
    return view('index');
}

// Define the about method
function about()
{
    // Return the about view
    return view('about');
}

?>