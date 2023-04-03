<?php

// Array (arreglo) mas sencillo. Posee indice, el primero es 0
$platos = ["ceviche", "Arroz con pollo", "Carapulcra","Aji de Gallina", "Lomo saltado"]
echo $platos; [0]; //Primero


$amigos = array("Jose","Joel", "Lorenzo","Cesar");
echo $amigos[1]; //Segundo

// Array MULTI dimensional
$aplicaciones = [
    ["Photoshop", "Corel Draw", "Premier","Muse"],
    ["VSCode", "Xampp", "NetBeans" "Erwin", "Notepad++"]
    ["Excel", "SAP", "AutoCAD", "PowerBI", "Proyect"]
];

//Obtener VSCode
echo $aplicaciones[1][0]; //1 = indice arreglo, 0 = indice valor 

//Obtener Muse
echo $aplicaciones[0][3];

//Obtener SAP
echo $aplicaciones[2][1];

//Hasta aquim cualquier de los arreglos anteriores, utiliza un INDICE(int)
//ARREGLOS ASOCIATIVOS... KEY => VALUE
$datosPersonales = [
    "apellidos"     => "ORTIZ JACOBO",
    "nombres"       => "Emersson Alejandro"
    "especialidad"  => "Ingeneria de Software con IA"
    "email"         => "ortizjacobo25@gmail.com"
    "edad"          =>  20,
    "estadoSoltero" => true
    "peliculas"     => ["EndGame"; "Pinocho", "IroMan"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];

//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0];