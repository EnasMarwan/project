<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mole;


class MoleController extends Controller
{
    public function index(){
     // $mole = Mole::all();
      $mole = Mole::latest()->get();
        return view('mole.index',['mole'=>$mole,]);
    }


    public function show($id){
        $mole=  Mole::findOrFail($id);
        return view('mole.show',['mole'=>$mole]);
    
}

public function create(){
    return view('mole.create');
}
public function search(Request $request ){
    $search = $request->get('search');
    $mole=Mole::where('name','like','%'.$search.'%')->paginate(5);
    return view('mole.index',['mole'=>$mole]);


}

public function store(){
    $mole =new Mole();
        
       $mole->name= request('name');
        $mole->age= request('age');
        $mole->mother= request('mother');
       $mole->mobile= request('mobile');
       $mole->ident=request('ident');
       $mole->time_arrive=request('time_arrive');
       $mole->play_num=request('play_num');
       $mole->game_sellect=request('game_sellect');
       
      $mole->save();
      session()->flash('message','data added successfully');
        return redirect('/home');
    }

    
    public function destroy($id){
        $mole = Mole::findOrFail($id);
        $mole->delete();
        session()->flash('message','data deleted successfully');
      return redirect('/home');

    }

    public function edit($id){
        $mole=Mole::findorfail($id);
        session()->flash('message','data updated successfully');
        return view('mole.edit',['mole'=>$mole]);
    }


    public function update(Request $request,$id){
    $mole = Mole::findorfail($id);
    $mole->update($request->all());
    session()->flash('message','data edited successfully');
    return redirect('/mole');



    }
}
