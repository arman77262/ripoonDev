@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <div class="main-content">

    <div class="page-content">

         <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Slider All Images</h4>

                        <hr>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th width="20px">Sl</th>
                                <th>Slider Images</th>
                                <th>Actipn</th>
                            </tr>
                            </thead>


                            <tbody>
                                @php($i=1)
                                @foreach ($allImage as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset($item->slider_image)}}" style="width: 100px" alt=""></td>
                                    <td>
                                        <a href="{{route('edit.slider.image',$item->id)}}" class="btn btn-sm btn-info" title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                        <a href="" class="btn btn-sm btn-danger" title="Delete Data"> <i class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- End Page-content -->

</div>



@endsection
