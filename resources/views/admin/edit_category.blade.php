


@extends('admin_layout')
@section('admin_content')






            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">




                                    <form role="form" action="{{url('/update-category',$edit_category_info->category_id)}}" method="post" enctype="multipart/form-data">

                                    	{{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="category_name"  value="{{$edit_category_info->category_name }}" required="">
                                            
                                        </div>

                                   
                                      
                                       
                                        <div class="control-group">
                              <label class="control-label" for="fileInput">category Image</label>
                              <div class="controls">
                                <input class="input-file uniform_on" name="category_image" id="fileInput" type="file"  required="">
                                {{ $edit_category_info->category_image }}
                              </div>
                            </div> 
                                       

                                         <div class="form-group">
                                            
                                           
                                        </div>

                                     
                         
                                      
                                        <button type="submit" class="btn btn-success btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-danger btn btn-default">Reset </button>
                                       
                                    </form>




                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @endsection