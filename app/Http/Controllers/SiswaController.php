<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{   /**
    * Display a listing of the resource.
    *
    * @return View
    */
    public function index()
    {
        $data = Kelas::select('*');
        if (request()->has('query')) {
            $q = request()->get('query');
            $data->where('siswa', 'LIKE', '%' . $q . '%')
                ->orWhere('guru', 'LIKE', '%' . $q . '%');
        }
        $data= $data->orderBy('siswa', 'ASC')->get();
        return view('siswa_0261')->with('data', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
     public function create()
     {
         return view('create_0261');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param request $request
      * @return RedirectResponse
      */
      public function store(Request $request)
      {
          $request->validate([
              'siswa' => ['required', 'string', 'min:3, 'max:50'],
              '' =>
            ])
    }
