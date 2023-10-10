<?php include_once('../part/header.php'); ?>

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides" style="height: 650px;">
    <ul class="slides-container">
        <li class="text-center">
            <img src="../assets/images/banner-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Greenshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="../assets/images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Greenshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="../assets/images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Greenshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <?php
            $min = 3;
            $max = 8;
            $time = 3;
            $array = arrayRand($min, $max, $time);
            ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="../assets/images/categories_img_01.jpg" alt="" />
                    <a class="btn hvr-hover" href="store.php?id_brand=<?php echo $array[0] ?>"><?php echo $administrator->getAdminId($array[0])['name_brand'] ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="../assets/images/categories_img_02.jpg" alt="" />
                    <a class="btn hvr-hover" href="store.php?id_brand=<?php echo $array[1] ?>"><?php echo $administrator->getAdminId($array[1])['name_brand'] ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="../assets/images/categories_img_03.jpg" alt="" />
                    <a class="btn hvr-hover" href="store.php?id_brand=<?php echo $array[2] ?>"><?php echo $administrator->getAdminId($array[2])['name_brand'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="../assets/images/add-img-01.png" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="../assets/images/add-img-02.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Fruits & Vegetables</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".top-featured">Top featured</button>
                        <button data-filter=".best-seller">Best seller</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php
            $min = 1;
            $max = $product->countAllProducts();;
            $time = 4;
            $array = arrayRand($min, $max, $time);
            $x = 1;
            foreach ($array as $value) { ?>
                <div class="col-lg-3 col-md-6 special-grid <?php echo $x % 2 == 0 ? "best-seller" : "top-featured" ?>">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <?php
                                if ($product->getProductId($value)['price'] < $product->getProductId($value)['cost']) { ?>
                                    <p class="sale">Sale</p>
                                <?php } else { ?>
                                    <p class="new">New</p>
                                <?php } ?>
                            </div>
                            <img src="../assets/img/upload/img_product/<?php echo $product->getProductId($value)['img_prd_1']; ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="shop-detail.php?id_prd=<?php echo $product->getProductId($value)['id_prd']; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <form action="" method="post">
                                    <input hidden name="id_prd" value="<?php echo $product->getProductId($value)['id_prd']; ?>" type="text">
                                    <button class="cart">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $product->getProductId($value)['name_prd']; ?></h4>
                            <h5><?php echo number_format($product->getProductId($value)['price'], 0, '', ',') ?> VNĐ</h5>
                        </div>
                    </div>
                </div>

            <?php $x++;
            } ?>
        </div>
    </div>
</div>
<!-- End Products  -->

<?php include_once('../part/footer.php'); ?>