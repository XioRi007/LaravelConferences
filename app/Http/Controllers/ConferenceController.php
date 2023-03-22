<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Auth;

class ConferenceController extends Controller
{
    public function index(){//get conferences
      $shareButtons = \Share::page(
        'http://127.0.0.1:8000/conferences',
        'Check out this Meetup with SoCal AngularJS!',[], '<div id="social-links">', '</div>')
        ->facebook()
        ->twitter();        
       
        return view('index', ['conferences'=> Conference::paginate(15), 'shareButtons'=>$shareButtons]);
    }
    public function show($id)//get conferences/id
    {
        $data = Conference::find($id);
        return view('conference', ['conference'=>$data]);
    }
    public function create() // get conferences/create
    {
        return view('create');
    }
    public function store(StoreConferenceRequest $request) //post conferences
    {
        Conference::create($request->validated());
        return redirect('/conferences')->with('success', 'Conference is successfully saved');
    }
    public function edit($id)//get conferenes/id/edit
    {
        echo $id;
    }
    public function update($id)// put conferenes/id/
    {
        echo $id;
    }
    public function destroy($id)//delete
    {
        Conference::destroy($id);
        return redirect('/conferences')->with('success', 'Conference is successfully saved');
    }
}
