@extends('accountholders.layouts.layouts')

@section ('title', 'Notifications')

@section('content')

        <div class="col-md-9">
<div id="page-title">
<div class="panel">
    <div class="panel-body">
      <h3>Shopping Cart</h3>

        <div class="shopping-cart">

            <div class="column-labels">
              <label class="product-image">Image</label>
              <label class="product-details">Product</label>
              <label class="product-price">Price</label>
              <label class="product-quantity">Qty.</label>
              <label class="product-removal">Remove</label>
              <label class="product-line-price">Total</label>
            </div>

            <div class="product">
              <div class="product-image">
                <img src="{{ asset('resources/assets/image-resources/stock-images/img-17.jpg') }}">
              </div>
              <div class="product-details">
                <div class="product-title">Grade 1 - Music Theory</div>
                <p class="product-description">Candidate First Last Name - DOB <br/>
                John Doe - 2005/05/12
                <br/>
                Jack Smith - 2007/02/13</p>
              </div>
              <div class="product-price">12.99</div>
              <div class="product-quantity">
                2
              </div>
              <div class="product-removal">
                <button class="remove-product">
                  Remove
                </button>
                 <a class="edit-product" href="single_exam.php">
                  Edit
                </a>
              </div>
              <div class="product-line-price">25.98</div>
            </div>

            <div class="product">
              <div class="product-image">
                <img src="{{ asset('resources/assets/image-resources/stock-images/img-20.jpg') }}">
              </div>
              <div class="product-details">
                <div class="product-title">Grade 2 - Rockschool Theory</div>
                <p class="product-description">Candidate First Last Name - DOB <br/>
                John Doe - 2005/05/12
                <br/>
                Jack Smith - 2007/02/13</p>
              </div>
              <div class="product-price">45.99</div>
              <div class="product-quantity">
                3
              </div>
              <div class="product-removal">
                <button class="remove-product">
                  Remove
                </button>
                 <a class="edit-product" href="single_exam.php">
                  Edit
                </a>
              </div>
              <div class="product-line-price">45.99</div>
            </div>

            <div class="totals">
              <div class="totals-item">
                <label>Total Amount</label>
                <div class="totals-value" id="cart-subtotal">71.97</div>
              </div>
              <div class="totals-item totals-item-total">
                
              </div>
            </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col-md-12">
              <input type="checkbox" />I <b>John Barrett</b> acknowledge that I have read and understood the <a href="#">Terms and Conditions</a> and undertake in relation to matters within my control that the Candidate(s) I enter will sit for the Australian Music Examinations Board (AMEB) Online Exam without the assistance of any aid or person and under full supervision. I acknowledge that online exams expire 12 months after purchase. I further acknowledge that, if in the event that any breach of the <a href="#">AMEB Online Examination Policy</a> is found to have occurred, a range of actions may be taken or penalties imposed by the AMEB or the AMEB State Office against the candidate as set out in the <a href="#">AMEB Online Examination Policy.</a>
              </div>
            </div>
            <div class="row">
             <div class="col-md-4 pull-right">
                           <br/><a href="payment_option.php" class="btn border-default btn-success btn-block" min="1" disabled="disabled">Checkout</a>
              </div>
              </div>

          </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
@section('page-specific-scripts')
<!-- Calendar -->
<script>
/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
</script>
@section('page-specific-scripts')
@endsection
