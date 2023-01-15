<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function Surat(){
        // $surat_id = Surat::findOrFail($id);
        // $records=\DB::table('surat')->Where('id_surat', $surat_id);
        // // $surats = Surat::orderBy('id_surat','DESC');
        // return datatables()->of($records)
        // ->addColumn('action','surat.action')
        // ->addIndexColumn()
        // ->rawColumns(['action'])
        // ->toJson();
        $surat = Surat::orderBy('created_at','DESC');
        return datatables()->of($surat)
        ->addColumn('action','surat.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
}
