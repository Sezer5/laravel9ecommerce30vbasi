  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Product List')
  @section('head')
      <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
  @endsection
  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Create Product
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">

          <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="box box-primary">
                      <div class="box-header">
                          <h3 class="box-title">Quick Example</h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="box-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Parent Product</label>
                                  <select class="form-control" name="category_id">
                                      @foreach($data as $rs)
                                      <option value="{{$rs->id}}">{{$rs->title}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" name="title" class="form-control" placeholder="Enter title">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Keywords</label>
                                  <input type="text" name="keywords" class="form-control" placeholder="Enter keywords">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Descriptions</label>
                                  <input type="text" name="description" class="form-control" placeholder="Enter description">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Detail</label>

                                  <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
                                  <script>
                                      ClassicEditor
                                          .create( document.querySelector( '#detail' ) )
                                          .then( editor => {
                                              console.log( editor );
                                          } )
                                          .catch( error => {
                                              console.error( error );
                                          } );
                                  </script>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Price</label>
                                  <input type="text" name="price" class="form-control" placeholder="Enter price">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Quantity</label>
                                  <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Minimum Quantity</label>
                                  <input type="text" name="minquantity" class="form-control" placeholder="Enter Minimum Quantity">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Tax</label>
                                  <input type="text" name="tax" class="form-control" placeholder="Enter tax">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Status</label>
                                  <select name="status" class="form-control">
                                      <option value="True">True</option>
                                      <option value="False">False</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <input type="file" id="exampleInputFile" class="custom-file-input form-control" name="image">
                              </div>
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                  </div><!-- /.box -->
              </div>
          </div>

      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
