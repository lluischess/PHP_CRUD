<?php

# INDEX 
# 1) Typed Properties
# 2) Arrow Functions
# 3) Null Operator
# 4) Spread operator



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Typed Properties
# se le puede añadir el tipo de variable que es es de tipo coche y ya no se podra modificar el tipo de variable
# private Coche $coche;

# ? delante para decir que puede ser null
# private ?Coche $coche;

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Arrow Functions

class coche {

}

function arrowfunctions() {

    $coches = [
        new coche('rojo'),
        new coche('verde'),
        new coche('marron')
    ];

    $colorafiltrar = 'rojo';

    # Antes
    $cochesRojos = array_filter($coches, function (coche $coche) use($colorafiltrar): bool{
        return $coche->color == $colorafiltrar;
    });

    # 7.4 solo se puede usar una expresión
    $cochesRojos = array_filter($coches, fn(coche $coche): bool => $coche->color == $colorafiltrar);

   // $this->assertCount(2,$cochesRojos);
}


#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Null Operator

$request = [
    'nombre' => 'alejandro',
    'edad' => 33
];


# Antes
$request['cat'] = $request['cat'] ? $request['cat']: 'categoria por defecto';
# si no esta la categoria pon el string
$request['cat'] = $request['cat'] ?? 'categoria por defecto';

# 7.4 
$request['cat'] ??='categoria por defecto';


#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Spread operator

$frutas = ['peras'];
$mas = ['platanos','manzanas'];

# Antes
$todos = array_merge($frutas,$mas);

# 7.4
$todas = [$frutas, ...$mas];

#----------------------------------------------------------------------------------------------------------------------------------------------
