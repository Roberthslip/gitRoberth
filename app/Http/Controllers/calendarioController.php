<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\Request;
use App\calendario;
use App\Equipo;
use Facade\Ignition\Context\LaravelConsoleContext;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\BinaryOp\Equal;

class calendarioController extends Controller
{
    

 public function show(){

  
  $calenda=new calendario();
  $calenda2=new calendario();
  $calenda3=new calendario();
  $calenda4=new calendario();
  $calenda5=new calendario();
  $calenda6=new calendario();
  $calenda7=new calendario();
  $calenda8=new calendario();

  $fecha=Equipo::get(['id', 'nombre']);
  

  foreach($fecha as $item){
    if($item['id']==8){
           $calenda->Equipo2=$item['nombre'];
           $calenda->Fecha="FECHA 1 ";
         
           
    }else{
      if($item['id']==1){
        $calenda->Equipo1=$item['nombre'];
        
      }
    } 
  
  }
  $calenda->save();

  foreach($fecha as $item){
    if($item['id']==2){
           $calenda2->Equipo2=$item['nombre'];
           $calenda2->Fecha="FECHA 1 ";
         
           
    }else{
      if($item['id']==7){
        $calenda2->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda2->save();

  foreach($fecha as $item){
    if($item['id']==3){
           $calenda3->Equipo2=$item['nombre'];
           $calenda3->Fecha="FECHA 1 ";
         
           
    }else{
      if($item['id']==6){
        $calenda3->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda3->save();

  foreach($fecha as $item){
    if($item['id']==4){
           $calenda4->Equipo2=$item['nombre'];
           $calenda4->Fecha="FECHA 1 ";
         
           
    }else{
      if($item['id']==5){
        $calenda4->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda4->save();

///////////////////////////////////FECHA 2///////////////////////////////////////
     
   
  foreach($fecha as $item){
    if($item['id']==1){
           $calenda5->Equipo2=$item['nombre'];
           $calenda5->Fecha="FECHA 2 ";
         
           
    }else{
      if($item['id']==7){
        $calenda5->Equipo1=$item['nombre'];
        
      }
    } 
  
  }
  $calenda5->save();

  foreach($fecha as $item){
    if($item['id']==8){
           $calenda6->Equipo2=$item['nombre'];
           $calenda6->Fecha="FECHA 2 ";
         
           
    }else{
      if($item['id']==6){
        $calenda6->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda6->save();

  foreach($fecha as $item){
    if($item['id']==2){
           $calenda7->Equipo2=$item['nombre'];
           $calenda7->Fecha="FECHA 2 ";
         
           
    }else{
      if($item['id']==5){
        $calenda7->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda7->save();

  foreach($fecha as $item){
    if($item['id']==4){
           $calenda8->Equipo2=$item['nombre'];
           $calenda8->Fecha="FECHA 2";
         
           
    }else{
      if($item['id']==3){
        $calenda8->Equipo1=$item['nombre'];
        
      }
    } 
   
  }
 
  $calenda8->save();



 $calenda=calendario::all();
return view('calendario', compact('calenda'));
 
 }


 }

 
