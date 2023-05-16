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
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="card-body">
                                <div class="card bg-transparent shadow-xl w-100">
                                    <div class="overflow-hidden position-relative border-radius-xl"
                                        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                                        <span class="mask bg-gradient-dark"></span>
                                        <div class="card-body position-relative z-index-1 p-3">
                                            <i class="fas fa-wifi text-white p-2"></i>
                                            <h5 class="text-white mt-4 mb-5 pb-2">
                                                Current Amount - &nbsp;&nbsp;&nbsp;{{auth()->user()->amount}} /=</h5>
                                            <div class="d-flex">
                                                <div class="d-flex">
                                                    <div class="me-4">
                                                        <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                                        <h6 class="text-white mb-0">{{auth()->user()->firstname . " " . auth()->user()->lastname}}</h6>
                                                    </div>
                                                    
                                                </div>
                                                <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                                    <img class="w-60 mt-2" src="/img/logos/mastercard.png" alt="logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        
                                <form action="deposit" method="post" class="mt-5">
                                    @csrf
                            
                                   <h4 class="text-uppercase">Minimum Deposit : {{$constraint['depositConstraint']}}/=</h4>
        
                                    <input id="amount" name="amount" type="number" class="form-control mb-3" onkeyup="Validate()" placeholder="Amount">
                                    <p id="info" class="mt-1" style="color:gray">amount must be greater than {{$constraint['depositConstraint']}}</p>
        
                                    <input id="submitBtn" type="submit" class="btn btn-primary" value="Deposit" disabled>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card card-carousel overflow-hidden h-100 p-0">
                                <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                                    <div class="carousel-inner border-radius-lg h-100">
                                        <div class="carousel-item h-100 active" style="background-image: url('./img/football/football (1).jpg');
                            background-size: cover;">
                                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                                <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                                </div>
                                                <h5 class="text-white mb-1">Get started with BetEdge</h5>
                                                <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item h-100" style="background-image: url('./img/football/football (3).jpg');
                            background-size: cover;">
                                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                                <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                                </div>
                                                <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                                <p>That’s my skill. I’m not really specifically talented at anything except for the
                                                    ability to learn.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item h-100" style="background-image: url('./img/football/football (5).jpg');
                            background-size: cover;">
                                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                                <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                                    <i class="ni ni-trophy text-dark opacity-10"></i>
                                                </div>
                                                <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                                <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev w-5 me-3" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next w-5 me-3" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
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

<script>
    function Validate(){
        let minDeposit = {{$constraint['depositConstraint']}}
        let inputtedAmount = document.getElementById("amount").value

        if(inputtedAmount >= minDeposit){
            document.getElementById("submitBtn").disabled = false
            document.getElementById("info").style.color = "green"
        }
        else{
            document.getElementById("submitBtn").disabled = true
            document.getElementById("info").style.color = "red"
        }
    }
</script>