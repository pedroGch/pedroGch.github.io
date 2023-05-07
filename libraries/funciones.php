<?PHP

/** 
 * Esta función devuelve las primeras X palabras de un párrafo.
 * @param string $texto Este es el párrafo a reducir.
 * @param int $cantidad Esta es la cantidad de palabras a extraer (Opcional, si no se provee se asumirá 15).
 * 
 * @return string La cantidad de palabras solicitada con un elipsis(...) concatenado al final. 
 */
function recortar_palabras(string $texto, int $cantidad = 15): string
{

    //toma un texto y lo recorta a cierta cantidad de palabras.
    $array = explode(" ", $texto); //lo separo siempre que encuentre un espacio. guardamos las piezas                         resultantes en un array - convierte string en array
    if (count($array) <= $cantidad) { //cuenta la cantidad de palabras en array y verifica si es < cantidad 
        $resultado = $texto;
    } else {
        array_splice($array, $cantidad); //elimina una porcion del array y la reemplaza por otra cosa
        $resultado = implode(" ", $array) . "..."; // convierte array en string, pegamos las piezas en resultado
    };

    return $resultado;
};




/*COMENTO ESTA FUNCION PARA PROBAR LA DE ABAJO*/
/*
/**
 * Devuelve el catálogo de productos de una categoria en particular
 * @param string $categoria Un string con el nombre de la categoria a buscar
 * 
 * @return array Un array con todos los productos de la categoria en stock.
 */

function catalogo_x_categoria(string $categoria): array
{
    $resultado = [];

    //llamo al catalogo completo
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) { //recorre catalogo y se queda con los productos
        //en caso de querer utilizar arrays para las categorias, filtrar con in_array
        //if (in_array($categoria, $p['filtro_por_categoria'])) {

        if ($p['filtro_por_categoria'] == $categoria) {
            $resultado[] = $p; //versión reducida del push. me guardo el producto completo
        };
    }
    return $resultado;
};



/**
 * Devuelve los datos de un producto en particular
 * @param int $id EL ID único del producto a mostrar
 * 
 * @return mixed Un array con los datos del producto seleccionado // o null si no lo encuentra
 */
function producto_x_id(int $id): mixed
{
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if ($p['id'] == $id) {
            return $p; //como va a encontrar uno solo, que retorne ese.
        };
    };

    return null; // si no lo encuentra, retorna null
};




/**
 * Devuelve el catálogo de productos con un precio de hasta $2000
 * @param float $precio Un numero con el precio máximo a filtrar
 * 
 * @return array Un array con todos los productos dentro del rango de precio en stock.
 */
function catalogo_precio_menor_a(float $precio): array
{
    $resultado = [];

    //llamo al catalogo completo
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) { //recorre catalogo y se queda con los productos
        if ($p['precio'] <= $precio) {
            $resultado[] = $p; //versión reducida del push. me guardo el producto completo
        };
    }
    return $resultado;
};
