@extends('cms.parent')


@section('title','City')
@section('page-big-title','Edit City')
@section('page-main-title','Cities')
@section('page-sub-title','Edit')



@section('styles')

@endsection



@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit City</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          @if ($errors->any())
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            @foreach ($errors->all() as  $e)
              <li>{{$e}}</li>
            @endforeach
          </div>
          @endif
          
        @if (session()->has('message'))
          <div class="alert alert-{{session('message_type')}} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            {{session('message')}}
          </div>
          @endif
          <form method="POST" action="{{route('cities.update',$city->id)}}" >
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="city">City name</label>
                <input type="text" class="form-control" @if(old('name')) value="{{old('name')}}" @else value="{{$city->name}}" @endif name="name" id="name" placeholder="Enter City Name">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection


@section('scripts')

@endsection