<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;
use App\Models\Restaurante;

class PlatilloController extends Controller
{
    // Funcion que busca de manera global platillos, retorna el platillo y el restaurante, puede recibir parametros para filtrado.
    public function platilloSearchGlobal(Request $request)
    {
        $data = $request->all();
        $platillos = [];
        if($request->has('filtro')){ // Solo obtiene los platillos con filtros
            $precioMin = $request->input('precioMin');
            $precioMax = $request->input('precioMax');
            $categoria = $request->input('categoria');
            foreach(Platillo::where('nombre', 'like', $data['platillo'].'%')->precioMin($precioMin)->precioMax($precioMax)->categoria($categoria)->cursor() as $platillo){
                $platillo->restaurante;
                $platillos[] = $platillo;
            }
        }else{ // Obtiene todos los platillos
            foreach(Platillo::where('nombre', 'like', $data['platillo'].'%')->cursor() as $platillo){
                $platillo->restaurante;
                $platillos[] = $platillo;
            }
        }
        return json_encode(['datos' => $platillos]);
    }

    public function searchPlatilloWithRestaurant(Request $request)
    {
        $data = $request->all();
        // $platillos = Restaurante::with('platillos')->whereRelation('platillos','nombre', 'like', $search.'%')->get();
        // $platillos = Restaurante::whereHas('platillos', function ($query) {
        //     $query->where('nombre', 'like', $data['platillo'].'%');
        // })->get();

        $platillos = [];
        foreach(Restaurante::cursor() as $restaurante){
            // $restaurante->platillos;
            $platillosSearch = $restaurante->platillos()->where('nombre', 'like', '%'.$data['platillo'].'%')->get();
            $sizePlatillos = count($platillosSearch);
            if($sizePlatillos > 0){
                $restaurante['platillos'] = $platillosSearch;
                $platillos[] = $restaurante;
                // $platillos['platillosd'] = $test;
            }
        }
        return json_encode(['datos' => $platillos]);
    }

    // Función para busquedas dentro del restaurante, la funcion retorna unicamente los platillos de un restaurante en especifico. Puede recibir parametros para filtrado.
    public function searchInRestaurant($id_restaurant, Request $request)
    {
        $platillo   = $request->get('nombre');
        $precio     = $request->get('precio');
        $categoria  = $request->get('categoria');
        $platillos = Platillo::where('id_restaurant', $id_restaurant)
                                ->where('nombre', 'LIKE', '%'.$platillo.'%')
                                ->where('categoria', 'LIKE', '%'.$categoria.'%')
                                ->where('precio', 'LIKE', '%'.$precio)
                                ->get();
        return json_encode(['datos' => $platillos]);
    }
    public function random()
    {
        $platillos = Platillo::orderByRaw('rand()')->limit(10)->get();
        return json_encode(['datos' => $platillos]);
    }

    // Función que crea un nuevo platillo
    public function create(Request $request)
    {
        $data = $request->all();
        $imagen = str_replace('data:image/png;base64,', '', $data['imagen']);
        $imagen = str_replace(' ', '+', $imagen);
        $imgName = date('YmdHis').'.png';
        \File::put(public_path('img/'.$imgName), base64_decode($imagen));
        $data['imagen'] = $imgName;
        $platillo = Platillo::create($data);
        return json_encode(['resp' => 'success']);
    }

    // Función que modifica es estado del platillo. Ej: "disponible" o "no disponible"
    public function updateStatus($id, $status)
    {
        $platillo = Platillo::where('id', $id)->first();
        $platillo->status = $status;
        $platillo->save();
        return json_encode(['resp' => 'success']);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nombre'    => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'categoria' => 'required',
            'status' => 'required',
        ]);
        $data = $request->all();
        $platillo = Platillo::find($id);
        try {
            $platillo->update($data);
            return json_encode(['resp' => 'success']);
        } catch (\Exception $e) {
            return json_encode(['resp' => 'error']);
        }
    }
}
