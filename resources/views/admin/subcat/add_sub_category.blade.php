@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <div class="main-content">

    <div class="page-content">

        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Category</h4> <hr>

                       <form method="post" action="{{route('store.subcategory')}}" enctype="multipart/form-data">

                        @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="cat_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="subcat_name" type="text" placeholder="Category Name">
                                </div>
                            </div>



                            <input type="submit" value="Add Sub Category" class="btn btn-danger">
                       </form>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
    <!-- End Page-content -->

</div>




@endsection
