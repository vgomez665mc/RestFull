<?php

namespace restfull\Http\Controllers;

use Illuminate\Http\Request;
use restfull\Restfull;
class RestfullController extends Controller
{
    

	public function getAll(){

		$restfull = Restfull::all();
		return $restfull;
	}


	public function add(Request $request){
		$restfull = Restfull::create($request->all());
		return $restfull;

	}

	public function get($id){
		$restfull = Restfull::find($id);
		return $restfull;

	}

	public function edit($id,Request $request){
		$restfull = $this->get($id);
		$restfull->fill($request->all())->save();
		return $restfull;

	}

	public function delete($id){
		$restfull = $this->get($id);
		$restfull->delete();
		return $restfull;

	}

}
