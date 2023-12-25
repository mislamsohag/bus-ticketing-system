@extends('Layouts.app')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">My Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Management</a></li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div>
                                <div class="flex-shrink-0 avatar-md">
                                    <div class="avatar-title bg-light rounded">
                                        <img src="{{asset('assets')}}/images/companies/img-2.png" alt="" height="50" />
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <tbody>
                                            <tr>
                                                <th><span class="fw-medium">Name</span></th>
                                                <td>David Marshall</td>
                                            </tr>                                            
                                            <tr>
                                                <th><span class="fw-medium">Email</span></th>
                                                <td>forcemedicines@gamil.com</td>
                                            </tr>                                            
                                            <tr>
                                                <th><span class="fw-medium">Contact No.</span></th>
                                                <td>+(123) 9876 654 321</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">City</span></th>
                                                <td>Dhaka</td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-medium">Address</span></th>
                                                <td>Bangladesh</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form action="">
                                <button class="btn btn-primary">Edit Profile</button>
                            </form>
                        </div>
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
</div>
@endsection