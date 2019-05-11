<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    // view
    public function index(){
        $person = Person::paginate(5);
        //dd($person->toArray());
        return view('welcome',[
            'person'=>$person,
            'i'=>0
        ]);
    }

    public function create(){
        return view('create_person');
    }

    public function update($id){
        $person = Person::find($id);
        return view('update_person',['person'=>$person]);
    }

    // action
    public function store(Request $request){
        $person = new Person;
        $person->full_name = $request->input('full_name');
        $person->save();
        return redirect('/');
    }

    public function delete($id){
        $person = Person::find($id);
        $person->delete();
        return redirect('/');
    }

    public function put($id, Request $request){
        $person = Person::find($id);
        $person->full_name = $request->input('full_name');
        $person->save();
        return redirect('/');
    }

    public function search(Request $request){
        $q = str_replace('+','%20',$request->query('q'));
        $person = Person::where('full_name','LIKE',"%$q%")->paginate(5);
        return view('welcome',[
            'person'=>$person,
            'i'=>0
        ]);
    }

}
