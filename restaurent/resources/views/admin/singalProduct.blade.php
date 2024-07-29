@extends('layout.dashboardside')

@section('title', 'Singal Product')

@section('content')



    {{--  <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->  --}}
    <main class="nxl-container">
        <div class="nxl-content">
            {{--  <!-- [ page-header ] start -->  --}}
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"><a href="">Home</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/view-product' }}">Products</a></li>
                        <li class="breadcrumb-item">View Product</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="{{ '/view-product' }}" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="{{ '/view-product' }}" class="btn btn-light-brand">
                                <i class="feather-arrow-right me-2"></i>
                                <span>Back</span>
                            </a>
                            {{--  <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </a>  --}}
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            {{--  <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->  --}}
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card stretch stretch-full">
                            <h2 class="card-header">View Product</h2>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Title</label>
                                        <p>{{ $product->title }}</p>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Description</label>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Overview</label>
                                        <p>{{ $product->overview }}</p>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Price</label>
                                        <p>{{ $product->price }}</p>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label">Created Date</label>
                                        <p>{{ $product->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <!-- [ Main Content ] end -->  --}}
        </div>
        {{--  <!-- [ Footer ] start -->  --}}
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </footer>
        {{--  <!-- [ Footer ] end -->  --}}
    </main>
    {{--  <!--! ================================================================ !-->
<!--! [End] Main Content !-->
<!--! ================================================================ !-->  --}}




@endsection
