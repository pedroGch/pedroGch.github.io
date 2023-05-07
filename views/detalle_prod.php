<?PHP
require_once "libraries/productos.php";

$idSeleccionado = $_GET['id'] ?? FALSE;
$producto = producto_x_id($idSeleccionado);


echo "<pre>";
print_r($producto);
echo "</pre>";

?>


<!-- Modal  detalle de producto-->
<section id="detalle" class="container">
    <div class="row">
      
    <?PHP if(!empty($producto)) { ?>
        <div class="col-12">
            <h2 class="fw-bold" id=""><?= $producto['categoria'] ?></h2>

        </div>
        <div class="col-12 d-flex">
            <div class="row">
                <div class="col-12 col-md-4 py-2">
                    <div id="carouselProductos" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/productos/<?= $producto['imagen'] ?>" class="img-fluid d-block w-100" alt="<?= $producto['alt'] ?>">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/slide-prod-2.jpg" class="img-fluid d-block w-100" alt="manos agarrando una ilustracion de mandala para colorear">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/slide-prod-3.jpg" class="img-fluid d-block w-100" alt="hoja con mandala impreso sobre una mesa">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductos" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                </div>
                <div class="col-md-7 card-body">

                    <div>
                        <h3 class="card-text fw-bold text-dark-violet fs-2"><?= $producto['nombre_producto'] ?></h3>
                        <h4 class="card-text fw-bold text-dark-violet fs-5">Origen: <?= $producto['origen'] ?></h4>
                        <p><?= $producto['descripcion'] ?>
                        </p>
                        <p class=""><small><b>Cuidados:</b> <?= $producto['cuidado'] ?></small></p>
                        <p class=""><small><b>Material:</b> <?= $producto['material'] ?></small></p>
                        <p class=""><small><b>Peso:</b> <?= $producto['peso'] ?></small></p>
                        <p class=""><small><b>Medidas:</b> <?= $producto['medidas'] ?></small></p>
                        <p class="fs-3 fw-bold my-3">$<?= number_format($producto['precio'], 2, ",", ".") ?></p>

                    </div>

                    <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Ver métodos de pago
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <img class="img-fluid" src="./img/pagos.jpg" alt="Mercado pago, mastercard, visa, american express, tarjeta naranja, pago facil, rapipago, transferencia bancaria, efectivo o acordar con el vendedor">
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Ver formas de envío
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <img src="./img/envio.jpg" class="img-fluid" alt="Correo Argentino, Correo Privado, Retiro en sucursal, Acordar con el vendedor">

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="col-12 modal-footer">

            <div>
                <button type="button" class="btn shadow-sm btn-violet-gradient w-100">Agregar al carrito</button>
            </div>
            <div>
                <button type="button" class="btn  shadow-sm btn-violet-gradient w-100 mx-2">Comprar</button>
            </div>
        </div>
    </div>

    <?PHP } else { ?>
    
        <div class="col-12">
            <h2 class="fw-bold mt-5 text-center" id="">No se encontró el producto que estás buscando.</h2>

        </div>
    
        <?PHP } ?>

</section>