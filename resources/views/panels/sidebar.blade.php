
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{asset('/')}}">
          <!-- <div class="brand-logo">
            <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
          </div> -->
          <h2 class="brand-text mb-0">
            @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
            {{$configData['templateTitle']}}
            @else
            Frest
            @endif
          </h2>
          </a>
      </li>
          <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
            <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
          </a>
          </li>
      </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          <!-- Dashboard -->
          <li class="nav-item">
              <a href="{{ route('admin.dashboard') }}">
                  <i class="menu-livicon" data-icon="dashboard"></i>
                  <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <!-- Mains Pages -->
          <li class="navigation-header"><span>Pages principales</span></li>
          <!-- Dates -->
          <li class="nav-item">
              <a href="{{ route('dates.index') }}">
                  <i class="menu-livicon" data-icon="calendar"></i>
                  <span class="menu-title">Dates</span>
              <span class="badge badge-light-primary badge-pill badge-round float-right mr-2">
              <?php
                echo $totalDates = \App\Models\Date::count();
              ?>
              </span>
            </a>
          </li>
        
      </ul>
      </div>
  </div>
