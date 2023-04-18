@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý danh sách phi cơ</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Quản lý danh sách phi cơ</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <span class="text-muted font-13 m-b-30">
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </span>
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Mã</th>
                                                <th>Họ & tên</th>
                                                <th>Khoảng cách bay tối đa</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($aircraft as $value)
                                            <tr>
                                                <td>{{$value->ma_phi_co}}</td>
                                                <td>{{$value->ten_phi_co}}</td>
                                                <td>{{$value->kc_bay}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Tùy chọn
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{route('aircraft.edit',$value->ma_phi_co)}}">Thay đổi</a>
                                                            <form id="delete-flight-form" action="{{route('aircraft.destroy',$value->ma_phi_co)}}" method="POST" class="d-none">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                            <a class="dropdown-item"
                                                               href="#"
                                                               onclick="if(confirm('Bạn có chắc chắn muốn xóa {{$value->ma_phi_co}}?')) { event.preventDefault(); document.getElementById('delete-flight-form').submit(); }"
                                                            >Xóa</a>
                                                        </div>
                                                    </div>
                                                </td>
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
        </div>
    </div>
@endsection
