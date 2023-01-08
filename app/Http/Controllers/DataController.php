<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\User;
class DataController extends Controller
{
    public function Surat(){
        $surats = Surat::orderBy('created_at','DESC');
        return datatables()->of($surats)
        ->addColumn('action','surat.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
}
