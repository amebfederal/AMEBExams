<?php
include 'head.php';
?>
    <div class="row">
        <div class="col-md-3">
        <?php include 'sidebar.php'; ?>
        </div>
        <div class="col-md-9">
<div id="page-title">
<h1>Payment</h1>

<div class="shopping-cart">
<div id="paypal" class="panel-group">

    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#anzegate" class="display-block" href="#anzegate">
                    ANZ E-gate
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="anzegate" class="panel-collapse collapse in">
            <div class="panel-body">
                  <div class="col-md-12">
                    <form method="post" action="../user/profile.php">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="col-sm-12 control-label">Card Type</label>
                                    <div class="input-group">
                                        <select class="form-control" id="exampleInputEmail1">
                                          <option>Mastercard</option>
                                          <option>Visa</option>
                                        </select> 
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                    <label class="col-sm-12 control-label">Expiry Date</label>
                                          <div class="col-md-6">
                                          <select class="form-control" id="exampleInputEmail1">
                                          <option>Month</option>
                                          <option>01</option>
                                          <option>02</option>
                                          <option>03</option>
                                          <option>04</option>
                                          <option>05</option>
                                          <option>06</option>
                                          <option>07</option>
                                          <option>08</option>
                                          <option>09</option>
                                          <option>10</option>
                                          <option>11</option>
                                          <option>12</option>
                                        </select> 
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" id="exampleInputEmail1">
                                            <option>Year</option>
                                          <option>17</option>
                                          <option>18</option>
                                          <option>19</option>
                                          <option>20</option>
                                          <option>21</option>
                                          <option>22</option>
                                        </select> 
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="col-sm-12 control-label">Card Number</label>
                                    <div class="input-group">
                                        <input class="form-control" id="exampleInputEmail1" placeholder="Enter card number" type="email">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-12 control-label">Verification Code</label>
                                    <div class="input-group">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Card Verification Code" type="text">
                                     
                                    </div>
                                </div>
                            </div>
                               <div class="form-group">
                                  <!--  <a href="" title="Recover password">Forgot Your Password?</a> -->
                                </div>
                               
                    </form>
                  </div>
            </div>
        </div>
    </div>
        <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#paypal" class="display-block" href="#Elements">
                    Paypal
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="Elements" class="panel-collapse collapse">
            <div class="panel-body">
               You will be redirected to the PayPal website when you continue.
            </div>
        </div>
    </div>
        <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#bank" class="display-block" href="#Bank">
                   Bank Deposit
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="Bank" class="panel-collapse collapse">
            <div class="panel-body">
                 Please deposit your amount to following Bank Details:<br/>
                    <b>ANZ E-Gate</b>
                    <b>BSB: </b> 063010 <br/>
                    <b>Number: </b> 02145-2541<br/>
                    It may take 2-3 Business days to verify your order.
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
      <div class="col-md-12 text-right">
     <button class="btn btn-success ">Continue</button>
     </div>
     </div>


</div>

</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>