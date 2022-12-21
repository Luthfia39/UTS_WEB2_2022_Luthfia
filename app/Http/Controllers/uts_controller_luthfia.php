<?php

namespace App\Http\Controllers;

use App\Models\Idolaku;
use App\Models\uts_idolaku;
use Illuminate\Http\Request;

class uts_controller_luthfia extends Controller
{
    public function panggil_home(){
        return view('/home');
    }public function panggil_inisialisasi(){
        return view('/inisialisasi');
    }public function panggil_idolaku(){
        $no = 0;
        $idola = Idolaku::all();
        return view('/idolaku', compact('idola', 'no'));
    }
}
