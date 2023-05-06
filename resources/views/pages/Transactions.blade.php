@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Transactions'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                             <marquee behavior="" direction="horizontal"><h3 class="mb-0">Your Transactions</h3></marquee>    
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                    
                            @foreach ($Transactions as $transaction)
    
                                @if($transaction ['transaction'] == 'withdraw')
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-down"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Withdraw</h6>
                                            <span class="text-xs">{{$transaction ['created_at']}}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                    -&nbsp;&nbsp;&nbsp;{{$transaction ['amount']}} 
                                    </div>
                                </li>
                                
                                @elseif($transaction ['transaction'] == 'deposit')
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">

                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                            class="fas fa-arrow-up"></i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Deposit</h6>
                                        <span class="text-xs">{{$transaction ['created_at']}}</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                               + {{$transaction ['amount']}}
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
