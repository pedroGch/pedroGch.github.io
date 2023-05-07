<?PHP

/**
 * Devuelve el catálogo completo.
 * 
 * @return array Un array con todos los productos en stock.
 */
function catalogo_completo(): array
{

    $catalogoJSON = file_get_contents('datos/productos.json');
    $catalogo = json_decode($catalogoJSON, TRUE);

    return $catalogo;
};

//falta agregar 10 productos
//controlar id's que no estén duplicados;



 