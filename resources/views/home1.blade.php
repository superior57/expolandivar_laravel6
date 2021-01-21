@extends('layouts.master')

@section('title')
    
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<!-- Welcome Area-->
<section class="welcome-area demo-hero" id="home">
  <!-- Background Shape-->
  <div class="background-shape">
    <div class="circle1 wow fadeInRightBig" data-wow-duration="4000ms"></div>
    <div class="circle2 wow fadeInRightBig" data-wow-duration="4000ms"></div>
    <div class="circle3 wow fadeInRightBig" data-wow-duration="4000ms"></div>
    <div class="circle4 wow fadeInRightBig" data-wow-duration="4000ms"></div>
  </div>
  <!-- Background Animation-->
  <div class="background-animation">
    <div class="star-ani"></div>
    <div class="cloud-ani"></div>
    <div class="circle-ani"></div>
    <div class="box-ani"></div>
  </div>
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center">
      <!-- Welcome Content-->
      <div class="col-12 col-md-8">
        <div class="welcome-content text-center">
          <h6 class="version-number mb-3">Now v1.5.0</h6>
          <div class="animated--headline">
            <h4 class="ah-headline animated-heading"><span>Create </span><span class="ah-words-wrapper"><b class="is-visible">Sass Landing</b><b>Agency</b><b>Business</b><b>Corporate</b><b>SEO</b><b>Creative</b></span></h4>
          </div>
          <h2 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">website with Saasbox.</h2>
          <p class="mb-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p><a class="btn saasbox-btn white-btn mt-3 wow fadeInUp" href="https://themeforest.net/item/saasbox-multipurpose-html-template-for-saas/25607146" data-wow-duration="1000ms" data-wow-delay="400ms">Purchase Now $9</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('footer')
  @include('layouts.footer')    
@endsection