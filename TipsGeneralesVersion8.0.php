<?php

# INDEX 
# 1) Comprovar nulos nulsafeoperator
# 2) Obtener el full name class
# 3) 
# 4) 



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




#----------------------------------------------------------------------------------------------------------------------------------------------
