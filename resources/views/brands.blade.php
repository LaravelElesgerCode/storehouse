@extends('dizayn.app')

@section('title')
 Brands
@endsection

@section('brand')


@if($errors->any())
  @foreach($errors->all() as $bsehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$bsehv}}</strong>
    </div>
  @endforeach
@endif


@isset($bdelete_id)
  <div class="alert alert-warning text-center" role="alert">
    <strong>Brendi silməyə əminsizmi?</strong>
  </div>
  <a href="{{route('bdelete2',$bdelete_id)}}"><button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Hə"><i class="ti-check f-14"></i></button></a>
  <a href="{{route('brendd')}}"><button class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Yox"><i class="ti-close f-14"></i></button></a>
@endisset


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

@isset($beditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Brands Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('bupdate')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brend:</label>
                            <div class="col-sm-12">
                              <input type="hidden" name="id" value="{{$beditdata->id}}"><br>
                              <input type="text" name="brand" class="form-control form-control-round" value="{{$beditdata->brand}}"><br>
                              Logo:<br>
                              <img style="height:75px; width:85px;" src="{{url($beditdata->image)}}"><br><br>
                              <input type="file" name="image" value="{{$beditdata->image}}"><br><br>
                              <button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                              <a href="{{route('brendd')}}"><button type="button" class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Imtina"><i class="ti-close f-14"></i></button></a>
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
@endisset


@empty($beditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Brands Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('routebinsert')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brend:</label><br><br>
                            <div class="col-sm-12">
                              <input type="text" name="brand" class="form-control form-control-round" placeholder="Brendi daxil edin"><br>
                              Logo:<br>
                              <input type="file" name="image"><br><br>
                              <button type="submit" class="btn waves-effect waves-light btn-grd-primary btn-sm" title="Daxil et"><i class="ti-download f-14"></i></button>
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
@endempty


<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Brands Table</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brend:</th>
                                        <th>Logo:</th>
                                        <th>Tarix:</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($bdata as $i=>$binfo)
                                    <tr>
                                        <th scope="row">{{$i+=1}}</th>
                                        <td>{{$binfo->brand}}</td>
                                        <td><img style="height:75px; width:85px;" src="{{url($binfo->image)}}"></td>
                                        <td>{{$binfo->created_at}}</td>
                                        <td><a href="{{route('bdelete', $binfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Sil"><i class="ti-trash f-14"></i></button></a></td>
                                        <td><a href="{{route('bedit', $binfo->id)}}"><button class="btn waves-effect waves-light btn-grd-success btn-sm" title="Redaktə et"><i class="ti-pencil-alt f-14"></i></button></a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>

@endsection
