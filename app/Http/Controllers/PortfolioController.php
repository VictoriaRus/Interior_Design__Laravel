<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function postIndex(PortfolioRequest $r){
        $r['user_id'] = Auth::user()->id;
        if($_FILES['picture1']){
            $r['picture'] = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        }else{
            $r['picture'] = '';
        };
        Portfolio::create($r->all());
        //одиночная вставка данных
        //$obj = new Portfolio;
        //$obj->name = $_POST['name'];
        //$obj->body = $_POST['body'];
        //$obj->picture = '';
        //$obj->user_id = Auth::user()->id;
        //$obj->save();
        return redirect()->back();
    }
    public function getAll(){
        $objs = Portfolio::all();
        return view('portfolios', compact('objs'));
    }

    public function getOne($id=null){
        $obj = Portfolio::find($id);
        return view('portfolio', compact('obj'));
    }

  
    public function updateWork($id){
        $obj = Portfolio::find($id);
        return view('update-portfolio',compact('obj'));
    }

    public function updateWorkSubmit($id, PortfolioRequest $r){
        $r['user_id'] = Auth::user()->id;
        if($_FILES['picture1']){
            $r['picture'] = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        }else{
            $r['picture'] = '';
        };
        $obj = Portfolio::find($id);
        $obj->name = $r->input('name');
        $obj->body = $r->input('body');
        $obj->picture = $r->input('picture');
        $obj->user_id = Auth::user()->id;
        $obj->save();
        return redirect()->route('home')->with('success', 'Запись успешно обновлена');
    }

    public function getDelete($id){
        //$work = Portfolio::where('user_id',Auth::user()->id)->where('id',$id)->first();
        $work = Portfolio::find($id);
        if(file_exists(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture)){
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture);
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/s'.$work->picture);
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/ss'.$work->picture);
        }
        $work->delete();
        return redirect()->route('home')->with('success', 'Запись удалена');
    }
   

/*
    public function getDelete($id=null){
        //$work = Portfolio::where('user_id',Auth::user()->id)->where('id',$id)->first();
        $work = Portfolio::find($id);
        if(file_exists(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture)){
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture);
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/s'.$work->picture);
            @unlink(public_path().'/uploads/'.Auth::user()->id.'/ss'.$work->picture);
        }
        $work->delete();
        return redirect()->back();
    }*/
}
