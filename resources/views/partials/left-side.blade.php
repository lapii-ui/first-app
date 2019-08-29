<?php
  $isRoot = Auth::user()->role == 1;
  $isSuperAdmin = Auth::user()->role == 2;
  $isAdmin = Auth::user()->role == 3;
  $isUser = Auth::user()->role == 4;
?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><img src="images/icon/coffee.svg" width="50px"><span> Coffee Heart</span></a>
      </div>

      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      @include('partials._profile')
      <!-- /menu profile quick info -->
      <br>

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>@lang('general')</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> @lang('dashboard') </a></li>

            @if($isRoot)
            <li><a><i class="fa fa-sitemap"></i> @lang('setup') <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a>Role & Permission<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu">
                        <a href="#level2_1">Role</a>
                      </li>
                      <li>
                        <a href="#level2_2">Permission</a>
                      </li>
                      <li>
                        <a href="#level2_2">User Privilage</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_1">Tables</a></li>
                  <li><a href="#level1_1">Categories</a></li>
                  <li><a href="#level1_1">Branch</a></li>
              </ul>
            </li>
            @endif

            <li><a><i class="fa fa-desktop"></i> @lang('inventories') <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="general_elements.html">Warehouse</a></li>
                <li><a href="media_gallery.html">Purchase</a></li>
                <li><a href="typography.html">Transfer</a></li>
                <li><a href="icons.html">Goods Recieve</a></li>
                <li><a href="glyphicons.html">Goods Issue</a></li>
                <li><a href="widgets.html">Staff Payable</a></li>
                <li><a href="invoice.html">Others Payment</a></li>
                <li><a href="inbox.html">Commission</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> @lang('transactions') <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="tables.html">Tables</a></li>
                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>@lang('live_on')</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> @lang('reports') <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                @if($isRoot || $isSuperAdmin || $isAdmin)
                  <li><a href="#">Summary Sale Reports</a></li>
                  <li><a href="#">Detail Sale Reports</a></li>
                @endif
                
                @if($isRoot)
                  <li><a href="#">Profit Sale Reports</a></li>
                  <li><a href="#">Inventories Reports</a></li>
                  <li><a href="#">Purchase Reports</a></li>
                  <li><a href="#">Monthly Sale Reports</a></li>
                @endif
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      @include('partials._footer-button')
      <!-- /menu footer buttons -->
    </div>
  </div>