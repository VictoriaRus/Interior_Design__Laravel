<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class AjaxController extends Controller
{
    public function postIndex(){
        $id = (int)$_POST['id'];
        $obj = Portfolio::find($id);
        return view('ajax.modal',compact('obj'));
    }
}
