@extends('layouts.auth')

@section('content')
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right">
            <!-- search form -->
            <div class="search-form">
                <form action="index.html" method="get">
                <div
                    class="input-group input-group-sm"
                    id="input-group-search"
                >
                    <input
                    type="text"
                    autocomplete="off"
                    name="query"
                    id="search-input"
                    class="form-control"
                    placeholder="Search..."
                    />
                    <div class="input-group-append">
                    <button class="btn" type="button">/</button>
                    </div>
                </div>
                </form>
                <ul class="dropdown-menu dropdown-menu-search">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Morbi leo risus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html"
                    >Dapibus ac facilisis in</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html"
                    >Porta ac consectetur ac</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Vestibulum at eros</a>
                </li>
                </ul>
            </div>

            <ul class="nav navbar-nav">
                <!-- Offcanvas -->
                <li class="custom-dropdown">
                <a
                    class="offcanvas-toggler active custom-dropdown-toggler"
                    data-offcanvas="contact-off"
                    href="javascript:"
                >
                    <i class="mdi mdi-contacts icon"></i>
                </a>
                </li>
                
                <!-- User Account -->
                <li class="dropdown user-menu">
                <button
                    class="dropdown-toggle nav-link"
                    data-toggle="dropdown"
                >
                    <img
                    src="{{ asset('assets/auth/images/user/user-xs-01.jpg') }} "
                    class="user-image rounded-circle"
                    alt="User Image"
                    />
                    <span class="d-none d-lg-inline-block">John Doe</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                    <a class="dropdown-link-item" href="user-profile.html">
                        <i class="mdi mdi-account-outline"></i>
                        <span class="nav-text">My Profile</span>
                    </a>
                    </li>
                    <li>
                    <a class="dropdown-link-item" href="email-inbox.html">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="nav-text">Message</span>
                        <span class="badge badge-pill badge-primary">24</span>
                    </a>
                    </li>
                    <li>
                    <a class="dropdown-link-item" href="user-activities.html">
                        <i class="mdi mdi-diamond-stone"></i>
                        <span class="nav-text">Activitise</span></a
                    >
                    </li>
                    <li>
                    <a
                        class="dropdown-link-item"
                        href="user-account-settings.html"
                    >
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Account Setting</span>
                    </a>
                    </li>

                    <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="sign-in.html">
                        <i class="mdi mdi-logout"></i> Log Out
                    </a>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </nav>
        </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$18,699</h2>
                    <div class="dropdown">
                    <a
                        class="dropdown-toggle icon-burger-mini"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                    </a>

                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                    >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                        >Something else here</a
                        >
                    </div>
                    </div>
                    <div class="sub-title">
                    <span class="mr-1">Sales of this year</span> |
                    <span class="mx-1">45%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div>
                        <div id="spline-area-1"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$14,500</h2>
                    <div class="dropdown">
                    <a
                        class="dropdown-toggle icon-burger-mini"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                    </a>

                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                    >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                        >Something else here</a
                        >
                    </div>
                    </div>
                    <div class="sub-title">
                    <span class="mr-1">Expense of this year</span> |
                    <span class="mx-1">50%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div>
                        <div id="spline-area-2"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$4199</h2>
                    <div class="dropdown">
                    <a
                        class="dropdown-toggle icon-burger-mini"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                    </a>

                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                    >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                        >Something else here</a
                        >
                    </div>
                    </div>
                    <div class="sub-title">
                    <span class="mr-1">Profit of this year</span> |
                    <span class="mx-1">20%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div>
                        <div id="spline-area-3"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>$20,199</h2>
                    <div class="dropdown">
                    <a
                        class="dropdown-toggle icon-burger-mini"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                    </a>

                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                    >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                        >Something else here</a
                        >
                    </div>
                    </div>
                    <div class="sub-title">
                    <span class="mr-1">Revenue of this year</span> |
                    <span class="mx-1">35%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div>
                        <div id="spline-area-4"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Stock Modal -->
            <div
            class="modal fade modal-stock"
            id="modal-stock"
            aria-labelledby="modal-stock"
            aria-hidden="true"
            >
            <div
                class="modal-dialog modal-xl modal-dialog-centered"
                role="document"
            >
                <form action="#">
                <div class="modal-content">
                    <div class="modal-header align-items-center p3 p-md-5">
                    <h2 class="modal-title" id="exampleModalGridTitle">
                        Add Stock
                    </h2>
                    <div>
                        <button
                        type="button"
                        class="btn btn-light btn-pill mr-1 mr-md-2"
                        data-dismiss="modal"
                        >
                        cancel
                        </button>
                        <button
                        type="submit"
                        class="btn btn-primary btn-pill"
                        data-dismiss="modal"
                        >
                        save
                        </button>
                    </div>
                    </div>
                    <div class="modal-body p3 p-md-5">
                    <div class="row">
                        <div class="col-lg-8">
                        <h3 class="h5 mb-5">Product Information</h3>
                        <div class="form-group mb-5">
                            <label for="new-product">Product Title</label>
                            <input
                            type="text"
                            class="form-control"
                            id="new-product"
                            placeholder="Add Product"
                            />
                        </div>
                        <div class="form-row mb-4">
                            <div class="col">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span
                                    class="input-group-text"
                                    id="basic-addon1"
                                    >$</span
                                >
                                </div>
                                <input
                                type="text"
                                class="form-control"
                                id="price"
                                placeholder="Price"
                                aria-label="Price"
                                aria-describedby="basic-addon1"
                                />
                            </div>
                            </div>
                            <div class="col">
                            <label for="sale-price">Sale Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span
                                    class="input-group-text"
                                    id="basic-addon1"
                                    >$</span
                                >
                                </div>
                                <input
                                type="text"
                                class="form-control"
                                id="sale-price"
                                placeholder="Sale Price"
                                aria-label="SalePrice"
                                aria-describedby="basic-addon1"
                                />
                            </div>
                            </div>
                        </div>

                        <div class="product-type mb-3">
                            <label class="d-block" for="sale-price"
                            >Product Type
                            <i class="mdi mdi-help-circle-outline"></i>
                            </label>
                            <div>
                            <div
                                class="custom-control custom-radio d-inline-block mr-3 mb-3"
                            >
                                <input
                                type="radio"
                                id="customRadio1"
                                name="customRadio"
                                class="custom-control-input"
                                checked="checked"
                                />
                                <label
                                class="custom-control-label"
                                for="customRadio1"
                                >Physical Good</label
                                >
                            </div>

                            <div
                                class="custom-control custom-radio d-inline-block mr-3 mb-3"
                            >
                                <input
                                type="radio"
                                id="customRadio2"
                                name="customRadio"
                                class="custom-control-input"
                                />
                                <label
                                class="custom-control-label"
                                for="customRadio2"
                                >Digital Good</label
                                >
                            </div>

                            <div
                                class="custom-control custom-radio d-inline-block mr-3 mb-3"
                            >
                                <input
                                type="radio"
                                id="customRadio3"
                                name="customRadio"
                                class="custom-control-input"
                                />
                                <label
                                class="custom-control-label"
                                for="customRadio3"
                                >Service</label
                                >
                            </div>
                            </div>
                        </div>

                        <div class="editor">
                            <label class="d-block" for="sale-price"
                            >Description
                            <i class="mdi mdi-help-circle-outline"></i
                            ></label>
                            <div id="standalone">
                            <div id="toolbar">
                                <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size"></select>
                                </span>
                                <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                </span>
                                <span class="ql-formats">
                                <select class="ql-color"></select>
                                </span>
                                <span class="ql-formats">
                                <button class="ql-blockquote"></button>
                                </span>
                                <span class="ql-formats">
                                <button
                                    class="ql-list"
                                    value="ordered"
                                ></button>
                                <button
                                    class="ql-list"
                                    value="bullet"
                                ></button>
                                <button class="ql-indent" value="-1"></button>
                                <button class="ql-indent" value="+1"></button>
                                </span>
                                <span class="ql-formats">
                                <button
                                    class="ql-direction"
                                    value="rtl"
                                ></button>
                                <select class="ql-align"></select>
                                </span>
                            </div>
                            </div>
                            <div id="editor"></div>

                            <div
                            class="custom-control custom-checkbox d-inline-block mt-2"
                            >
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="customCheck2"
                            />
                            <label
                                class="custom-control-label"
                                for="customCheck2"
                                >Hide product from published site</label
                            >
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="custom-file">
                            <input
                            type="file"
                            class="custom-file-input"
                            id="customFile"
                            placeholder="please imgae here"
                            />
                            <span class="upload-image"
                            >Click here to
                            <span class="text-primary"
                                >add product image.</span
                            >
                            </span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

        <!-- Footer -->
        <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
            &copy; <span id="copy-year"></span> Copyright Mono Dashboard
            Bootstrap Template by
            <a
                class="text-primary"
                href="http://www.iamabdus.com/"
                target="_blank"
                >Abdus</a
            >.
            </p>
        </div>
        <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;
        </script>
        </footer>
    </div>
@endsection