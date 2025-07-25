<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."
    />
    <meta
      name="keywords"
      content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
    <link
      rel="shortcut icon"
      href="{{asset('assets/images/favicon.png')}}"
      type="image/x-icon"
    />
    <title>Riho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/font-awesome.css')}}"
    />
    <!-- ico-font-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/icofont.css')}}"
    />
    <!-- Themify icon-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/themify.css')}}"
    />
    <!-- Flag icon-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/flag-icon.css')}}"
    />
    <!-- Feather icon-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/feather-icon.css')}}"
    />
    <!-- Plugins css start-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/slick.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/slick-theme.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/scrollbar.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/animate.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/js-datatables/style.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/owlcarousel.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/vendors/animate.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/vendors/date-picker.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/vendors/dropzone.css') }}"
    />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/vendors/bootstrap.css')}}"
    />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link
      id="color"
      rel="stylesheet"
      href="{{asset('assets/css/color-1.css')}}"
      media="screen"
    />
    <!-- Responsive css-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/responsive.css')}}"
    />
    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" />

    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

  </head>
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader">
        <div class="loader4"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input
                    class="demo-input Typeahead-input form-control-plaintext w-100"
                    type="text"
                    placeholder="Search Riho .."
                    name="q"
                    title=""
                    autofocus
                  />
                  <div class="spinner-border Typeahead-spinner" role="status">
                    <span class="sr-only">Loading... </span>
                  </div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper">
              <a href="/home"
                ><img
                  class="img-fluid for-light"
                  src="{{asset('assets/images/logo/logo_dark.png')}}"
                  alt="logo-light" /><img
                  class="img-fluid for-dark"
                  src="{{asset('assets/images/logo/logo.png')}}"
                  alt="logo-dark"
              /></a>
            </div>
            <div class="toggle-sidebar">
              <i
                class="status_toggle middle sidebar-toggle"
                data-feather="align-center"
              ></i>
            </div>
          </div>
          <div
            class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0"
          >
            <div>
              <a class="toggle-sidebar" href="#">
                <i class="iconly-Category icli"> </i
              ></a>
              <div class="d-flex align-items-center gap-2">
                <h4 class="f-w-600">Welcome {{ Auth::user()->name }}</h4>
                <img
                  class="mt-0"
                  src="{{asset('assets/images/hand.gif')}}"
                  alt="hand-gif"
                />
              </div>
            </div>
            <div class="welcome-content d-xl-block d-none">
              <span class="text-truncate col-12"
                >Here’s what’s happening with your store today.
              </span>
            </div>
          </div>
          <div
            class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto"
          >
            <ul class="nav-menus">
              <li class="d-md-none d-block">
                <div class="form search-form mb-0">
                  <div class="input-group">
                    <span class="input-show">
                      <svg id="searchIcon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#search-header')}}"
                        ></use>
                      </svg>
                      <div id="searchInput">
                        <input type="search" placeholder="Search" /></div
                    ></span>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown notification-down">
                <div class="notification-box">
                  <svg>
                    <use
                      href="{{asset('assets/svg/icon-sprite.svg#notification-header')}}"
                    ></use></svg
                  ><span class="badge rounded-pill badge-secondary">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="common-space">
                        <h4 class="text-start f-w-600">Notitications</h4>
                        <div><span>4 New</span></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="notitications-bar">
                        <ul
                          class="nav nav-pills nav-primary p-0"
                          id="pills-tab"
                          role="tablist"
                        >
                          <li class="nav-item p-0">
                            <a
                              class="nav-link active"
                              id="pills-aboutus-tab"
                              data-bs-toggle="pill"
                              href="#pills-aboutus"
                              role="tab"
                              aria-controls="pills-aboutus"
                              aria-selected="true"
                              >All(3)</a
                            >
                          </li>
                          <li class="nav-item p-0">
                            <a
                              class="nav-link"
                              id="pills-blog-tab"
                              data-bs-toggle="pill"
                              href="#pills-blog"
                              role="tab"
                              aria-controls="pills-blog"
                              aria-selected="false"
                            >
                              Messages</a
                            >
                          </li>
                          <li class="nav-item p-0">
                            <a
                              class="nav-link"
                              id="pills-contactus-tab"
                              data-bs-toggle="pill"
                              href="#pills-contactus"
                              role="tab"
                              aria-controls="pills-contactus"
                              aria-selected="false"
                            >
                              Cart
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div
                            class="tab-pane fade show active"
                            id="pills-aboutus"
                            role="tabpanel"
                            aria-labelledby="pills-aboutus-tab"
                          >
                            <div class="user-message">
                              <div class="cart-dropdown notification-all">
                                <ul>
                                  <li class="pr-0 pl-0 pb-3 pt-3">
                                    <div class="media">
                                      <img
                                        class="img-fluid b-r-5 me-3 img-60"
                                        src="{{asset('assets/images/other-images/receiver-img.jpg')}}"
                                        alt=""
                                      />
                                      <div class="media-body">
                                        <a
                                          class="f-light f-w-500"
                                          href="../template/product.html"
                                          >Men Blue T-Shirt</a
                                        >
                                        <div class="qty-box">
                                          <div class="input-group">
                                            <span class="input-group-prepend">
                                              <button
                                                class="btn quantity-left-minus"
                                                type="button"
                                                data-type="minus"
                                                data-field=""
                                              >
                                                -
                                              </button></span
                                            >
                                            <input
                                              class="form-control input-number"
                                              type="text"
                                              name="quantity"
                                              value="1"
                                            /><span class="input-group-prepend">
                                              <button
                                                class="btn quantity-right-plus"
                                                type="button"
                                                data-type="plus"
                                                data-field=""
                                              >
                                                +
                                              </button></span
                                            >
                                          </div>
                                        </div>
                                        <h6 class="font-primary">$695.00</h6>
                                      </div>
                                      <div class="close-circle">
                                        <a class="bg-danger" href="#"
                                          ><i data-feather="x"></i
                                        ></a>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <ul>
                                <li>
                                  <div class="user-alerts">
                                    <img
                                      class="user-image rounded-circle img-fluid me-2"
                                      src="{{asset('assets/images/dashboard/user/5.jpg')}}"
                                      alt="user"
                                    />
                                    <div class="user-name">
                                      <div>
                                        <h6>
                                          <a
                                            class="f-w-500 f-14"
                                            href="../template/user-profile.html"
                                            >Floyd Miles</a
                                          >
                                        </h6>
                                        <span class="f-light f-w-500 f-12"
                                          >Sir, Can i remove part in
                                          des...</span
                                        >
                                      </div>
                                      <div>
                                        <svg>
                                          <use
                                            href="{{asset('assets/svg/icon-sprite.svg#more-vertical')}}"
                                          ></use>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="user-alerts">
                                    <img
                                      class="user-image rounded-circle img-fluid me-2"
                                      src="{{asset('assets/images/dashboard/user/6.jpg')}}"
                                      alt="user"
                                    />
                                    <div class="user-name">
                                      <div>
                                        <h6>
                                          <a
                                            class="f-w-500 f-14"
                                            href="../template/user-profile.html"
                                            >Dianne Russell</a
                                          >
                                        </h6>
                                        <span class="f-light f-w-500 f-12"
                                          >So, what is my next work ?</span
                                        >
                                      </div>
                                      <div>
                                        <svg>
                                          <use
                                            href="{{asset('assets/svg/icon-sprite.svg#more-vertical')}}"
                                          ></use>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div
                            class="tab-pane fade"
                            id="pills-blog"
                            role="tabpanel"
                            aria-labelledby="pills-blog-tab"
                          >
                            <div class="notification-card">
                              <ul>
                                <li
                                  class="notification d-flex w-100 justify-content-between align-items-center"
                                >
                                  <div
                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2"
                                  >
                                    <div class="user-alerts flex-shrink-0">
                                      <img
                                        class="rounded-circle img-fluid img-40"
                                        src="{{asset('assets/images/dashboard/user/3.jpg')}}"
                                        alt="user"
                                      />
                                    </div>
                                    <div class="flex-grow-1">
                                      <div class="common-space user-id w-100">
                                        <div class="common-space w-100">
                                          <a
                                            class="f-w-500 f-12"
                                            href="../template/private-chat.html"
                                            >Robert D. Hambly</a
                                          >
                                        </div>
                                      </div>
                                      <div>
                                        <span class="f-w-500 f-light f-12"
                                          >Hello Miss...😊</span
                                        >
                                      </div>
                                    </div>
                                    <span class="f-light f-w-500 f-12"
                                      >44 sec</span
                                    >
                                  </div>
                                </li>
                                <li
                                  class="notification d-flex w-100 justify-content-between align-items-center"
                                >
                                  <div
                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2"
                                  >
                                    <div class="user-alerts flex-shrink-0">
                                      <img
                                        class="rounded-circle img-fluid img-40"
                                        src="{{asset('assets/images/dashboard/user/7.jpg')}}"
                                        alt="user"
                                      />
                                    </div>
                                    <div class="flex-grow-1">
                                      <div class="common-space user-id w-100">
                                        <div class="common-space w-100">
                                          <a
                                            class="f-w-500 f-12"
                                            href="../template/private-chat.html"
                                            >Courtney C. Strang</a
                                          >
                                        </div>
                                      </div>
                                      <div>
                                        <span class="f-w-500 f-light f-12"
                                          >Wishing You a Happy Birthday Dear..
                                          🥳🎊</span
                                        >
                                      </div>
                                    </div>
                                    <span class="f-light f-w-500 f-12"
                                      >52 min</span
                                    >
                                  </div>
                                </li>
                                <li
                                  class="notification d-flex w-100 justify-content-between align-items-center"
                                >
                                  <div
                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2"
                                  >
                                    <div class="user-alerts flex-shrink-0">
                                      <img
                                        class="rounded-circle img-fluid img-40"
                                        src="{{asset('assets/images/dashboard/user/5.jpg')}}"
                                        alt="user"
                                      />
                                    </div>
                                    <div class="flex-grow-1">
                                      <div class="common-space user-id w-100">
                                        <div class="common-space w-100">
                                          <a
                                            class="f-w-500 f-12"
                                            href="../template/private-chat.html"
                                            >Raye T. Sipes</a
                                          >
                                        </div>
                                      </div>
                                      <div>
                                        <span class="f-w-500 f-light f-12"
                                          >Hello Dear!! This Theme Is Very
                                          beautiful</span
                                        >
                                      </div>
                                    </div>
                                    <span class="f-light f-w-500 f-12"
                                      >48 min</span
                                    >
                                  </div>
                                </li>
                                <li
                                  class="notification d-flex w-100 justify-content-between align-items-center"
                                >
                                  <div
                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2"
                                  >
                                    <div class="user-alerts flex-shrink-0">
                                      <img
                                        class="rounded-circle img-fluid img-40"
                                        src="{{asset('assets/images/dashboard/user/6.jpg')}}"
                                        alt="user"
                                      />
                                    </div>
                                    <div class="flex-grow-1">
                                      <div class="common-space user-id w-100">
                                        <div class="common-space w-100">
                                          <a
                                            class="f-w-500 f-12"
                                            href="../template/private-chat.html"
                                            >Henry S. Miller</a
                                          >
                                        </div>
                                      </div>
                                      <div>
                                        <span class="f-w-500 f-light f-12"
                                          >You’re older today than yesterday,
                                          happy birthday!</span
                                        >
                                      </div>
                                    </div>
                                    <span class="f-light f-w-500 f-12"
                                      >3 min</span
                                    >
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div
                            class="tab-pane fade"
                            id="pills-contactus"
                            role="tabpanel"
                            aria-labelledby="pills-contactus-tab"
                          >
                            <div class="cart-dropdown mt-4">
                              <ul>
                                <li class="pr-0 pl-0 pb-3">
                                  <div class="media">
                                    <img
                                      class="img-fluid b-r-5 me-3 img-60"
                                      src="{{asset('assets/images/other-images/cart-img.jpg')}}"
                                      alt=""
                                    />
                                    <div class="media-body">
                                      <a
                                        class="f-light f-w-500"
                                        href="../template/product.html"
                                        >Furniture Chair for Home</a
                                      >
                                      <div class="qty-box">
                                        <div class="input-group">
                                          <span class="input-group-prepend">
                                            <button
                                              class="btn quantity-left-minus"
                                              type="button"
                                              data-type="minus"
                                              data-field=""
                                            >
                                              -
                                            </button></span
                                          >
                                          <input
                                            class="form-control input-number"
                                            type="text"
                                            name="quantity"
                                            value="1"
                                          /><span class="input-group-prepend">
                                            <button
                                              class="btn quantity-right-plus"
                                              type="button"
                                              data-type="plus"
                                              data-field=""
                                            >
                                              +
                                            </button></span
                                          >
                                        </div>
                                      </div>
                                      <h6 class="font-primary">$500</h6>
                                    </div>
                                    <div class="close-circle">
                                      <a class="bg-danger" href="#"
                                        ><i data-feather="x"></i
                                      ></a>
                                    </div>
                                  </div>
                                </li>
                                <li class="pr-0 pl-0 pb-3 pt-3">
                                  <div class="media">
                                    <img
                                      class="img-fluid b-r-5 me-3 img-60"
                                      src="{{asset('assets/images/other-images/receiver-img.jpg')}}"
                                      alt=""
                                    />
                                    <div class="media-body">
                                      <a
                                        class="f-light f-w-500"
                                        href="../template/product.html"
                                        >Men Cotton Blend Blue T-Shirt</a
                                      >
                                      <div class="qty-box">
                                        <div class="input-group">
                                          <span class="input-group-prepend">
                                            <button
                                              class="btn quantity-left-minus"
                                              type="button"
                                              data-type="minus"
                                              data-field=""
                                            >
                                              -
                                            </button></span
                                          >
                                          <input
                                            class="form-control input-number"
                                            type="text"
                                            name="quantity"
                                            value="1"
                                          /><span class="input-group-prepend">
                                            <button
                                              class="btn quantity-right-plus"
                                              type="button"
                                              data-type="plus"
                                              data-field=""
                                            >
                                              +
                                            </button></span
                                          >
                                        </div>
                                      </div>
                                      <h6 class="font-primary">$695.00</h6>
                                    </div>
                                    <div class="close-circle">
                                      <a class="bg-danger" href="#"
                                        ><i data-feather="x"></i
                                      ></a>
                                    </div>
                                  </div>
                                </li>
                                <li class="mb-3 total">
                                  <a href="../template/checkout.html">
                                    <h6 class="mb-0">
                                      Order Total :<span class="f-right"
                                        >$1195.00
                                      </span>
                                    </h6></a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-footer pb-0 pr-0 pl-0">
                            <div class="text-center">
                              <a class="f-w-700" href="private-chat.html">
                                <button
                                  class="btn btn-primary"
                                  type="button"
                                  title="btn btn-primary"
                                >
                                  Check all
                                </button></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown">
                <div class="media profile-media">
                  <img
                    class="b-r-10"
                    src="{{asset('assets/images/dashboard/profile.png')}}"
                    alt=""
                  />
                  <div class="media-body d-xxl-block d-none box-col-none">
                    <div class="d-flex align-items-center gap-2">
                      <span>Alex Mora </span
                      ><i class="middle fa fa-angle-down"> </i>
                    </div>
                    <p class="mb-0 font-roboto">Admin</p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li>
                    <a href="user-profile.html"
                      ><i data-feather="user"></i><span>My Profile</span></a
                    >
                  </li>
                  <li>
                    <a href="letter-box.html"
                      ><i data-feather="mail"></i><span>Inbox</span></a
                    >
                  </li>
                  <li>
                    <a href="edit-profile.html">
                      <i data-feather="settings"></i><span>Settings</span></a
                    >
                  </li>
                  <li>
                    <form action="{{ url('/logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-pill btn-outline-primary btn-sm">
                        Log Out
                      </button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Direktur</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
          </script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div class="logo-wrapper">
            <a href="/home"
              ><img
                class="img-fluid"
                src="{{asset('assets/images/logo/logo.png')}}"
                alt=""
            /></a>
            <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
            <div class="toggle-sidebar">
              <i
                class="status_toggle middle sidebar-toggle"
                data-feather="grid"
              >
              </i>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="/home"
              ><img
                class="img-fluid"
                src="{{asset('assets/images/logo/logo-icon.png')}}"
                alt=""
            /></a>
          </div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
              <i data-feather="arrow-left"></i>
            </div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                  <a href="/home"
                    ><img
                      class="img-fluid"
                      src="{{asset('assets/images/logo/logo-icon.png')}}"
                      alt=""
                  /></a>
                  <div class="mobile-back text-end">
                    <span>Back </span
                    ><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="/home">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-home')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#fill-home')}}"
                        ></use></svg
                      ><span class="lan-3">Dashboard</span></a
                    >
                </li>
                {{-- Sidebar Akses Direktur (Role = 1) --}}
                @if(Auth::user()->user_IdRole == 1)
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-widget')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#fill-widget')}}"
                        ></use></svg
                      ><span >Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardDirektur/DataKaryawan">Data Karyawan</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-layout')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-user"></use></svg
                      ><span>Gaji Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardDirektur/gajiTerbayar">Gaji Terbayar</a></li>
                    </ul>
                  </li>
                @endif

                {{-- Sidebar Akses Manager (Role = 2) --}}
                @if(Auth::user()->user_IdRole == 2)
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-widget')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#fill-widget')}}"
                        ></use></svg
                      ><span >Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardManager/DataKaryawan">Data Karyawan</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-layout')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-user"></use></svg
                      ><span>Gaji Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardManager/PengajuanGaji">Pengajuan Gaji</a></li>
                      <li><a href="/dashboardManager/GajiDisetujui">Gaji Disetujui</a></li>
                      <li><a href="/dashboardManager/gajiTerbayar">Gaji Terbayar</a></li>
                      <li><a href="/dashboardManager/gajiDitolak">Gaji Ditolak</a></li>
                    </ul>
                  </li>
                @endif                

                {{-- Sidebar Akses Finance (Role = 3) --}}
                @if(Auth::user()->user_IdRole == 3)
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-widget')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#fill-widget')}}"
                        ></use></svg
                      ><span >Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardFinance/DataKaryawan">Data Karyawan</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use
                          href="{{asset('assets/svg/icon-sprite.svg#stroke-layout')}}"
                        ></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-user"></use></svg
                      ><span>Gaji Karyawan</span></a
                    >
                    <ul class="sidebar-submenu">
                      <li><a href="/dashboardFinance/PengajuanGaji">Pengajuan Gaji</a></li>
                      <li><a href="/dashboardFinance/PengajuanGaji/create">Tambah Gaji</a></li>
                      <li><a href="/dashboardFinance/GajiDisetujui">Gaji Disetujui</a></li>
                      <li><a href="/dashboardFinance/gajiTerbayar">Gaji Terbayar</a></li>
                      <li><a href="/dashboardFinance/gajiDitolak">Gaji Ditolak</a></li>
                    </ul>
                  </li>
                @endif
                

              </ul>
              <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
              </div>
            </div>
          </nav>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          {{ $slot }}
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2024 © Riho theme by pixelstrap</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/sidebar-pin.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('assets/js/header-slick.js')}}"></script>
    <!-- calendar js-->
    <script src="{{asset('assets/js/js-datatables/simple-datatables@latest.js')}}"></script>
    <script src="{{asset('assets/js/custom-list-product.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/ecommerce.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script> --}}
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
      Dropzone.autoDiscover = false;

      const myDropzone = new Dropzone("#singleFileUpload", {
        url: "/dashboardFinance/uploadBuktiPembayaran", // sama dengan action form
        paramName: "file", // nama field file
        maxFiles: 1,
        maxFilesize: 5, // dalam MB
        acceptedFiles: "image/*", // hanya file gambar
        autoProcessQueue: true, // langsung proses saat file dipilih atau didrag
        addRemoveLinks: true,
        headers: {
          "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        init: function () {
          this.on("sending", function (file, xhr, formData) {
            // Tambahkan data form selain file (seperti input hidden)
            const gajiId = document.querySelector('input[name="gaji_id"]').value;
            formData.append("gaji_id", gajiId);
          });

          this.on("uploadprogress", function (file, progress) {
            // Animasikan progress bar
            const progressBar = file.previewElement.querySelector(".dz-upload");
            if (progressBar) {
              progressBar.style.width = progress + "%";
            }
          });

          this.on("success", function (file, response) {
            if (response.redirect) {
              window.location.href = response.redirect;
            }
          });


          this.on("error", function (file, response) {
             if (response.redirect) {
              window.location.href = response.redirect;
            }
          });
        }
      });
    </script>



    
  </body>
</html>
