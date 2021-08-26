<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class oneLessonController extends Controller
{  

 
    public function first(){
 
        $xmlll=simplexml_load_file('word47.xml');
      

dd($xmlll->children());
foreach ($xmlll->children() as $child)
{
    dd($child);
    foreach($child as $c){
       // echo $c;
    }   
  if($child->getName()=="para"){
    //  echo"para"."<br>";
  }
  if($child->getName()=="informaltable"){
    //echo $child->tgroup->tbody->row->entry->para;

 }
 if($child->getName()=="tgroup"){
    echo "entry";

 } 
}   
      
    }
}