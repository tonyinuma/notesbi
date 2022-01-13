@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','NotesBI Dashboard')
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
        <div class="row mb-2">
            <form action="{{ route('bingo-number') }}">
                <button class="btn btn-outline-bitbucket" type="submit">Get a Number</button>
            </form>
        </div>
        <div class="row">
            <!-- Multi Radial Chart Starts -->
            <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Visits of 2019</h4>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="multi-radial-chart"></div>
                            <ul class="list-inline d-flex justify-content-around mb-0">
                                <li><span class="bullet bullet-xs bullet-primary mr-50"></span>Target</li>
                                <li><span class="bullet bullet-xs bullet-danger mr-50"></span>Mart</li>
                                <li><span class="bullet bullet-xs bullet-warning mr-50"></span>Ebay</li>
                            </ul>
                        </div>
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

