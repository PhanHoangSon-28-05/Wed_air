@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nhập Thông Tin Phi công</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nhập thông tin phi công</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <!-- start form for validation -->
                            <form method="post" action="{{route('pilot.store')}}" id="demo-form" data-parsley-validate>
                                @csrf

                                <label for="code_pilot">Mã Phi công * :</label>
                                <input type="text" id="code_pilot" class="form-control" name="code_pilot" required/>
                                @if($errors->has('code_pilot'))
                                    <div class="alert alert-danger">{{ $errors->first('code_pilot') }}</div>
                                @endif

                                <label for="name_pilot">Tên Phi công * :</label>
                                <input type="text" id="name_pilot" class="form-control" name="name_pilot" required/>
                                @if($errors->has('name_pilot'))
                                    <div class="alert alert-danger">{{ $errors->first('name_pilot') }}</div>
                                @endif

                                <label for="salary">Lương * :</label>
                                <input type="number" id="salary" class="form-control" name="salary" required/>
                                @if($errors->has('salary'))
                                    <div class="alert alert-danger">{{ $errors->first('salary') }}</div>
                                @endif

                                <br/>
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
