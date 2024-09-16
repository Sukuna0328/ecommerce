{{-- @extends('layouts.app')
@section('content') --}}

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="user-profile__avatar shadow-effect text-center">
        <img class="img-responsive center-block" src="https://i.ytimg.com/vi/87mjZiwjNWA/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCk_fJ-27xGwCyCnCppgJgSUCzgYw" alt="...">
        Joel Malupiton
        <p class="text-muted">Bossing</p>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          User Menu
        </div>
        <div class="panel-body">
          <ul>
            <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Sign Out</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-6">
          
          <!-- User name -->
          <h3 class="user-profile__title">Joel Ravanera</h3>
          
          <!-- User description -->
          <p class="user-profile__desc">
            Vlogger and narrator.
          </p>
          <!-- User URL -->
          <div class="user-profile__url">
            <a href="https://bootdey.com/">Sheeesh,</a>
          </div>
          <!-- User social links -->
          <div class="social">
        
          </div>
        </div>
        <div class="col-sm-6">
          
          <!-- Profile info -->
          <ul class="user-profile__info">
            <li>
              <i class="fa fa-calendar-o"></i> Member for 180 days
            </li>
            <li>
              <i class="fa fa-clock-o"></i> Last seen 2 hours ago
            </li>
            <li>
              <i class="fa fa-eye"></i> 50 profile views
            </li>
          </ul>
        </div>
        <div class="col-sm-12">
          <div class="user-profile__tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#user-profile__portfolio" aria-controls="user-profile__portfolio" role="tab" data-toggle="tab" aria-expanded="true">My Completed</a>
              </li>
              <li role="presentation" class="">
                <a href="#user-profile__shopping-cart" aria-controls="user-profile__shopping-cart" role="tab" data-toggle="tab" aria-expanded="false">To Buy</a>
              </li>
            </ul>



            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="user-profile__portfolio">             
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="" class="text-dark">Quant ruybi shirts </a></h5>
                                <p class="text-muted mb-0">
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                              </p>
                              </div>

                              <div class="portfolio-item-mask__summary">
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">Delivered</span></p>
                              <div class="mt-3">

                                    <p class="text-muted mb-2">Price</p>
                                    <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$500</del></span>$450</h5>
                            </div>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>


                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">Quant ruybi shirts </a></h5>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">Delivered</span></p>
                              </div>
                              <div class="portfolio-item-mask__summary">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$280</del></span>$240</h5>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>


                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ltILMMukKghSHMsLkVh71iOxnN-acLT3BA&s" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">Jag Jeans </a></h5>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">Delivered</span></p>
                              </div>
                              <div class="portfolio-item-mask__summary">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$180</del></span>$40</h5>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>


                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://down-ph.img.susercontent.com/file/10e8ad4e68893a6c445e828a10d15dd9" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">Tshirt White </a></h5>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">Delivered</span></p>
                              </div>
                              <div class="portfolio-item-mask__summary">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$280</del></span>$210</h5>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://down-ph.img.susercontent.com/file/sg-11134201-22100-w2kkby2aj5ive9_tn" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">New York Jag </a></h5>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">delivered</span></p>
                              </div>
                              <div class="portfolio-item-mask__summary">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$280</del></span>$240</h5>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>


                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio__item">
                      <div class="portfolio-item__img">
                        <a href="portfolio-item.html">
                          <img src="https://down-ph.img.susercontent.com/file/ph-11134207-7r98u-lrhevrezx52t2f_tn" class="img-responsive" alt="...">
                          <div class="portfolio-item__mask">
                            <div class="portfolio-item-mask__content">
                              <div class="portfolio-item-mask__title">
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">Mens tshirt (buy1Take1) </a></h5>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                                <p class="mb-0 mt-1">Transaction : <span class="fw-medium">delivered</span></p>
                              </div>
                              <div class="portfolio-item-mask__summary">
                                <p class="text-muted mb-2">Price</p>
                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$200</del></span>$40</h5>
                              </div>
                            </div> <!-- / .portfolio-item-mask__content -->
                          </div> <!-- / .portfolio-item__mask -->
                        </a>
                      </div> <!-- / .portfolio-item__img -->
                    </div> <!-- / .portfolio__item -->
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .tab-pane -->
              <div role="tabpanel" class="tab-pane fade" id="user-profile__shopping-cart">
                <div class="table-responsive">
                  <table class="table table-bordered shopping-cart__table">
                  <thead>
                    <tr>
                      <th>Preview</th>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="js-shop__item">
                      <td>
                        <img class="img-responsive shopping-cart-item__img" src="https://www.bootdey.com/image/50x50/" alt="...">
                      </td>
                      <td>
                        <div class="shopping-cart-item__title">
                          Product Title
                        </div>
                        <div class="shopping-cart-item__desc">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                        </div>
                      </td>
                      <td>$<span class="js-shop-item__price">59.99</span></td>
                      <td>
                        <input type="number" class="js-shop-item__quantity form-control" min="1" max="100" step="1" value="1">
                      </td>
                    </tr>
                    <tr class="js-shop__item">
                      <td>
                        <img class="img-responsive shopping-cart-item__img" src="https://www.bootdey.com/image/50x50/" alt="...">
                      </td>
                      <td>
                        <div class="shopping-cart-item__title">
                          Product Title
                        </div>
                        <div class="shopping-cart-item__desc">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                        </div>
                      </td>
                      <td>$<span class="js-shop-item__price">59.99</span></td>
                      <td>
                        <input type="number" class="js-shop-item__quantity form-control" min="1" max="100" step="1" value="1">
                      </td>
                    </tr>
                    <tr class="js-shop__item">
                      <td>
                        <img class="img-responsive shopping-cart-item__img" src="https://www.bootdey.com/image/50x50/" alt="...">
                      </td>


                      <td>
                        <div class="shopping-cart-item__title">
                          Product Title
                        </div>
                        <div class="shopping-cart-item__desc">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                        </div>
                      </td>
                      <td>$<span class="js-shop-item__price">59.99</span></td>
                      <td>
                        <input type="number" class="js-shop-item__quantity form-control" min="1" max="100" step="1" value="1">
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </div> <!-- / .table-responsive -->
                <ul class="shopping-cart__checkout">
                  <li><strong>Total Price</strong>: $<span class="js-shop__total-price"></span></li>
                  <li><strong>Shipping</strong>: Free</li>
                  <li>
                    <a href="{{route('checkout')}}" class="btn btn-secondary">Proceed to checkout</a>
                  </li>
                </ul>
              </div> <!-- / .tab-pane -->
            </div> <!-- / .tab-content -->
          </div>
        </div>
      </div> <!-- / .row -->
    </div>
  </div> <!-- / .row -->
</div>
{{-- @endsection --}}