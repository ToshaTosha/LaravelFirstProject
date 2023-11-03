<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowController extends Controller
{
    public function index(){
        
        $files = Storage::files('data');
        $data = [];
        foreach ($files as $file){
            $id = basename($file, '.json');
            $data[$id] = json_decode(Storage::get($file));
        }
        
        return view('show', ['data' => $data]);
    }
}