<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerStagiare extends Controller
{
    //
    public function getDataFromDB() {
        $m = DB::select('select * from stagiare');
        return view('stagiares-list', ['afficheS'=>$m]);
    }
    public function luckShow1($id){
        $stagiares=$stagiare::where('idF',$id)->get();
        return view("stagiares-list", ["stagiares"=>$stagiares]);
    }

    public function luckShow2(){
        return view ("fillieres-list", ["fillieres"=> Filiere::all()]);
    }


    public function crud (REQUEST $request){
        switch ($request->input("action")){
            case"add": 
                // Stagiare::create(["ids"=> $request->ids, "nom"=>$request->nom, "adress"=>$request->"adress"]);
               $id=$_REQUEST['id'];
               $name=$_REQUEST['nomde'];
               $adrss=$_REQUEST['adrs'];
                $ajo=DB::insert("INSERT INTO  stagiare VALUES(?,?,?)",[$id, $name, $adrss]);
                return redirect("/stagiare");
            case "update":
                $id=$_REQUEST['id'];
                $name=$_REQUEST['nomde'];
                $adrss=$_REQUEST['adrs'];
                $upd=DB::update("UPDATE stagiare SET nom=?, adress=? where idS=?", [$name, $adrss,$id]);
                return redirect("/stagiare");
                // Stagiaire::where(['ids', $request->ids])->update(["nom"=>$request->nom,"adress"=>$request->"adress" ]);
            //     return redirect()-> route('formRoutour', ['succces'=>"stagiaire modifier"]);
            case "delete":
                $id=$_REQUEST['id'];
                $upd=DB::delete("DELETE FROM stagiare where idS=?", [$id]);
                return redirect("/stagiare");


            //     Stagiaire::destroy(['ids'=>$request->'ids']);
            //     return redirect()-> route('formRoutour', ['succces'=>"stagiaire remover"]);
            }
    }

    //public function crud(REQUEST $request){
    //    switch ($request->input('action')){
    //        case 'save':è
    //    }
    //}
}
