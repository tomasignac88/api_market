<?php

namespace App\Http\Controllers;

class ListMarketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function addList() {
        return "creo lista";
    }

    public function updateList() {
        return "actualizo lista";
    }

    public function deleteList() {
        return "borro lista";
    }
}
