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
                                                Today's Donations
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
                                                This Week's Donations
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
                                                This Month's Donations
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
                                            Overall Donations
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
                            <button type="button" class="btn btn-sm btn-light"><i class="ti ti-plus me-1 fw-semibold align-middle d-inline-block"></i>Add Campaign</button>
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
                                            <th scope="col">Task details</th>
                                            <th scope="col">Assigned date</th>
                                            <th scope="col">Target</th>
                                            <th scope="col">Assigned to</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Design task page for new template</td>
                                            <td class="text-muted">12.43pm</td>
                                            <td><span class="badge bg-primary">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check2" value="" aria-label="..." checked>
                                                            </span>
                                            </td>
                                            <td>Solve UI issues in new template</td>
                                            <td class="text-muted">11.25am</td>
                                            <td><span class="badge bg-secondary">Tomorrow</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/9.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check3" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>prepare pre requisites</td>
                                            <td class="text-muted">9.56am</td>
                                            <td><span class="badge bg-primary">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check4" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Change total styles od that dashboard</td>
                                            <td class="text-muted">8.15am</td>
                                            <td><span class="badge bg-primary">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check5" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Update color theme</td>
                                            <td class="text-muted">4.20pm</td>
                                            <td><span class="badge bg-secondary">Tomorrow</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/13.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/16.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check11" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>New dashboard design update</td>
                                            <td class="text-muted">8.29am</td>
                                            <td><span class="badge bg-primary">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                                </span>
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
                                            <th scope="col">Task details</th>
                                            <th scope="col">Assigned date</th>
                                            <th scope="col">Completed</th>
                                            <th scope="col">Assigned to</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check6" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>New landing page ui update</td>
                                            <td class="text-muted">24 Nov 2022</td>
                                            <td><span class="badge bg-success">4 hrs ago</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/9.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check7" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Job portal dashboard redesign</td>
                                            <td class="text-muted">30 Nov 2022</td>
                                            <td><span class="badge bg-success">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/13.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check8" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>New template layout update</td>
                                            <td class="text-muted">11 Dec 2022</td>
                                            <td><span class="badge bg-success">Yesterday</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check29" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>All dashboard licenses page update</td>
                                            <td class="text-muted">6 Dec 2022</td>
                                            <td><span class="badge bg-success">Yesterday</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check19" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>Update color theme of ynex template</td>
                                            <td class="text-muted">8 Dec 2022</td>
                                            <td><span class="badge bg-success">Yesterday</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                                                </span>
                                                    <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check9" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>New pages list noted</td>
                                            <td class="text-muted">21 Dec 2022</td>
                                            <td><span class="badge bg-success">Today</span></td>
                                            <td>
                                                <div class="avatar-list-stacked mb-0">
                                                                <span class="avatar avatar-xs">
                                                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                                                </span>
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
            <div class="col-xxl-6 col-xl-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Top Donor Countries
                        </div>
                        <div class="dropdown">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-12 sales-visitors-countries">
                                <div class="mt-2">
                                    <ul class="list-unstyled p-4 my-auto">
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-primary"></i>Usa</span><span class="fw-semibold float-end">3,201</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-secondary"></i>India</span><span class="fw-semibold float-end">2,345</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-danger"></i>Vatican City</span><span class="fw-semibold float-end">106</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-info"></i>Canada</span><span class="fw-semibold float-end">2,857</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-orange"></i>Mauritius</span><span class="fw-semibold float-end">169</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-warning"></i>Singapore</span><span class="fw-semibold float-end">1,950</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-success"></i>Palau</span><span class="fw-semibold float-end">224</span>
                                        </li>
                                        <li class="mb-3">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block text-pink"></i>Maldives</span><span class="fw-semibold float-end">147</span>
                                        </li>
                                        <li class="mb-0">
                                            <span class="fs-12"><i class="ri-checkbox-blank-circle-fill align-middle me-2 d-inline-block"></i>São Tomé and Príncipe</span><span class="fw-semibold float-end">182</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-12 text-center">
                                <div id="visitors-countries"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-3 -->


            <!-- Start:: row-3 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between flex-wrap">
                            <div class="card-title mb-2 mb-sm-0">
                                Recent Donations
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                <button type="button" class="btn btn-primary-light btn-sm btn-wave">3M</button>
                                <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
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
                                            324.01B
                                        </td>
                                        <td>
                                            Mpesa
                                        </td>
                                        <td>
                                            Paid
                                        </td>
                                        <td>
                                            <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
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
                                            $149,316,232,699
                                        </td>
                                        <td>
                                            Card
                                        </td>
                                        <td>
                                            Paid
                                        </td>
                                        <td>
                                            <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
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
                                            $480,799,847
                                        </td>
                                        <td>
                                            Mpesa
                                        </td>
                                        <td>
                                            Failed
                                        </td>
                                        <td>
                                            <span class="text-success">0.45% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
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
                                            Card
                                        </td>
                                        <td>
                                            Paid
                                        </td>
                                        <td>
                                            <span class="text-success">0.97% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
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
                                            Card
                                        </td>
                                        <td>
                                            Pending
                                        </td>
                                        <td>
                                            <span class="text-success">0.93% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
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
                                            $453,601,667
                                        </td>
                                        <td>
                                            Mpesa
                                        </td>
                                        <td>
                                            Paid
                                        </td>
                                        <td>
                                            <span class="text-danger">0.49% <i class="ti ti-arrow-big-down-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
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
            <!-- End:: row-3 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection
