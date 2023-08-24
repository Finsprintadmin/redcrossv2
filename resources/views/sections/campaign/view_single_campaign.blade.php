@extends('layouts.main')
@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="file-manager-container p-2 gap-2 d-sm-flex">
                <div class="file-manager-navigation">
                    <div class="d-flex align-items-center justify-content-between w-100 p-3 border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">Campaigns</h6>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-settings-3-line"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hidden Files</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0" placeholder="Search Files" aria-describedby="button-addon2">
                            <button class="btn btn-light" type="button" id="button-addon2"><i class="ri-search-line text-muted"></i></button>
                        </div>
                    </div>

                    @foreach($campaigns as $data)
                    <div>

                        <ul class="list-unstyled files-main-nav" id="files-main-nav">
                            <li class="active files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap"> {{$data -> campaign_name}} </span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                    @endforeach
                </div>
                <div class="file-manager-folders">
                    <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">{{$dan -> campaign_name}}</h6>
                        </div>
                        <div class="d-flex gap-2">
                            <button id="folders-close-btn" class="d-sm-none d-block btn btn-icon btn-sm btn-danger-light">
                                <i class="ri-close-fill"></i>
                            </button>
                            <button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create-folder">
                                <i class="ri-add-circle-line align-middle me-1"></i>Create Campaign
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
                                                            <input type="text" class="form-control" name="start_date" placeholder="Choose date and time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">End Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control" name="end_date" placeholder="Choose date and time">
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
                    <div class="p-3 file-folders-container" id="file-folders-container">

                        <div class="row mb-3">
                            <div class="p-3 file-folders-container" id="file-folders-container">

                                <!-- Start::row-3 -->
                                <div class="row">
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">Today`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. {{$campaign_amount_usd}} </p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. {{$campaign_amount_kes}} </p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">This Week`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. {{$campaign_amount_usd_week}} </p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. {{$campaign_amount_kes_week}} </p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">This Month`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. {{$campaign_amount_usd_month}}</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. {{$campaign_amount_kes_month}} </p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End::row-3 -->

                                <!-- Start::row-3 -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Campaign Overview</div>
                                            </div>
                                            <div class="card-body">
                                                <div id="views"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End::row-3 -->
                                <div class="d-flex mb-3 align-items-center justify-content-between">
                                    <p class="mb-0 fw-bold fs-14">Recent Transactions Under This Campaign</p>

                                </div>

                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="table-responsive border border-bottom-0">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Name of Donor</th>
                                                    <th scope="col">Currency</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="files-list">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Mokaya Duncan
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="text-primary">KES</td>
                                                    <td>20000</td>
                                                    <td class="text-success">Paid</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Mokaya Duncan
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="text-purple">USD</td>
                                                    <td>20000</td>
                                                    <td class="text-success">Paid</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Mokaya Duncan
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="text-purple">USD</td>
                                                    <td>20000</td>
                                                    <td class="text-warning">Pending</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Mokaya Duncan
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="text-primary">KES</td>
                                                    <td>20000</td>
                                                    <td class="text-success">Paid</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Mokaya Duncan
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="text-primary">KES</td>
                                                    <td>20000</td>
                                                    <td class="text-success">Paid</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="5">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-end mb-0">
                                                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                            </ul>
                                                        </nav>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected-file-details">

                    <div class="col-xxl-12 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    This Year's Overall Donations
                                </div>
                            </div>
                            <div class="card-body my-2 py-4">
                                <div id="donut-update"></div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="row row-cols-12 justify-content-center">
                                    <div class="col pe-0 text-center">
                                        <div class="p-sm-3 p-2 ">
                                            <span class="text-muted fs-11">KES</span>
                                            <span class="d-block fs-16 fw-semibold">KES.{{ $campaign_amount_kes_year}}</span>
                                        </div>
                                    </div>
                                    <div class="col px-0 text-center">
                                        <div class="p-sm-3 p-2 ">
                                            <span class="text-muted fs-11">USD</span>
                                            <span class="d-block fs-16 fw-semibold">$ {{ $campaign_amount_usd_year}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Donations by Payment Methods
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="progress progress-lg mb-4">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">20%</div>

                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Mpesa
                                        <span class="badge float-end bg-success-transparent">KES.{{$campaign_amount_mpesa}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Airtel Money
                                        <span class="badge float-end bg-primary-transparent">KES.{{$campaign_amount_airtelMoney}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Card Local
                                        <span class="badge float-end bg-warning-transparent">KES.{{$campaign_amount_cardLocal}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Card International
                                        <span class="badge float-end bg-info-transparent">$ {{$campaign_amount_cardInternational}}</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::app-content -->


@endsection
