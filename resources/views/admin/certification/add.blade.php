@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nhập thông tin giấy chứng nhận</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nhập thông tin giấy chứng nhận</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- start form for validation -->
                            <form method="post" action="{{route('certification.store')}}" id="demo-form" data-parsley-validate>
                                @csrf

                                <label for="code_pilot">Mã Phi Công *:</label>
                                <select id="code_pilot" class="form-control" name="ma_phi_cong" required>
                                    <option value="">Chọn mã phi công..</option>
                                    @foreach($pilot as $value)
                                        <option value="{{$value->ma_phi_cong}}">{{$value->ten_phi_cong}} - ( {{$value->ma_phi_cong}} )</option>
                                    @endforeach
                                </select>
                                @if($errors->has('ma_phi_cong'))
                                    <div class="alert alert-danger">{{ $errors->first('ma_phi_cong') }}</div>
                                @endif

                                <label for="code_aircraft">Mã Phi Cơ *:</label>
                                <select id="code_aircraft" class="form-control" name="ma_phi_co" required>
                                    <option value="">Chọn mã phi cơ..</option>
                                    @foreach($aircraft as $value)
                                        <option value="{{$value->ma_phi_co}}">{{$value->ten_phi_co}} - ( {{$value->ma_phi_co}} )</option>
                                    @endforeach
                                </select>
                                @if($errors->has('ma_phi_co'))
                                    <div class="alert alert-danger">{{ $errors->first('ma_phi_co') }}</div>
                                @endif

                                <br />
                                <button type="submit" class="btn btn-primary">Tạo</button>

                            </form>
                            <!-- end form for validations -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
