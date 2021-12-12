<?php

namespace App\Classes;
use View;
 


class User {

    public static function redirectTo () 
    {
        $role=auth()->user()->role;
        if($role==1){
            return redirect('dashboard');

        }
        if($role==2){
            return redirect('homeu');
        }
      
        else{
            return redirect('general/home');
        }
        
       
    }

}