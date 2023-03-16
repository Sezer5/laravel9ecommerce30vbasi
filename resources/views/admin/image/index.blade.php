<!-- resources/views/child.blade.php -->

@extends('layouts.adminwindow')

@section('title', 'Image List')

@section('content')
    <h2>{{$product->title}}</h2>
    <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" class="custom-file-input form-control" name="image">
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
          <!-- Default box -->
          <div class="row">

                  <div class="col-md-6">
                      <div class="box">
                          <table class="table table-striped table-bordered">
                              <tbody>
                                  <tr>
                                      <th style="width: 10px">Id</th>
                                      <th>Title</th>
                                      <th>Image</th>
                                      <th>Update</th>
                                      <th>Delete</th>
                                  </tr>
                                  @foreach($images as $rs)
                                  <tr>
                                      <td>{{$rs->id}}</td>
                                      <td>{{$rs->title}}</td>
                                      @if($rs->image)
                                      <td><img src="{{Storage::url($rs->image)}}" style="width:40px;"></td>
                                      @endif
                                      <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}">Delete</a></td>


                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div><!-- /.box -->
                  </div>
              </div><!-- /.box-body -->

@endsection
