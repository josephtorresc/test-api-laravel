<?php

namespace Helpers;

class Curl{

    # Obtener usuario via curl 
    function getUser($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Content-Type: application/json",
            "Authorization: Bearer " . env("API_ACCESS_TOKEN", 1),
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    # Crear y actualizar usuario - POST/PUT/PATCH
    function createUpdateUser($url, $methodHttp, $dataArray){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $methodHttp);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Content-Type: application/json",
            "Authorization: Bearer " . env("API_ACCESS_TOKEN", 1),
        );

        $data = '{
            "name":"' .$dataArray[0]. '", 
            "email":"' .$dataArray[1]. '", 
            "gender":"' .$dataArray[2]. '", 
            "status":"' .$dataArray[3]. '"
        }';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    # Actualizar usuario segun su email via curl 
    function updateUserByEmail($url, $methodHttp, $dataArray){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $methodHttp);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "Content-Type: application/json",
            "Authorization: Bearer " . env("API_ACCESS_TOKEN", 1),
        );

        $data = '{
            "name":"' .$dataArray[0]. '", 
            "gender":"' .$dataArray[1]. '", 
            "status":"' .$dataArray[2]. '"
        }';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}