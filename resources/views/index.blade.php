@extends('layouts.main')
@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0"></h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">KRC</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row">

                <div class="col-xxl-9">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                        <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                    </span>
                                            </div>
                                            <div  class="mb-0 fw-semibold text-end">
                                                Today's Donations=>
                                            </div>
                                             <div>
                                                 <span class="fs-14 fw-semibold text-success">200</span>
                                             </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div id="crm-total-deals"></div>

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 5,876.29</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                        <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                    </span>
                                            </div>
                                            <div class="mb-0 fw-semibold">
                                                This Week's Donations=>
                                            </div>
                                            <div>
                                                <span class="fs-14 fw-semibold text-success">3000</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div id="crm-conversion-ratio"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$3,876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 45,876.29</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                    <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                        <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                    </span>
                                            </div>
                                            <div class="mb-0 fw-semibold">
                                                This Month's Donations=>
                                            </div>
                                            <div>
                                                <span class="fs-14 fw-semibold text-success">40000</span>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                             <div id="crm-total-revenue"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$6,876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 75,876.29</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Donations Overview
                                    </div>

                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="crm-revenue-analytics"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-3">
                    <div class="row">
                        <div class="col-xl-12">

                            <div class="col-xl-12 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Overall Quartery Donations
                                        </div>
                                        <div id="crm-total-customers"></div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 overflow-hidden">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div id="radialbar-multiple"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-12 border-top border-block-start-dashed">

                                            <div class="col p-0">
                                                <div class="p-3 text-center border-end border-inline-end-dashed">
                                                    <span class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block">USD
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">100,153</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0">
                                                <div class="p-3 text-center">
                                                    <span class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">KES
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">5,679,000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card crm-highlight-card">
                                    <div class="card-body">

                                        <div class="d-flex align-items-center justify-content-between">

                                            <div >

                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Pledges Done Overview</div>
                                                <span class="d-block fs-12 text-fixed-white"><span class="op-7">You can check the Pledges</span> <span class="fw-semibold text-warning"></span> <span class="op-7">which have been done within the last 24hrs</span>.</span>
                                                <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="javascript:void(0);"><u>Click here</u></a></span>
                                            </div>
                                            <div>
                                                <div id="crm-main"></div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


        <!-- Start::row-3 -->
        <div class="row">

            <div class="col-xxl-6 col-xl-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-header d-sm-flex d-block">
                        <div class="card-title">Campaign Performance</div>
                        <div class="tab-menu-heading border-0 p-0 ms-auto mt-sm-0 mt-2">
                            <div class="tabs-menu-task me-3">
                                <ul class="nav nav-tabs panel-tabs-task border-0" role="tablist">
                                    <li><a href="javascript:void(0);" class="me-1 active" data-bs-toggle="tab" data-bs-target="#Active" role="tab" aria-selected="true">Active Campaigns</a></li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#Complete" role="tab" aria-selected="false">Completed Campaigns</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-sm-0 mt-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable5"><button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light"
                                                                                                                 data-bs-toggle="modal" data-bs-target="#create-folder">
                                    <i class="ri-add-circle-line align-middle me-1"></i>Add Campaign
                                </button></a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="tab-content p-0">
                            <div class="tab-pane active p-0 border-0" id="Active">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="" aria-label="...">
                                                            </span>
                                            </th>
                                            <th scope="col">Campaign Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Target</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Where it Matters</td>
                                            <td class="text-muted">KES.150,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.1,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Where it Matters</td>
                                            <td class="text-muted">KES.150,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.1,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Where it Matters</td>
                                            <td class="text-muted">KES.150,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.1,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Where it Matters</td>
                                            <td class="text-muted">KES.150,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.1,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Where it Matters</td>
                                            <td class="text-muted">KES.150,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.1,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane p-0 border-0" id="Complete">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="checkAll1" value="" aria-label="...">
                                                            </span>
                                            </th>
                                            <th scope="col">Campaign Name</th>
                                            <th scope="col">Amount Collected</th>
                                            <th scope="col">Target</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Kilifi Floods</td>
                                            <td class="text-muted">KES.1,250,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.2,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Kilifi Floods</td>
                                            <td class="text-muted">KES.1,250,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.2,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Kilifi Floods</td>
                                            <td class="text-muted">KES.1,250,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.2,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Kilifi Floods</td>
                                            <td class="text-muted">KES.1,250,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.2,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Kilifi Floods</td>
                                            <td class="text-muted">KES.1,250,000</td>
                                            <td>
                                                <span class="badge bg-primary">KES.2,000,000</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                            </div>
                            <div>
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
            <div class="col-xxl-6 col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h6 class="fw-semibold mb-0">Today's Donations Overview :</h6>
                    <div>
                        <button class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light">View All</button>
                    </div>
                </div>
                <div class="swiper pagination-dynamic text-start" id="nft-collections-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/6.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/7.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/8.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/9.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="text-muted fs-12 d-flex align-items-center">Currency :
                                                <span class="fw-semibold text-success fs-15 mb-0 ms-1">USD</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                        <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                            $
                                                        </span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold">10000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/11.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/12.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/13.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/14.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="text-muted fs-12 d-flex align-items-center">Currency :
                                                <span class="fw-semibold text-info fs-15 mb-0 ms-1">KES</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                        <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                            KES
                                                        </span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold">50000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/10.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/15.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/17.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/nft-images/16.png')}}" alt="" class="nft-featuredcollect-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="text-muted fs-12 d-flex align-items-center">Currency :
                                                <span class="fw-semibold text-success fs-15 mb-0 ms-1">USD</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                        <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                            $
                                                        </span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold">6000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-3 -->

        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header">
                        <div class="card-title">
                            Top Donor Countries
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="">
                                                            </span>
                                            </div>
                                            <div>
                                                            <span class="fw-semibold">
                                                                U.S.A
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="">
                                                            </span>
                                            </div>
                                            <div>
                                                            <span class="fw-semibold">
                                                                Kenya
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="">
                                                            </span>
                                            </div>
                                            <div>
                                                            <span class="fw-semibold">
                                                                South Africa
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 lh-1">
                                                            <span class="avatar avatar-xs avatar-rounded">
                                                                <img src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="">
                                                            </span>
                                            </div>
                                            <div>
                                                            <span class="fw-semibold">
                                                                Nigeria
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                            </div>
                            <div>
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
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Donations by Payment Methods
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress progress-lg mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>

                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Mpesa
                                <span class="badge float-end bg-success-transparent">KES.100,982</span>
                            </li>
                            <li class="list-group-item">
                                Card
                                <span class="badge float-end bg-secondary-transparent">USD.90214</span>
                            </li>
                            <li class="list-group-item">
                                Airtel Money
                                <span class="badge float-end bg-warning-transparent">KES.20262</span>
                            </li>
                            <li class="list-group-item">
                                Tcash
                                <span class="badge float-end bg-primary-transparent">KES.80395</span>
                            </li>

                        </ul>
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                            </div>
                            <div>
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
            <div class="col-xl-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header">
                        <div class="card-title">
                            Top Donor Counties
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                            <span class="fw-semibold">
                                                               Nairobi
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                            <span class="fw-semibold">
                                                                Nakuru
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                            <span class="fw-semibold">
                                                                Machakos
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                            <span class="fw-semibold">
                                                              Kisumu
                                                            </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>USD.21000</td>
                                    <td>KES.5555</td>
                                    <td>
                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top-0">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                            </div>
                            <div>
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
        <!-- End::row-2 -->


            <!-- Start:: row-3 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between flex-wrap">
                            <div class="card-title mb-2 mb-sm-0">
                                Recent Donations
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Campaign</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Method</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Where It Matters
                                            </div>
                                        </td>
                                        <td>
                                            July 4, 2023
                                        </td>
                                        <td>
                                            KES.324.01
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-primary">Card</span>
                                        </td>

                                        <td>
                                            <span class="badge rounded-pill bg-outline-success">Paid</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Kilifi Floods
                                            </div>
                                        </td>
                                        <td>
                                            July 4, 2023
                                        </td>
                                        <td>
                                            $149,316
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-success">Mpesa</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-outline-warning">Pending</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Kilifi Floods
                                            </div>
                                        </td>
                                        <td>
                                            July 4, 2023
                                        </td>
                                        <td>
                                            KES.480,799
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-success">Mpesa</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-outline-danger">Failed</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Where It Matters
                                            </div>
                                        </td>
                                        <td>
                                            July 4, 2023
                                        </td>
                                        <td>
                                            $17,791,969,465
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-primary">Card</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-outline-warning">Pending</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Where It Matters
                                            </div>
                                        </td>
                                        <td>
                                           July 4, 2023
                                        </td>
                                        <td>
                                            $471,800,600
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-primary">Card</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-outline-success">Paid</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mokaya Duncan</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - Kwale Drought
                                            </div>
                                        </td>
                                        <td>
                                            July 4, 2023
                                        </td>
                                        <td>
                                            KES.453,601
                                        </td>
                                        <td>
                                            <span class="badge bg-outline-success">Mpesa</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-outline-danger">Failed</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger-light btn-sm btn-border-top">View</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End:: row-3 -->

        </div>
    </div>
    <!-- End::app-content -->

{{--    @include('sections.modal.add_campaign')--}}

@endsection
