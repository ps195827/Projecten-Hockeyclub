<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\Doelgroep;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function querybuilder() {
        $user = DB::table("users")
        ->join('team_user','team_user.user_id', 'users.id')
        ->select('user.name')
        ->join('team','team.id', 'team_user.team_id')
        ->select('*') 
        ->get();

        dd($user);

        return $user;
    }
}
