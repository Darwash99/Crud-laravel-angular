<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
Use log;
class UsuarioController extends Controller
{
    //
    public function getAll(){
        $data = Usuario::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['Usuario'] = $request['Usuario'];
        $data['Nombres'] = $request['Nombres'];
        $data['Apellidos'] = $request['Apellidos'];
        $data['Tidentificacion'] = $request['Tidentificacion'];
        $data['Nidentificacion'] = $request['Nidentificacion'];
        $data['Fechanacimiento'] = $request['Fechanacimiento'];
        $data['Contrasena'] = $request['Contrasena'];
        Usuario::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function delete($id){
        $res = Usuario::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
    public function get($id)
    {
        $data = Usuario::find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $data['Usuario'] = $request['Usuario'];
        $data['Nombres'] = $request['Nombres'];
        $data['Apellidos'] = $request['Apellidos'];
        $data['Tidentificacion'] = $request['Tidentificacion'];
        $data['Nidentificacion'] = $request['Nidentificacion'];
        $data['Fechanacimiento'] = $request['Fechanacimiento'];
        $data['Contrasena'] = $request['Contrasena'];
        Usuario::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }
}
