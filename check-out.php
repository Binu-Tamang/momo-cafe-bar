<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome,custom css,bootstrap css -->
    <?php include('inc/css.php') ?>

    <title>The Momo Cafe Bar </title>
</head>

<body>

    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_title = 'Food Order ' ?>
    <?php $page_name = 'Food Order' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="section section-order">
        <div class="container">
            <div class="section-inner">
                <div class="order">
                    <div class="order-row row">
                        <div class="col-lg-8 order-2 order-md-1">
                            <div class="checkout-form-wrap">
                                <form action="" class="checkout-form">
                                    <div class="checkout-form-section" id="billingDetails">
                                        <h3 class="checkout-heading">Billing Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>First Name</label>
                                                    <input type="text" name="fName" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lName" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Apartment, suite, unit, etc. (optional)</label>
                                                    <input type="text" name="apt" placeholder="Apartment, suite, unit, etc." class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Street Address</label>
                                                    <input type="text" name="streetAdd" placeholder="Street Address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>City</label>
                                                    <input type="text" name="billing_city" value="Teulada, Alicante, Spain" readonly="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Zip code</label>
                                                    <input type="text" name="postal" placeholder="Zip Code">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Phone Number</label>
                                                    <input type="tel" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Email Address</label>
                                                    <input type="email" name="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="delivery-add-toggle input-toggle">
                                                    <input id="deliverAddToggle" name="order-type" type="checkbox" value="Delivery Different Address">
                                                    <label for="deliverAddToggle">Deliver to a different address?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-form-section" id="deliveryDetails" style="display: none;">
                                        <h3 class="checkout-heading">Delivery Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>First Name</label>
                                                    <input type="text" name="fName" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lName" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Apartment, suite, unit, etc. (optional)</label>
                                                    <input type="text" name="apt" placeholder="Apartment, suite, unit, etc." class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Street Address</label>
                                                    <input type="text" name="streetAdd" placeholder="Street Address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>City</label>
                                                    <input type="text" name="billing_city" value="Teulada, Alicante, Spain" readonly class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Zip code</label>
                                                    <input type="text" name="postal" placeholder="Zip Code">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Phone Number</label>
                                                    <input type="tel" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="formfield">
                                                    <label>Email Address</label>
                                                    <input type="email" name="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="checkout-form-section" id="paymentOption">
                                        <h3 class="checkout-heading">Payment Option</h3>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="checkout-payment-field input-toggle">
                                                    <input id="paymentOptionCash" name="order-type" type="radio" value="Cash" checked>
                                                    <label for="paymentOptionCash">Cash</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="checkout-payment-field input-toggle">
                                                    <input id="paymentOptionPaypal" name="order-type" type="radio" value="Paypal">
                                                    <label for="paymentOptionPaypal">Paypal</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-form-section" id="specialInstructions">
                                        <h3 class="checkout-heading">Special Instructions</h3>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="formfield">
                                                    <textarea name="instruct" placeholder="Please mention if there are special instruction for the delivery person"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-form-footer mb-4">
                                        <a class="yellow_btn" href="order.php">Go Back</a>
                                        <button class="default-btn">Place Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 order-1 order-md-2">
                            <!-- <div class="order-cart-fixed app-md">
                                <span class="order-cart-fixed-total">(3 items) 27,00 €</span>
                                <button class="order-cart-toggle order-cart-fixed-toggle">View Basket</button>
                            </div> -->
                            <div class="cart-display">
                                <!-- <div class="order-cart-exit order-cart-toggle app-md">
                                    <i class="fa fa-times"></i>
                                </div> -->
                                <div class="order-cart-inner">
                                    <h3 class="order-cart-title">Your Order Summary</h3>
                                    <div class="order-type">
                                        <div class="order-type-title">
                                            <h4>Food For:</h4>
                                        </div>
                                        <div class="order-type-field">
                                            <input id="orderTypeDelivery" name="order-type" type="radio" value="Delivery" checked>
                                            <label for="orderTypeDelivery">Delivery</label>
                                        </div>
                                        <div class="order-type-field">
                                            <input id="orderTypePickup" name="order-type" type="radio" value="Pickup">
                                            <label for="orderTypePickup">Pickup</label>
                                        </div>
                                    </div>
                                    <table class="order-cart-table">
                                        <!-- <thead>
                                                <tr>
                                                    <th colspan="3">
                                                        <span class="order-cart-subtotal">3,000.00</span>
                                                        <span class="order-cart-totalnum">(3 items)</span>
                                                    </th>
                                                </tr>
                                            </thead> -->
                                        <tbody>
                                            <!-- <tr class="order-cart-item">
                                                <td class="order-cart-item-cell order-cart-item-quantity">
                                                    <span class="order-cart-item-num">2</span>
                                                    <div class="order-cart-item-num-toggle">
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </span>
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-cont">
                                                    <span class="order-cart-item-name">English Breakfast Small</span>
                                                    <p class="order-cart-item-desc">Need it in hot, but less
                                                        spicier.</p>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-value">
                                                    <span class="order-cart-item-price">5,50​ €</span>
                                                    <div class="order-cart-item-remove">
                                                        <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                    </div>
                                                </td>
                                            </tr> -->
                                            <tr class="order-cart-item">
                                                <td class="order-cart-item-cell order-cart-item-quantity">
                                                    <span class="order-cart-item-num">1</span>
                                                    <div class="order-cart-item-num-toggle">
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </span>
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-cont">
                                                    <span class="order-cart-item-name">Tostada jamón serranoy tomate</span>
                                                    <p class="order-cart-item-desc">Prepared with fresh tomato,
                                                        fresh cream and spices.</p>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-value">
                                                    <span class="order-cart-item-price">3,50 ​€</span>
                                                    <div class="order-cart-item-remove">
                                                        <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-cart-item">
                                                <td class="order-cart-item-cell order-cart-item-quantity">
                                                    <span class="order-cart-item-num">3</span>
                                                    <div class="order-cart-item-num-toggle">
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </span>
                                                        <span class="order-cart-item-num-toggler order-cart-item-num-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-cont">
                                                    <span class="order-cart-item-name">Hamburguesa pequeña con patatas fritas</span>
                                                    <p class="order-cart-item-desc">Prepared with fresh bun,
                                                        tomato, special ketchup and spices.</p>
                                                </td>
                                                <td class="order-cart-item-cell order-cart-item-value">
                                                    <span class="order-cart-item-price">6,50 €</span>
                                                    <div class="order-cart-item-remove">
                                                        <span class="order-cart-item-remove-toggler fa fa-times"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="order-cart-summary">
                                        <ul class="order-cart-summary-list">
                                            <li>
                                                <div class="order-cart-summary-list-name"><span>Sub Total</span></div>
                                                <div class="order-cart-summary-list-amt"><span>17,00 €</span></div>
                                            </li>
                                            <!-- Discount Voucher Section -->
                                            <li>
                                                <div class="discount-voucher-section">
                                                    <div class="formfield">
                                                        <input type="text" id="voucherCode" placeholder="Enter Discount Code">
                                                    </div>
                                                    <button class="apply-voucher-btn">Apply</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="order-cart-summary-list-name"><span>Service Charge</span></div>
                                                <div class="order-cart-summary-list-amt"><span>0,00 €</span></div>
                                            </li>
                                            <li class="order-cart-summary-delivery">
                                                <div class="order-cart-summary-list-name"><span>Delivery Charge</span></div>
                                                <div class="order-cart-summary-list-amt"><span>10,00 €</span></div>
                                            </li>
                                            <li>
                                                <div class="order-cart-summary-list-name"><span>Grand Total</span></div>
                                                <div class="order-cart-summary-list-amt"><span id="grandTotal">27,00 €</span></div>
                                            </li>
                                        </ul>

                                        <!-- <div>
                                            <button class="order-cart-summary-btn">Proceed to Checkout</button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade order-modal" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="modal-title" class="modal-title">Papadom</h3>
                    <div class="modal-icons">
                        <span><img src="images/menu-icons/eggs.png" alt=""></span>
                        <span><img src="images/menu-icons/fish.png" alt=""></span>
                    </div>
                    <span class="modal-price">9,50 €</span>
                    <p class="modal-desc">Fried plain crispy lentils wafer.</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-instructions">
                        <label for="modalInstructions" class="modal-label">Special Instructions</label>
                        <textarea name="orderInstructions" id="modalInstructions" placeholder="Add Notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="modal-btn-remove">Remove</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="order-modal-quantity">
                                        <span class="order-modal-quantity-toggle order-modal-quantity-minus">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                        <input class="order-modal-quantity-field" type="number" name="orderQuantity" value="1" disabled>
                                        <span class="order-modal-quantity-toggle order-modal-quantity-plus">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="order-modal-add-to-cart">
                                <span class="order-modal-add-to-cart-text">Update Bag</span>
                                <span class="order-modal-add-to-cart-price">9,50 €</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>
</body>

</html>