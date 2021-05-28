# Prueba Edgar Santiago


La 2 pruebas se realizaron sin el uso de funciones propias de php.

## UniqueArray 

Este challenge puede ser resuelto con ```array_unique```

Se utilizó un approach recursivo tomando 2 arreglos, uno que itera sobre los elementos originales tomando las posiciones donde se encuentran elementos únicos.
Después, estos elementos se utilizan como lookup index para tomar los elementos únicos del input original

## CategoryTree

Este challenge utiliza un approach recursivo.
Para ordenar los elementos se utilizó ```usort```
```php
        usort($children, fn ($a, $b) =>$a->name() <=> $b->name());
```
Se declara un ```string``` vacio como propiedad de la clase ```Printer``` y se agregan los
elementos necesarios: Espacios en blanco utilizando ```str_repeat```, nombre y linebreak;
```php               
self::$finalString.=str_repeat(" ", $spaces).$c->name()."\n"; 
```




