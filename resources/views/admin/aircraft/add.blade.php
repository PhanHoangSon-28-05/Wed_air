@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nhập Thông Tin Phi Cơ</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nhập thông tin phi cơ</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <!-- start form for validation -->
                            <form method="post" action="{{route('aircraft.store')}}" id="demo-form" data-parsley-validate>
                                @csrf

                                <label for="code_aircraft">Mã Phi Cơ * :</label>
                                <input type="text" id="code_aircraft" class="form-control" name="code_aircraft" required />
                                @if($errors->has('code_aircraft'))
                                    <div class="alert alert-danger">{{ $errors->first('code_aircraft') }}</div>
                                @endif

                                <label for="name_aircraft">Tên Phi Cơ * :</label>
                                <input type="text" id="name_aircraft" class="form-control" name="name_aircraft" required />
                                @if($errors->has('name_aircraft'))
                                    <div class="alert alert-danger">{{ $errors->first('name_aircraft') }}</div>
                                @endif

                                <label for="max_flight_distance">Khoảng cách bay * :</label>
                                <input type="number" id="max_flight_distance" class="form-control" name="max_flight_distance" required />
                                @if($errors->has('max_flight_distance'))
                                    <div class="alert alert-danger">{{ $errors->first('max_flight_distance') }}</div>
                                @endif

                                <br />
                                <button type="submit" class="btn btn-primary">Thêm</button>

                            </form>
                            <!-- end form for validations -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
