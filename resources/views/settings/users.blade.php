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
                                <button class="btn btn-info dropdown-toggle" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                    EXPORT
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Pdf</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Excel</a></li>

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
                                               for="specificSizeSelect">Status</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Status...</option>
                                            <option value="1">Paid</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Failed</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">Currency</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Currency...</option>
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
                                            <th scope="col">USERNAME</th>
                                            <th scope="col">FULLNAME</th>
                                            <th scope="col">AUTH KEY</th>
                                            <th scope="col">PASSWORD HASH</th>
                                            <th scope="col">PASSWORD RESET TOKEN</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">PHONE</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">ROLE</th>
                                            <th scope="col">CREATED AT</th>
                                            <th scope="col">UPDATED AT</th>
                                            <th scope="col">VERIFICATION TOKEN</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->fullname}}</td>
                                                <td>{{$user->auth_key}}</td>
                                                <td>{{$user->password_hash}}</td>
                                                <td>{{$user->password_reset_token}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->status == 1 ? 'Available ': 'Not available '}}</td>
                                                <td>{{$user->role == 1 ? 'Admin ': 'User '}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>{{$user->updated_at}}</td>
                                                <td>{{$user->verification_token}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-11 -->


            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
    </div>



@endsection

