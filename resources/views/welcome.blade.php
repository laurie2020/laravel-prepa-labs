@extends('layouts.app')

@section('content')
    
<!-- ======= Header ======= -->
@include('partials.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
@include('partials.home')
<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  @include('partials.about')
  <!-- End About Section -->

  <!-- ======= Features Section ======= -->
  @include('partials.feature')
  <!-- End Features Section -->

  <!-- ======= Steps Section ======= -->

  <!-- ======= Services Section ======= -->
  @include('partials.services')
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  @include('partials.portfolios')
  <!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  @include('partials.testimonials')
  <!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  @include('partials.team')
  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  @include('partials.contact')
  <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('partials.footer')
<!-- End Footer -->

{{-- <div id="preloader"></div> --}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection


