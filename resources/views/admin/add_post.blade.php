


@extends('admin_layout')
@section('admin_content')






            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           ADD Post
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">




                                    <form role="form" action="{{('/save-post')}}" method="post" enctype="multipart/form-data">

                                    	{{csrf_field()}}


                                    	  <div class="form-group">
                                            <label>Author Name</label>
                                            <input class="form-control" type="text" name="author_name" required="">
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>post Title</label>
                                            <input class="form-control" type="text" name="post_title" required="">
                                            
                                        </div>



                                    <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" name="category_id">
                                                 <?php 

                                          $all_published_category=DB::table('tbl_category')
                                                        ->where('publication_status',1)
                                                        ->get();

                                          foreach($all_published_category as $v_published_category){
                                            ?>
                                                <option value="{{$v_published_category->category_id}}">{{$v_published_category->category_name}}</option>
                                                <?php } ?>
                                               
                                            </select>
                                        </div>


                                     <div class="control-group">
                              <label class="control-label" for="fileInput">Post Image</label>
                              <div class="controls">
                                <input class="input-file uniform_on" name="post_image" id="fileInput" type="file" required="">
                              </div>
                            </div> 


                                <div class="form-group">
                                            <label>Post Body</label>
                                            <textarea class="form-control" rows="3" name="post_body"></textarea>
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