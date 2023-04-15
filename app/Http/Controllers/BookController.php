<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class BookController extends BaseController
{
    public function insert(Request $request){
        $name = $request->input('name');
        $author = $request->input('author');
        $release = $request->input('release');
        $edition = $request->input('edition');
        $gender = $request->input('gender');
        $synopsis = $request->input('synopsis');
        $data = array('name'=>$name,"author"=>$author,"date_release"=>$release,"edition"=>$edition,
                        'gender'=>$gender,"synopsis"=>$synopsis, "create_at"=> new DateTime('now'));

        DB::table('books')->insert($data);

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}

