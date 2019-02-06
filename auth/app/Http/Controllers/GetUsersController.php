<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class GetUsersController extends Controller
{
    public function list() {
        $users = User::paginate(10);

        return view('users.list', compact('users'));
    }

}
