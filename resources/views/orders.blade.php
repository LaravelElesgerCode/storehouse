@extends('dizayn.app')


@section('title')
Orders  
@endsection


@section('orders')


@if($errors->any())
  @foreach($errors->all() as $osehv)
    <div class="alert alert-danger text-center" role="alert">
      <strong>{{$osehv}}</strong>
    </div>
  @endforeach
@endif


@isset($odelete_id)
<div class="alert alert-warning text-center" role="alert">
  <strong>Sifarişi silməyə əminsizmi?</strong>
</div>
<a href="{{route('odelete2' ,$odelete_id)}}"><button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Hə"><i class="ti-check f-14"></i><br></button></a>
<a href="{{route('orderss')}}"><button class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Yox"><i class="ti-close f-14"></i></button></a>
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

@isset($oeditdata)
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Orders Form</h5>
                </div>
                <div class="card-block">
                    <form method="post" action="{{route('oupdate')}}">
                      @csrf
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Müştəri:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="clients_id">
                            <option value="">Müştərini seçin</option>
                              @foreach($cdata as $klientss)
                                @if($oeditdata->clients_id==$klientss->id)
                                 <option selected value="{{$klientss->id}}">{{$klientss->name}} {{$klientss->surename}}</option>
                                 @else
                                 <option value="{{$klientss->id}}">{{$klientss->name}} {{$klientss->surename}}</option>
                                @endif
                              @endforeach
                          </select>
                        </div>
                      </div><br>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Məhsul:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="products_id">
                            <option value="">Məhsulu seçin</option>
                              @foreach($pdata as $prodectss)
                                @if($oeditdata->products_id==$prodectss->id)
                                 <option selected value="{{$prodectss->id}}">{{$prodectss->brand}}/{{$prodectss->product}}/{{$prodectss->amount}}</option>
                                 @else
                                 <option value="{{$prodectss->id}}">{{$prodectss->brand}}/{{$prodectss->product}}/{{$prodectss->amount}}</option>
                                @endif
                              @endforeach
                          </select>
                        </div>
                      </div><br>

                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Miqdar:</label>
                          <div class="col-sm-12">
                            <input type="text" name="quantity" class="form-control form-control-round" value="{{$oeditdata->quantity}}">
                            <input type="hidden" name="id" value="{{$oeditdata->id}}"><br>
                            <button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Yenilə"><i class="ti-reload f-14"></i></button>
                            <a href="{{route('orderss')}}"><button type="button" class="btn waves-effect waves-light btn-grd-warning btn-sm" title="Imtina"><i class="ti-close f-14"></i></button><a>
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


@empty($oeditdata)
<form method="post" action="{{route('routeoinsert')}}">
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Orders Form</h5>
                </div>
                <div class="card-block">

                    <form method="post" action="{{route('routeoinsert')}}">
                      @csrf
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Müştəri:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="clients_id">
                            <option value="">Müştərini seçin</option>
                              @foreach($cdata as $klientss)
                                <option value="{{$klientss->id}}">{{$klientss->name}} {{$klientss->surename}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div><br> 

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Məhsul:</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-round" name="products_id">
                            <option value="">Məhsulu seçin</option>
                              @foreach($pdata as $prodectss)
                                <option value="{{$prodectss->id}}">{{$prodectss->brand}}/{{$prodectss->product}}/{{$prodectss->amount}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div><br>
                    
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Miqdar:</label>
                          <div class="col-sm-12">
                            <input type="text" name="quantity" class="form-control form-control-round" placeholder="Miqdarı daxil edin"><br>
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
                      <h5>Orders Table</h5>
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
                                      <th>Müştəri:</th>
                                      <th>Məhsul:</th>
                                      <th>Miqdar:</th>
                                      <th>Stok:</th>
                                      <th>Tarix:</th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($odata as $i=>$oinfo)
                                  <tr>
                                      <th scope="row">{{$i+=1}}</th>
                                      <td>{{$oinfo->name}} {{$oinfo->surename}}</td>
                                      <td>{{$oinfo->product}}</td>
                                      <td>{{$oinfo->quantity}}</td>
                                      <td>{{$oinfo->amount}}</td>
                                      <td>{{$oinfo->created_at}}</td>
                                      @if($oinfo->tesdiq==0)
                                        <td><a href="{{route('odelete', $oinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Sil"><i class="ti-trash f-14"></i></button></a></td>
                                        <td><a href="{{route('oedit', $oinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-success btn-sm" title="Redaktə et"><i class="ti-pencil-alt f-14"></i></button></a></td>
                                        <td><a href="{{route('tesdiq', $oinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-info btn-sm" title="Təsdiq et"><i class="ti-check"></i></button></a></td>
                                      @else
                                        <td><a href="{{route('legv', $oinfo->id)}}"><button class="btn waves-effect waves-light btn-grd-danger btn-sm" title="Ləğv et"><i class="ti-close"></i></button></a></td>
                                      @endif
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