<?php 
headerTienda($data);
/* getModal('modalCarrito',$data); */
/* invocar - traer los productos por categoria */
$arrProductos = $data['productos'];
 ?>
<br>
<link type="text/css" rel="stylesheet" href="<?= media() ?>/tiendadetodounpoco/css/bootstrap.min.css" />

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span>
                                <?= $data['page_title']; ?></span>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">


                    <!-- STORE -->
                    <div id="store" class="col-md-12">
                        <!-- store top filter -->
                        <div class="store-filter clearfix">
                            <div class="store-sort">
                                <label>
                                    Show:
                                    <select class="input-select">
                                        <option value="0">20</option>
                                        <option value="1">50</option>
                                    </select>
                                </label>
                            </div>
                            <ul class="store-grid">
                                <li class="active"><i class="fa fa-th"></i></li>
                                <!-- <li><a href="#"><i class="fa fa-th-list"></i></a></li> -->
                            </ul>
                        </div>
                        <!-- /store top filter -->

                        <!-- store products -->
                        <div class="row">
                            <?php 
                                if(!empty($arrProductos)){
                                    for ($p=0; $p < count($arrProductos); $p++) { 
                                        $ruta = $arrProductos[$p]['ruta'];
                                        if(count($arrProductos[$p]['images']) > 0 ){
                                            $portada = $arrProductos[$p]['images'][0]['url_image'];
                                        }else{
                                            $portada = media().'/images/uploads/product.png';
                                        }
                                ?>

                            <!-- product -->
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <a
                                        href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                        <div class="product-img">
                                            <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                    </a>


                                        <div class="product-body">
                                            <p class="product-category"><?= $arrProductos[$p]['categoria'] ?></p>
                                            <h3 class="product-name"><a
                                                    href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                                    <?= $arrProductos[$p]['nombre'] ?></a></h3>
                                            <h4 class="product-price">
                                                <?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
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
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick
                                                        view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-whatsapp" style="color:white"></i> Comprar</button>
                                        </div>
                                </div>
                            </div>
                            <!-- /product -->
                            <?php 
                                    }
                                }else{
                                    echo "No hay productos para mostrar.";
                                } 
			?>

                            <!-- /store products -->

                            <!-- store bottom filter -->
                            <!--  <div class="store-filter clearfix">
                                <span class="store-qty">Showing 20-100 products</span>
                                <ul class="store-pagination">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!-- /store bottom filter -->
                        </div>
                        <!-- /STORE -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->

        </div>

















    </div>
</div>
<?php 
	footerTienda($data);
?>