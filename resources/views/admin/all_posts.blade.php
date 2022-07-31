@extends('admin_layout')
@section('admin_content')



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           ALL Post List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Post Id</th>
                                        <th>Author Name</th>
                                        <th>Category Name</th>
                                        <th>post Title</th>
                                        
                                         <th>Image</th>
                                        <th>post Body</th>
                                       
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>

                                @foreach($all_post as $v_post)

                                <tbody>


                                    <tr class="odd gradeX">
                                        <td>{{ $v_post->post_id }}</td>
                                        <td>{{ $v_post->author_name }}</td>
                                        <td>{{ $v_post->category_name }}</td>
                                        <td>{{ $v_post->post_title }}</td>

                                        <td><img src="{{URL::to($v_post->post_image)}}" style="height: 80px; width: 200px;"></td>

                                        <td>{{ $v_post->post_body }}</td>

                                        


                                        <td class="center">
									@if($v_post->publication_status==1)
									<span class="label label-success">
                                        Active</span>
                                        @else
                                        <span class="label label-danger">
                                        UNActive</span>
								
										@endif
									</td>



										<td class="center">


                                    @if($v_post->publication_status==1)

									<a class="btn btn-danger glyphicon glyphicon-thumbs-down" href="{{URL::to('/unactive_post/'.$v_post->post_id)}}"></a>


                                    @else
                                    <a class="btn btn-info glyphicon glyphicon-thumbs-up" href="{{URL::to('/active_post/'.$v_post->post_id)}}"></a>

                                    @endif



                                    <a class="btn btn-success glyphicon glyphicon-edit" href="{{URL::to('/edit-post/'.$v_post->post_id)}}"></a>

                                    <a class="btn btn-danger glyphicon glyphicon-trash" href="{{URL::to('/delate-post/'.$v_post->post_id)}}" id="delete"> </a>
                                   
                                    

                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>


                                @endforeach
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





@endsection