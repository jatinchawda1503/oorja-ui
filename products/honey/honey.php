

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plant - Gardening & Houseplants HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] .'/components/header/css.php');
    ?>
</head>
<body class="single-product">
    <!-- HEADER -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/components/header/header.php');
    ?>
    <!-- END-HEADER -->


    <section class="procduct-single-section">

  

    <!-- BREADCRUMB-->
    <section id="breadcrumb" class="breadcrumb-v2">
        <div class="container-fluid">
            <div class="inner">
                <div class="breadcrumb-content">
                    <ul>
                        <li>Shop</li>
                        <li>Honey</li>
                        <li><a href="#">Honey</a></li>                    
                    </ul>                 
                </div>
            </div>
        </div>
    </section>
    <section id="main-content">
        <div class="single-product-detail row">
            <div class="col-md-6">
                <div class="single-product-img">
                    <div class="pro-slide js-product-slider">
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1612475498348-fb774b4ebf33?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vY2t1cCUyMGJvdHRsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=60" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1612475498348-fb774b4ebf33?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vY2t1cCUyMGJvdHRsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=60" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_05.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_06.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_07.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                    </div>
                    <div class="pro-slide-carousel js-carousel-product">
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1612475498348-fb774b4ebf33?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vY2t1cCUyMGJvdHRsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=60" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_02.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_05.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_06.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="images/product/pro_07.jpg" class="img-responsive" alt="Product" title="images products">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-product-infor">
                    <div class="pro-title">
                        <h1>Chakra Crystal Healing</h1>
                    </div>
                    <div class="pro-star">
                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                        </div>
                    </div>
                    <div class="pro-price">
                        <span class="price-old"><del>$700.00</del></span>
                        <span class="price">$350.00</span>
                    </div>
                    
                    
                    <div class="pro-action"> 
                        <div class="btn-theme btn-medium addcart">
                            <a href="#">Add to cart</a>
                        </div>
                        
                    </div>
                    <div class="pro-tabs">
                        <div class="tabs-desc">
                            <ul class="navbar-tabs">
                                <li class="dropdown open">
                                    <div class="dropdowndesc">
                                        <span>Description</span>
                                        <i class="icon-caret"></i>
                                    </div>                                    
                                    <div class="dropdown-menu">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="pro-share">
                        <span class="title">Share this :</span>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    </section>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] .'/components/footer/footer.php');
    ?>

<?php
    include( $_SERVER['DOCUMENT_ROOT'] . '/components/footer/scripts.php');
    ?>
</body>


</body>
</html>