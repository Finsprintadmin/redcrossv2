@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Pledges</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                    EXPORT
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Pdf</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Excel</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between my-0">
                                <div class="card-title">
                                    Search
                                </div>

                            </div>
                            <div class="card-body">

                                <form class="row gx-3 gy-2 align-items-center mt-0">
                                    <div class="col-sm-2">
                                        <label class="visually-hidden"
                                               for="specificSizeInputName">Name</label>
                                        <input type="text" class="form-control" id="specificSizeInputName"
                                               placeholder="Type Here">
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">Status</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Status...</option>
                                            <option value="1">Paid</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Failed</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">Currency</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Currency...</option>
                                            <option value="1">ALL</option>
                                            <option value="2">KES</option>
                                            <option value="3">USD</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="humanfrienndlydate" placeholder="From">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="humanfrienndlydate" placeholder="To">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Pledges
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown m-1">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Local</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">International</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID.</th>
                                            <th scope="col">Donor Id</th>
                                            <th scope="col">Campaign Id</th>
                                            <th scope="col">Frequency</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Created at</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">

                                                    <div>D123456</div>
                                                </div>
                                            </td>
                                            <td>
                                                C123456
                                            </td>
                                            <td >
                                                Weekly
                                            </td>
                                            <td >
                                                $5000
                                            </td>
                                            <td class="badge bg-info-transparent">
                                                29-05-2023
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">

                                                    <div>D123456</div>
                                                </div>
                                            </td>
                                            <td>
                                                C123456
                                            </td>
                                            <td >
                                                Weekly
                                            </td>
                                            <td >
                                                $5000
                                            </td>
                                            <td class="badge bg-info-transparent">
                                                29-05-2023
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div>
                                        Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->


            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
    </div>



@endsection

