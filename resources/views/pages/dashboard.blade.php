@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Money</p>
                                    <h5 class="font-weight-bolder">
                                        $53,000
                                    </h5>
                                    
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Users</p>
                                    <h5 class="font-weight-bolder">
                                        2,300
                                    </h5>
                                   
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Wins</p>
                                    <h5 class="font-weight-bolder">
                                        +3,462
                                    </h5>
                                   
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Losses</p>
                                    <h5 class="font-weight-bolder">
                                        $103,430
                                    </h5>
                                   
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class=" mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <marquee behavior="" direction="horizontal"><h4 class="mb-2"> &#9917; OnGoing Games</h4></marquee> 
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody class="p-2">
                                <tr>
                                    <td class="">
                                        <div class="d-flex py-1">
                                            <div class="">
                                                <h4 class="text-xs font-weight-bold mb-0">Game:</h4>
                                                <h6 class="mb-0">Chelsea Vs Arsenal</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market 1 ODD</p>
                                            <h6 class="text-sm mb-0">2.5</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market X ODD</p>
                                            <h6 class="text-sm mb-0">1.5</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col ">
                                            <p class="text-xs font-weight-bold mb-0">Market 2 ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Market BBTS ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                Select Wining Market
                                            </p>
                                            <div class="row">
                                                <form action="" class="p-2" method="post">
                                                    <input type="text" name="gameID" value="1" class="d-none">
                                                    <input type="checkbox" class="" name="market1" id="">
                                                    <label for="">1</label>
                                                    <input type="checkbox" name="marketX" id="">
                                                    <label for="">X</label>
                                                    <input type="checkbox" name="market2" id="">
                                                    <label for="">2</label>
                                                    <input type="checkbox" name="market BTTS" id="">
                                                    <label for="">BTTS</label>
                                                    <br>
                                                    <input type="submit" class="btn btn-success" value="Stop Game">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div class="d-flex py-1">
                                            <div class="">
                                                <h4 class="text-xs font-weight-bold mb-0">Game:</h4>
                                                <h6 class="mb-0">Chelsea Vs Arsenal</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market 1 ODD</p>
                                            <h6 class="text-sm mb-0">2.5</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market X ODD</p>
                                            <h6 class="text-sm mb-0">1.5</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col ">
                                            <p class="text-xs font-weight-bold mb-0">Market 2 ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Market BBTS ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                Select Wining Market
                                            </p>
                                            <div class="row">
                                                <form action="" class="p-2" method="post">
                                                    <input type="text" name="gameID" value="1" class="d-none">
                                                    <input type="checkbox" class="" name="market1" id="">
                                                    <label for="">1</label>
                                                    <input type="checkbox" name="marketX" id="">
                                                    <label for="">X</label>
                                                    <input type="checkbox" name="market2" id="">
                                                    <label for="">2</label>
                                                    <input type="checkbox" name="market BTTS" id="">
                                                    <label for="">BTTS</label>
                                                    <br>
                                                    <input type="submit" class="btn btn-success" value="Stop Game">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div class="d-flex py-1">
                                            <div class="">
                                                <h4 class="text-xs font-weight-bold mb-0">Game:</h4>
                                                <h6 class="mb-0">Chelsea Vs Arsenal</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market 1 ODD</p>
                                            <h6 class="text-sm mb-0">2.5</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market X ODD</p>
                                            <h6 class="text-sm mb-0">1.5</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col ">
                                            <p class="text-xs font-weight-bold mb-0">Market 2 ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Market BBTS ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                Select Wining Market
                                            </p>
                                            <div class="row">
                                                <form action="" class="p-2" method="post">
                                                    <input type="text" name="gameID" value="1" class="d-none">
                                                    <input type="checkbox" class="" name="market1" id="">
                                                    <label for="">1</label>
                                                    <input type="checkbox" name="marketX" id="">
                                                    <label for="">X</label>
                                                    <input type="checkbox" name="market2" id="">
                                                    <label for="">2</label>
                                                    <input type="checkbox" name="market BTTS" id="">
                                                    <label for="">BTTS</label>
                                                    <br>
                                                    <input type="submit" class="btn btn-success" value="Stop Game">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div class="d-flex py-1">
                                            <div class="">
                                                <h4 class="text-xs font-weight-bold mb-0">Game:</h4>
                                                <h6 class="mb-0">Chelsea Vs Arsenal</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market 1 ODD</p>
                                            <h6 class="text-sm mb-0">2.5</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <p class="text-xs font-weight-bold mb-0">Market X ODD</p>
                                            <h6 class="text-sm mb-0">1.5</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col ">
                                            <p class="text-xs font-weight-bold mb-0">Market 2 ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Market BBTS ODD</p>
                                            <h6 class="text-sm mb-0">2.9</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                Select Wining Market
                                            </p>
                                            <div class="row">
                                                <form action="" class="p-2" method="post">
                                                    <input type="text" name="gameID" value="1" class="d-none">
                                                    <input type="checkbox" class="" name="market1" id="">
                                                    <label for="">1</label>
                                                    <input type="checkbox" name="marketX" id="">
                                                    <label for="">X</label>
                                                    <input type="checkbox" name="market2" id="">
                                                    <label for="">2</label>
                                                    <input type="checkbox" name="market BTTS" id="">
                                                    <label for="">BTTS</label>
                                                    <br>
                                                    <input type="submit" class="btn btn-success" value="Stop Game">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Game</h3>
                </div>
                <form action="" method="post" class="mb-3">
                    <input type="text" name="team 1" class="form-control w-30 mx-3 d-inline" placeholder="Team One" required>
                    <input type="text" name="team 2" class="form-control w-30 mx-3 d-inline" placeholder="Team Two" required>
                    <h5 class="mx-3 mt-2">ODDs</h5>
                    <input type="number" name="ODD 1" class="form-control w-10 mx-3 d-inline" placeholder="ODD One" required>
                    <input type="number" name="ODD X" class="form-control w-10 mx-3 d-inline" placeholder="ODD X" required>
                    <input type="number" name="ODD 2" class="form-control w-10 mx-3 d-inline" placeholder="ODD Two" required>
                    <input type="number" name="ODD BTTS" class="form-control w-10 mx-3 d-inline" placeholder="ODD BTTS" required>
                    <br>
                    <input type="submit" class="btn btn-primary mt-3 mx-3" value="Add Game">
                </form>
            </div>
        </div>

        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Set Constraints</h3>
                </div>
                <div class="px-3">
                    
                <h5 class="">Current Minimum Deposit : 200 /=</h5>
                <form action="" method="post">
                    <input type="number" name="min deposit" class="form-control w-30" placeholder="Amount" required>
                    <br>
                    <input type="submit" class="btn btn-primary mt-1" value="Update">
                </form>

                <h5 class="">Current Minimum Withdraw : 200 /=</h5>
                <form action="" method="post">
                    <input type="number" name="min Withdraw" class="form-control w-30" placeholder="Amount" required>
                    <br>
                    <input type="submit" class="btn btn-primary mt-1" value="Update">
                </form>

                <h5 class="">Current Minimum Stake : 200 /=</h5>
                <form action="" method="post">
                    <input type="number" name="min Stake" class="form-control w-30" placeholder="Amount" required>
                    <br>
                    <input type="submit" class="btn btn-primary mt-1" value="Update">
                </form>

                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#2d2baf",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
