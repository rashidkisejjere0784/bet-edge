@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Deposit'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                             <marquee behavior="" direction="horizontal"><h3 class="mb-0">Deposit Money</h3></marquee>    
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3 w-50">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <i class="fas fa-wifi text-white p-2"></i>
                                    <h5 class="text-white mt-4 mb-5 pb-2">
                                        Current Amount - &nbsp;&nbsp;&nbsp;7852 /=</h5>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                                <h6 class="text-white mb-0">Jack Peterson</h6>
                                            </div>
                                            
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="/img/logos/mastercard.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
