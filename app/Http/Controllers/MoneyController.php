<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Money;
use Auth;

class MoneyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$listUser = User::all();
    	foreach ($listUser as $key => $value) {
    		$listUser[$key]['money'] = $value->money;
    	}
    	return view('money.index', compact('listUser'));
    }
    public function store(Request $request)
    {
    	$money = Auth::user()->money()->create(['money'=>$request->get('money'), 'content'=>$request->get('content')]);
        $returnHTML = view('money.item', compact('money'))->render();
    	return response()->json(array('success' => true, 'view'=>$returnHTML));
    }
    public function destroy(Request $request, $id)
    {
    	$money = Money::find($id);
    	$money->delete();
    	dd(1);
    	$respon['status'] = 'success';
        return $respon;
    }
}
