@extends('layout.dashboardside')

@section('title', 'Edit Product')

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
                        <li class="breadcrumb-item"><a href="{{ 'view-product' }}">Products</a></li>
                        <li class="breadcrumb-item">Edit Product</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="{{ '/view-product' }}" class="btn btn-light-brand">
                                <i class="feather-arrow-right me-2"></i>
                                <span>Back</span>
                            </a>
                            <a href="" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </a>
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
                        <div class="card invoice-container">
                            <div class="card-header">
                                <h5>Edit Product</h5>
                            </div>
                            <form action="{{ Route('updateProduct', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body p-0">
                                    <div class="px-4 g-4 mt-0 row justify-content-between">
                                        <div class="col-xl-6">
                                            <label for="title" class="form-label">Product Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Product Title" required value="{{ $product->title }}"/>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="overview" class="form-label">Product Overview
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="overview" name="overview"
                                                placeholder="Product Overview" required value="{{ $product->overview }}"/>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="description" class="form-label">Product Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea name="description" id="description" class="form-control" cols="30" rows="5"
                                                placeholder="Product Description" required>{{ $product->description }}</textarea>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="price" class="form-label">Price
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="number" class="form-control" id="price" name="price"
                                                placeholder="Price" required value="{{ $product->price }}"/>
                                        </div>
                                    </div>
                                    <hr class="border-dashed" />
                                    <div class="row px-4 mt-3 mb-4">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather-save me-2"></i>
                                                <span>Save</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
