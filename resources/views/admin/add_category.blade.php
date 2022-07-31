


@extends('admin_layout')
@section('admin_content')






            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           ADD Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">




                                    <form role="form" action="{{('/save-category')}}" method="post" enctype="multipart/form-data">

                                    	{{csrf_field()}}

                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="category_name" required="">
                                            
                                        </div>

                                   
                                      
                                       
                                        <div class="control-group">
                              <label class="control-label" for="fileInput">category Image</label>
                              <div class="controls">
                                <input class="input-file uniform_on" name="category_image" id="fileInput" type="file" required="">
                              </div>
                            </div> 
                                       

                                         <div class="form-group">
                                            <label>publication status</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="publication_status" value="1">.
                                            </label>
                                           
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