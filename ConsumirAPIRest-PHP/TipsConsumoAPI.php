<?php

# INDEX 
# 1) Consumir servicio rest JSON
# 2) Consumir con function
# 3) 
# 4) 


#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Consumir servicio rest JSON
# file_get_contents para obtener toda la informacion del archivo
$data = json_decode( file_get_contents("http://localhost/PHPTESTING/datos_json.txt",true) );

# print_r imprime en formato array
print_r($data);

for($i=0; $i< count($data); $i++){
    echo $data[$i]['nombre']. "<br>";
}


#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Consumir con function

function API($ruta){
    $url = "http://localhost/PHPTESTING/";
    $respuesta = $url . $ruta;

    return $respuesta;
}

$datosAPI = API("datos_json");
$json = json_decode(file_get_contents($datosAPI),true);

var_dump($json);

foreach($json as $key ) {
    $nombre = $json['nombre'];
    echo $nombre;
    $edad = $json['edad'];
    echo $edad;
}
#----------------------------------------------------------------------------------------------------------------------------------------------



#----------------------------------------------------------------------------------------------------------------------------------------------
