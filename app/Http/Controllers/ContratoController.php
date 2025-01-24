<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use Illuminate\Support\Facades\Storage;

class ContratoController extends Controller
{
    public function index()
    {
        //return response()->json(['message' => 'ContratoController funciona correctamente']);
        //return Contrato::paginate(10);
        return response()->json(Contrato::paginate(10));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modalidad' => 'required|string',
            'numero_contrato' => 'required|numeric',
            'regimen' => 'required|string',
            //'archivo' => 'file|mimes:txt',
        ]);

        try {
            $request->file('archivo') ? $archivoPath = $request->file('archivo')->store('archivos')  : $archivoPath = null ;            
            Contrato::create([
                'modalidad' => $request->modalidad,
                'numero_contrato' => $request->numero_contrato,
                'regimen' => $request->regimen,
                'archivo_path' => $archivoPath
            ]);
            return response()->json(['message' => 'Contrato guardado con éxito.'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error.'.$th], 401);;
        }
        

        
    }

    
}
