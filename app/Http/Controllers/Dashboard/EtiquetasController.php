<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class EtiquetasController extends Controller
{
    public function index()
    {
        return view('dashboard.etiquetas.index');
    }

    public function printEtiqueta($id)
    {
        $articulo = Articulo::find($id);
        $qr_texto = "TRIBUNAL SUPREMO DE JUSTICIA \nIDENTIFICADOR N°: " . strtoupper(verUtf8($articulo->identificador)) . " \nDESCRIPCIÓN: " . strtoupper(verUtf8($articulo->descripcion)) . "\nSERIAL: " . strtoupper(verUtf8($articulo->serial)) . " \nMARCA: " . strtoupper(verUtf8($articulo->marca));
        $qr_url = route('etiquetas.web', $id);
        return view('dashboard.etiquetas.print_etiqueta')
            ->with('texto', $qr_texto)
            ->with('url', $qr_url);
    }

    public function webEtiqueta($id)
    {
        $articulo = Articulo::where('id', $id)->first();
        if (!$articulo){
            return redirect()->route('web.index');
        }
        return view('dashboard.etiquetas.web_etiqueta')
            ->with('articulo', $articulo);
    }
}
