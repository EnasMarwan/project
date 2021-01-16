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
        return redirect('/home');
    }

    
    public function destroy($id){
        $mole = Mole::findOrFail($id);
        $mole->delete();
        return redirect('/mole');

    }

    public function edit($id){
        $mole=Mole::findorfail($id);
        return view('mole.edit',['mole'=>$mole]);
    }
    public function update(Request $request,$id){
// $name=$request->grt('name');
// $age=$request->grt('age');
// $mother=$request->grt('mother');
// $mobile=$request->grt('mobile');
// Mole::where('id',$id)->update
// return $request->all();
$mole = Mole::findorfail($id);
$mole->update($request->all());
return redirect('/mole');
//$mole=Mole::update('update mole set name=? ,age=? ,mother=? ,mobile=? where id=?',[$name ,$age,$mother,$mobile,$id]);
//return view('mole.edit',['mole'=>$mole]);


    }
}
