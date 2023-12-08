@extends('dizayn.app')

@section('title')
 Clients
@endsection

@section('klients')


@if($errors->any())
  @foreach($errors->all() as $sehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$sehv}}</strong>
    </div>
  @endforeach
@endif

@isset($cdelete_id)
<div class="alert alert-warning text-center" role="alert">
  <strong>Klienti silməyə əminsizmi?</strong>
</div>
<a href="{{route('cdelete2', $cdelete_id)}}"><Button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Hə"><i class="ti-check f-14"></i></button></a>
<a href="{{route('klientss')}}"><Button class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Yox"><i class="ti-close f-14"></i></button></a>
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


@isset($ceditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Clients Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('cupdate')}}" enctype="multipart/form-data">
                      @csrf
                        <input type="hidden" name="id" value="{{$ceditdata->id}}"><br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ad:</label>
                            <div class="col-sm-12">
                              <input type="text" name="name" class="form-control form-control-round" value="{{$ceditdata->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Soyad:</label>
                            <div class="col-sm-12">
                              <input type="text" name="surename" class="form-control form-control-round" value="{{$ceditdata->surename}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefon:</label>
                            <div class="col-sm-12">
                              <input type="tel" name="tel" class="form-control form-control-round" value="{{$ceditdata->tel}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-12">
                              <input type="email" name="email" class="form-control form-control-round" value="{{$ceditdata->email}}"><br>
                              <img style="height:75px; width:85px;" src="{{url($ceditdata->image)}}"><br><br>
                              <input type="file" name="image" value="{{$ceditdata->image}}"><br><br>
                              <button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                              <a href="{{route('klientss')}}"><button type="button" class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Imtina"><i class="ti-close f-14"></i></button></a>
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


@empty($ceditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Clients Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('routecinsert')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ad:</label>
                            <div class="col-sm-12">
                              <input type="text" name="name" class="form-control form-control-round" placeholder="Adınızı daxil edin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Soyad:</label>
                            <div class="col-sm-12">
                              <input type="text" name="surename" class="form-control form-control-round" placeholder="Soyadınızı daxil edin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefon:</label>
                            <div class="col-sm-12">
                              <input type="tel" name="tel" class="form-control form-control-round"  placeholder="+994 50 760 67 89">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-12">
                              <input type="email" name="email" class="form-control form-control-round" placeholder="Emailinizi daxil edin"><br>
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
                        <h5>Clients Table</h5>
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
                                        <th>Ad:</th>
                                        <th>Soyad:</th>
                                        <th>Telefon:</th>
                                        <th>Email:</th>
                                        <th>Tarix:</th>
                                        <th>Şəkil:</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($cdata as $i=>$cinfo)
                                    <tr>
                                        <th scope="row">{{$i+=1}}</th>
                                        <td>{{$cinfo->name}}</td>
                                        <td>{{$cinfo->surename}}</td>
                                        <td>{{$cinfo->tel}}</td>
                                        <td>{{$cinfo->email}}</td>
                                        <td>{{$cinfo->created_at}}</td>
                                        <td><img style="height:75px; width:85px;" src="{{url($cinfo->image)}}"></td>
                                        <td><a href="{{route('cdelete', $cinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Sil"><i class="ti-trash f-14"></i></button></a></td>
                                        <td><a href="{{route('cedit', $cinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-success btn-sm" title="Redaktə et"><i class="ti-pencil-alt f-14"></i></button></a></td>
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