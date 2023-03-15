<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vedioes;

class VedioesController extends Controller
{
    public function file_form(){
        return view ('file');
    }

    public function save_data(Request $request){
    //    dd($request->toArray());
        // $filename = [];
        foreach ($request->file('file') as $row ){
            $imagename = time() . $row->getClientOriginalName();
        $row->move('Upload/files/', $imagename);
            $filename = $imagename; 
        }
        // $files = json_encode($filename);
        $data = new vedioes();
        $data->vedio = $filename;
        $data->save();

        return redirect('/files');
    }
    public function file_show(){
        $data =  vedioes::all()->toArray();
        // dd($data->toArray());
        return view ('viewvedios', compact('data'));
        
    }

}
