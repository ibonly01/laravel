@extends('layout')

@section('header')
	@include('sections.header')
@endsection

@section('breadcrumb')
	@include('sections.breadcrumb')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="history">
                <h3>
                    {{ $content->title }}
                </h3>

                <div class="history-details">
                    {!! $content->body !!}
                </div>
            </div>
        </div>
        <!-- .col-md-12-->
    </div>
    <!-- .row-->
</div>
@endsection

@section('footer')
	@include('sections.footer')
@endsection

@section('mobileNav')
	@include('sections.mobile_nav')
@endsection