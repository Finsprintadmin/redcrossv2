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
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div>
                                        <div class="mb-1">Wallet Value<span class="fs-10 badge bg-success-transparent text-success p-1 ms-2"><i class="ri-arrow-up-s-line align-middle me-1"></i>12.2%</span></div>
                                        <div class="fs-20 fw-semibold">$132,12933.000</div>
                                        <small class="text-muted fw-semibold">12 BTC</small>
                                    </div>
                                    <div class="ms-auto">
                                            <span class="avatar avatar-xxl">
                                                <img class="buy-sell-image" src="../assets/images/media/media-82.png" alt="">
                                            </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block nav-justified" role="tablist">
                                        <li class="nav-item me-sm-2 me-0">
                                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#buy-crypto"
                                               aria-current="page" href="#buy-crypto">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sell-crypto"
                                               href="#sell-crypto">Sell</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane border-0 active p-0" id="buy-crypto" role="tabpanel"
                                             aria-labelledby="buy-crypto">
                                            <div class="input-group mb-3 d-sm-flex d-block flex-nowrap">
                                                <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Select Currency">
                                                <select class="form-control" data-trigger id="choices-single-default">
                                                    <option value="">BTC</option>
                                                    <option value="Choice 1">ETH</option>
                                                    <option value="Choice 2">XRP</option>
                                                    <option value="Choice 3">DASH</option>
                                                    <option value="Choice 4">NEO</option>
                                                    <option value="Choice 5">LTC</option>
                                                    <option value="Choice 6">BSD</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3 d-sm-flex d-block flex-nowrap">
                                                <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="36,335.00">
                                                <select class="form-control" data-trigger id="choices-single-default1">
                                                    <option value="">USD</option>
                                                    <option value="Choice 1">AED</option>
                                                    <option value="Choice 2">AUD</option>
                                                    <option value="Choice 3">ARS</option>
                                                    <option value="Choice 4">AZN</option>
                                                    <option value="Choice 5">BGN</option>
                                                    <option value="Choice 6">BRL</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div class="fs-14 py-2"><span class="fw-semibold text-dark">Price:</span><span class="text-muted ms-2 fs-14 d-inline-block">6.003435</span><span class="text-dark fw-semibold float-end">BTC</span></div>
                                                <div class="fs-14 py-2"><span class="fw-semibold text-dark">Amount:</span><span class="text-muted ms-2 fs-14 d-inline-block">2,34,4543.00</span><span class="text-dark fw-semibold float-end">LTC</span></div>
                                                <div class="fw-semibold fs-14 py-2">Total: <span class="fs-14 d-inline-block">22.00 BTC</span></div>
                                                <div class="fs-12 text-success">Additional Charges: 0.32%(0.0001231 BTC)</div>
                                                <label class="fw-semibold fs-12 mt-4 mb-2">SELECT PAYMENT METHOD :</label>
                                                <div class="row g-2">
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                <label class="form-check-label fs-12" for="flexRadioDefault1">
                                                                    Credit / Debit Cards
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label fs-12" for="flexRadioDefault2">
                                                                    Paypal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4 pt-2">
                                                <button type="button" class="btn btn-primary btn-wave btn-lg">BUY</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane border-0 p-0" id="sell-crypto" role="tabpanel"
                                             aria-labelledby="sell-crypto">
                                            <div class="input-group mb-3 d-sm-flex d-block flex-nowrap">
                                                <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Select Currency">
                                                <select class="form-control" data-trigger id="choices-single-default2">
                                                    <option value="">BTC</option>
                                                    <option value="Choice 1">ETH</option>
                                                    <option value="Choice 2">XRP</option>
                                                    <option value="Choice 3">DASH</option>
                                                    <option value="Choice 4">NEO</option>
                                                    <option value="Choice 5">LTC</option>
                                                    <option value="Choice 6">BSD</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3 d-sm-flex d-block flex-nowrap">
                                                <input type="text" class="form-control form-control-sm crypto-buy-sell-input" aria-label="crypto buy select" placeholder="36,335.00">
                                                <select class="form-control" data-trigger id="choices-single-default3">
                                                    <option value="">USD</option>
                                                    <option value="Choice 1">AED</option>
                                                    <option value="Choice 2">AUD</option>
                                                    <option value="Choice 3">ARS</option>
                                                    <option value="Choice 4">AZN</option>
                                                    <option value="Choice 5">BGN</option>
                                                    <option value="Choice 6">BRL</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div class="fs-14 py-2"><span class="fw-semibold text-dark">Price:</span><span class="text-muted ms-2 fs-14">6.003435</span><span class="text-dark fw-semibold float-end">BTC</span></div>
                                                <div class="fs-14 py-2"><span class="fw-semibold text-dark">Amount:</span><span class="text-muted ms-2 fs-14">2,34,4543.00</span><span class="text-dark fw-semibold float-end">LTC</span></div>
                                                <div class="fw-semibold fs-14 py-2">Total: <span class="fs-14">22.00 BTC</span></div>
                                                <div class="fs-12 text-success">Additional Charges: 0.32%(0.0001231 BTC)</div>
                                                <label class="fw-semibold fs-12 mt-4 mb-2">SELECT PAYMENT METHOD :</label>
                                                <div class="row g-2">
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="sellcrypto" id="sellcrypto1">
                                                                <label class="form-check-label fs-12" for="sellcrypto1">
                                                                    Credit / Debit Cards
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="sellcrypto" id="sellcrypto2" checked>
                                                                <label class="form-check-label fs-12" for="sellcrypto2">
                                                                    Paypal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4 pt-2">
                                                <button type="button" class="btn btn-danger btn-wave btn-lg">SELL</button>
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

        </div>
    </div>
    <!-- End::app-content -->

@endsection
