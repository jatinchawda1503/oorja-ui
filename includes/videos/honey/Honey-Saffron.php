<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Natural Honey - Oorja Farms</title>
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

    <section class="product-single-section">
    <!-- BREADCRUMB-->
    <section id="breadcrumb" class="breadcrumb-v2">
        <div class="container-fluid">
            <div class="inner">
                <div class="breadcrumb-content">
                    <ul>
                        <li>Shop</li>
                        <li>Honey</li>
                        <li><a href="/products/honey/Honey-Saffron.php">Honey Saffron</a></li>                    
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
                        <img src="<?php echo $base?>/includes/images/product/shs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1612475498348-fb774b4ebf33?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vY2t1cCUyMGJvdHRsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=60" class="img-responsive" alt="Product" title="images products">
                        </div>
                        
                    </div>
                    <div class="pro-slide-carousel js-carousel-product">
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1612475498348-fb774b4ebf33?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vY2t1cCUyMGJvdHRsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&h=1000&q=60" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/2.png" class="img-responsive" alt="Product" title="images products">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-product-infor">
                    <div class="pro-title">
                        <h1>Honey Saffron</h1>
                    </div>
                    <div class="pro-star">
                    <div class="star-rating" data-rating="4.5"></div>                               
                    </div>
                    <div class="pro-price">
                    <span class="old-price"></span>
                    <span class="price">200</span>
                    </div>
                    
                    
                    <div class="pro-action"> 
                        <div class="btn-theme btn-medium addcart">
                            <a href="http://wa.me/918871000005">Buy on <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                        
                    </div>
                    
                    <div class="pro-desc">
                        <div class="dropdowndesc">
                            <span>Description</span>
                            <i class="icon-caret"></i>
                        </div>
                        <div class="drop-details">
                        <p>Honey and saffron have a perfect combination. Honey has a rich protein and vitamin content, and saffron enhances the antioxidant and anti-inflammatory properties of honey. They strike a perfect balance of nutrients and taste. They are a match made in heaven! It is deliciously silky and prized for its taste, aroma, and color.</p>
                        
                        <p> Benefits of Saffron honey include: </p>

                        <ul class="sub-details">
                           <li> It has powerful anti-inflammatory and anti-oxidant properties.</li> 
                           <li> It is an expectorant and can help alleviate a cough. </li> 
                           <li> It has significant aphrodisiac properties. </li> 
                           <li> It helps improve mood and alleviate depression. </li> 
                        </ul>


                        <?php include('../../products/gen-conditions.php') ?>

                        </div>    
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