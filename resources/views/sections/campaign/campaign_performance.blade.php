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
                    <div>
                        <ul class="list-unstyled files-main-nav" id="files-main-nav">
                            <li class="active files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Kilifi Floods
                                                </span>
                                        {{--                                        <span class="badge bg-primary">322</span>--}}
                                    </div>
                                </a>
                            </li>
                            <li class="files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Where it Matters
                                                </span>
                                    </div>
                                </a>
                            </li>
                            <li class="files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Kwale Drought
                                                </span>
                                    </div>
                                </a>
                            </li>
                            <li class="files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Nairobi Demonstrations
                                                </span>
                                    </div>
                                </a>
                            </li>
                            <li class="files-type">
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Blood Donation Drive
                                                </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Medical Equipments Donations
                                                </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="ri-folder-2-line fs-16"></i>
                                        </div>
                                        <span class="flex-fill text-nowrap">
                                                    Linda Mama
                                                </span>
                                    </div>
                                </a>
                            </li>



                            {{--                            <li class="d-flex align-items-center justify-content-center">--}}
                            {{--                                <div class="filemanager-upgrade-storage">--}}
                            {{--                                            <span>--}}
                            {{--                                                <img src="../assets/images/media/file-manager/2.png" alt="">--}}
                            {{--                                            </span>--}}
                            {{--                                    <div class="text-default">--}}
                            {{--                                        <span class="fs-15 fw-semibold">Want to <span class="fw-bold text-success"><u>Buy</u></span> Storage?</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="mt-3 d-grid">--}}
                            {{--                                        <button class="btn btn-primary-gradient">Upgrade</button>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="file-manager-folders">
                    <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">{{$campaign->name}}</h6>
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
                                            <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="create-folder1" class="form-label">Folder Name</label>
                                            <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                            <button type="button" class="btn btn-sm btn-success">Create</button>
                                        </div>
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
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

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
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

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
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

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
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

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
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

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
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

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
                                    <p class="mb-0 fw-bold fs-14">Recent Transaction Under This Campaign</p>

                                </div>

                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="table-responsive border border-bottom-0">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Date Modified</th>
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
                                                                VID-00292312-SPK823.mp4
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Videos</td>
                                                    <td>87MB</td>
                                                    <td>22,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                IMG-09123878-SPK734.jpeg
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Images</td>
                                                    <td>1.35MB</td>
                                                    <td>25,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                AMB-2012.zip
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                AUD-1002-2012.mp3
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">

                                                            </div>
                                                            <div>
                                                                Document-02.pdf
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Documents</td>
                                                    <td>1.69MB</td>
                                                    <td>2,Dec 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
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

                    <div class="col-xxl-6 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Overall Donations</div>
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
                                <div class="p-3"></div>
                                <div class="row row-cols-12 border-top border-block-start-dashed">
                                    <div class="col">
                                        <div class="p-3 border-end border-inline-end-dashed">
                                            <div class="text-muted fs-12 text-center mb-1">USD
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center"> <span
                                                    class="me-3 fs-26 fw-semibold">100,234</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-3">
                                            <div class="text-muted fs-12 text-center mb-1">KES
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span class="me-3 fs-26 fw-semibold">1,800,754</span>
                                            </div>
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
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">8%</div>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Mpesa
                                        <span class="badge float-end bg-success-transparent">KES.301,982</span>
                                    </li>
                                    <li class="list-group-item">
                                        Airtel Money
                                        <span class="badge float-end bg-primary-transparent">KES.128,214</span>
                                    </li>
                                    <li class="list-group-item">
                                        T-Kash
                                        <span class="badge float-end bg-secondary-transparent">KES.45,262</span>
                                    </li>
                                    <li class="list-group-item">
                                        Card Local
                                        <span class="badge float-end bg-warning-transparent">KES.32,395</span>
                                    </li>
                                    <li class="list-group-item">
                                        Card International
                                        <span class="badge float-end bg-danger-transparent">$8,879</span>
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
