<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{

    public function index() {
        $goods = Goods::all();
        return view('goods.index', ['goods' => $goods]);
    }
    
    public function create() {
        return view('goods.create');
    }
    
    public function store(Request $request) {
        $goods = new Goods;
        $goods->code = $request->code;
        $goods->name = $request->name;
        $goods->save();
        return view('goods.store');
    }
    
    public function edit(Request $request, $id) {
        logger($id);
        info($id);
        $good = Goods::all()->find($id);
        logger($good);
        info($good->id);
        return view('goods.edit', ['good' => $good]);
    }
    
    public function update(Request $request) {
        $good = Goods::find($request->id);
        $good->code = $request->code;
        $good->name = $request->name;
        $good->save();
        return view('goods.update');
    }
    
}
