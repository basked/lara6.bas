<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ApiController extends Controller
{
 public function migrations(){
     $files = Storage::disk('migrate')->allFiles();
     return json_encode($files);
 }

 public function migration($migration=''){
     $file = Storage::disk('migrate')->get($migration);
     return $file;
 }
}
