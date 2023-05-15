<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <link href="../assets/libs/toastr/build/toastr.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="../assets/images/logo-text.png"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Create New <i class="fa fa-angle-down"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i class="fa fa-plus"></i
                  ></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="adnewproduct.php">New product</a></li>
                  <li><a class="dropdown-item" href="productsmanagement.php">Product management</a></li>
                  <li><hr class="dropdown-divider" /></li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="font-24 mdi mdi-comment-processing"></i>
                </a>
                <ul
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div class="">
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-calendar text-white fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Event today</h5>
                              <span class="mail-desc"
                                >Just a reminder that event</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-settings fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Settings</h5>
                              <span class="mail-desc"
                                >You can customize this template</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-account fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Pavan kumar</h5>
                              <span class="mail-desc"
                                >Just see the my admin!</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-link fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Luanch Admin</h5>
                              <span class="mail-desc"
                                >Just see the my new admin!</span
                              >
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="charts.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bar"></i
                  ><span class="hide-menu">Charts</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="widgets.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bubble"></i
                  ><span class="hide-menu">Widgets</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="tables.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-inside"></i
                  ><span class="hide-menu">Tables</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Forms </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-basic.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Form Basic </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-wizard.php" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Form Wizard </span></a
                    >
                  </li>
                </ul>
              </li>    
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pages-elements.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i
                  ><span class="hide-menu">Elements</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-move-resize-variant"></i
                  ><span class="hide-menu">Addons </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="index2.php" class="sidebar-link"
                      ><i class="mdi mdi-view-dashboard"></i
                      ><span class="hide-menu"> Dashboard-2 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.php" class="sidebar-link"
                      ><i class="mdi mdi-multiplication-box"></i
                      ><span class="hide-menu"> Gallery </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-calendar.php" class="sidebar-link"
                      ><i class="mdi mdi-calendar-check"></i
                      ><span class="hide-menu"> Calendar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-invoice.php" class="sidebar-link"
                      ><i class="mdi mdi-bulletin-board"></i
                      ><span class="hide-menu"> Invoice </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-chat.php" class="sidebar-link"
                      ><i class="mdi mdi-message-outline"></i
                      ><span class="hide-menu"> Chat Option </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Authentication </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login.php" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register.php" class="sidebar-link"
                      ><i class="mdi mdi-all-inclusive"></i
                      ><span class="hide-menu"> Register </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-alert"></i
                  ><span class="hide-menu">Errors </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="error-403.php" class="sidebar-link"
                      ><i class="mdi mdi-alert-octagon"></i
                      ><span class="hide-menu"> Error 403 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-404.php" class="sidebar-link"
                      ><i class="mdi mdi-alert-octagon"></i
                      ><span class="hide-menu"> Error 404 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-405.php" class="sidebar-link"
                      ><i class="mdi mdi-alert-octagon"></i
                      ><span class="hide-menu"> Error 405 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-500.php" class="sidebar-link"
                      ><i class="mdi mdi-alert-octagon"></i
                      ><span class="hide-menu"> Error 500 </span></a
                    >
                  </li>
                </ul>
              </li>
       
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Elements</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Badges</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Badges</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="badge bg-primary">Primary</span>
                      </td>
                      <td>
                        <code>.badge .bg-primary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-secondary">Secondary</span>
                      </td>
                      <td>
                        <code>.badge .bg-secondary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-success">Success</span>
                      </td>
                      <td>
                        <code>.badge .bg-success</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-danger">Danger</span>
                      </td>
                      <td>
                        <code>.badge .bg-danger</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-warning">Warning</span>
                      </td>
                      <td>
                        <code>.badge .bg-warning</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-info">Info</span>
                      </td>
                      <td>
                        <code>.badge .bg-info</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-light text-dark">Light</span>
                      </td>
                      <td>
                        <code>.badge .bg-light</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge bg-dark">Dark</span>
                      </td>
                      <td>
                        <code>.badge .bg-dark</code>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-body">
                  <h5 class="card-title mb-0">Pills</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Pills</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-primary"
                          >Primary</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-primary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-secondary"
                          >Secondary</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-secondary</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-success"
                          >Success</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-success</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-danger">Danger</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-danger</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-warning"
                          >Warning</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-warning</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-info">Info</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-info</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-light text-dark"
                          >Light</span
                        >
                      </td>
                      <td>
                        <code>badge rounded-pill bg-light</code>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="badge rounded-pill bg-dark">Dark</span>
                      </td>
                      <td>
                        <code>badge rounded-pill bg-dark</code>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notification</h5>
                  <div class="row">
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-success"
                        id="ts-success"
                      >
                        Success
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-info"
                        id="ts-info"
                      >
                        Info
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-warning"
                        id="ts-warning"
                      >
                        Warning
                      </button>
                    </div>
                    <div class="col-md-3 col-sm-12 d-grid">
                      <button
                        type="button"
                        class="btn btn-lg btn-outline-danger"
                        id="ts-error"
                      >
                        Error
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Icon Box</h5>
                  <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                          </h1>
                          <h6 class="text-white">Dashboard</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-success text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-areaspline"></i>
                          </h1>
                          <h6 class="text-white">Charts</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-collage"></i>
                          </h1>
                          <h6 class="text-white">Widgets</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                          </h1>
                          <h6 class="text-white">Tables</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-arrow-all"></i>
                          </h1>
                          <h6 class="text-white">Full Width</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-receipt"></i>
                          </h1>
                          <h6 class="text-white">Forms</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-relative-scale"></i>
                          </h1>
                          <h6 class="text-white">Buttons</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-pencil"></i>
                          </h1>
                          <h6 class="text-white">Elements</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-success text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-calendar-check"></i>
                          </h1>
                          <h6 class="text-white">Calnedar</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-info text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-arrow-all"></i>
                          </h1>
                          <h6 class="text-white">Full Width</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-border-outside"></i>
                          </h1>
                          <h6 class="text-white">Tables</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <div class="card card-hover">
                        <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">
                            <i class="mdi mdi-alert"></i>
                          </h1>
                          <h6 class="text-white">Errors</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Progressbar</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 50%"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 100%"
                      aria-valuenow="100"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 25%&quot;
                      aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Striped Progressbar</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped"
                      role="progressbar"
                      style="width: 10%"
                      aria-valuenow="10"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-success"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-info"
                      role="progressbar"
                      style="width: 50%"
                      aria-valuenow="50"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar progress-bar-striped bg-danger"
                      role="progressbar"
                      style="width: 100%"
                      aria-valuenow="100"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar progress-bar-striped
                      bg-success&quot; role=&quot;progressbar&quot;
                      style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot;
                      aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Multiple Bars</h5>
                  <div class="progress mt-3">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 15%"
                      aria-valuenow="15"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 30%"
                      aria-valuenow="30"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                    <div
                      class="progress-bar bg-info"
                      role="progressbar"
                      style="width: 20%"
                      aria-valuenow="20"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 15%&quot;
                      aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;div class=&quot;progress-bar bg-success&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 30%&quot;
                      aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;div class=&quot;progress-bar bg-info&quot;
                      role=&quot;progressbar&quot; style=&quot;width: 20%&quot;
                      aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot;
                      aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Animated Progress</h5>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                      "
                      style="width: 40%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-warning
                      "
                      style="width: 50%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-success
                      "
                      style="width: 60%"
                    ></div>
                  </div>
                  <div class="progress mt-3">
                    <div
                      class="
                        progress-bar progress-bar-striped progress-bar-animated
                        bg-cyan
                      "
                      style="width: 70%"
                    ></div>
                  </div>
                  <div class="mt-3">
                    <code>
                      &lt;div class=&quot;progress mt-3&quot;&gt;<br />
                      &lt;div class=&quot;progress-bar progress-bar-striped
                      progress-bar-animated bg-cyan&quot;
                      style=&quot;width:70%&quot;&gt;&lt;/div&gt;<br />
                      &lt;/div&gt;
                    </code>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Different Models</h5>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-success margin-5 text-white"
                    data-toggle="modal"
                    data-target="#Modal1"
                  >
                    View Popup
                  </button>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-warning margin-5 text-white"
                    data-toggle="modal"
                    data-target="#Modal2"
                  >
                    Alert
                  </button>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-info margin-5"
                    data-toggle="modal"
                    data-target="#Modal3"
                  >
                    Image Popup
                  </button>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal1"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true "
                  >
                    <div class="modal-dialog" role="document ">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Popup Header
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true ">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Here is the text coming you can put also image if you
                          want…
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal2"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Alert Model
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Lorem ipsum dolor sit amet...
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="Modal3"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Image Header
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img
                            src="../assets/images/background/img5.jpg"
                            width="100% "
                          />
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tooltips</h5>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Tooltip on top"
                  >
                    Tooltip on top
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="right"
                    title="Tooltip on right"
                  >
                    Tooltip on right
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom"
                    title="Tooltip on bottom"
                  >
                    Tooltip on bottom
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="Tooltip on left"
                  >
                    Tooltip on left
                  </button>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <h5 class="card-title">Default Pagination</h5>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <div class="col-md-4">
                      <h5 class="card-title">Pagination with icons</h5>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <div class="col-md-4">
                      <h5 class="card-title">Disabled & Active States</h5>
                      <nav aria-label="...">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"
                              >Previous</a
                            >
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#"
                              >2 <span class="sr-only">(current)</span></a
                            >
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Popovers</h5>
                  <div class="mt-3">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="top"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on top
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="right"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on right
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="bottom"
                      data-content="Vivamus
                                    sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on bottom
                    </button>

                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-container="body"
                      data-toggle="popover"
                      data-placement="left"
                      data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    >
                      Popover on left
                    </button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notificaion</h5>
                  <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                  </div>
                  <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                  </div>
                  <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                  </div>
                  <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                  </div>
                </div>
                <div class="card-body border-top">
                  <h5 class="card-title">Additional Content</h5>
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                  <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer so
                      that you can see how spacing within an alert works with
                      this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <script>
      $(function () {
        // Success Type
        $("#ts-success").on("click", function () {
          toastr.success("Have fun storming the castle!", "Miracle Max Says");
        });

        // Success Type
        $("#ts-info").on("click", function () {
          toastr.info(
            "We do have the Kapua suite available.",
            "Turtle Bay Resort"
          );
        });

        // Success Type
        $("#ts-warning").on("click", function () {
          toastr.warning(
            "My name is Inigo Montoya. You killed my father, prepare to die!"
          );
        });

        // Success Type
        $("#ts-error").on("click", function () {
          toastr.error(
            "I do not think that word means what you think it means.",
            "Inconceivable!"
          );
        });
      });
    </script>
  </body>
</html>
