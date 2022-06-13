<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Helpers\Curl;

class UserController extends Controller
{
    # Listar todos los usuarios
    public function index(){
        $url = env("API_URL", 1);

        $user = new Curl();
        $usuarios = $user->getUser($url);
        return $usuarios;
    }

    # Obtener usuario segun nombre
    function getUserByName($nombre){
        $url = env("API_URL", 1);

        $user = new Curl();
        $usuarios = $user->getUser($url);
        $decode = json_decode($usuarios, TRUE);

        foreach($decode as $key => $value){
            if($value['name'] == $nombre){
                return $decode[$key];
                break;
            }else{
                return response()->json([
                    "message" => "User not found"
                ], 404);
            }
        }
    }

    # Obtener usuario segun email
    function getUserByEmail($email){
        $url = env("API_URL", 1);
        
        $user = new Curl();
        $usuarios = $user->getUser($url);
        $decode = json_decode($usuarios, TRUE);
        
        foreach($decode as $key => $value){
            if($value['email'] == $email){
                return $decode[$key];
                break;
            }else{
                return response()->json([
                    "message" => "User emaiil not found"
                ], 404);
            }
        }
    }

    # Listado de usuarios activos o inactivos
    function getUserByStatus($activo){
        $url = env("API_URL", 1);
        $user = new Curl();
        $usuarios = $user->getUser($url);
        
        $decode = json_decode($usuarios, TRUE);
        $data = [];

        foreach($decode as $key => $value){
            if($value['status'] == $activo){
                $data[] = $decode[$key];
            }
        }

        if(empty($data)){
            return response()->json([
                "message" => "Status message not found"
            ], 404);
        }

        return $data;
    }

    # Crear usuario
    public function createUser(Request $request){
        $url = env("API_URL", 1);
        $user = new Curl();

        $dataArray = [
            $request->name,
            $request->email,
            $request->gender, 
            $request->status
        ];
    
        $response = $user->createUpdateUser($url, 'POST', $dataArray);

        if(empty($response)){
            return response()->json([
                "message" => "User not created"
            ], 404);
        }

        return $response;
    }
}