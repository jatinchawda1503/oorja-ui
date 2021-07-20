

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
                        <li><a href="/products/honey/Natural-Honey.php">Natural Honey</a></li>                    
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
                        <img src="<?php echo $base?>/includes/images/product/hmhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                         <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                         <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">   
                                             </div>
                        <div class="item">
                         <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">          
                        </div>
                        <div class="item">
                         <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">  
                        </div>
                    </div>
                    <div class="pro-slide-carousel js-carousel-product">
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                        <div class="item">
                            <img src="<?php echo $base?>/includes/images/product/nhs.jpeg" class="img-responsive" alt="Product" title="images products">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-product-infor">
                    <div class="pro-title">
                        <h1>Natural Honey</h1>
                    </div>
                    <div class="pro-star">
                    <div class="star-rating" data-rating="4.5"></div>                               
                    </div>
                    
                    <!-- Pricing Tabs Start -->
                    <div class="tab02 p-t-80 product-pricing-t">

                        <!-- Tab panes -->
                        <div class="tab-content">
                        <!-- - -->
                        <div class="tab-pane fade active in" id="100" role="tabpanel" aria-expanded="true">
                        <div class="pro-price">
                        <span class="old-price"></span>
                        <span class="price">200</span>
                        </div>

                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="200" role="tabpanel" aria-expanded="false">
                        <div class="pro-price">
                        <span class="old-price"></span>
                        <span class="price">300</span>
                        </div>

                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="500" role="tabpanel" aria-expanded="false">
                        <div class="pro-price">
                        <span class="old-price"></span>
                        <span class="price">500</span>
                        </div>

                        </div>
                        </div>


                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs " role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#100" role="tab" aria-expanded="true">100gm</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#200" role="tab" aria-expanded="false">200gm</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#500" role="tab" aria-expanded="false">500gm</a>
                        </li>
                        </ul>


                    </div>

                        <!-- Pricing Tabs ENd -->
                    
                    
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
                        <p>Our natural honey comes from the nectar that honeybees collect. It is highly nutritious and laden with numerous medicinal properties. It contains various naturally occurring antioxidants, pollen, enzymes, vitamins, and minerals. We guarantee that no additional sugar exists in our natural honey. Processed supermarket honey does not offer the same benefits as organic honey.</p>
                        
                        <p>Natural honey provides some unique benefits that include: </p>

                        <ul class="sub-details">
                           <li> Packed with Antioxidants. </li> 
                           <li> May Lower Cholesterol </li> 
                           <li> Could Have Cancer-Fighting Properties </li> 
                           <li> Can Help Kill off Bacteria. </li> 
                           <li> Promotes weight loss. </li> 
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