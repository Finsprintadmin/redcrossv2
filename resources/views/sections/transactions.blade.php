@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Transactions</h1>
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
                                        <input type="text" class="form-control" name="q"  value="{{$filters['q'] ?? ''}}" id="specificSizeInputName"
                                               placeholder="Type Here">
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden" for="specificSizeSelect">Status</label>
                                        <select class="form-select" name="status" id="specificSizeSelect">
                                            <option value="" selected>Status...</option>
                                            <option value="1">Paid</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Failed</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">Currency</label>
                                        <select class="form-select" name="currency" id="specificSizeSelect">
                                            <option value="" selected>Currency...</option>
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
                                                    <input type="date" class="form-control"  value="{{$filters['start_date'] ?? ''}}" name="start_date" id="humanfrienndlydate" placeholder="From">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="date" class="form-control" name="end_date" value="{{$filters['end_date'] ?? ''}}" id="humanfrienndlydate" placeholder="To">
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

                <!-- Start:: row-11 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">campaign_id</th>
                                            <th scope="col">donor_id</th>
                                            <th scope="col">currency_id</th>
                                            <th scope="col">payment_method_id</th>
                                            <th scope="col">pledge_id</th>
                                            <th scope="col">payment_reference</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">gateway</th>
                                            <th scope="col">payment_date</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transactions as $transaction)
                                            <tr>
                                                <td>{{$transaction->id}}</td>
                                                <td>{{$transaction->campaign_id}}</td>
                                                <td>{{$transaction->donor_id}}</td>
                                                <td>{{$transaction->currency_id}}</td>
                                                <td>{{$transaction->payment_method_id }}</td>
                                                <td>{{$transaction->pledge_id}}</td>
                                                <td>{{$transaction->payment_reference }}</td>
                                                <td>{{$transaction->amount}}</td>
                                                <td>{{$transaction->gateway}}</td>
                                                <td>{{$transaction->payment_date}}</td>
                                                <td>{{$transaction->status}}</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor"  class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="card-footer border-top-0">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div>
                                                Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                            </div>
                                            <div>
                                                {{ $paginateTransactions->links('vendor.pagination.custom') }}
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
        <!--APP-CONTENT CLOSE-->
    </div>

@endsection

