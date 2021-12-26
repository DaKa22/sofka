<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {

        try {
            $User_Clear = User::where('termino', false)->get();
            foreach ($User_Clear as  $value) {
                $value->delete();
            }
            $users = User::select('nombre', 'puntos')
                ->orderBy('puntos', 'desc')
                ->take(5)
                ->get();
            return view('welcome', ['users' => $users]);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function Crear_User(Request $request)
    {

        try {
            $user = User::create([
                'nombre' => $request->nombre,
                'termino' => false,
                'puntos' => 0,
            ]);
            $pregunta = Pregunta::with(['respuestas' => function ($query) {
                $query->inRandomOrder();
            }])
                ->where('categorias_id', 1)
                ->inRandomOrder()
                ->first();
            return view('layouts.game.game1', ['user' => $user, 'pregunta' => $pregunta]);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function salir(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->update([
            'termino' => true
        ]);

        return response($this->index());
    }
    public function validar(Request $request)
    {
        // return response($request);
        $respuesta = Respuesta::with('preguntas.respuestas')->where('id', $request->respuestas_id)->first();
        if ($respuesta->correcta == true) {
            $user = User::where('id', $request->users_id)->first();
            $user->update([
                'puntos' => $user->puntos + $respuesta->puntos
            ]);
            $respuesta['respuestas'] = $respuesta['preguntas']['respuestas'];
            $respuesta['puntos'] = $user->puntos;
            return $respuesta;
        } else {
            $respuesta['respuestas'] = $respuesta['preguntas']['respuestas'];

            return $respuesta;
        }
    }
    public function gameover()
    {
        return view('layouts.game.gameover');
    }
    public function siguienteronda(Request $request)
    {
        $user = User::where('id', $request->users_id)->first();
        $respuesta = Respuesta::with('preguntas.respuestas')->where('id', $request->respuestas_id)->first();
        if ($respuesta['preguntas']->categorias_id == 5) {
            $user->update([
                'termino' => true
            ]);
            $users = User::select('nombre', 'puntos')
                ->orderBy('puntos', 'desc')
                ->take(5)
                ->get();
            return view('layouts.game.winner',['users'=>$users]);
        } else {
            $pregunta = Pregunta::with(['respuestas' => function ($query) {
                $query->inRandomOrder();
            }])
                ->where('categorias_id', $respuesta['preguntas']->categorias_id + 1)
                ->inRandomOrder()
                ->first();
            return view('layouts.game.game'.$pregunta->categorias_id, ['user' => $user, 'pregunta' => $pregunta]);

        }
    }
}
