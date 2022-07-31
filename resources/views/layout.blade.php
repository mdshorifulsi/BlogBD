<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{asset('frontend/common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/common-css/swiper.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{asset('frontend/front-page-category/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/front-page-category/css/responsive.css')}}" rel="stylesheet">

</head>
<body >

    <header>
        <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo"><img src="{{URL::to('frontend/images/blogs.jpg')}}" alt="Logo Image"></a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/show-category')}}">Categories</a></li>
                <li><a href="{{URL::to('/all-picture')}}">Picture</a></li>
                <!-- <li><a href="">Register</a></li> -->
            </ul><!-- main-menu -->



           <!--  <div class="src-area">
                <form >
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    <input class="src-input" type="text" placeholder="Type of search">
                </form>
            </div> -->




        </div><!-- conatiner -->
    </header>










    <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
            data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
            data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">

              <?php 

              $all_published_category=DB::table('tbl_category')
            ->where('publication_status',1)
            ->get();

              foreach($all_published_category as $v_published_category){
                ?>
                



                <div class="swiper-slide">
                    <a class="slider-category" href="{{URL::to('/category_by_feture/'.$v_published_category->category_id)}}">
                        <div class="blog-image"><img src="{{URL::to($v_published_category->category_image)}}" style="height: 160px; width: 200px;" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>{{$v_published_category->category_name}}</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->


<?php } ?>

            

                
            </div><!-- swiper-wrapper -->

        </div><!-- swiper-container -->

    </div><!-- slider -->










    <section class="blog-area section">
        <div class="container">

           


@yield('content')


        </div><!-- container -->
    </section><!-- section -->












    <footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="footer-section">

                       
                        <ul class="icons">
                            <li><a href="https://www.facebook.com/"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-6 col-md-6">
                        <div class="footer-section">
                        <h4 class="title"><b>CATAGORIES</b></h4>
                          <?php 

              $all_published_category=DB::table('tbl_category')
            ->where('publication_status',1)
            ->get();

              foreach($all_published_category as $v_published_category){
                ?>
                


                            <li class="btn btn-warning"><a href="{{URL::to('/category_by_feture/'.$v_published_category->category_id)}}">{{$v_published_category->category_name}}</a></li>
                       

                    <?php } ?>
                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

            </div><!-- row -->
        </div><!-- container -->
    </footer>


    <!-- SCIPTS -->

    <script src="{{asset('frontend/common-js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{asset('frontend/common-js/tether.min.js')}}"></script>

    <script src="{{asset('frontend/common-js/bootstrap.js')}}"></script>

    <script src="{{asset('frontend/common-js/swiper.js')}}"></script>

    <script src="{{asset('frontend/common-js/scripts.js')}}"></script>

</body>
</html>
