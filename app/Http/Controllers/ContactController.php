<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function contact($id){

        $user = auth()->user();

        $userContact = User::findOrFail($id);

        return view('contact', ['user' => $userContact, 'userauth' => $user]);
    }
}
