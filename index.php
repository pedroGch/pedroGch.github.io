<?PHP
require_once 'libraries/funciones.php';

$seccionesValidas = [
    "home" => [
        "titulo" => "Bienvenidos"
    ],
    "nosotros" => [
        "titulo" => "Nosotros"
    ],
    "tienda" => [
        "titulo" => "Nuestro catálogo"
    ],
    "preg_frecuentes" => [
        "titulo" => "Preguntas frecuentes"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "detalle_prod" => [
        "titulo" => "Detalle de producto"
    ],
];

//voy a pasar un parámetro que me va decir qué sección está cargando el sitio
//qué pasa si el usuario no me manda ninguna variable de GET por URL. Compruebo si la variable existe, si no existe, lo mando siempre al home
//ternario
//$seccion = isset($_GET['sec']) ? $_GET['sec'] : "home";

//null coalesce. Únicamente en PHP 7+
$seccion = $_GET['sec'] ?? "home";

//Busca que la seccion se encuentre dentro de las secciones válidas - especif. en la key
if (!array_key_exists($seccion, $seccionesValidas)) {
    $vista = "404";
    $titulo = "404 - Página no encontrada";
} else {
    $vista = $seccion;
    $titulo = $seccionesValidas[$seccion]['titulo'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhara :: <?= $titulo ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700;800&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

</head>


<body>
    <nav class="navbar navbar-expand-lg bg-orange text-light ">
        <div class="container-xl container-fluid ">
            <div class="align-self-start ">
                <a class="navbar-brand mt-2 p-2 " href="index.php?sec=home">
                    <img src="./img/logo.png" alt="Logo Dhara" class="d-inline-block align-text-top m-2" id="logo">
                    <h1 class="d-none">Dhara</h1>
                </a>
            </div>

            <div class="align-self-end d-flex ">
                <div class="mt-3 mt-md-4 mt-lg-2 ">

                    <button type="button" class="btn text-light position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-dark">
                            2
                            <span class="visually-hidden">Productos en el carrito</span>
                        </span>
                    </button>
                </div>
                <div>
                    <button class="navbar-toggler p-3 mt-2 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon navbar-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end text-end p-2" id="navbarNavAltMarkup">
                        <div class="navbar-nav ">
                            <a class="nav-link active text-light" aria-current="page" href="index.php?sec=home">Inicio</a>
                            <a class="nav-link text-light" href="index.php?sec=nosotros">Nosotros</a>

                            <a class="nav-link text-light" href="index.php?sec=tienda&cat=decoracion">Decoración</a>
                            <a class="nav-link text-light" href="index.php?sec=tienda&cat=yoga">Yoga</a>
                            <a class="nav-link text-light" href="index.php?sec=tienda&cat=meditacion">Meditación</a>

                            <a class="nav-link text-light" href="index.php?sec=preg_frecuentes">Preguntas frecuentes</a>
                            <a class="nav-link text-light" href="index.php?sec=contacto">Contacto</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </nav>

    <header>

    </header>

    <main>

        <section id="filtros" class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-around mt-5">
                    <a href="index.php?sec=tienda&cat=todos" class="btn shadow-sm btn-grey-white">Todos</a>
                    <a href="index.php?sec=tienda&cat=decoracion" class="btn shadow-sm btn-grey-white">Decoración</a>
                    <a href="index.php?sec=tienda&cat=yoga" class="btn shadow-sm btn-grey-white">Yoga</a>
                    <a href="index.php?sec=tienda&cat=meditacion" class="btn shadow-sm btn-grey-white">Meditación</a>
                    <a href="index.php?sec=tienda&cat=ofertas" class="btn shadow-sm btn-grey-white">- $2000</a>
                </div>
            </div>
        </section>
        <?PHP

        // Verificamos si el archivo existe, sino, redireccionamos al 404
        require_once file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

        ?>


    </main>




    <footer class="bg-grey py-lg-3 mt-5">
        <div class="row container text-light mx-auto p-3 d-flex">
            <div class="col-12 col-lg-4 p-2"><img class="mx-auto d-block img-fluid" src="./img/foto-ro.jpg" alt="foto Rocío"></div>
            <div class="col-12 col-lg-5 datos align-self-center datos-footer">
                <ul>
                    <li><b>Alumna:</b> Rocío B. Scotto</li>
                    <li><b>Edad:</b> 33 años</li>
                    <li><b>Email:</b> rocio.scotto@davinci.edu.ar</li>
                    <li><b>Comisión:</b> DWN3BV - </li>
                    <li><b>Materia:</b> Programación II</li>
                    <li><b>Prof:</b> Jorge Pérez</li>
                </ul>

            </div>
            <div class="col-8 col-lg-3 redes-sociales mx-auto align-self-center mb-4">
                <div class="row iconos-redes">
                    <div class="col-6 text-center">
                        <a href="https://github.com/roscotto">
                            <div class="github"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="whitesmoke" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></div> <span class="d-none">Github</span>
                        </a>
                    </div>
                    <div class="col-6 text-center">
                        <a href="https://www.instagram.com/ro_scotto/">
                            <div class="instagram"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="whitesmoke" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></div>
                            <span class="d-none">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>




    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>