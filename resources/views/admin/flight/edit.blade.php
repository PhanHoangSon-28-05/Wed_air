@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thay đổi thông tin chuyến Bay</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thay đổi thông tin chuyến bay mã: {{$flight->ma_cb}}</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- start form for validation -->
                            <form method="post" action="{{route('flight.update', $flight->ma_cb)}}" id="demo-form" data-parsley-validate>
                                @csrf
                                @method('PUT')
                                <label for="code_flight">Mã Chuyến Bay *:</label>
                                <input type="text" id="code_flight" class="form-control" name="code_flight" value="{{$flight->ma_cb}}" required />
                                @if($errors->has('code_flight'))
                                    <div class="alert alert-danger">{{ $errors->first('code_flight') }}</div>
                                @endif

                                <label for="place_of_departure">Nơi Xuất Phát *:</label>
                                <select id="place_of_departure" class="form-control" name="place_of_departure" required>
                                    <option value="{{$flight->noi_xp}}">{{$flight->noi_xp}}</option>
                                    @foreach($location as $value)
                                        <option value="{{$value->tinh_thanh}}">{{$value->tinh_thanh}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('place_of_departure'))
                                    <div class="alert alert-danger">{{ $errors->first('place_of_departure') }}</div>
                                @endif

                                <label for="place_of_arrival">Nơi Đến *:</label>
                                <select id="place_of_arrival" class="form-control" name="place_of_arrival" required>
                                    <option value="{{$flight->noi_den}}">{{$flight->noi_den}}</option>
                                    @foreach($location as $value)
                                        <option value="{{$value->tinh_thanh}}">{{$value->tinh_thanh}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('place_of_arrival'))
                                    <div class="alert alert-danger">{{ $errors->first('place_of_arrival') }}</div>
                                @endif

                                <label for="departure_time">Giờ xuất phát *:</label>
                                <input id="departure_time" class="form-control"
                                       name="departure_time"
                                       type="datetime-local" required="required"
                                       value="{{$flight->gio_xp}}">
                                @if($errors->has('departure_time'))
                                    <div class="alert alert-danger">{{ $errors->first('departure_time') }}</div>
                                @endif

                                <label for="arrival_time">Giờ đến *:</label>
                                <input id="arrival_time" class="form-control"
                                       name="arrival_time"
                                       type="datetime-local" required="required"
                                       value="{{$flight->gio_den}}">
                                @if($errors->has('arrival_time'))
                                    <div class="alert alert-danger">{{ $errors->first('arrival_time') }}</div>
                                @endif

                                <br />
                                <button type="submit" class="btn btn-primary">Thay đổi</button>

                            </form>
                            <!-- end form for validations -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
