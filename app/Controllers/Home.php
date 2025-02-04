<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function code(){
    	echo json_encode(array('key1' => 'value1', 'key2' => 'value2'));
    }

    public function update($id,$otro=3){
    	echo $id;
    	echo $otro;
    }
}
