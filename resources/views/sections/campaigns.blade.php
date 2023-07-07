@extends('layouts.main')
@section('content')

    <div class="col-xl-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Bordered Tables
                </div>
                <div class="prism-toggle">
                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Status</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>Sukuro Kim
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>kimosukuro@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Hasimna
                                </div>
                            </th>
                            <td><span class="badge bg-light text-dark">Inactive</span></td>
                            <td>hasimna2132@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>Azimo Khan
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>azimokhan421@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Samantha Julia
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">Active</span></td>
                            <td>julianasams143@gmail.com</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="javascript:void(0);" class="text-info fs-14 lh-1"><i
                                            class="ri-edit-line"></i></a>
                                    <a href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                            class="ri-delete-bin-5-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-none border-top-0">

@endsection
