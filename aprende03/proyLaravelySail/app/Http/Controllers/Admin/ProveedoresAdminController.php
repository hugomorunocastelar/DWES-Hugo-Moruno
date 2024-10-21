<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedoresAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.index')
            ->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.create')
            ->with('proveedores', $proveedores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            Proveedor::create($request->all());
        }
        catch (Exception $exception)
        {

        }
        return redirect()->route('admin.proveedores.index');
    }
}
