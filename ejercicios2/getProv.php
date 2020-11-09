<?php 
    $argentina = ["Buenos Aires", "Capital Federal", "Catamarca", "Chaco", "Chubut", "Córdoba",
    "Corrientes", "Entre Ríos", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquén",
    "Río Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero",
    "Tierra del Fuego", "Tucumán"];

    $uruguay = ["Montevideo", "Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", 
    "Florida", "Lavalleja", "Maldonado", "Paysandú", "Río Negro", "Rivera", "Rocha", "Salto", "San José", 
    "Soriano", "Tacuarembó", "Treinta y Tres"];

    $selected = $_POST['pais'];

    if(isset($selected)){
        if(!empty($selected)) {
           switch ($selected) {
               case 'arg': 
                   echo json_encode($argentina);
                   break;
               case 'uru':
                   echo json_encode($uruguay);
                   break;
           }
        } else {
            echo 'Seleccionar variable!.';
        }
    } else {
        echo "No existe la variable";
    }

?>