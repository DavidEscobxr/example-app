<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    public function insert(Request $request){
        $name = $request->input('name');
        $surname = $request->input('surname');
        $age = $request->input('age');
        $birth_date = $request->input('birth_date');
        $email = $request->input('email');
        $password = $request->input('password');
        $data = array('name'=>$name,"surname"=>$surname,"age"=>$age,"birth_date"=>$birth_date,
                        'email'=>$email, 'password'=>$password,"created_at"=> new DateTime('now'));

        DB::table('users')->insert($data);

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}


