@extends('dizayn.app')

@section( 'title')
 Xerc
@endsection

@section('xerc')

@if($errors->any())
  @foreach($errors->all() as $xsehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$xsehv}}</strong>
    </div>
  @endforeach
@endif
 

@isset($xdelete_id)
  <div class="alert alert-warning text-center" role="alert">
    <strong>Xərci silməyə əminsizmi?</strong>
  </div> 
    <a href="{{route('xdelete2' ,$xdelete_id)}}"><button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Hə"><i class="ti-check f-14"></i></button></a>
    <a href="{{route('xarcc')}}"><button class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Yox"><i class="ti-close f-14"></i></button></a> 
@endisset


@if(session('mesaj1'))
  <div class="alert alert-success text-center" role="alert">
    <strong>{{session('mesaj1')}}</strong>
  </div>
@endif


@if(session('mesaj2'))
  <div class="alert alert-success text-center" role="alert">
    <strong>{{session('mesaj2')}}</strong>
  </div>
@endif


@isset($xeditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Xərc Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('xupdate')}}">
                      @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Təyinat:</label>
                            <div class="col-sm-12">
                              <input type="text" name="appointment" class="form-control form-control-round" value="{{$xeditdata->appointment}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Məbləğ:</label>
                            <div class="col-sm-12">
                              <input type="text" name="amount" class="form-control form-control-round" value="{{$xeditdata->amount}}">
                              <input type="hidden" name="id" value="{{$xeditdata->id}}"><br>
                              <button type="submit" class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                              <a href="{{route('xarcc')}}"><button type="button" class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Imtina"><i class="ti-close f-14"></i></button></a>
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


@empty($xeditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Xərc Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('routexinsert')}}">
                      @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Təyinat:</label>
                            <div class="col-sm-12">
                              <input type="text" name="appointment" class="form-control form-control-round" placeholder="Adresi daxil edin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Məbləğ:</label>
                            <div class="col-sm-12">
                              <input type="text" name="amount" class="form-control form-control-round" placeholder="Məbləği daxil edin"><br>
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
                        <h5>Xərc Table</h5>
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
                                        <th>Təyinat:</th>
                                        <th>Məbləğ:</th>
                                        <th>Tarix:</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($xdata as $i=>$xinfo)
                                    <tr>
                                        <th scope="row">{{$i+=1}}</th>
                                        <td>{{$xinfo->appointment}}</td>
                                        <td>{{$xinfo->amount}} Azn</td>
                                        <td>{{$xinfo->created_at}}</td>
                                        <td><a href="{{route('xdelete', $xinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Sil"><i class="ti-trash f-14"></i></button></a></td>
                                        <td><a href="{{route('xedit', $xinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-success btn-sm" title="Redaktə et"><i class="ti-pencil-alt f-14"></i></button></a></td>
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