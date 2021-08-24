<?php

# INDEX 
# 1) Comprovar nulos nulsafeoperator
# 2) Obtener el full name class
# 3) obtener null de dos formas
# 4) Lanzar excepciones nuevas
# 5) Match expresions
# 6) classes y propiedades



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Comprovar nulos nulsafeoperator

$firstcategori = null;

# Antes
if (null !== $course) {
    if (null !== $course->categorias()){
        if (null !== $course->categorias()->first()){
            $firstcategori = $course->categorias()->first()->name();
        }
    }
}

# 8.0
# $firstcategori = $course?->categorias()?->first()?->name();

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Obtener el full name class
var_dump(Course::class);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) obtener null de dos formas
# Algo o null ?$dato

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Lanzar excepciones nuevas

# Antes

if (null !== $user){
    echo $user;
}else {
    throw new Exception();
}

# 8.0

# echo $user ?? throw new Exception();

#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) Match expresions
$errorCode = 504;

// $errorMessage = match ($errorCode){
//     404 => 'user not found',
//     407 => 'User not verified',
//     default => 'Internal server error',
// };

var_dump($errorMessage);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) classes y propiedades

# Antes

class Persona {
    public $nom;
    public $email;
    public $edad;

    public function __construct(
        $nom,
        $email,
        $edad
    )
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->edad = $edad;
    }
}


# 8.0

// class Persona2 {

//     public function __construct()
//     {
//         $nom,
//         $email,
//         $edad

//     }{}
// }
#----------------------------------------------------------------------------------------------------------------------------------------------
