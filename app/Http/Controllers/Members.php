<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Members extends Controller
{
     function dbOperations(){
        //return (array)DB::table('students')->find('fatema');
        //return DB::table('students')->count();
        return DB::table('students')
       
    //    ->insert(
           // [
              // 'firstname'=>'sara',
             //   'lastname'=>'rezaee',
              //  'username'=>'SR',
              //  'roll'=>21,
               // 'id'=>5 ] );
            ->where('firstname','mohadesse')->delete();
          //  ->update(
              //  [ 'firstname'=>'sara',
                 //   'lastname'=>'rezaee',
                //    'username'=>'SR',
                 //   'roll'=>21,
                  //  'id'=>9 ]);
   }
   


    
    
}
