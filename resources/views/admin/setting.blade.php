  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Settings')

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Settings
          </h1>

      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="box box-primary">
                      <div class="box-header">
                          <h3 class="box-title">Quick Example</h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <form role="form" action="{{route('admin.setting.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="box-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Id</label>
                                  <input type="text" name="id" class="form-control" value="{{$data->id}}">
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
                                  <label for="exampleInputEmail1">Company</label>
                                  <input type="text" name="company" class="form-control" value="{{$data->company}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Adress</label>
                                  <input type="text" name="address" class="form-control" value="{{$data->address}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Fax</label>
                                  <input type="text" name="fax" class="form-control" value="{{$data->fax}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="text" name="email" class="form-control" value="{{$data->email}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">SMTP Server</label>
                                  <input type="text" name="smtpserver" class="form-control" value="{{$data->smtpserver}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">SMTP Password</label>
                                  <input type="text" name="smtppassword" class="form-control" value="{{$data->smtppassword}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">SMTP Port</label>
                                  <input type="text" name="smtpport" class="form-control" value="{{$data->smtpport}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Facebook</label>
                                  <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Instagram</label>
                                  <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Twitter</label>
                                  <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Youtube</label>
                                  <input type="text" name="youtube" class="form-control" value="{{$data->youtube}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">About Us</label>
                                  <input type="text" name="aboutus" class="form-control" value="{{$data->aboutus}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Contact</label>
                                  <input type="text" name="contact" class="form-control" value="{{$data->contact}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">References</label>
                                  <input type="text" name="references" class="form-control" value="{{$data->references}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">Icon</label>
                                  <input type="file" id="exampleInputFile" name="image">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Status</label>
                                  <select name="status" class="form-control">
                                      <option value="{{$data->status}}" selected>{{$data->status}}</option>
                                      <option value="true">True</option>
                                      <option value="false">False</option>
                                  </select>
                              </div>
                          </div><!-- /.box-body -->

                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </form>
                  </div><!-- /.box -->
              </div>
      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
