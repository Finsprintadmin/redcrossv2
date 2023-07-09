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
                                                        <img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
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
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$35,876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 55,876.29</p>
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
                                                        <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                    </span>
                                            </div>
                                            <div class="mb-0 fw-semibold">
                                                Weekly Donations
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div id="eth-chart"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$35,876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 55,876.29</p>
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
                                                        <img src="../assets/images/crypto-currencies/regular/Dash.svg" alt="">
                                                    </span>
                                            </div>
                                            <div class="mb-0 fw-semibold">
                                                Monthly Donations
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div id="dash-chart"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$35,876.29</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES 55,876.29</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Revenue Analytics
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

                            <div class="col-xxl-6 col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Candidates</div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="candidates-chart" class="p-3"></div>
                                        <div class="row row-cols-12 border-top border-block-start-dashed">
                                            <div class="col">
                                                <div class="p-3 border-end border-inline-end-dashed">
                                                    <div class="text-muted fs-12 text-center mb-1">Male Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center"> <span
                                                            class="me-3 fs-26 fw-semibold">1,234</span> <span
                                                            class="text-success fw-semibold"><i
                                                                class="ri-arrow-up-s-fill align-middle me-1"></i>0.23%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3">
                                                    <div class="text-muted fs-12 text-center mb-1">Female Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center"> <span
                                                            class="me-3 fs-26 fw-semibold">1,754</span> <span
                                                            class="text-danger fw-semibold"><i
                                                                class="ri-arrow-down-s-fill align-middle me-1"></i>0.11%</span> </div>
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

                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Your target is incomplete</div>
                                                <span class="d-block fs-12 text-fixed-white"><span class="op-7">You have completed</span> <span class="fw-semibold text-warning">48%</span> <span class="op-7">of the given target, you can also check your status</span>.</span>
                                                <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="javascript:void(0);"><u>Click here</u></a></span>
                                            </div>
                                            <div>
                                                <div id="crm-main"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card crm-highlight-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="fw-semibold fs-18 text-fixed-white mb-2">Your target is incomplete</div>
                                            <span class="d-block fs-12 text-fixed-white"><span class="op-7">You have completed</span> <span class="fw-semibold text-warning">48%</span> <span class="op-7">of the given target, you can also check your status</span>.</span>
                                            <span class="d-block fw-semibold mt-1"><a class="text-fixed-white" href="javascript:void(0);"><u>Click here</u></a></span>
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
                                Crypto currencies Market Value
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
                                        <th scope="col">Symbol</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Market Cap</th>
                                        <th scope="col">Price Graph</th>
                                        <th scope="col">Volume</th>
                                        <th scope="col">Price Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bitcoin</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
                                                        </span> - BTC
                                            </div>
                                        </td>
                                        <td>
                                            $16,839.10
                                        </td>
                                        <td>
                                            324.01B
                                        </td>
                                        <td>
                                            <div id="bitcoin-price-graph"></div>
                                        </td>
                                        <td>
                                            14,674,311,168
                                        </td>
                                        <td>
                                            <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Etherium</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                        </span> - ETH
                                            </div>
                                        </td>
                                        <td>
                                            1,217.96
                                        </td>
                                        <td>
                                            $149,316,232,699
                                        </td>
                                        <td>
                                            <div id="etherium-price-graph"></div>
                                        </td>
                                        <td>
                                            $4,758,554,801
                                        </td>
                                        <td>
                                            <span class="text-success">0.30% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dash</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Dash.svg" alt="">
                                                        </span> - DASH
                                            </div>
                                        </td>
                                        <td>
                                            $43.49
                                        </td>
                                        <td>
                                            $480,799,847
                                        </td>
                                        <td>
                                            <div id="dash-price-graph"></div>
                                        </td>
                                        <td>
                                            $52,626,563
                                        </td>
                                        <td>
                                            <span class="text-success">0.45% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ripple</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span> - XRP
                                            </div>
                                        </td>
                                        <td>
                                            $0.3531
                                        </td>
                                        <td>
                                            $17,791,969,465
                                        </td>
                                        <td>
                                            <div id="ripple-price-graph"></div>
                                        </td>
                                        <td>
                                            $511,598,941
                                        </td>
                                        <td>
                                            <span class="text-success">0.97% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Iota</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/IOTA.svg" alt="">
                                                        </span> - IOTA
                                            </div>
                                        </td>
                                        <td>
                                            $0.169741
                                        </td>
                                        <td>
                                            $471,800,600
                                        </td>
                                        <td>
                                            <div id="iota-price-graph"></div>
                                        </td>
                                        <td>
                                            $5,524,385
                                        </td>
                                        <td>
                                            <span class="text-success">0.93% <i class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Neo</td>
                                        <td>
                                            <div class="lh-1 d-flex align-items-center">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="../assets/images/crypto-currencies/regular/Neo.svg" alt="">
                                                        </span> - NEO
                                            </div>
                                        </td>
                                        <td>
                                            $6.43
                                        </td>
                                        <td>
                                            $453,601,667
                                        </td>
                                        <td>
                                            <div id="neo-price-graph"></div>
                                        </td>
                                        <td>
                                            $12,904,320
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
                                                            <p class="text-muted mb-0">Total Customers</p>
                                                            <h4 class="fw-semibold mt-1">1,02,890</h4>
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
                                                            <p class="text-muted mb-0">Total Revenue</p>
                                                            <h4 class="fw-semibold mt-1">$56,562</h4>
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
                                                            <p class="text-muted mb-0">Conversion Ratio</p>
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
                                                            <p class="text-muted mb-0">Total Deals</p>
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
