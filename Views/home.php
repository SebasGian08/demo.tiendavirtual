<?php
 headerTienda($data);
 /* getModal('modalCarrito',$data); */

 	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];//para mostrar categorias con foto en los banners
    $arrHeader = $data['header']; //para listar mas categoria en el header
	$arrProductos = $data['productos'];
	$arrPromociones = $data['promociones'];
?>
<!-- NAVEGACION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="<?= base_url()?>">Home</a></li>
                <li class=""><a href="<?= base_url().'/tienda'?>">Tienda</a></li>
                <?php 
                    for ($j=0; $j < count($arrHeader); $j++) {
                        $ruta = $arrHeader[$j]['ruta']; 
                    ?>
                <li>
                    <!-- Ruta -->
                    <a href="<?= base_url().'/tienda/categoria/'.$arrHeader[$j]['idcategoria'].'/'.$ruta; ?>">
                        <!-- Nombre -->
                        <?= $arrHeader[$j]['nombre'] ?>
                    </a>
                </li>
                <?php 
				}
				 ?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav><!-- FIN NAVEGACION -->


<!-- CAROUSEL -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($arrSlider); $i++) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) echo 'class="active"'; ?>>
        </li>
        <?php } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($arrSlider); $i++) { ?>
        <div class="item <?php if ($i == 0) echo 'active'; ?>">
            <img src="<?= $arrSlider[$i]['portada'] ?>" alt="Slide <?php echo $i + 1; ?>"
                style="width: 100%; height:490px">
        </div>
        <?php } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">

        <span class="sr-only">Next</span>
    </a>
</div>
<!-- FIN CAROUSEL -->

<!-- SECTION CATEGORIAS -->
<div class="section">

    <!-- container -->
    <div class="container">
        <p style="text-align: center; font-size: 30px;">Nuestras <strong>CATEGORÍAS</strong></p>
        <!-- row -->
        <div class="row">
            <?php 
                        for ($j=0; $j < count($arrBanner); $j++) {
                            $ruta = $arrBanner[$j]['ruta']; 
                        ?>
            <!-- shop -->
            <div class="col-md-2 col-xs-6">
                <div class="shop">
                    <a href="<?= base_url().'/tienda/categoria/'.$arrBanner[$j]['idcategoria'].'/'.$ruta; ?>">
                        <div class="shop-img">
                            <img src="<?= $arrBanner[$j]['portada'] ?>" alt=""
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </a>
                    <!-- <div class="shop-body" style="background-color: rgba(0, 0, 0, 0.2); padding: 10px;">
                        <a href="<?= base_url().'/tienda/categoria/'.$arrBanner[$j]['idcategoria'].'/'.$ruta; ?>"
                            class="cta-btn" style="color: white; font-weight: bold; text-decoration: none;">Ver más <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div> -->
                </div>
                <h3 style="font-size: small; text-align: center;"><?= $arrBanner[$j]['nombre'] ?></h3>
            </div>
            <!-- /shop -->
            <?php 
				}
				 ?>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- FIN SECTION -->

<!-- section NUEVOS PRODUCTOS -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Nuevos Productos</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php 
                                if (!empty($arrPromociones)) {
                                    $totalProductos = count($arrPromociones);
                                    $numProductosMostrados = 0;
                                    for ($p = 0; $p < $totalProductos; $p++) {
                                        $ruta = $arrPromociones[$p]['ruta'];
                                        if (count($arrPromociones[$p]['images']) > 0) {
                                            $portada = $arrPromociones[$p]['images'][0]['url_image'];
                                        } else {
                                            $portada = media() . '/images/uploads/product.png';
                                        }
                                        ?>
                                <!-- product -->
                                <div class="product">
                                    <a
                                        href="<?= base_url().'/tienda/producto/'.$arrPromociones[$p]['idproducto'].'/'.$ruta; ?>">
                                        <div class="product-img">
                                            <img src="<?= $portada ?>" alt="">
                                            <div class="product-label">
                                                <span class="new"
                                                    style="background-color:green;border-color:green">NEW</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-body">
                                        <p class="product-category"><?= $arrPromociones[$p]['categoria'] ?></p>
                                        <h3 class="product-name">
                                            <a
                                                href="<?= base_url().'/tienda/producto/'.$arrPromociones[$p]['idproducto'].'/'.$ruta; ?>">
                                                <?= $arrPromociones[$p]['nombre'] ?>
                                            </a>
                                        </h3>
                                        <h4 class="product-price">
                                            <?= SMONEY.formatMoney($arrPromociones[$p]['precio']); ?>
                                            <del class="product-old-price">$990.00</del>
                                        </h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist">
                                                <i class="fa fa-heart-o"></i>
                                                <span class="tooltipp">Añadir a deseos</span>
                                            </button>
                                            <button class="add-to-compare">
                                                <i class="fa fa-whatsapp"></i>
                                                <span class="tooltipp">add to compare</span>
                                            </button>
                                            <button class="quick-view">
                                                <a
                                                    href="<?= base_url().'/tienda/producto/'.$arrPromociones[$p]['idproducto'].'/'.$ruta; ?>">
                                                    <i class="fa fa-eye"></i>
                                                    <span class="tooltipp">Ver Detalle</span>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn">
                                            <i class="fa fa-whatsapp" style="color:white"></i> Comprar
                                        </button>
                                    </div>
                                </div>
                                <!-- /product -->
                                <?php
                                        $numProductosMostrados++;
                                        if ($numProductosMostrados >= 8) {
                                            break; // Mostrar solo los 8 primeros productos
                                        }
                                    }
                                }	
                                ?>
                            </div>

                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<!-- FIN -->







<?php
 footerTienda($data);
?>