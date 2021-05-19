<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Documents;


class BerandaController extends Controller
{
    //
    public function index(){
        $var_nama = "Fakultas Ushuludin";
        $data =[
            'totalJurnal' => Journal::count(),
            'totalEbook' => Documents::count()
        ];
        return view('HalamanDepan.Beranda', compact('var_nama', 'data'));
    }

    public function ebook(){
        return view ('Halaman.ebook');
    }

    public function journal(){
        return view ('Halaman.journal');
    }

    public function upebook(){
        return view ('Halaman.upebook');
    }
    public function upjournal(){
        return view ('Halaman.upjournal');
    }

    public function forbidden(){
        return view ('Halaman.forbiden');
    }

}
