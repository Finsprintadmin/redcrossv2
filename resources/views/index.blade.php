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
                                            <div class="mb-0 fw-semibold text-end">
                                                Today's Donations
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div id="btc-chart"></div>
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
                                            <div id="eth-chart"></div>
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
                                            <div id="dash-chart"></div>
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
                                                                            <div class="leads-source-chart d-flex align-items-center justify-content-center">
                                                                                <canvas id="leads-source" class="chartjs-chart w-100 p-4"></canvas>
                                                                                <div class="lead-source-value">
                                                                                    <span class="d-block fs-14">Total</span>
                                                                                    <span class="d-block fs-25 fw-bold">4,145</span>
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

                                            <div>

                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Pledges Done Overview</div>
                                                <span class="d-block fs-12 text-fixed-white"><span class="op-7">You can check the Pledges</span> <span class="fw-semibold text-warning">48%</span> <span class="op-7">which have been done within a certain duration</span>.</span>
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

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-9 col-xl-12">
                    <div class="row">

                        <div class="col-xl-9">
                            <div class="row">
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                                            <i class="ti ti-users fs-16"></i>
                                                        </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Donors</p>
                                                            <h4 class="fw-semibold mt-1">102,890</h4>
                                                        </div>
                                                        <div id="crm-total-customers"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-primary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+40%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                            <i class="ti ti-wallet fs-16"></i>
                                                        </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Campaigns</p>
                                                            <h4 class="fw-semibold mt-1">56</h4>
                                                        </div>
                                                        <div id="crm-total-revenue"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-secondary" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+25%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-success">
                                                            <i class="ti ti-wave-square fs-16"></i>
                                                        </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Donations Ratio</p>
                                                            <h4 class="fw-semibold mt-1">12.08%</h4>
                                                        </div>
                                                        <div id="crm-conversion-ratio"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-success" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top justify-content-between">
                                                <div>
                                                        <span class="avatar avatar-md avatar-rounded bg-warning">
                                                            <i class="ti ti-briefcase fs-16"></i>
                                                        </span>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div>
                                                            <p class="text-muted mb-0">Total Pledges</p>
                                                            <h4 class="fw-semibold mt-1">2,543</h4>
                                                        </div>
                                                        <div id="crm-total-deals"></div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                                        <div>
                                                            <a class="text-warning" href="javascript:void(0);">View All<i class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success fw-semibold">+19%</p>
                                                            <span class="text-muted op-7 fs-11">this month</span>
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
                </div>

            </div>
            <!-- End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection
