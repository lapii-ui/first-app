@include('partials._style-include')
<link href="/css/frontend.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-fixed-top nav-color">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed color-white" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand color-white" href="#">You Shop Name</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav align-middle navbar-right">
          <li class="dropdown">
            <a href="#" class="color-white" role="button"> 
                <span class="glyphicon glyphicon-shopping-cart"></span>
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid padding-30">
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-9 remove-pd-left">
            <div class="back-custom" style="min-height: 450px">
                <div class="form-inline title-filter">
                    <span class="btn-create-new dosis txt-bold txt-green"><i class="fa fa-plus"></i> Create New Items</span>
                    <span class="right-custom">
                        <input type="search" class="form-control dosis round-input" placeholder="search for items ...">
                        <a class="btn-circle text-mute"><i class="fa fa-search"></i></a>
                    </span>
                </div>
                <div class="flex margin-10">
                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>

                    <div class="item-block">
                      <div class="image-item thumbnail">
                        <img src="images/icon/coffee.png" class="portrait" alt="">
                      </div>
                      <label for="name" class="dosis txt-bold">Ice latte</label>
                      <br>
                      <label for="price" class="dosis">price : $2.50</label>
                    </div>
                </div>
            </div>

            <div class="flex">
              <div class="category-block remove-mg-left">
                <div class="icon-category"><i class="fa fa-mug-hot fa-2x"></i></div>
                <label for="title" class="dosis txt-bold">Coffee</label>
              </div>
              <div class="category-block">
                <div class="icon-category"><i class="fa fa-beer fa-2x"></i></div>
                <label for="title" class="dosis txt-bold">Soft Drinks</label>
              </div>
              <div class="category-block">
                <div class="icon-category"><i class="fa fa-beer fa-2x"></i></div>
                <label for="title" class="dosis txt-bold">Soft Drinks</label>
              </div>
              <div class="category-block">
                <div class="icon-category"><i class="fa fa-beer fa-2x"></i></div>
                <label for="title" class="dosis txt-bold">Soft Drinks</label>
              </div>
              <div class="category-block remove-mg-right">
                <div class="icon-category"><i class="fa fa-beer fa-2x"></i></div>
                <label for="title" class="dosis txt-bold">Soft Drinks</label>
              </div>
            </div>

            <div class="flex right-custom">
              <button class="btn-action cl-red dosis">Cancel Order</button>
              <button class="btn-action cl-green dosis">Hold Order</button>
            </div>
        </div>
        
        <div class="col-md-3 remove-pd-right">
            <div class="back-custom" style="min-height: 525px">
                <label for="payment-label" class="payment-label title-filter dosis">CheckOut</label>
                <table class="table-default">
                  <thead>
                    <tr>
                      <th class="dosis"></th>
                      <th class="dosis">NAME</th>
                      <th class="text-center dosis">QTY</th>
                      <th class="text-center dosis">PRICE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="dosis txt-red"><i class="fa fa-trash"</td>
                      <td class="dosis">Ice latte (M)</td>
                      <td class="text-center dosis">
                        <i class="fa fa-minus-circle txt-green"></i>
                        <span class="qty-input">2</span>
                        <i class="fa fa-plus-circle txt-green"></i>
                      </td>
                      <td class="text-center dosis">$5.00</td>
                    </tr>
                  </tbody>
                </table>

                <div class="action-payment">
                  <div class="action-list flex right-custom">
                    <a href="#" class="btn-icon btn-seperate"><i class="fas fa-funnel-dollar"></i></a>
                    <a href="#" class="btn-icon btn-move"><i class="fas fa-exchange-alt"></i></a>
                    <a href="#" class="btn-icon btn-barcode text-mute"><i class="fas fa-barcode"></i></a>
                  </div>
                  <div class="title-payment">
                    <div>
                      <label for="" class="dosis">Sub Total</label>
                      <span class="right-custom dosis txt-bold">$5.00</span>
                    </div>
                    <div>
                      <label for="" class="dosis">Discount</label>
                      <label for="" class="dosis">( 10% )</label>
                      <span class="right-custom dosis txt-bold">$0.50</span>
                    </div>
                    <div>
                      <label for="" class="dosis txt-bold">Total</label>
                      <label for="" class="dosis">( R18,000 )</label>
                      <span class="right-custom dosis txt-bold">$4.80</span>
                    </div>
                  </div>
                </div>
            </div>

            <button class="btn-action btn-block nav-color color-white dosis remove-mg top-14">Pay Now</button>
        </div>

    </div>
</div>

@include('partials._script-include')