<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.teste', compact('items'));
    }
}