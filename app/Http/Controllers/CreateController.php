<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{
    public function index(){
    	return view('form');
    }
    
    public function submit(Request $request){
    	$data = $request->validate([
    		'name' => 'required|min:2',
            'lastname' => 'required',
        ], [
            'name.required' => 'Необходимо ввести имя!',
            'name.min' => 'В имени должно быть минимум :min символа.',
            'lastname.required' => 'Необходимо ввести фамилию!',
        ]);
        $data = $request->only('name', 'lastname');
        Log::info('Data:', $data);

        Storage::makeDirectory('data');
        Storage::put('data/' . uniqid() . '.json', json_encode($data));
        return back()->with('message', 'Форма сохранена!');
    }
}
