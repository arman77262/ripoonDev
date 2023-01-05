@extends('admin.admin_master')
@section('admin')

  <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


    <div class="row">
        <div class="col-md-5 col-xl-5">

            <!-- Simple card -->
            <div class="card">
                <center>
                <img class="card-img-top img-fluid" src="{{(!empty($adminData->profile_image)) ? url('upload/admin_image/'.$adminData->profile_image) : url('upload/nophoto.jpg')}}" alt="Card image cap" style="width: 250px; padding:2rem">
                </center>

                <div class="card-body">
                    <hr>
                    <h4 class="card-title">Name : {{$adminData->name}}</h4>
                    <hr>
                    <h4 class="card-title">Email : {{$adminData->email}}</h4>
                    <hr>

                    <a href="{{route('edit.profile')}}" class="btn btn-primary waves-effect waves-light btn-sm">Edit Profile</a>
                </div>
            </div>

        </div><!-- end col -->





        </div>

        </div>

    </div>
    <!-- End Page-content -->

</div>


@endsection
