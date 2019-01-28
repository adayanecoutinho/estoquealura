<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

  public function lista(){

      $html = '<h1>Primeira lógica com Laravel</h1>';
      $produtos = DB::select('select * from produtos');
      //função pra debugar
      //dd($produtos);
      return view('listagem')->with('produtos',$produtos);
  }
}
