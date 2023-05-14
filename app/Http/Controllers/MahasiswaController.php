<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa as MahasiswaModel;

class MahasiswaController extends Controller{
    
    public function create()
    {
        return view('universitas/mahasiswa.blade.php');
    }

    public function cekobject(){
        $mahasiswa = new MahasiswaModel();
        dd($mahasiswa);
    }


    public function insert(){
        MahasiswaModel::Create([
            'user_id' => 1 ,
            'NIM' => '20250001',
            'nama' => 'Astajim',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '2001-01-05',
            'fakultas' => 'SoCS',
            'jurusan' => 'TI',
            'ipk' => '3'
        ]);
        return "data insert";
    }

}
