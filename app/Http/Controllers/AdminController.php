<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {

        /*
        seuls les admins ayant le username "admin" seront récupérés
        $adminUsers = Admin::where('username', 'admin')->get();
        */

        $users = Admin::all();
        
        foreach ($users as $user) {
            if( $user->email == $request->email && $user->password == $request->password ){
                return redirect()->route('page.accueiladmin');
            }
            else{
                return redirect()->back()->with('fail', 'Il y a une erreur.');
            }
        }

    }
}
