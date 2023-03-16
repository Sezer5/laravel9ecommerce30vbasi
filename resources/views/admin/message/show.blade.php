  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Show Product :'.$data->title)

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Show {{$data->subject}}
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
              <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                      <div class="box-header">
                          <h3 class="box-title">Quick Example</h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <table class="table table-stripped table-bordered">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Subject</th>
                                  <th>Message</th>
                                  <th>Status</th>
                                  <th>Admin Note</th>
                                  <th>Send</th>

                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>{{$data->id}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->email}}</td>
                                  <td>{{$data->phone}}</td>
                                  <td>{{$data->subject}}</td>
                                  <td>{{$data->message}}</td>
                                  <td>{{$data->status}}</td>
                                  <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                      @csrf
                                  <td><textarea name="note" id="" cols="30" rows="10">{{$data->note}}</textarea></td>
                                  <td><button type="submit" class="btn btn-success">Send</button></td>
                                  </form>
                              </tr>
                          </tbody>
                      </table>

                  </div><!-- /.box -->
              </div>
          </div>

      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
