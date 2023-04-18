@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý danh sách các chuyến bay</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Quản lý danh sách các chuyến bay</h2>
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
                                                <th>Nơi Xuất Phát</th>
                                                <th>Nơi Đến</th>
                                                <th>Thời Gian Xuất Phát</th>
                                                <th>Thời Gian Đến</th>
                                                <th>Tùy Chọn</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($flights as $value)
                                                <tr>
                                                    <td>{{$value->ma_cb}}</td>
                                                    <td>{{$value->noi_xp}}</td>
                                                    <td>{{$value->noi_den}}</td>
                                                    <td>{{date('d/m/Y - H:i', strtotime($value->gio_xp))}}</td>
                                                    <td>{{date('d/m/Y - H:i', strtotime($value->gio_den))}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Tùy chọn
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{route('flight.edit',$value->ma_cb)}}">Thay đổi</a>
                                                                <form id="delete-flight-form" action="{{ route('flight.destroy', $value->ma_cb) }}" method="POST" class="d-none">
                                                                    @csrf
                                                                    @method('delete')
                                                                </form>
                                                                <a class="dropdown-item"
                                                                   href="#"
                                                                   onclick="if(confirm('Bạn có chắc chắn muốn xóa {{$value->ma_cb}} ?')) { event.preventDefault(); document.getElementById('delete-flight-form').submit(); }"
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
