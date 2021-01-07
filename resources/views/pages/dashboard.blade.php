@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Administration Motel')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
<!-- Modules principaux -->
  <div class="divider">
    <div class="divider-text">Modules Principaux</div>
  </div>
  <div class="row">
  <!--  -->
    <div class="col-sm-4 col-12 dashboard-users-success">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body py-1">
            <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto mb-50">
              <i class="bx bx-calendar-alt font-medium-5"></i>
            </div>
            <div class="text-muted line-ellipsis">Dates</div>
            <h3 class="mb-0">
              <?php
                echo $totalDates = \App\Models\Date::count();
              ?>
            </h3>
            <br>
            <a href="{{ route('dates.index') }}">
              <button type="submit" class="btn btn-light-primary">Accéder aux dates <i class='bx bx-chevrons-right'></i></button>            
            </a>
          </div>
        </div>
      </div>
    </div>
    
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@endsection

