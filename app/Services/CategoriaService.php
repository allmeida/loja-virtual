<?php

namespace App\Services;

use App\Models\Categoria;
use Exception;
use Illuminate\Support\Facades\Hash;

class CategoriaService
{
    public static function store($request)
    {
        try {
            $categoria = Categoria::create($request);
            return [
                'status' => true,
                'categoria' => $categoria
            ];
        } catch(Exception $err) {
            return [
                'status' => false,
                'erro' => $err->getMessage()
            ];
        }
    }
}
