@extends('layout')
@section('content')


     <div class="row">

        <?php foreach ($category_by_feture as $v_category_by_feture) {
        
         ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100"> 
                        <div class="single-post post-style-1">

                            <div class="blog-image"><a href="{{URL::to('/view-details/'.$v_category_by_feture->post_id)}}"><img src="{{URL::to($v_category_by_feture->post_image)}}"alt="Blog Image"></a></div>

                            <!-- <a class="avatar" href="#"><img src="{{URL::to('frontend/images/icons8-team-355979.jpg')}}" alt="Profile Image"></a> -->

                            <div class="blog-info">

                                <h4 class="title"><a href="{{URL::to('/view-details/'.$v_category_by_feture->post_id)}}">{{$v_category_by_feture->post_title}}</b></a></h4>
                                
                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
<?php } ?>


    


             




            </div><!-- row -->

            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

            @endsection