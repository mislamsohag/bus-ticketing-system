@extends('Layouts.app')

@section('title', 'All Buses')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Buses</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Management</a></li>
                                <li class="{{request()->routeIs('buses')? 'text-primary': ''}} breadcrumb-item active">Buses</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Main Content -->
            <div class="row">
                
                <!-- Products Section Srtart -->
                <div class="col-xl-12 col-lg-12">
                    <div>
                        <div class="card">
                            <!-- Add Button -->
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{route('buses-add')}}" class="btn btn-primary"
                                                id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Bus</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList"
                                                    placeholder="Search Products...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            
                            <!-- Product Card Start -->
                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                        <div id="table-product-list-all" class="table-card gridjs-border-none">
                                            <div role="complementary" class="gridjs gridjs-container"
                                                style="width: 100%;">
                                                <div class="gridjs-wrapper" style="height: auto;">
                                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                                        <thead class="gridjs-thead">
                                                            <tr class="gridjs-tr">
                                                                <th data-column-id="#"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 70px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Id</div>                                                                    
                                                                </th>
                                                                <th data-column-id="product"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 400px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Bus Name</div>
                                                                </th>
                                                                <th data-column-id="stock"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 100px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Seats</div>
                                                                </th>
                                                                <th data-column-id="price"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 150px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Bus Num.</div>
                                                                </th>
                                                                <th data-column-id="rating"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 80px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Rating</div>
                                                                </th>
                                                                <th data-column-id="published"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 150px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Entry</div>
                                                                </th>
                                                                <th data-column-id="action"
                                                                    class="gridjs-th gridjs-th-sort text-muted"
                                                                    style="width: 100px;" tabindex="0">
                                                                    <div class="gridjs-th-content">Action</div>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <!-- foreach here -->
                                                        @foreach($buses as $bus)
                                                        <tbody class="gridjs-tbody">
                                                            <!-- Product starts -->
                                                            <tr class="gridjs-tr">
                                                                <td class="gridjs-td">
                                                                    
                                                                    <p>{{$bus->id}}</p>

                                                                </td>

                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0 me-3">
                                                                                <div class="avatar-sm bg-light rounded p-1">                                                                                    
                                                                                    <img src="{{$bus->image}}"
                                                                                        alt="" class="img-fluid d-block">
                                                                                </div>
                                                                            </div>
                                                                            <!-- Product Details Link by product heading -->
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a href="{{url('#')}}"
                                                                                        class="text-body">{{$bus->busName}}</a>
                                                                                </h5>
                                                                                Category : <span class="fw-medium">{{$bus->busType}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                                <!-- Stock -->
                                                                <td data-column-id="stock" class="gridjs-td">Seats: {{$bus->totalSeat}}</td>
                                                                <!-- Price -->
                                                                <td data-column-id="price" class="gridjs-td">
                                                                    <span>Number: {{$bus->busNumber}}</span>
                                                                </td>
                                                                <td data-column-id="rating" class="gridjs-td">
                                                                    <span class="badge bg-light text-body fs-12 fw-medium">
                                                                        <i class="mdi mdi-star text-warning me-1"></i>Service Star</span>
                                                                </td>
                                                                <!-- Published Date -->
                                                                <td data-column-id="published" class="gridjs-td">
                                                                    <small class="text-muted ms-1">{{$bus->created_at}}</small>
                                                                </td>

                                                                <!-- Actions -->
                                                                <td data-column-id="action" class="gridjs-td">
                                                                    <span>
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i class="ri-more-fill"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                                <!-- Views Action -->
                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{route('bus.details', $bus->id)}}"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>Details</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item edit-list" data-edit-id="1" href="{{route('bus-update', $bus->id)}}"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Update</a>
                                                                                </li>
                                                                                <li class="dropdown-divider"></li>
                                                                                
                                                                                <!-- Product Delete -->
                                                                                <li class="text-center">
                                                                                    <form method="POST" action="{{url('#')}}">
                                                                                        @csrf
                                                                                        @method('delete')
                                                                                        <button type="submit" class="btn btn-danger ">Delete</button>
                                                                                    </form>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <!-- Product Ends -->
                                                        </tbody>
                                                        @endforeach
                                                        <!-- foreach End-->

                                                    </table>
                                                </div>
                                                
                                                <!-- Pagination -->
                                                <div class="gridjs-footer">
                                                    <div class="gridjs-pagination">
                                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                                            title="Page 1 of 2">Showing <b>1</b> to
                                                            <b>10</b> of <b>12</b> results
                                                        </div>
                                                        <div class="gridjs-pages"><button tabindex="0" role="button"
                                                                disabled="" title="Previous" aria-label="Previous"
                                                                class="">Previous</button><button tabindex="0"
                                                                role="button" class="gridjs-currentPage" title="Page 1"
                                                                aria-label="Page 1">1</button><button tabindex="0"
                                                                role="button" class="" title="Page 2"
                                                                aria-label="Page 2">2</button><button tabindex="0"
                                                                role="button" title="Next" aria-label="Next"
                                                                class="">Next</button></div>
                                                    </div>
                                                </div>
                                                <div id="gridjs-temp" class="gridjs-temp"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="productnav-published" role="tabpanel">
                                        <div id="table-product-list-published" class="table-card gridjs-border-none">
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                        <div class="py-4 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                colors="primary:#405189,secondary:#0ab39c"
                                                style="width:72px;height:72px">
                                            </lord-icon>
                                            <h5 class="mt-4">Sorry! No Result Found</h5>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                 <!-- Products Section End -->
            </div>
            <!-- Main Content end --> 

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>

@endsection