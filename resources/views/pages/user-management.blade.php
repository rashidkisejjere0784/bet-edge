@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Name
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Amount</th>

                                        
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Create Date</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>

                                        

                                        
                                </tr>
                           

                            </thead>
                            @if(count($users) > 0)
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/user.png"  class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user['firstname']}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$user['lastname']}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{$user['amount']}}</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0">{{$user['created_at']}}</p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0">{{$user['email']}}</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
