@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
  <!-- Breadcrumbs -->
  <section class="g-brd-bottom g-brd-gray-light-v4 g-py-20">
    <div class="container">
      <ul class="u-list-inline">
        <li class="list-inline-item g-mr-5">
          <a class="u-link-v5 g-color-text" href="#!">Home</a>
          <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
        </li>
        <li class="list-inline-item g-color-primary">
          <span>Inicio</span>
        </li>
      </ul>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  {{--@include('includes.revolution-slider')--}}

  <!-- Features -->
  <div class="g-brd-bottom g-brd-gray-light-v4">
    <div class="container g-py-30">
      <div class="row justify-content-center">
        <div class="col-md-4 mx-auto g-py-15">
          <!-- Media -->
          <div class="media g-px-50--lg">
            <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
            <div class="media-body">
              <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free Shipping</span>
              <span class="d-block g-color-gray-dark-v4">In 2-3 Days</span>
            </div>
          </div>
          <!-- End Media -->
        </div>

        <div class="col-md-4 mx-auto g-brd-x--md g-brd-gray-light-v3 g-py-15">
          <!-- Media -->
          <div class="media g-px-50--lg">
            <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
            <div class="media-body">
              <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free Returns</span>
              <span class="d-block g-color-gray-dark-v4">No Questions Asked</span>
            </div>
          </div>
          <!-- End Media -->
        </div>

        <!-- Media -->
        <div class="col-md-4 mx-auto g-py-15">
          <div class="media g-px-50--lg">
            <i class="d-flex g-color-black g-font-size-30 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
            <div class="media-body text-left">
              <span class="d-block g-font-weight-500 g-font-size-default text-uppercase">Free 24</span>
              <span class="d-block g-color-gray-dark-v4">Days Storage</span>
            </div>
          </div>
          <!-- End Media -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Features -->

  <!-- Categories -->
  <div class="container g-pt-100 g-pb-70">
    <div class="row g-mx-minus-10">
      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <article class="u-block-hover">
          <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8" src="assets/img-temp/650x850/img1.jpg" alt="Image Description">
          <div class="g-pos-abs g-bottom-30 g-left-30">
            <span class="d-block g-color-black">Collections</span>
            <h2 class="h1 mb-0">Women</h2>
          </div>
          <a class="u-link-v2" href="#!"></a>
        </article>
      </div>

      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <article class="u-block-hover">
          <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8" src="assets/img-temp/650x850/img2.jpg" alt="Image Description">
          <div class="g-pos-abs g-bottom-30 g-left-30">
            <span class="d-block g-color-black">Collections</span>
            <h2 class="h1 mb-0">Children</h2>
          </div>
          <a class="u-link-v2" href="#!"></a>
        </article>
      </div>

      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <article class="u-block-hover">
          <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8" src="assets/img-temp/650x850/img3.jpg" alt="Image Description">
          <div class="g-pos-abs g-bottom-30 g-left-30">
            <span class="d-block g-color-black">Collections</span>
            <h2 class="h1 mb-0">Men</h2>
          </div>
          <a class="u-link-v2" href="#!"></a>
        </article>
      </div>
    </div>
  </div>
  <!-- End Categories -->

  <!-- Products -->
  <div class="container g-pb-100">
    <div class="text-center mx-auto g-max-width-600 g-mb-50">
      <h2 class="g-color-black mb-4">Featured Products</h2>
      <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth – but let's you still live life in style.</p>
    </div>

    <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10"
         data-infinite="true"
         data-slides-show="4"
         data-lazy-load="ondemand"
         data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-45 g-height-45 g-color-gray-dark-v5 g-bg-secondary g-color-white--hover g-bg-primary--hover rounded"
         data-arrow-left-classes="fa fa-angle-left g-left-10"
         data-arrow-right-classes="fa fa-angle-right g-right-10"
         data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-20 text-center">

      @foreach($products as $product)
        <div class="js-slide">
          <div class="g-px-10">
            <!-- Product -->
            <figure class="g-pos-rel g-mb-20">
              <img class="img-fluid" data-lazy="{{ $product->featured_image_url }}" alt="Image Description">

              <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
              </figcaption>
            </figure>

            <div class="media">
              <!-- Product Info -->
              <div class="d-flex flex-column">
                <h4 class="h6 g-color-black mb-1">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                    {{ $product->name }}
                  </a>
                </h4>
                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">{{$product->category->name}}</a>
                <span class="d-block g-color-black g-font-size-17">${{$product->price}}</span>
              </div>
              <!-- End Product Info -->

              <!-- Products Icons -->
              <ul class="list-inline media-body text-right">
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Agregar al carrito">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Ver detalles">
                    <i class="icon-education-045 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle mx-0">
                  <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                     data-toggle="tooltip"
                     data-placement="top"
                     title="Agregar a la lista de deseos">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
              <!-- End Products Icons -->
            </div>
            <!-- End Product -->
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!-- End Products -->

  <!-- Promo Block -->
  <section class="g-bg-secondary g-pos-rel">
    <div class="container g-pt-100 g-pb-70">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-8 col-lg-6 order-md-2 g-mb-30">
          <div class="g-pos-rel">
            <img class="img-fluid w-100" src="assets/img-temp/725x725/img1.png" alt="Image Description">
            <span
                class="u-icon-v1 g-width-85 g-height-85 g-brd-3 g-brd-white g-color-white g-bg-primary g-font-weight-300 g-font-size-22 rounded-circle g-pos-abs g-top-100 g-left-0 g-brd-around">
                  <i class="g-font-style-normal">$60
                    <span class="g-font-size-16">.00</span>
                  </i>
                </span>
          </div>
        </div>

        <div class="col-md-4 order-md-1 g-mb-30">
          <div class="g-mb-30">
            <h1 class="g-color-primary g-font-weight-400 g-font-size-40 mb-0">Leather</h1>
            <h2 class="g-color-dark g-font-weight-300 g-font-size-75 g-line-height-1 mb-4">Gloves</h2>
            <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth.</p>
          </div>

          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 g-mb-70" href="#!">Shop Now</a>

          <!-- Countdown -->
          <div class="text-uppercase">
            <div class="js-countdown u-countdown-v3 g-line-height-1_3 g-color-black"
                 data-end-date="2018/08/20"
                 data-month-format="%m"
                 data-days-format="%D"
                 data-hours-format="%H"
                 data-minutes-format="%M"
                 data-seconds-format="%S">
              <div class="d-inline-block text-center g-mx-15 mb-3">
                <div class="js-cd-days g-color-lightred g-font-weight-500 g-font-size-15">12</div>
                <span class="g-color-gray-dark-v4 g-font-size-11">Days</span>
              </div>

              <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

              <div class="d-inline-block text-center g-mx-15 mb-3">
                <div class="js-cd-hours g-font-weight-500 g-font-size-15">01</div>
                <span class="g-color-gray-dark-v4 g-font-size-11">Hours</span>
              </div>

              <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

              <div class="d-inline-block text-center g-mx-15 mb-3">
                <div class="js-cd-minutes g-font-weight-500 g-font-size-15">52</div>
                <span class="g-color-gray-dark-v4 g-font-size-11">Minutes</span>
              </div>

              <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

              <div class="d-inline-block text-center g-mx-15 mb-3">
                <div class="js-cd-seconds g-font-weight-500 g-font-size-15">52</div>
                <span class="g-color-gray-dark-v4 g-font-size-11">Seconds</span>
              </div>
            </div>
          </div>
          <!-- End Countdown -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Promo Block -->

  <!-- New Arrivals -->
  <section class="container g-py-100">
    <div class="text-center mx-auto g-max-width-600 g-mb-50">
      <h2 class="g-color-black mb-4">New Arrivals</h2>
      <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the earth – but let's you still live life in style.</p>
    </div>

    <div class="row g-mx-minus-10 g-mb-50">
      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img1.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Glasses</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Accessories</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$22.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img2.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Gloves</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Accessories</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img3.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Chukka Shoes</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Footwear</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img4.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Shoes</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Footwear</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Content -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img5.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Sneaker</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Footwear</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Content -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img6.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Sneaker</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Footwear</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img7.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Desk Clock</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Hi-Tech</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img8.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Alarm Clock</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Hi-Tech</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>

      <div class="col-md-6 col-lg-4 g-px-10">
        <!-- Article -->
        <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
          <!-- Article Image -->
          <div class="g-max-width-100 g-mr-15">
            <img class="d-flex w-100" src="assets/img-temp/150x150/img9.jpg" alt="Image Description">
          </div>
          <!-- End Article Image -->

          <!-- Article Info -->
          <div class="media-body align-self-center">
            <h4 class="h5 g-mb-7">
              <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#!">Desk Clock</a>
            </h4>
            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10" href="#!">Hi-Tech</a>
            <!-- End Article Info -->

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-font-size-16">
              <span class="g-color-black g-line-height-1">$55.00</span>
              <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                <li class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Cart"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-finance-100 u-line-icon-pro"></i>
                  </a>
                </li>
                <li class="list-inline-item align-middle">
                  <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#!" title="Add to Wishlist"
                     data-toggle="tooltip"
                     data-placement="top">
                    <i class="icon-medical-022 u-line-icon-pro"></i>
                  </a>
                </li>
              </ul>
            </footer>
            <!-- End Article Footer -->
          </div>
        </article>
        <!-- End Article -->
      </div>
    </div>

    <div class="text-center">
      <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">All New Arrivals</a>
    </div>
  </section>
  <!-- End New Arrivals -->

  <!-- Categories -->
  <div class="container-fluid px-0">
    <div class="row align-items-center no-gutters">
      <div class="col-md-7 col-lg-8 u-block-hover g-bg-size-cover g-min-height-500 g-flex-centered" data-bg-img-src="assets/img-temp/1200x800/img1.jpg">
        <div class="g-flex-centered-item text-right g-pa-50">
          <h2 class="g-color-white g-font-weight-700 g-font-size-50 text-uppercase g-line-height-1 mb-4">Summer
            <br>
            Collection
          </h2>
          <span class="u-link-v5 g-color-black g-color-primary--hover g-font-size-18">Shop Now</span>
        </div>

        <a class="u-link-v2" href="#!"></a>
      </div>

      <div class="col-md-5 col-lg-4 u-block-hover g-bg-size-cover g-min-height-500 g-flex-centered" data-bg-img-src="assets/img/bg/secondary.png">
        <div class="text-center">
          <img class="img-fluid mb-3" src="assets/img-temp/500x320/img1.png" alt="Image Description">
          <h3 class="h5 u-link-v5 g-color-primary--hover g-font-weight-400 mb-3">Sneaker Shoes for Man</h3>
          <span class="g-color-primary g-font-weight-700 g-font-size-20">$45.00</span>
        </div>

        <a class="u-link-v2" href="#!"></a>
      </div>
    </div>
  </div>
  <!-- End Categories -->

  <!-- News -->
  <div class="container g-pt-100 g-pb-70">
    <div class="text-center mx-auto g-max-width-600 g-mb-50">
      <h2 class="g-color-black mb-4">Blog News</h2>
      <p class="lead">Keep in touch with the latest blogs &amp; news.</p>
    </div>

    <div class="row g-mx-minus-10">
      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <!-- Blog Background Overlay Blocks -->
        <article class="u-block-hover">
          <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
            <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img1.jpg" alt="Image Description">
          </div>
          <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
            <div class="u-block-hover__visible g-pa-25">
              <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">sport</span>
              <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#!">24 Hours in Shopping</a>
              </h2>
              <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                By,
                <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
              </h4>
              <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
              <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
            </div>

            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#!">Read
              more</a>
          </div>
        </article>
        <!-- End Blog Background Overlay Blocks -->
      </div>

      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <!-- Blog Background Overlay Blocks -->
        <article class="u-block-hover">
          <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
            <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img2.jpg" alt="Image Description">
          </div>
          <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
            <div class="u-block-hover__visible g-pa-25">
              <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">design</span>
              <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#!">How to Design with Colors</a>
              </h2>
              <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                By,
                <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
              </h4>
              <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
              <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
            </div>

            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#!">Read
              more</a>
          </div>
        </article>
        <!-- End Blog Background Overlay Blocks -->
      </div>

      <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
        <!-- Blog Background Overlay Blocks -->
        <article class="u-block-hover">
          <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
            <img class="d-flex align-items-end u-block-hover__main--mover-down" src="assets/img-temp/650x650/img3.jpg" alt="Image Description">
          </div>
          <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
            <div class="u-block-hover__visible g-pa-25">
              <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">photography</span>
              <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#!">Stunning Woman's Capture</a>
              </h2>
              <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                By,
                <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
              </h4>
              <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
              <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
            </div>

            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30" href="#!">Read
              more</a>
          </div>
        </article>
        <!-- End Blog Background Overlay Blocks -->
      </div>
    </div>
  </div>
  <!-- End News -->
@endsection
