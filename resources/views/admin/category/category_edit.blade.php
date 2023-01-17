@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <div class="main-content">

    <div class="page-content">

        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Category</h4> <hr>

                       <form method="post" action="{{route('update.category')}}" enctype="multipart/form-data">

                        @csrf

                            <input type="hidden" name="id" value="{{$all_cat->id}}">
                            <input type="hidden" name="old_image" value="{{$all_cat->category_image}}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="category_name" type="text" value="{{$all_cat->category_name}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Category Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="category_image" type="file" value="{{$all_cat->category_image}}" id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Category Image View</label>
                                <div class="col-sm-10">
                                    <img id="showimage" class="card-img-top img-fluid img-thumbnail" src="{{asset($all_cat->category_image)}}" alt="Card image cap" style="width:200px">
                                </div>
                            </div>

                            <input type="submit" value="Update Category" class="btn btn-danger">
                       </form>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
    <!-- End Page-content -->

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection
