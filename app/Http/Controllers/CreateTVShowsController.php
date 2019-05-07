<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TVShow;

class CreateTVShowsController extends Controller
{
    //
    public function getShowsList(){
    	$tvShowsList = TVShow::all();
    	//print_r($tvShowsList);
    	return view('home',['tvShowsList' => $tvShowsList]);
    }

    public function addShow(Request $request){

    	$this->validate($request, [
    		'season' => 'required',
    		'episode' => 'required',
    		'quote' => 'required'

    	]
    	);

    	$tvshow = new TVShow;
    	$tvshow->season = $request->input('season');
    	$tvshow->episode = $request->input('episode');
    	$tvshow->quote = $request->input('quote');
    	$tvshow->image = $request->input('image');
    	$tvshow->save();
    	return redirect('/')->with('success','Tv Show saved Successfully');


    	
    	//return 'added Show Successfully text';
    }


     public function modifyShow($id){
     	$updateShow = TVShow::find($id);

     	//debugging
     	/*
     	echo '<pre>';
     	print_r($updateShow);
     	echo '</pre>';
     	exit();
     	*/
     	return view('updateShow',['updatedShow' => $updateShow]);
    


    	
    	//return 'added Show Successfully text';
    }


    

public function editAndSaveShow(Request $request, $id){
     	
     	$this->validate($request, [
    		'season' => 'required',
    		'episode' => 'required',
    		'quote' => 'required'

    	]
    	);
     	$data = array(
     		'season' => $request->input('season'),
     		'episode' => $request->input('episode'),
     		'quote' => $request->input('quote')

     	);

     	TVShow::where('id',$id)
     	->update($data);
    	
    	return redirect('/')->with('success','Tv Show updated Successfully');
    }


      public function getParticularShow($id){

    	$singleShow = TVShow::find($id);
     	return view('singleShow',['singleShowView' => $singleShow]);
    }

    public function deleteShow($id){
    	TVShow::where('id',$id)
     	->delete();

     	return redirect('/')->with('success','Tv Show deleted Successfully');
  
    }

}
