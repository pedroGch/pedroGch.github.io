<?PHP 


$todosProductos = [

       
    [
        "id" => 1,
        "filtro_por_categoria" => "decoracion",
        "categoria" => "Decoración",
        "nombre_producto" => "Porta incienso plateado Buda",
        "descripcion" => "Con un diseño inspirado en Buda, este porta incienso es perfecto para crear un ambiente relajado y meditativo. Además, su diseño es elegante y se ajusta perfectamente a cualquier decoración.",
        "imagen" => "01.jpg",
        "alt" => "",
        "origen" => "India",
        "material" => "metal",
        "medidas" => "10 x 4 cm.",
        "peso" => 150 . "gr.",
        "cuidado" => "limpiar con paño húmedo",
        "stock" => 50,
        "precio" => 1761

    ],

    [
        "id" => 2,
        "filtro_por_categoria" => "decoracion",
        "categoria" => "Decoración",
        "nombre_producto" => "Jardín Zen Yin-yang",
        "descripcion" => "El karesansui, también conocido como jardín zen, es un estilo de jardín japonés seco que consiste en un campo de arena poco profunda y que contiene arena, grava, rocas y ocasionalmente hierbas, musgo y otros elementos naturales. Son utilizados como forma de meditación por los monjes Zen japoneses.",
        "imagen" => "02.jpg",
        "alt" => "",
        "origen" => "Japón",
        "material" => "piedra",
        "medidas" => "15 cm.",
        "peso" => 250 . "gr.",
        "cuidado" => "producto frágil",
        "stock" => 60,
        "precio" => 3400

    ],

    [
        "id" => 3,
        "filtro_por_categoria" => "decoracion",
        "categoria" => "Decoración",
        "nombre_producto" => "Vela de soja en base de cemento Buda",
        "descripcion" => "Vela de cera de soja en base de cemento , forma rostro de Buda, con aroma a madera del arbol del Sándalo.",
        "imagen" => "03.jpg",
        "alt" => "",
        "origen" => "Argentina",
        "material" => "cera de soja y cemento",
        "medidas" => "10 x 10 cm , 300 ml de cera de soja",
        "peso" => 400  . "gr.",
        "cuidado" => "Cuando se enciende dejar que se consuma la primera capa, cortar el pabilo despues de cada uso.",
        "stock" => 100,
        "precio" => 3625

    ],

    [
        "id" => 4,
        "filtro_por_categoria" => "decoracion",
        "categoria" => "Decoración",
        "nombre_producto" => "Buda Meditando Sobre Pedestal Grande",
        "descripcion" => "Estatua de Buda decorativa, apta Exterior.",
        "imagen" => "04.jpg",
        "alt" => "",
        "origen" => "India",
        "material" => "resina náutica",
        "medidas" => "40 x 22 x 47 cm.",
        "peso" => 400  . "gr.",
        "cuidado" => "Gran resistencia a la intemperie.",
        "stock" => 25,
        "precio" => 5900

    ],

    [
        "id" => 5,
        "filtro_por_categoria" => "decoracion",
        "categoria" => "Decoración",
        "nombre_producto" => "Buda con porta velas loto",
        "descripcion" => "Incluye dos soportes para velas cuidadosamente fabricados a mano, una estatua ornamental de la cabeza de Buda, piedras decorativas y base de madera.",
        "imagen" => "05.jpg",
        "alt" => "",
        "origen" => "Malasia",
        "material" => "resina",
        "medidas" => "27 x 15.24 cm.",
        "peso" => 629   . "gr.",
        "cuidado" => "Producto frágil.",
        "stock" => 35,
        "precio" => 6500

    ],
   
    [
        "id" => 6,
        "filtro_por_categoria" => "yoga",
        "categoria" => "Yoga",
        "nombre_producto" => "Yoga Mat Colchoneta Pilates",
        "descripcion" => "Colchoneta Pilates Yoga Mat. Ideal para Fitness – Yoga – Meditación. Antideslizante | Enrollable | Transportable | Súper liviana",
        "imagen" => "06.jpg",
        "alt" => "",
        "origen" => "Tailandia",
        "material" => "PVC",
        "medidas" => "173 x 61 cm",
        "peso" => 1000  . "gr.",
        "cuidado" => "Para su correcta limpieza utilizar jabón neutro y un paño húmedo. NO utilizar productos de limpieza o abrasivos. No exponer al sol.",
        "stock" => 30,
        "precio" => 4300

    ],

    [
        "id" => 7,
        "filtro_por_categoria" => "meditacion",
        "categoria" => "Meditación",
        "nombre_producto" => "Cuenco tibetano",
        "descripcion" => "Cuenco fabricado a mano. Excelente opción para yoga, meditación, terapia de sonido, reuniones espirituales y alivio del estrés. Ideal para curar los trastornos de estrés, el dolor y la depresión.",
        "imagen" => "07.jpg",
        "alt" => "",
        "origen" => "Nepal",
        "material" => "bronce",
        "medidas" => "12 cm.",
        "peso" => 433  . "gr.",
        "cuidado" => "Limpiar con un trapo humedecido con agua dulce o destilada.",
        "stock" => 10,
        "precio" => 21000

    ],

    [
        "id" => 8,
        "filtro_por_categoria" => "meditacion",
        "categoria" => "Meditación",
        "nombre_producto" => "Zafú De Meditación",
        "descripcion" => "Favorece el apoyo cómodo de las piernas y la verticalidad de la columna. Al sentarse en el Zafu para llevar a cabo la práctica de meditación, las caderas y las piernas se relajan, lo que ayuda a elevar y abrir el pecho y los pulmones y facilitar la respiración.",
        "imagen" => "08.jpg",
        "alt" => "",
        "origen" => "Japón",
        "material" => "gabardina, relleno de trigo sarraceno",
        "medidas" => "20 x 30 cm.",
        "peso" => 1600   . "gr.",
        "cuidado" => "Lavado en seco o a mano con un jabón suave.",
        "stock" => 60,
        "precio" => 2930

    ],

    [
        "id" => 9,
        "filtro_por_categoria" => "meditacion",
        "categoria" => "Meditación",
        "nombre_producto" => "Zafú De Meditación Grande",
        "descripcion" => "Favorece el apoyo cómodo de las piernas y la verticalidad de la columna. Al sentarse en el Zafu para llevar a cabo la práctica de meditación, las caderas y las piernas se relajan, lo que ayuda a elevar y abrir el pecho y los pulmones y facilitar la respiración.",
        "imagen" => "09.jpg",
        "alt" => "",
        "origen" => "Japón",
        "material" => "PVC",
        "medidas" => "85.5 x 76.2 cm.",
        "peso" => 1522 . "gr.",
        "cuidado" => "Lavable.",
        "stock" => 20,
        "precio" => 11780

    ],

    [
        "id" => 10,
        "filtro_por_categoria" => "meditacion",
        "categoria" => "Meditación",
        "nombre_producto" => "Cuenco tibetano de cuarzo",
        "descripcion" => "TONALIDAD: Fa (F). Estos poderosos y cristalinos instrumentos de sanación se fabrican con cuarzo al 99%, lo que genera que su vibración sea extremadamente pura y dar increible duración. Esta frecuencia estimula la glándula pituitaria, la atención y la apertura del tercer ojo.",
        "imagen" => "10.jpg",
        "alt" => "",
        "origen" => "Indonesia",
        "material" => "cuarzo",
        "medidas" => "45.72 cm.",
        "peso" => 3200  . "gr.",
        "cuidado" => "Limpiar con un trapo humedecido con agua dulce o destilada.",
        "stock" => 10,
        "precio" => 97320

    ],


];

$productosJSON = json_encode($todosProductos);


echo "<pre>";
print_r($productosJSON);
echo "</pre>";


