@extends('dizayn.app')

@section('title')
Products
@endsection


@section('products')


@if($errors->any())
  @foreach($errors->all() as $psehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$psehv}}</strong>
    </div>
  @endforeach
@endif


@isset($pdelete_id)
<div class="alert alert-warning text-center" role="alert">
  <strong>Məhsulu silməyə əminsizmi?</strong>
</div>
<a href="{{route('pdelete2' ,$pdelete_id)}}"><button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Hə"><i class="ti-check f-14"></i></button></a>
<a href="{{route('productess')}}"><button class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Yox"><i class="ti-close f-14"></i></button></a><br>
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


@isset($peditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Products Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('pupdate')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$peditdata->id}}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Brend:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="brand_id">
                            <option value="">Brendi seçin</option>
                              @foreach($bdata as $brendd)
                                @if($peditdata->brand_id==$brendd->id)
                                  <option selected value="{{$brendd->id}}">{{$brendd->brand}}</option>
                                    @else
                                  <option value="{{$brendd->id}}">{{$brendd->brand}}</option>
                                @endif
                              @endforeach
                          </select>
                        </div>
                      </div><br> 
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Məhsul:</label>
                          <div class="col-sm-12">
                            <input type="text" name="product" class="form-control form-control-round" value="{{$peditdata->product}}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Alış:</label>
                          <div class="col-sm-12">
                            <input type="text" name="purchase" class="form-control form-control-round" value="{{$peditdata->purchase}}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Satış:</label>
                          <div class="col-sm-12">
                            <input type="text" name="sale" class="form-control form-control-round" value="{{$peditdata->sale}}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Miqdar:</label>
                          <div class="col-sm-12">
                            <input type="text" name="amount" class="form-control form-control-round" value="{{$peditdata->amount}}"><br>
                            Şəkil:<br>
                            <img style="height:75px; width:85px;" src="{{url($peditdata->image)}}"><br><br>
                            <input type="file" name="image" value="{{$peditdata->image}}"><br><br>
                            <button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                            <a href="{{route('productess')}}"><button type="button" class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Imtina"><i class="ti-close f-14"></i></button></a>
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


@empty($peditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Products Form</h5>
                </div>
                <div class="card-block">

                    <form method="post" action="{{route('routepinsert')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Brend:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="brand_id">
                            <option value="">Brendi seçin</option>
                              @foreach($bdata as $brendd)
                                <option value="{{$brendd->id}}">{{$brendd->brand}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div><br> 
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Məhsul:</label>
                          <div class="col-sm-12">
                            <input type="text" name="product" class="form-control form-control-round" placeholder="Məhsul adını daxil edin">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Alış:</label>
                          <div class="col-sm-12">
                            <input type="text" name="purchase" class="form-control form-control-round" placeholder="Alış sayını daxil edin">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Satış:</label>
                          <div class="col-sm-12">
                            <input type="text" name="sale" class="form-control form-control-round" placeholder="Satış sayını daxil edin">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Miqdar:</label>
                          <div class="col-sm-12">
                            <input type="text" name="amount" class="form-control form-control-round" placeholder="Miqdarı daxil edin"><br>
                            Şəkil:<br>
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
                      <h5>Statistika</h5>
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
                                      <th>Məhsul sayı:</th>
                                      <th>Ümumi alış:</th>
                                      <th>Ümumi satış:</th>
                                      <th>Ümumi qazanc:</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>{{$psay}}</td>
                                      <td>{{$talish}}</td>
                                      <td>{{$tsatish}}</td>
                                      <td>{{$tqazanc}}</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            
            </div>
        </div>
    </div>
</div>



<div class="pcoded-inner-content">
  <div class="main-body">
      <div class="page-wrapper">
          <div class="page-body">

              <div class="card">
                  <div class="card-header">
                      <h5>Products Tables</h5>
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
                                      <th>Məhsul:</th>
                                      <th>Alış:</th>
                                      <th>Satış:</th>
                                      <th>Miqdar:</th>
                                      <th>Qazanc:</th>
                                      <th>Şəkil:</th>
                                      <th>Tarix:<th>
                                      <th></th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($pdata as $i=>$pinfo)
                                  <tr>
                                      <th scope="row">{{$i+=1}}</th>
                                      <td>{{$pinfo->brand}}</td>
                                      <td>{{$pinfo->product}}</td>
                                      <td>{{$pinfo->purchase}}</td>
                                      <td>{{$pinfo->sale}}</td>
                                      <td>{{$pinfo->amount}}</td>
                                      <td>{{($pinfo->sale - $pinfo->purchase) * $pinfo->amount}}</td>
                                      <td><img style="height:75px; width:85px;" src="{{url($pinfo->image)}}"></td>
                                      <td>{{$pinfo->created_at}}</td>
                                      <td><a href="{{route('pdelete', $pinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Sil"><i class="ti-trash f-14"></i></button></a></td>
                                      <td><a href="{{route('pedit', $pinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-success btn-sm" title="Redaktə et"><i class="ti-pencil-alt f-14"></i></button></a></td>
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