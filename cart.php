<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/selena-preview/selena/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 06:21:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Ganesh</title>

    <?php include('includes/headerscript.php');?>

</head>

<body>

     <?php include('includes/header.php');?>

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Thumbnail</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/p1.jpg"
                                                    alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Endeavor Daytrip</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/p2.jpg"
                                                    alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Joust Duffle Bags</a></td>
                                        <td class="pro-price"><span>$275.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="2"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$550.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/p3.jpg"
                                                    alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Compete Track Totes</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1" />
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/p4.jpg"
                                                    alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Bess Yoga Shorts</a></td>
                                        <td class="pro-price"><span>$110.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="3" />
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>$110.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="btn btn__bg btn__sqr">Apply Coupon</button>
                                </form>
                            </div>
                            <div class="cart-update mt-sm-16">
                                <a href="#" class="btn btn__bg btn__sqr">Update Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$230</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">$300</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="checkout.php" class="btn btn__bg d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
    <!-- main wrapper end -->

   

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

     <?php include('includes/footerscript.php');?>
    <?php include('includes/footer.php');?>
    
</body>


<!-- Mirrored from demo.hasthemes.com/selena-preview/selena/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 06:21:35 GMT -->
</html>