@extends('layouts.main')
@section('content')



    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Campaigns</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <div class="btn-group">

                            <button type="button" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-folder">Add Campaign</button>

                            <div class="modal fade" id="create-folder" tabindex="-1"
                                 aria-labelledby="create-folder" data-bs-keyboard="false"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="mail-ComposeLabel">Create Campaign</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="{{route('save_campaign')}}">
                                            @csrf
                                            <div class="modal-body px-4">

                                                <div class="row gy-2">
                                                    <div class="col-xl-12">
                                                        <label for="task-name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="campaign_name" placeholder="Campaign Name">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="task-name" class="form-label">Description</label>
                                                        <input type="text" class="form-control" name="description" placeholder="Campaign Description">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Donor Type</label>
                                                        <select class="form-control" data-trigger name="donor_type" id="choices-single-default">
                                                            <option value="">Select</option>
                                                            <option value="Critical">Individual</option>
                                                            <option value="High">Organisation</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Target Amount</label>
                                                        <input type="text" class="form-control" name= "target_amount" placeholder="Enter the Target Amount">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Currency</label>
                                                        <select class="form-control blog-tags" name="currency" multiple>
                                                            <option value="Choice 1" selected>KES</option>
                                                            <option value="Choice 2">USD</option>
                                                        </select>

                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Amount Suggestions</label>
                                                        <select class="form-control blog-tags2" name="amount_suggestions_usd" multiple>
                                                            <option value="Choice 1" selected>$100</option>
                                                            <option value="Choice 2">$50</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <label class="form-label">Start Date</label>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                <input type="text" class="form-control" name="start_date" id="humanfrienndlydate" placeholder="From">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">End Date</label>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                <input type="text" class="form-control" name="end_date" id="humanfrienndlydate" placeholder="To">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="task-name" class="form-label">Campaign Image</label>
                                                        <input class="form-control" type="file" name="image" id="input-file">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->

            <div class="row">
            <div class="col-xl-8">
            <div class="card border border-primary custom-card">
                <div class="card-header">
                    <div class="d-flex align-items-center w-100">
                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                        </div>
                        <div class="">
                            <div class="fs-20 fw-semibold">Kilifi floods</div>
                            <p class="mb-0 text-muted fs-11">Created on 23rd June 2022</p>
                        </div>
                        <div class="ms-auto">
                            <a href="javascript:void(0);"><button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light" >
                                        <i class="ri-eye-line align-middle me-1"></i>View Campaign
                                    </button></a>

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <blockquote class="blockquote custom-blockquote primary mb-0 text-center">
                        <h6>The future belongs to those who believe in the beauty of their dreams...Lets Get out there and help in this crisis</h6>
                        <footer class="blockquote-footer mt-0 fs-14 text-muted op-7 mb-0">
                            <div class="d-flex justify-content-between">
                                <div class="fw-semibold text-success">Active</div>

                            </div>
                        </footer>
                        <span class="quote-icon"><a href="javascript:void(0);"><i class="ri-edit-2-line"></i></a></span>
                    </blockquote>

                </div>

            </div>
            </div>

                <div class="col-xl-3">
                    <div class="card custom-card card-bg-primary text-fixed-white">
                <div class="card-body p-0">
                    <div class="d-flex align-items-top p-4 flex-wrap">
                        <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                        </div>
                        <div class="flex-fill">
                            <h5 class="fw-semibold mb-1">KES.21,520</h5>
                            <p class="op-7 mb-0 fs-12">Total Donations</p>
                        </div>
                        <div>
                            <span class="badge bg-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="card custom-card card-bg-dark text-fixed-white">
                <div class="card-body p-0">
                    <div class="d-flex align-items-top p-4 flex-wrap">
                        <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                        </div>
                        <div class="flex-fill">
                            <h5 class="fw-semibold mb-1">USD.33,000</h5>
                            <p class="op-7 mb-0 fs-12">Total Donations</p>
                        </div>
                        <div>
                            <span class="badge bg-secondary"><i class="ri-arrow-down-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                        </div>
                    </div>
                </div>
            </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="card border border-primary custom-card">
                        <div class="card-header">
                            <div class="d-flex align-items-center w-100">
                                <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="">
                                    <div class="fs-20 fw-semibold">Kilifi floods</div>
                                    <p class="mb-0 text-muted fs-11">Created on 23rd June 2022</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);"><button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light" >
                                            <i class="ri-eye-line align-middle me-1"></i>View Campaign
                                        </button></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <blockquote class="blockquote custom-blockquote primary mb-0 text-center">
                                <h6>The future belongs to those who believe in the beauty of their dreams...Lets Get out there and help in this crisis</h6>
                                <footer class="blockquote-footer mt-0 fs-14 text-muted op-7 mb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-semibold text-primary">Inactive</div>

                                    </div>
                                </footer>
                                <span class="quote-icon"><a href="javascript:void(0);"><i class="ri-edit-2-line"></i></a></span>
                            </blockquote>

                        </div>

                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card custom-card card-bg-primary text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">KES.21,520</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card card-bg-dark text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">USD.33,000</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-secondary"><i class="ri-arrow-down-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="card border border-primary custom-card">
                        <div class="card-header">
                            <div class="d-flex align-items-center w-100">
                                <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="">
                                    <div class="fs-20 fw-semibold">Kilifi floods</div>
                                    <p class="mb-0 text-muted fs-11">Created on 23rd June 2022</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);"><button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light" >
                                            <i class="ri-eye-line align-middle me-1"></i>View Campaign
                                        </button></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <blockquote class="blockquote custom-blockquote primary mb-0 text-center">
                                <h6>The future belongs to those who believe in the beauty of their dreams...Lets Get out there and help in this crisis</h6>
                                <footer class="blockquote-footer mt-0 fs-14 text-muted op-7 mb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-semibold text-success">Active</div>

                                    </div>
                                </footer>
                                <span class="quote-icon"><a href="javascript:void(0);"><i class="ri-edit-2-line"></i></a></span>
                            </blockquote>

                        </div>

                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card custom-card card-bg-primary text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">KES.21,520</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card card-bg-dark text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">USD.33,000</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-secondary"><i class="ri-arrow-down-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="card border border-primary custom-card">
                        <div class="card-header">
                            <div class="d-flex align-items-center w-100">
                                <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                                </div>
                                <div class="">
                                    <div class="fs-20 fw-semibold">Kilifi floods</div>
                                    <p class="mb-0 text-muted fs-11">Created on 23rd June 2022</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);"><button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light" >
                                            <i class="ri-eye-line align-middle me-1"></i>View Campaign
                                        </button></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <blockquote class="blockquote custom-blockquote primary mb-0 text-center">
                                <h6>The future belongs to those who believe in the beauty of their dreams...Lets Get out there and help in this crisis</h6>
                                <footer class="blockquote-footer mt-0 fs-14 text-muted op-7 mb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-semibold text-success">Active</div>

                                    </div>
                                </footer>
                                <span class="quote-icon"><a href="javascript:void(0);"><i class="ri-edit-2-line"></i></a></span>
                            </blockquote>

                        </div>

                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card custom-card card-bg-primary text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">KES.21,520</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-success"><i class="ri-arrow-up-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card custom-card card-bg-dark text-fixed-white">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-top p-4 flex-wrap">
                                <div class="me-3 lh-1">
                                        <span class="avatar avatar-md avatar-rounded bg-white text-primary shadow-sm">
                                            <i class="ti ti-coin fs-18"></i>
                                        </span>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="fw-semibold mb-1">USD.33,000</h5>
                                    <p class="op-7 mb-0 fs-12">Total Donations</p>
                                </div>
                                <div>
                                    <span class="badge bg-secondary"><i class="ri-arrow-down-s-line align-middle me-1 d-inline-block"></i>14.69%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>




@endsection
