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
            <button class="btn btn-outline-bitbucket" type="button" id="btn_generate">
                Generate a Bingo Card
            </button>
        </div>
        <div class="row">
            <!-- Multi Radial Chart Starts -->
            <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Card</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">B</div>
                                <div class="col-md-2">I</div>
                                <div class="col-md-2">N</div>
                                <div class="col-md-2">G</div>
                                <div class="col-md-2">O</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                                <div class="col-md-2">1</div>
                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            getCardList()
        })

        $('#btn_generate').click(function () {
            generateCard()
        })

        function getCardList() {

        }

        function generateCard() {
            $.ajax({
                url: '{{ route('generate-card') }}',
                type: 'GET',
                success: function (res) {
                    let tmp = '';
                    console.log(res);
                    res.map(card => {
                        tmp += `<div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Card</h4>
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
                                </div>`;
                    });

                },
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
    </script>

@endsection

