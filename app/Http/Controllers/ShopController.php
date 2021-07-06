<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    //
    function getData(){
        return["name"=>"ana","email"=>"anajanovic@gmail.com","adresa"=>"Lole Ribara"];
    }

    function list(){
        return Product::all();

    }
    function add(Request $req){
        $product=new Product;
        $product->id=$req->id;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->description=$req->description;
        $product->gallery=$req->gallery;
        $result=$product->save();
        if($result){
            return["Result"=>"Table ce biti sacuvana"];

        }else{
            return["Result"=>"Greska"];
        }

    }

    function update(Request $req){
        $product=Product::find($req->id);
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->description=$req->description;
        $product->gallery=$req->gallery;
        $result=$product->save();
        if($result){
            return ["Result"=>"Tabela je azurirana."];
        }else{
            return["Result"=>"Greska"];
        }
        
    }

    function delete($id){
        $product=Product::find($id);
        $result=$product->delete();
        if($result){
            return ["Resulte"=>"Red je izbrisan",$id];

        }
        else{
            return ["Resulte"=>"Greska",$id];

        }

    }
    function search($name){
        return Product::where("name","like","%".$name."%")->get();

    }
}
