@extends('layout')
@section('content')


     <div class="row">

        <?php foreach ($all_category_show as $v_category_show) {
        
         ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100"> 
                        <div class="single-post post-style-1">

                            <div class="blog-image"><a href="{{URL::to('/category_by_feture/'.$v_category_show->category_id)}}"><img src="{{URL::to($v_category_show->category_image)}}"alt="Blog Image"></a></div>

                            <!-- <a class="avatar" href="#"><img src="{{URL::to('frontend/images/icons8-team-355979.jpg')}}" alt="Profile Image"></a> -->

                            <div class="blog-info">

                                <h4 class="title"><a href="{{URL::to('/category_by_feture/'.$v_category_show->category_id)}}">{{$v_category_show->category_name}}</b></a></h4>
                                
                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i></a></li>
                                    <li><a href="#"><i class="ion-eye"></i></a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
<?php } ?>


    


             




            </div><!-- row -->

            <a class="load-more-btn" href="{{}}"><b>LOAD MORE</b></a>

            @endsection