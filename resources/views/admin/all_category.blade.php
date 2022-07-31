@extends('admin_layout')
@section('admin_content')



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ALL Category List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Id</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>

                                @foreach($all_category as $v_category)

                                <tbody>


                                    <tr class="odd gradeX">
                                        <td>{{ $v_category->category_id }}</td>
                                        <td>{{ $v_category->category_name }}</td>
                                        <td><img src="{{URL::to($v_category->category_image)}}" style="height: 80px; width: 200px;"></td>


                                        <td class="center">
									@if($v_category->publication_status==1)
									<span class="label label-success">
                                        Active</span>
                                        @else
                                        <span class="label label-danger">
                                        UNActive</span>
								
										@endif
									</td>



										<td class="center">
                                    @if($v_category->publication_status==1)

									<a class="btn btn-danger glyphicon glyphicon-thumbs-down" href="{{URL::to('/unactive_category/'.$v_category->category_id)}}"></a>
                                    @else
                                    <a class="btn btn-info glyphicon glyphicon-thumbs-up" href="{{URL::to('/active_category/'.$v_category->category_id)}}"></a>
                                    @endif



                                    <a class="btn btn-success glyphicon glyphicon-edit" href="{{URL::to('/edit-category/'.$v_category->category_id)}}"></a>

                                    <a class="btn btn-danger glyphicon glyphicon-trash" href="{{URL::to('/delete-category/'.$v_category->category_id)}}" id="delete"> </a>
                                    

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