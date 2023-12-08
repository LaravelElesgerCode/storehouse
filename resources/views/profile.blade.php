@extends('dizayn.app')

@section('title')
 Profile
@endsection

@section('profile')


@if($errors->any())
  @foreach($errors->all() as $bsehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$bsehv}}</strong>
    </div>
  @endforeach
@endif


@if(session('mesaj1'))
  <div class="alert alert-success text-center" role="alert">
    <strong>{{session('mesaj1')}}</strong>
  </div>
@endif

@if(session('mesaj2'))
  <div class="alert alert-danger text-center" role="alert">
    <strong>{{session('mesaj2')}}</strong>
  </div>
@endif


<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Profile Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('profinsert')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto:</label>
                            <div class="col-sm-12">
                                @if(Auth::user()->image)
                                  <img class="d-flex align-self-center img-radius" style="height:100px; width:105px;" src="{{url(Auth::user()->image)}}"><br>
                                 @else
                                  <img class="d-flex align-self-center img-radius" style="height:75px; width:85px;" src="{{url('https://th.bing.com/th?id=OIP.GHGGLYe7gDfZUzF_tElxiQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2')}}">
                                @endif
                              <input type="hidden" name="current_image" value="{{Auth::user()->image}}"><br>
                              <input type="file" name="image"><br><br>
                            </div>

                            <label class="col-sm-2 col-form-label">Ad/soyad:</label>
                              <div class="col-sm-12">
                                <input type="text" name="name" class="form-control form-control-round" value="{{Auth::user()->name}}"><br>
                              </div>
                            <label class="col-sm-2 col-form-label">Email:</label>
                              <div class="col-sm-12">
                                <input type="email" name="email" class="form-control form-control-round" value="{{Auth::user()->email}}"><br>
                              </div>

                            <label class="col-sm-2 col-form-label">Cari parol:</label>
                              <div class="col-sm-12">
                                <input type="password" name="current_password" class="form-control form-control-round"><br>
                              </div>
                            <label class="col-sm-2 col-form-label">Yeni parol:</label>
                              <div class="col-sm-12">
                                <input type="password" name="new_password" class="form-control form-control-round"><br>
                              </div>

                            <label class="col-sm-2 col-form-label">Təkrar parol:</label>
                              <div class="col-sm-12">
                                <input type="password" name="repaet_password" class="form-control form-control-round"><br>
                                <button type="submit" class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
