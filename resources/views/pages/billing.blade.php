@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Billing'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
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
{{--                     
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Payment Method</h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                                class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="/img/logos/mastercard.png" alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <img class="w-10 me-3 mb-0" src="/img/logos/visa.png" alt="logo">
                                            <h6 class="mb-0">
                                                ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Invoices</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                                    <span class="text-xs">#MS-415646</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    $180
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                                    <span class="text-xs">#RV-126749</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    $250
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                    <span class="text-xs">#FB-212562</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    $560
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                    <span class="text-xs">#QW-103578</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    $120
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                    <span class="text-xs">#AR-803481</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    $300
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        
        <div class="row">
            <div class="col-md-7 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <marquee behavior="" direction="horizontal"><h3 class="mb-2"> &#9917; OnGoing Games</h3></marquee> 
                       
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h4 class="text-uppercase">Chelsea</h4>
                                    <small class="text-sm font-weight-bold">Vs</small>
                                    <h4 class="text-uppercase">Man-U</h4>
                                </div>
                                <div class="ms-auto">
                                    <h6>Select market</h6>
                                    {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a> --}}
                                    <button class="btn btn-primary">1</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}

                                    <button class="btn bg-dark">X</button>
                                    <button class="btn bg-danger">2</button>
                                    <button class="btn btn-secondary">BTTS</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h4 class="text-uppercase">Chelsea</h4>
                                    <small class="text-sm font-weight-bold">Vs</small>
                                    <h4 class="text-uppercase">Man-U</h4>
                                </div>
                                <div class="ms-auto">
                                    <h6>Select market</h6>
                                    {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a> --}}
                                    <button class="btn btn-primary">1</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}

                                    <button class="btn bg-dark">X</button>
                                    <button class="btn bg-danger">2</button>
                                    <button class="btn btn-secondary">BTTS</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h4 class="text-uppercase">Chelsea</h4>
                                    <small class="text-sm font-weight-bold">Vs</small>
                                    <h4 class="text-uppercase">Man-U</h4>
                                </div>
                                <div class="ms-auto">
                                    <h6>Select market</h6>
                                    {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a> --}}
                                    <button class="btn btn-primary">1</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}

                                    <button class="btn bg-dark">X</button>
                                    <button class="btn bg-danger">2</button>
                                    <button class="btn btn-secondary">BTTS</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h4 class="text-uppercase">Chelsea</h4>
                                    <small class="text-sm font-weight-bold">Vs</small>
                                    <h4 class="text-uppercase">Man-U</h4>
                                </div>
                                <div class="ms-auto">
                                    <h6>Select market</h6>
                                    {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a> --}}
                                    <button class="btn btn-primary">1</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}

                                    <button class="btn bg-dark">X</button>
                                    <button class="btn bg-danger">2</button>
                                    <button class="btn btn-secondary">BTTS</button>
                                    {{-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="mb-0">Bet Slip</h3>
                            </div>
                        
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Game</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Market
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ODD</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Chelsea</h6>
                                                <h6 class="mb-0 text-sm">Man U</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">1</button>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">0.5</p>
                                    </td>
                                    <td class="align-middle text-end">
                                       <button class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Chelsea</h6>
                                                <h6 class="mb-0 text-sm">Man U</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">2</button>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">0.5</p>
                                    </td>
                                    <td class="align-middle text-end">
                                       <button class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Chelsea</h6>
                                                <h6 class="mb-0 text-sm">Man U</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">BTTS</button>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">0.5</p>
                                    </td>
                                    <td class="align-middle text-end">
                                       <button class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="p-2">
                            <h4>Total amount : 2000 /=</h4>
                            <h4>Min Stake : 200 /=</h4>
                        </div>

                        <form action="" method="post" class="m-2">
                            <input type="text" class="form-control mb-2" placeholder="Stake">
                            <input type="Stake" value="Stake" class="btn btn-success w-30">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
