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
{{--                                             <div>--}}
{{--                                                 <span class="fs-14 fw-semibold text-success">200</span>--}}
{{--                                             </div>--}}
                                        </div>
                                        <div class="ms-auto">
                                            <div id="crm-total-deals"></div>

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$ {{$amount_usd}}</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES. {{$amount_kes}}</p>
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
{{--                                            <div>--}}
{{--                                                <span class="fs-14 fw-semibold text-success">3000</span>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="ms-auto">
                                            <div id="crm-conversion-ratio"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$ {{$amount_usd_week}}</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES {{$amount_kes_week}}</p>
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
{{--                                            <div>--}}
{{--                                                <span class="fs-14 fw-semibold text-success">40000</span>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="ms-auto">
                                             <div id="crm-total-revenue"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="mb-1 text-center">USD</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">$ {{$amount_usd_month}}</p>
                                        </div>
                                        <div class="ms-auto text-center">
                                            <p class="mb-1">KES</p>
                                            <p class="fs-20 mb-0 fw-semibold lh-1 text-primary">KES. {{$amount_kes_month}}</p>
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
                                            Overall Quarterly Donations
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
                                                    <div><span class="fs-16 fw-semibold">{{$amount_usd_quarterly}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0">
                                                <div class="p-3 text-center">
                                                    <span class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">KES
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">{{$amount_kes_quarterly}}</span></div>
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

                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Pledge Conversion</div>
                                                <span class="d-block fs-12 text-fixed-white"><span class="op-7">Check the percentage of Pledges</span> <span class="fw-semibold text-warning"></span> <span class="op-7">which have been converted within the last 24hrs</span>.</span>
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
                                <button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light" data-bs-toggle="modal" data-bs-target="#create-folder">
                                    <i class="ri-add-circle-line align-middle me-1"></i>Add Campaign
                                </button>
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
                                        <form method="post" action="{{route('save_campaign_modal')}}">
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
                                            <th scope="col">Amount (KES)</th>
                                            <th scope="col">Amount (USD)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($campaigns as $campaign)
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>{{$campaign->campaign_name}}</td>

                                            <td>
                                                <span class="badge bg-dark">KES.0</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary">$.0</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="{{route('show_single_campaign',$campaign->id)}}"  class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                            @endforeach

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
                                            <th scope="col">Amount(KES)</th>
                                            <th scope="col">Amount(USD)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($campaigns as $campaign)
                                        <tr>
                                            <td class="text-center">
                                                            <span>
                                                                <input class="form-check-input" type="checkbox" id="check1" value="" aria-label="...">
                                                            </span>
                                            </td>
                                            <td>{{$campaign->campaign_name}}</td>

                                            <td>
                                                <span class="badge bg-dark">KES.0</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary">$. 0</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="{{route('show_single_campaign',$campaign->id)}}"  class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

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
                                {{ $campaigns->links('vendor.pagination.custom') }}
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
                                                <span class="fw-semibold text-success fs-15 mb-0 ms-1">KES</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <span class="fw-semibold">{{$amount_campaign_kes_minute}}</span>
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
                                                <span class="fw-semibold text-info fs-15 mb-0 ms-1">USD</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="fw-semibold">{{$amount_campaign_usd_minute}}</span>
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
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Top Donor Countries</div>
                        </div>
                        <div class="card-body">
                            <div id="marker-map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Donations by Payment Methods
                        </div>
                    </div>
                    <div class="card-body my-2 py-4">
                        <div id="donut-update"></div>
                    </div>
                    <div class="card-footer p-0">
                        <div class="row row-cols-12 justify-content-center">
                            <div class="col pe-0 text-center">
                                <div class="p-sm-3 p-2 ">
                                    <span class="text-muted fs-11">Mpesa</span>
                                    <span class="d-block fs-16 fw-semibold">KES.{{$amount_overall_mpesa}}</span>
                                </div>
                            </div>
                            <div class="col px-0 text-center">
                                <div class="p-sm-3 p-2 ">
                                    <span class="text-muted fs-11">Airtel Money</span>
                                    <span class="d-block fs-16 fw-semibold">KES.{{$amount_overall_airtelMoney}}</span>
                                </div>
                            </div>
                            <div class="col px-0 text-center">
                                <div class="p-sm-3 p-2 ">
                                    <span class="text-muted fs-11">Card</span>
                                    <span class="d-block fs-16 fw-semibold">KES.{{$amount_overall_cardLocal}}</span>
                                </div>
                            </div>
                            <div class="col px-0 text-center">
                                <div class="p-sm-3 p-2">
                                    <span class="text-muted fs-11">Card</span>
                                    <span class="d-block fs-16 fw-semibold">USD.{{$amount_overall_cardInternational}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Top Donor Counties</div>
                        </div>
                        <div class="card-body">
                            <div id="lines-map"></div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-xl-4">--}}
{{--                <div class="card custom-card overflow-hidden">--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="card-title">--}}
{{--                            Top Donor Counties--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body p-0">--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table text-nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">Country</th>--}}
{{--                                    <th scope="col">Amount</th>--}}
{{--                                    <th scope="col">Amount</th>--}}
{{--                                    <th scope="col">Action</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        <div class="d-flex align-items-center">--}}

{{--                                            <div>--}}
{{--                                                            <span class="fw-semibold">--}}
{{--                                                               Nairobi--}}
{{--                                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </th>--}}
{{--                                    <td>USD.21000</td>--}}
{{--                                    <td>KES.5555</td>--}}
{{--                                    <td>--}}
{{--                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        <div class="d-flex align-items-center">--}}

{{--                                            <div>--}}
{{--                                                            <span class="fw-semibold">--}}
{{--                                                                Nakuru--}}
{{--                                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </th>--}}
{{--                                    <td>USD.21000</td>--}}
{{--                                    <td>KES.5555</td>--}}
{{--                                    <td>--}}
{{--                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        <div class="d-flex align-items-center">--}}

{{--                                            <div>--}}
{{--                                                            <span class="fw-semibold">--}}
{{--                                                                Machakos--}}
{{--                                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </th>--}}
{{--                                    <td>USD.21000</td>--}}
{{--                                    <td>KES.5555</td>--}}
{{--                                    <td>--}}
{{--                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        <div class="d-flex align-items-center">--}}

{{--                                            <div>--}}
{{--                                                            <span class="fw-semibold">--}}
{{--                                                              Kisumu--}}
{{--                                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </th>--}}
{{--                                    <td>USD.21000</td>--}}
{{--                                    <td>KES.5555</td>--}}
{{--                                    <td>--}}
{{--                                        <button type="button" class="btn btn-danger-light btn-sm btn-border-top">View</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer border-top-0">--}}
{{--                        <div class="d-flex flex-wrap align-items-center justify-content-between">--}}
{{--                            <div>--}}
{{--                                Showing 4 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <nav aria-label="Page navigation" class="pagination-style-4">--}}
{{--                                    <ul class="pagination mb-0">--}}
{{--                                        <li class="page-item disabled">--}}
{{--                                            <a class="page-link" href="javascript:void(0);">--}}
{{--                                                Prev--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link text-primary" href="javascript:void(0);">--}}
{{--                                                next--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

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
                                    <thead class="bg-primary-transparent">
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
                                            <span class="bg-primary-transparent">Card</span>
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
                                            <span class="bg-success-transparent">Mpesa</span>
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
                                            <span class="bg-success-transparent">Mpesa</span>
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
                                            <span class="bg-primary-transparent">Card</span>
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
                                            <span class="bg-primary-transparent">Card</span>
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
                                            <span class="bg-success-transparent">Mpesa</span>
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
