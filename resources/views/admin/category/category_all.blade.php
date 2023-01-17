@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <div class="main-content">

    <div class="page-content">

         <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title">All Categories</h4>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('add.category')}}" style="float: right" class="btn btn-danger">Add Category</a>
                            </div>
                        </div>


                        <hr>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                                @php($i=1)
                                @foreach ($categoires as $item)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->category_name}}</td>
                                    <td><img src="{{asset($item->category_image)}}" alt=""></td>
                                    <td>Active</td>

                                    <td>
                                        <a href="{{route('edit.category',$item->id)}}" class="btn btn-sm btn-info" title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                        <a href="{{route('delete.category',$item->id)}}" class="btn btn-sm btn-danger" title="Delete Data" id="delete"> <i class="fas fa-trash"></i> </a>
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
