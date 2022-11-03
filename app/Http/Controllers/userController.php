<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class userController extends Controller
{
        // in this function we insert product in database get form add record form which   is open when we click add record button 
    function insertProduct(Request $req){
        $name = $req->get("inputName");
        $prize = $req->get("inputPrize");
        $imageName = $req->file("inputImg")->getClientOriginalName();
        //move file in thus folder
       $req->inputImg->move(public_path("images") , $imageName);
        
        $ProductTable = new products();
        $ProductTable->pName =$name ;
        $ProductTable->pPrize = $prize;
        $ProductTable->pImage = $imageName;
        $ProductTable->save();
        // return redirect("/");
        return redirect("/");
        
        }
// get all record we are insert by insertProduct() function form database 
        function GetProduct(){
            $ProductData = products::all();
                // product table inserted in components folder
            return view("product-table" , ["data"=>$ProductData]);
        // return view("welcome" , ["data"=>$ProductData] );    
        }
        // in this function we are get some record of user where user click Edit button this button is place in table of products
        function GetProductData($id){
            $GetProductData = products::find($id);
            return view("edit" , ["data"=>$GetProductData]);
        }
            // in this function we are update data which user change some thing
        function modifyProductData(Request $req){
            $pId = $req->get("p_id");
            $name = $req->get("PName");
            $prize = $req->get("PPrize");

            $imageName = $req->file("PImage")->getClientOriginalName();
            //move file in thus folder
           $req->PImage->move(public_path("images") , $imageName);
            
            $ProductTable =products::where( 'ID' , $req->p_id);
           
            $ProductTable->update(['pName' => $name ,'pPrize' => $prize,'pImage' => $imageName]);
           
            return redirect("/");
            
        }

        // in this function we delete record which user clicked delete button
                function DeleteProduct($id){
                     products::Where( 'ID' ,$id)->delete();
                    
                    return redirect("/");
                    
                }
    }
