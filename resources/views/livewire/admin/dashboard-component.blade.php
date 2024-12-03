@section('page_title')
    Dashboard
@endsection
<div>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @if (is_permitted('view_dashboard_cards'))
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row pb-1">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Orders</p>
                                                <h4 class="mb-0">1,235</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-copy-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Revenue</p>
                                                <h4 class="mb-0">$35, 723</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-archive-in font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Average Price</p>
                                                <h4 class="mb-0">$16.2</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Orders</p>
                                                <h4 class="mb-0">1,235</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-copy-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Revenue</p>
                                                <h4 class="mb-0">$35, 723</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-archive-in font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Average Price</p>
                                                <h4 class="mb-0">$16.2</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Average Price</p>
                                                <h4 class="mb-0">$16.2</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid pt-2 pb-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Orders</p>
                                                <h4 class="mb-0">1,235</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-copy-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (is_permitted('view_dashboard_transactions'))
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-start">
                                    <h5 class="card-title me-2">Visitors</h5>
                                    <div class="ms-auto">
                                        <div class="toolbar d-flex flex-wrap gap-2 text-end">
                                            <button type="button" class="btn btn-light btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm active">
                                                1Y
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <p class="text-muted mb-1">Today</p>
                                            <h5>1024</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <p class="text-muted mb-1">This Month</p>
                                            <h5>12356 <span class="text-success font-size-13">0.2 % <i
                                                        class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <p class="text-muted mb-1">This Year</p>
                                            <h5>102354 <span class="text-success font-size-13">0.1 % <i
                                                        class="mdi mdi-arrow-up ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">

                                <div class="apex-charts" data-colors='["--bs-primary", "--bs-warning"]'
                                    id="area-chart" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
