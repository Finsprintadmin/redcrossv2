@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Donors</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                    EXPORT
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Pdf</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Excel</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">CSV</a></li>

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
                                               for="specificSizeSelect">By Country</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Country...</option>
                                            <option value="1">Kenya</option>
                                            <option value="2">Tanzania</option>
                                            <option value="2">USA</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">By County</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>County...</option>
                                            <option value="1">Nairobi</option>
                                            <option value="2">Nakuru</option>
                                            <option value="3">Machakos</option>
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

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead class="bg-primary-transparent">
                                        <tr>
                                            <th scope="col">ID.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone No</th>
                                            <th scope="col">Physical Address</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">County</th>
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

                                                    <div>Mokaya Duncan</div>
                                                </div>
                                            </td>
                                            <td>
                                                Finsprint Ltd
                                            </td>
                                            <td >
                                                mokayaduncan@finsprint.io
                                            </td>
                                            <td >
                                                +254712753255
                                            </td>
                                            <td>
                                                Yaya Centre
                                            </td>
                                            <td>
                                                Kenya
                                            </td>
                                            <td>
                                                Nairobi
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">

                                                    <div>Mokaya Duncan</div>
                                                </div>
                                            </td>
                                            <td>
                                                Finsprint Ltd
                                            </td>
                                            <td >
                                                mokayaduncan@finsprint.io
                                            </td>
                                            <td >
                                                +254712753255
                                            </td>
                                            <td>
                                                Yaya Centre
                                            </td>
                                            <td>
                                                Kenya
                                            </td>
                                            <td>
                                                Nairobi
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">

                                                    <div>Mokaya Duncan</div>
                                                </div>
                                            </td>
                                            <td>
                                                Finsprint Ltd
                                            </td>
                                            <td >
                                                mokayaduncan@finsprint.io
                                            </td>
                                            <td >
                                                +254712753255
                                            </td>
                                            <td>
                                                Yaya Centre
                                            </td>
                                            <td>
                                                Kenya
                                            </td>
                                            <td>
                                                Nairobi
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">

                                                    <div>Mokaya Duncan</div>
                                                </div>
                                            </td>
                                            <td>
                                                Finsprint Ltd
                                            </td>
                                            <td >
                                                mokayaduncan@finsprint.io
                                            </td>
                                            <td >
                                                +254712753255
                                            </td>
                                            <td>
                                                Yaya Centre
                                            </td>
                                            <td>
                                                Kenya
                                            </td>
                                            <td>
                                                Nairobi
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
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

