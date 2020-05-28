@extends('layouts.base')

@section('content')
<div class="container-fluid container-under uploader">
  <div class="row">
    <div class="col-sm-10 offset-sm-1">
      <div class="panel panel-primary">
        <div class="panel-body">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
          @endif
          <form action="{{ route('image.upload.post') }}" class="d-flex justify-content-center" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div>
                  <input type="file" name="image" class="form-control">
              </div>
              <div>
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
            </div>
          </form>
          <div class=" container container-under d-flex flex-wrap justify-content-around">
            @forelse ($uploads as $upload)
              <div class="card">
                <img class="card-img-top" src="{{asset('thumbnail/' . $upload->thumbnail)}}" alt="img: {{$upload->full}}">
                <div class="card-body">
                  <h5 class="card-title">Title :{{$upload->full}}</h5>
                  <a href="../images/{{$upload->full}}"  download="{{$upload->full}}" class="btn btn-primary w-100">Get Full res</a>
                  <a href="./thumbnail/{{$upload->thumbnail}}"  download="{{$upload->thumbnail}}" class="btn btn-primary w-100 mtb">Get thumbnail</a>
                  <form action="{{ route('upload.destroy', ['upload' => $upload->id])}}" method="post" onclick="return confirm('{{$upload->full}} will be remove from database. Confirm?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                  </form>
                </div>
              </div>
            @empty
            <div class="nothing-here">
              <h4>There's nothing here</h4>
            </div>
            @endforelse
          </div>
          {{ $uploads->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
