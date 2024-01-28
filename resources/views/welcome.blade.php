<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | DataTables</title>

      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
         rel="stylesheet">

      <link href="../../plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

      <link href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
      <link href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
      <link href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">

      <link href="../../dist/css/adminlte.min.css?v=3.2.0" rel="stylesheet">
      <script nonce="2065e64d-6a56-4313-9be4-947b5f4fd330">
         try {
            (function(w, d) {
               ! function(bb, bc, bd, be) {
                  bb[bd] = bb[bd] || {};
                  bb[bd].executed = [];
                  bb.zaraz = {
                     deferred: [],
                     listeners: []
                  };
                  bb.zaraz.q = [];
                  bb.zaraz._f = function(bf) {
                     return async function() {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({
                           m: bf,
                           a: bg
                        })
                     }
                  };
                  for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                  bb.zaraz.init = () => {
                     var bi = bc.getElementsByTagName(be)[0],
                        bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                     bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                     bb[bd].x = Math.random();
                     bb[bd].w = bb.screen.width;
                     bb[bd].h = bb.screen.height;
                     bb[bd].j = bb.innerHeight;
                     bb[bd].e = bb.innerWidth;
                     bb[bd].l = bb.location.href;
                     bb[bd].r = bc.referrer;
                     bb[bd].k = bb.screen.colorDepth;
                     bb[bd].n = bc.characterSet;
                     bb[bd].o = (new Date).getTimezoneOffset();
                     if (bb.dataLayer)
                        for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
                              ...bp[1],
                              ...bq[1]
                           })), {}))) zaraz.set(bo[0], bo[1], {
                           scope: "page"
                        });
                     bb[bd].q = [];
                     for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                     }
                     bj.defer = !0;
                     for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu.startsWith(
                        "_zaraz_"))).forEach((bt => {
                        try {
                           bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                           bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                     }));
                     bj.referrerPolicy = "origin";
                     bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                     bi.parentNode.insertBefore(bj, bi)
                  };
                  ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener(
                     "DOMContentLoaded", zaraz.init)
               }(w, d, "zarazData", "script");
            })(window, document)
         } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
         };
      </script>
   </head>

   <body class="hold-transition sidebar-mini">
      <div class="wrapper">

         <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                        class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a class="nav-link" href="../../index3.html">Home</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a class="nav-link" href="#">Contact</a>
               </li>
            </ul>

            <ul class="navbar-nav ml-auto">

               <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                     <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                     <form class="form-inline">
                        <div class="input-group input-group-sm">
                           <input class="form-control form-control-navbar" type="search" aria-label="Search"
                              placeholder="Search">
                           <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                              </button>
                              <button class="btn btn-navbar" data-widget="navbar-search" type="button">
                                 <i class="fas fa-times"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                     <i class="far fa-comments"></i>
                     <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a class="dropdown-item" href="#">

                        <div class="media">
                           <img class="img-size-50 img-circle mr-3" src="../../dist/img/user1-128x128.jpg"
                              alt="User Avatar">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="text-danger float-right text-sm"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-muted text-sm"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>

                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">

                        <div class="media">
                           <img class="img-size-50 img-circle mr-3" src="../../dist/img/user8-128x128.jpg"
                              alt="User Avatar">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="text-muted float-right text-sm"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-muted text-sm"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>

                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">

                        <div class="media">
                           <img class="img-size-50 img-circle mr-3" src="../../dist/img/user3-128x128.jpg"
                              alt="User Avatar">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="text-warning float-right text-sm"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-muted text-sm"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>

                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item dropdown-footer" href="#">See All Messages</a>
                  </div>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                     <i class="far fa-bell"></i>
                     <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <span class="dropdown-item dropdown-header">15 Notifications</span>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="text-muted float-right text-sm">3 mins</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="text-muted float-right text-sm">12 hours</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="text-muted float-right text-sm">2 days</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item dropdown-footer" href="#">See All Notifications</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                     <i class="fas fa-expand-arrows-alt"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                     role="button">
                     <i class="fas fa-th-large"></i>
                  </a>
               </li>
            </ul>
         </nav>

         <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a class="brand-link" href="../../index3.html">
               <img class="brand-image img-circle elevation-3" src="../../dist/img/AdminLTELogo.png"
                  alt="AdminLTE Logo" style="opacity: .8">
               <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">

               <div class="user-panel d-flex mb-3 mt-3 pb-3">
                  <div class="image">
                     <img class="img-circle elevation-2" src="../../dist/img/user2-160x160.jpg" alt="User Image">
                  </div>
                  <div class="info">
                     <a class="d-block" href="#">Alexander Pierce</a>
                  </div>
               </div>

               <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                     <input class="form-control form-control-sidebar" type="search" aria-label="Search"
                        placeholder="Search">
                     <div class="input-group-append">
                        <button class="btn btn-sidebar">
                           <i class="fas fa-search fa-fw"></i>
                        </button>
                     </div>
                  </div>
               </div>

               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false"
                     role="menu">

                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../../index.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../../index2.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v2</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../../index3.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v3</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../widgets.html">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Widgets
                              <span class="right badge badge-danger">New</span>
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                              Layout Options
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right">6</span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/top-nav.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Top Navigation</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/top-nav-sidebar.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Top Navigation + Sidebar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/boxed.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Boxed</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/fixed-sidebar.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Sidebar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/fixed-sidebar-custom.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Sidebar <small>+ Custom Area</small></p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/fixed-topnav.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Navbar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/fixed-footer.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Footer</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../layout/collapsed-sidebar.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Collapsed Sidebar</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>
                              Charts
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../charts/chartjs.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>ChartJS</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../charts/flot.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Flot</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../charts/inline.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inline</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../charts/uplot.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>uPlot</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-tree"></i>
                           <p>
                              UI Elements
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/general.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>General</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/icons.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Icons</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/buttons.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Buttons</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/sliders.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Sliders</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/modals.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Modals & Alerts</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/navbar.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Navbar & Tabs</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/timeline.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Timeline</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../UI/ribbons.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Ribbons</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                              Forms
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../forms/general.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>General Elements</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../forms/advanced.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Advanced Elements</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../forms/editors.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Editors</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../forms/validation.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Validation</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item menu-open">
                        <a class="nav-link active" href="#">
                           <i class="nav-icon fas fa-table"></i>
                           <p>
                              Tables
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../tables/simple.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Simple Tables</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" href="../tables/data.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>DataTables</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../tables/jsgrid.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>jsGrid</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-header">EXAMPLES</li>
                     <li class="nav-item">
                        <a class="nav-link" href="../calendar.html">
                           <i class="nav-icon far fa-calendar-alt"></i>
                           <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../gallery.html">
                           <i class="nav-icon far fa-image"></i>
                           <p>
                              Gallery
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../kanban.html">
                           <i class="nav-icon fas fa-columns"></i>
                           <p>
                              Kanban Board
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon far fa-envelope"></i>
                           <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../mailbox/mailbox.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inbox</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../mailbox/compose.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Compose</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../mailbox/read-mail.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Read</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-book"></i>
                           <p>
                              Pages
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/invoice.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Invoice</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/profile.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Profile</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/e-commerce.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>E-commerce</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/projects.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Projects</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/project-add.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Add</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/project-edit.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Edit</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/project-detail.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Detail</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/contacts.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contacts</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/faq.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>FAQ</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/contact-us.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contact us</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon far fa-plus-square"></i>
                           <p>
                              Extras
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/login.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Login v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/register.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Register v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/forgot-password.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Forgot Password v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/recover-password.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Recover Password v1</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/login-v2.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Login v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/register-v2.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Register v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/forgot-password-v2.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Forgot Password v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="../examples/recover-password-v2.html">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Recover Password v2</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/lockscreen.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Lockscreen</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/legacy-user-menu.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Legacy User Menu</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/language-menu.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Language Menu</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/404.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Error 404</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/500.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Error 500</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/pace.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pace</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../examples/blank.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blank Page</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../../starter.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Starter Page</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-search"></i>
                           <p>
                              Search
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="../search/simple.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Simple Search</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="../search/enhanced.html">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Enhanced</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-header">MISCELLANEOUS</li>
                     <li class="nav-item">
                        <a class="nav-link" href="../../iframe.html">
                           <i class="nav-icon fas fa-ellipsis-h"></i>
                           <p>Tabbed IFrame Plugin</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://adminlte.io/docs/3.1/">
                           <i class="nav-icon fas fa-file"></i>
                           <p>Documentation</p>
                        </a>
                     </li>
                     <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="fas fa-circle nav-icon"></i>
                           <p>Level 1</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon fas fa-circle"></i>
                           <p>
                              Level 1
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Level 2</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Level 2</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="fas fa-circle nav-icon"></i>
                           <p>Level 1</p>
                        </a>
                     </li>
                     <li class="nav-header">LABELS</li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon far fa-circle text-danger"></i>
                           <p class="text">Important</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon far fa-circle text-warning"></i>
                           <p>Warning</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="nav-icon far fa-circle text-info"></i>
                           <p>Informational</p>
                        </a>
                     </li>
                  </ul>
               </nav>

            </div>

         </aside>

         <div class="content-wrapper">

            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1>DataTables</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </section>

            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">DataTable with minimal features & hover style</h3>
                           </div>

                           <div class="card-body">
                              <table class="table-bordered table-hover table" id="example2">
                                 <thead>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 4.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td> 4</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td>5</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.5
                                       </td>
                                       <td>Win 95+</td>
                                       <td>5.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 6
                                       </td>
                                       <td>Win 98+</td>
                                       <td>6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet Explorer 7</td>
                                       <td>Win XP SP2+</td>
                                       <td>7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>AOL browser (AOL desktop)</td>
                                       <td>Win XP</td>
                                       <td>6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 1.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 1.5</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 2.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 3.0</td>
                                       <td>Win 2k+ / OSX.3+</td>
                                       <td>1.9</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Camino 1.0</td>
                                       <td>OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Camino 1.5</td>
                                       <td>OSX.3+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape 7.2</td>
                                       <td>Win 95+ / Mac OS 8.6-9.2</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape Browser 8</td>
                                       <td>Win 98SE+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape Navigator 9</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.1</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.2</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.2</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.3</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.4</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.4</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.5</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.6</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.7</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.8</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Seamonkey 1.1</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Epiphany 2.20</td>
                                       <td>Gnome</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 1.2</td>
                                       <td>OSX.3</td>
                                       <td>125.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 1.3</td>
                                       <td>OSX.3</td>
                                       <td>312.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 2.0</td>
                                       <td>OSX.4+</td>
                                       <td>419.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 3.0</td>
                                       <td>OSX.4+</td>
                                       <td>522.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>OmniWeb 5.5</td>
                                       <td>OSX.4+</td>
                                       <td>420</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>iPod Touch / iPhone</td>
                                       <td>iPod</td>
                                       <td>420.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>S60</td>
                                       <td>S60</td>
                                       <td>413</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 7.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 7.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 8.0</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 8.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.0</td>
                                       <td>Win 95+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.2</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.5</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera for Wii</td>
                                       <td>Wii</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Nokia N800</td>
                                       <td>N800</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Nintendo DS browser</td>
                                       <td>Nintendo DS</td>
                                       <td>8.5</td>
                                       <td>C/A<sup>1</sup></td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.1</td>
                                       <td>KDE 3.1</td>
                                       <td>3.1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.3</td>
                                       <td>KDE 3.3</td>
                                       <td>3.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.5</td>
                                       <td>KDE 3.5</td>
                                       <td>3.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 4.5</td>
                                       <td>Mac OS 8-9</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.1</td>
                                       <td>Mac OS 7.6-9</td>
                                       <td>1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.2</td>
                                       <td>Mac OS 8-X</td>
                                       <td>1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>NetFront 3.1</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>NetFront 3.4</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Dillo 0.8</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Links</td>
                                       <td>Text only</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Lynx</td>
                                       <td>Text only</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>IE Mobile</td>
                                       <td>Windows Mobile 6</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>PSP browser</td>
                                       <td>PSP</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Other browsers</td>
                                       <td>All others</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>U</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>

                        </div>

                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">DataTable with default features</h3>
                           </div>

                           <div class="card-body">
                              <table class="table-bordered table-striped table" id="example1">
                                 <thead>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 4.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td> 4</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td>5</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.5
                                       </td>
                                       <td>Win 95+</td>
                                       <td>5.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 6
                                       </td>
                                       <td>Win 98+</td>
                                       <td>6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>Internet Explorer 7</td>
                                       <td>Win XP SP2+</td>
                                       <td>7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Trident</td>
                                       <td>AOL browser (AOL desktop)</td>
                                       <td>Win XP</td>
                                       <td>6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 1.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 1.5</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 2.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Firefox 3.0</td>
                                       <td>Win 2k+ / OSX.3+</td>
                                       <td>1.9</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Camino 1.0</td>
                                       <td>OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Camino 1.5</td>
                                       <td>OSX.3+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape 7.2</td>
                                       <td>Win 95+ / Mac OS 8.6-9.2</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape Browser 8</td>
                                       <td>Win 98SE+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Netscape Navigator 9</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.1</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.2</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.2</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.3</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.4</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.4</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.5</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.6</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>1.6</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.7</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td>1.7</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Mozilla 1.8</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Seamonkey 1.1</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Gecko</td>
                                       <td>Epiphany 2.20</td>
                                       <td>Gnome</td>
                                       <td>1.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 1.2</td>
                                       <td>OSX.3</td>
                                       <td>125.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 1.3</td>
                                       <td>OSX.3</td>
                                       <td>312.8</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 2.0</td>
                                       <td>OSX.4+</td>
                                       <td>419.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>Safari 3.0</td>
                                       <td>OSX.4+</td>
                                       <td>522.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>OmniWeb 5.5</td>
                                       <td>OSX.4+</td>
                                       <td>420</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>iPod Touch / iPhone</td>
                                       <td>iPod</td>
                                       <td>420.1</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Webkit</td>
                                       <td>S60</td>
                                       <td>S60</td>
                                       <td>413</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 7.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 7.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 8.0</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 8.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.0</td>
                                       <td>Win 95+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.2</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera 9.5</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Opera for Wii</td>
                                       <td>Wii</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Nokia N800</td>
                                       <td>N800</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Presto</td>
                                       <td>Nintendo DS browser</td>
                                       <td>Nintendo DS</td>
                                       <td>8.5</td>
                                       <td>C/A<sup>1</sup></td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.1</td>
                                       <td>KDE 3.1</td>
                                       <td>3.1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.3</td>
                                       <td>KDE 3.3</td>
                                       <td>3.3</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>KHTML</td>
                                       <td>Konqureror 3.5</td>
                                       <td>KDE 3.5</td>
                                       <td>3.5</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 4.5</td>
                                       <td>Mac OS 8-9</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.1</td>
                                       <td>Mac OS 7.6-9</td>
                                       <td>1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.2</td>
                                       <td>Mac OS 8-X</td>
                                       <td>1</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>NetFront 3.1</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>NetFront 3.4</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Dillo 0.8</td>
                                       <td>Embedded devices</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Links</td>
                                       <td>Text only</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>Lynx</td>
                                       <td>Text only</td>
                                       <td>-</td>
                                       <td>X</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>IE Mobile</td>
                                       <td>Windows Mobile 6</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Misc</td>
                                       <td>PSP browser</td>
                                       <td>PSP</td>
                                       <td>-</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Other browsers</td>
                                       <td>All others</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>U</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </section>

         </div>

         <footer class="main-footer">
            <div class="d-none d-sm-block float-right">
               <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
         </footer>

         <aside class="control-sidebar control-sidebar-dark">

         </aside>

      </div>

      <script src="../../plugins/jquery/jquery.min.js"></script>

      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="../../plugins/jszip/jszip.min.js"></script>
      <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
      <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
      <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

      <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

      <script src="../../dist/js/demo.js"></script>

      <script>
         $(function() {
            $("#example1").DataTable({
               "responsive": true,
               "lengthChange": false,
               "autoWidth": false,
               "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
               "paging": true,
               "lengthChange": false,
               "searching": false,
               "ordering": true,
               "info": true,
               "autoWidth": false,
               "responsive": true,
            });
         });
      </script>
   </body>

</html>
