<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::all();
        return new ProvinceResource(true, 'Get .', $provinces);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $provinces = '';
      return new ProvinceResource(true, 'Province created successfully.', $provinces);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $provinces = '';
      return new ProvinceResource(true, 'Get .', $provinces);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $provinces = '';
      return new ProvinceResource(true, 'Province updated successfully.', $provinces);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $provinces = '';
      return new ProvinceResource(true, 'Province deleted successfully.', $provinces);
    }
}
