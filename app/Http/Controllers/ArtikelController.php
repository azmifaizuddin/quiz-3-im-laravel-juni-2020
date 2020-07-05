<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller {

    public function index(){
        $artikels = ArtikelModel::get_all();
        return view('artikel.index', compact('artikels'));
    }

    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $artikel = ArtikelModel::save($data);
        $artikels = ArtikelModel::get_all();
        if($artikel){
            return view('artikel.index', compact('artikels'));
        }

    }

    public function show($id){
        $artikels = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikels'));
    }

    public function edit($id){
        $artikels = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikels'));
    }

    public function update($id, Request $request){
        //dd($request->all());
        $artikels = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }


}