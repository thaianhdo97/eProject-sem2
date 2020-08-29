@extends('layout.admin-layout')

@section('content')



@section('title')

    <h2>New TourGuides </h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')




    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <div class="product-status-wrap">
                        {{--                        <form action="/admin/tourGuides" method="get" id="product_form">--}}
                        {{--                            @csrf--}}
                        {{--                            <div class="form-body">--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <label for="exampleFormControlSelect1"><h2 style="color:white; ">--}}
                        {{--                                                Area</h2></label>--}}
                        {{--                                        <select name="chosen_area_id" class="form-control" id="chosen_area_id">--}}
                        {{--                                            <option value="0">All</option>--}}
                        {{--                                            @foreach($areas as $area)--}}
                        {{--                                                <option--}}
                        {{--                                                    value="{{$area->id}}" {{$area->id == $chosen_area ? 'selected':''}}>{{$area->province}}</option>--}}
                        {{--                                        @endforeach--}}

                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <a href=""><i class="fa fa-search"></i></a>--}}


                        {{--                                        <input value="" type="text" name="keyword" class="form-control"--}}
                        {{--                                               placeholder="Search by keyword">--}}


                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        --}}{{--                                            <div class="form-group">--}}
                        {{--                                        --}}{{--                                                <div class="bread-ntd"><label for="exampleFormControlSelect1">Search by--}}
                        {{--                                        --}}{{--                                                        time</label></div>--}}
                        {{--                                        --}}{{--                                                <input type="text" name="dates" class="form-control">--}}
                        {{--                                        --}}{{--                                                <input type="hidden" name="start">--}}
                        {{--                                        --}}{{--                                                <input type="hidden" name="end">--}}
                        {{--                                        --}}{{--                                            </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input class="btn btn-large btn-success" type="submit" value="Lọc">--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">

                                <h4>TourGuide List</h4>
                                <div class="add-product">
                                    <a href="#">Add TourGuide</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>

                                            <label>Check all: <input type="checkbox"
                                                                     name="select-all"
                                                                     id="select-all"></label>
                                        </th>
                                        <th>
                                            <button class="btn btn-primary" >Duyệt</button>

                                        </th>
                                        <th>ID</th>
                                        <th>ACC_ID</th>
                                        <th>Full_name</th>
                                        <th>Year_of_birth</th>
                                        <th>Price</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Avatar</th>
                                        <th>Card</th>
                                        <th>Created_at</th>
                                        <th>Update_at</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach($list as $item)
                                        <tr>

                                            <form action ="/admin/new-tourGuide" method="post" >
                                                @method('PUT')
                                                @csrf
                                                <td >
                                                    <input type="checkbox" value="{{$item->id}}" name="id">
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" type="submit">Duyệt</button>
                                                </td>
                                            </form>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->account_id}}</td>
                                            <td>{{$item->full_name}}</td>
                                            <td>{{$item->year_of_birth}}</td>
                                            <td>{{$item->price}} Vnd/giờ</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->email}}</td>

                                            <td><img
                                                    src="https://tinmoimedia.com/upload/camnhung/2020/08/17/131531-ngoc-trinh-lo-da-nhan-nheo-tm4.jpg">
                                            </td>

                                            @if($item->card == 1)
                                                <td>
                                                    <button class="pd-setting">Co card</button>
                                                </td>
                                            @elseif($item->card == 2)
                                                <td>
                                                    <button class="pd-setting">Ko card</button>
                                                </td>
                                            @elseif($item->card == 3)
                                                <td>
                                                    <button class="pd-setting">null</button>
                                                </td>
                                            @else
                                                <td>null</td>
                                            @endif
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->updated_at}}</td>

                                                <td>
                                                    <a>
                                                        <button type="button" class="btn btn-info ">
                                                            {{$item->status == 1 ? 'Active' : 'DeActive' }}</button>
                                                    </a>
                                                </td>
                                            <form>
                                                <td>
                                                    <a>
                                                        <button type="button" class="btn btn-info "><i
                                                                class="fa fa-info" aria-hidden="true"></i></button>
                                                    </a>
                                                    <a>
                                                        <button data-toggle="tooltip" title="contact" class="pd-setting-ed">
                                                            <i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                    </a>
                                                </td>
                                            </form>
                                        </tr>

                                    @endforeach
                                </table>

                                {{--//more detail--}}
                                <div class="breadcome-area">
                                    <div class="modal fade" id="detailModal" role="dialog">
                                        <div class="container">
                                            <div class="modal-dialog modal-dialog-scrollable">

                                                <!-- Modal content-->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{--                        deactive comfirm--}}
                                <div class="breadcome-area">
                                    <div class="modal fade" id="comfirmModal" role="dialog">
                                        <div class="container">
                                            <div class="modal-dialog modal-dialog-scrollable">

                                                <!-- Modal content-->
                                                <div class="product-status-wrap" class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;
                                                        </button>
                                                        <h4 class="modal-title">TourGuide DeActive comfirm</h4>
                                                    </div>
                                                    <div class="product-status-wrap">

                                                        <div class="modal-body">
                                                            <h2 class="text-warning">DeActive this tourGuide?</h2>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger"
                                                                    data-dismiss="modal"
                                                                    id="do-deactive">
                                                                DeActive
                                                            </button>
                                                            <button type="button" class="btn btn-close btn-primary"
                                                                    data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="custom-pagination">
                                    {{--                            {{ $list->appends(['sort' => 'id'])->links() }}--}}
                                    <ul class="pagination">
                                        <li class="page-item">
                                            {{ $list->appends(['sort' => 'votes'])->links() }}
                                        </li>


                                    </ul>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

@section('script')
    <script>
        $('#select-all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>
@endsection

