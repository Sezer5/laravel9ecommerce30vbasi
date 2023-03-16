  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Edit Product :'.$data->title)

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Edit {{$data->title}}
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
                      <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="box-body">
                             <div class="form-group">
                                  <label for="exampleInputEmail1">Product Category</label>
                                  <select class="form-control" name="category_id">
                                      @foreach($datalist as $rs)
                                      <option value="{{$rs->id}}">{{$rs->title}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" name="title" class="form-control" value="{{$data->title}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Keywords</label>
                                  <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Descriptions</label>
                                  <input type="text" name="description" class="form-control" value="{{$data->description}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Descriptions</label>
                                  <input type="text" name="description" class="form-control" value="{{$data->description}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Detail</label>
                                  <input type="text" name="detail" class="form-control" value="{{$data->detail}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Price</label>
                                  <input type="text" name="price" class="form-control" value="{{$data->price}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Quantity</label>
                                  <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Min. Quantity</label>
                                  <input type="text" name="minquantity" class="form-control" value="{{$data->minquantity}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Status</label>
                                  <select name="status" class="form-control">
                                      <option selected>{{$data->status}}</option>
                                      <option value="True">True</option>
                                      <option value="False">False</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">File input</label>
                                  <input type="file" id="exampleInputFile" name="image">
                              </div>
                          </div><!-- /.box-body -->

                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </form>
                  </div><!-- /.box -->
              </div>
          </div>

      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
