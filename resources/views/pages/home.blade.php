@extends('layout')

@section('header')
	@include('sections.header')
@endsection

@section('slider')
	@include('sections.slider')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="welcome-section">
                <div class="welcome-thumb">
                    <img src="img/welcome.jpg" alt="welcome fontanero">
                </div>
                <div class="welcome-content">
                    <h3>welcome to fontanero</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt cras dapibus. </p>
                    <a class="btn" href="#">Read More</a>
                </div>
            </div>
            <!-- .welcome-section-->
        </div>
        <!-- .col-md-12-->
    </div>
    <!-- .row-->
</div>
@endsection

@section('gallery')
	@include('sections.gallery')
@endsection

@section('contact')
	@include('sections.contact')
@endsection

@section('footer')
	@include('sections.footer')
@endsection

@section('mobileNav')
	@include('sections.mobile_nav')
@endsection