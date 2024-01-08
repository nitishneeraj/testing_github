<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    //Function to load parties
    public function index()
    {
        return view('party.index');
    }

    //Function to load add party view
    public function addParty()
    {
        return view('party.add');
    }
}
