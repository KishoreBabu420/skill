<?php 

$title = "Data Science & Machine Learning Experts Program | Learn Data Science & Machine Learning Experts Program in Coimbatore |  Online & Offline Training in Coimbatore
";

$description = "Data Science & Machine Learning Experts Program offers ";

$keywords = "Data Science & Machine Learning Experts Program offers, Data Science,  Machine Learning, Data Science course course in Coimbatore,Data Science and Machine learning course in coimbatore";

$page = 16;

include_once("../includes/header.php");
?>


<section>
  <div class="container" id="myWizard">
    <div class="row">
      <div class="col-xs-10 col-md-10">
        <h3><span class="glyphicon glyphicon-lock"></span>&nbsp;Secure Checkout</h3>
      </div>

      <div class="col-xs-2 col-md-2 pull-right"><img
          src="https://trustsealinfo.websecurity.norton.com/images/vseal.gif"></div>
    </div>
    <hr>
    <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1"
        aria-valuemax="4" style="width: 25%;">
        Step 1 of 4
      </div>
    </div>
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav nav-pills nav-wizard">
          <li class="active">
            <a class="hidden-xs" href="#step1" data-toggle="tab" data-step="1">1. Details</a>
            <a class="visible-xs" href="#step1" data-toggle="tab" data-step="1">1.</a>
            <div class="nav-arrow"></div>
          </li>
          <li class="disabled">
            <div class="nav-wedge"></div>
            <a class="hidden-xs" href="#step2" data-toggle="tab" data-step="2">2. Shipping</a>
            <a class="visible-xs" href="#step2" data-toggle="tab" data-step="2">2.</a>
            <div class="nav-arrow"></div>
          </li>
          <li class="disabled">
            <div class="nav-wedge"></div>
            <a class="hidden-xs" href="#step3" data-toggle="tab" data-step="3">3. Payment</a>
            <a class="visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
            <div class="nav-arrow"></div>
          </li>
          <li class="disabled">
            <div class="nav-wedge"></div>
            <a class="hidden-xs" href="#step4" data-toggle="tab" data-step="4">4. Review</a>
            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="step1">
        <h3>1. Details</h3>
        <div class="well">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="form-group ">
                <label>Email</label>
                <input class="form-control input-lg" placeholder="Email">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input class="form-control input-lg">
              </div>
            </div>
            <div class="col-xs-6 col-md-6 pull-right">
              <div class="form-group">
                <label>Last Name</label>
                <input class="form-control input-lg">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-13">
              <div class="form-group">
                <label>Address</label>
                <input class="form-control input-lg">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-7 col-md-7">
              <div class="form-group">
                <label>Suburb</label>
                <input class="form-control input-lg">
              </div>
            </div>
            <div class="col-xs-5 col-md-5 pull-right">
              <div class="form-group">
                <label>Postcode</label>
                <input class="form-control input-lg">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-7 col-md-7">
              <div class="form-group">
                <label>State</label>
                <select id="billing:region_id" name="billing[region_id]" title="State/Province"
                  class="form-control  input-lg validate-select required-entry" defaultvalue="">
                  <option value="">Please select region, state or province</option>
                  <option value="485">Australia Capital Territory</option>
                  <option value="486">New South Wales</option>
                  <option value="487">Northern Territory</option>
                  <option value="488">Queensland</option>
                  <option value="489">South Australia</option>
                  <option value="490">Tasmania</option>
                  <option value="491">Victoria</option>
                  <option value="492">Western Australia</option>
                </select>
              </div>
            </div>
            <div class="col-xs-5 col-md-5 pull-right">
              <div class="form-group">
                <label>Phone</label>
                <input type="tel" class="form-control input-lg" placeholder="(  ) ">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block next" type="submit">Continue&nbsp;<span
                  class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="step2">
        <h3>2. Shipping</h3>
        <div class="well">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <h3>Shipping To</h3>
              <address>
                <strong id="customer-name"></strong><br>
                <div id="address-line1"></div>
                <div id="address-line2"></div>
                <abbr title="Phone">P:</abbr> ( )
                <a href="mailto:#"></a>
              </address>
            </div>
          </div>
          <div>
            <dl class="sp-methods">
              <dt>Express Shipping</dt>
              <dd>
                <ul>
                  <li>
                    <input name="shipping_method" type="radio" value="flatrate2_flatrate2"
                      id="s_method_flatrate2_flatrate2" class="radio">
                    <label for="s_method_flatrate2_flatrate2">1-2 Business Days <span class="price">$14.95</span>
                    </label>
                  </li>
                </ul>
              </dd>
              <dt>Standard Shipping </dt>
              <dd>
                <ul>
                  <li>
                    <input name="shipping_method" type="radio" value="flatrate_flatrate" id="s_method_flatrate_flatrate"
                      class="radio">
                    <label for="s_method_flatrate_flatrate">2-4 Business Days <span class="price">$9.95</span> </label>
                  </li>
                </ul>
              </dd>
            </dl>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <p>It is our priority to deliver your order as quickly as possible, which is why we offer same day
                dispatch on orders placed before 12:00pm AEST Monday to Friday.<br>
                Any order placed after 12:00pm AEST or on a weekend will be dispatched the next business day.</p>
            </div>
          </div>
          <div class="btn-group btn-group-justified" role="group" aria-label="">
            <div class="btn-group btn-group-lg" role="group" aria-label="">
              <button class="btn btn-default back" type="button"><span
                  class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></button>

            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="">
              <button class="btn btn-primary btn-lg btn-block next" type="submit">Continue&nbsp;<span
                  class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="step3">
        <div class="row">
          <div class="panel panel-default credit-card-box">
            <div class="panel-heading display-table">
              <div class="row display-tr">
                <h3 class="panel-title display-td">Payment Details</h3>
                <div class="display-td">
                  <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form role="form" id="payment-form">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="cardNumber">CARD NUMBER</label>
                      <div class="input-group">
                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number"
                          autocomplete="cc-number" required="" autofocus="">
                        <span class="input-group-addon">
                          <i class="fa fa-credit-card"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-7 col-md-7">
                    <div class="form-group">
                      <label for="cardExpiry">
                        <span class="hidden-xs">EXPIRATION</span>
                        <span class="visible-xs-inline">EXP</span> DATE
                      </label>
                      <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"
                        autocomplete="cc-exp" required="">
                    </div>
                  </div>
                  <div class="col-xs-5 col-md-5 pull-right">
                    <div class="form-group">
                      <label for="cardCVC">CV CODE</label>
                      <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc"
                        required="">
                    </div>
                  </div>
                </div>
                <div class="btn-group btn-group-justified" role="group" aria-label="">
                  <div class="btn-group btn-group-lg" role="group" aria-label="">
                    <button class="btn btn-default back" type="button">Back</button>

                  </div>
                  <div class="btn-group btn-group-lg" role="group" aria-label="">
                    <button class="btn btn-primary btn-lg btn-block next" type="submit">Continue</button>
                  </div>
                </div>
                <div class="row" style="display:none;">
                  <div class="col-xs-12">
                    <p class="payment-errors"></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="step4">
        <div class="well">
          <h3>4. Review Order</h3> Add another almost done step here..
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <table class="table">
                <colgroup>
                  <col>
                  <col width="1">
                  <col width="1">
                </colgroup>
                <thead>
                  <tr>
                    <th class="name">Product Name</th>
                    <th class="qty">Qty</th>
                    <th class="total">Subtotal</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <td style="" class="a-right" colspan="2">
                      Tax </td>
                    <td style="" class="a-right"><span class="price">$3.18</span></td>
                  </tr>
                  <tr>
                    <td style="" class="a-right" colspan="2">
                      Subtotal </td>
                    <td style="" class="a-right">
                      <span class="price">$18.18</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="" class="a-right" colspan="2">
                      Shipping &amp; Handling (Express Shipping - 1-2 Business Days) </td>
                    <td style="" class="a-right">
                      <span class="price">$14.95</span>
                    </td>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>
                      <h3 class="product-name">Hulk Singlet Black </h3>
                      <dl class="item-options">
                        <dt>Size</dt>
                        <dd>M </dd>
                      </dl>
                    </td>
                    <td class="a-center">1</td>
                    <td>
                      <span class="cart-price">
                        <span class="price">$20.00</span> </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="form-group ">
                <label>Gift Cards</label>
                <input class="form-control input-lg" placeholder="XXXXX-XXXX-XXXXX">
                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="inputError2Status" class="sr-only">(error)</span>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="form-group">
                <label>Sign up for Newsletter</label>
                <input type="checkbox">
              </div>
            </div>
          </div>
          <div class="btn-group btn-group-justified" role="group" aria-label="">
            <div class="btn-group btn-group-lg" role="group" aria-label="">
              <button class="btn btn-default back" type="button">Back</button>

            </div>
            <div class="btn-group btn-group-lg" role="group" aria-label="">
              <button class="btn btn-success next" type="submit">Place Order</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div id="push"></div>
</section>

<!-- Footer CTA End -->
<?php 
include_once("../includes/footer.php");
?>

<script type="text/javascript">