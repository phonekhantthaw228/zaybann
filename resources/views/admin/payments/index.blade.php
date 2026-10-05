@extends('layouts.admin')
@section('content')
    <main>
                    <div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Payment</h1>
                            <a href="" class="btn btn-warning float-end">Edit Payment</a>
                        </div>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Payments</li>
                        </ol>
                     
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Category Table
                            </div>
                            <div class="card-body">
                                <table class= "table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Customer ID</th>
                                            <th>Name</th>
                                            <th>Payment Method</th>
                                            <th>Logo</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Customer ID</th>
                                            <th>Name</th>
                                            <th>Payment Method</th>
                                            <th>Logo</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                 

                                            @foreach($payments as $index=>$payment)
                                                <tr>
                                                    <td>{{ $payments->firstItem() + $index }}</td>
                                                    <td>{{$payment->acc_no}}</td>
                                                    <td>{{$payment->acc_name}}</td>
                                                    <td>{{$payment->pay}}</td>
                                                    <td>{{$payment->logo}}</td>
                                                </tr>

                                            @endforeach

                                    </tbody>
                                   
                                </table>
                    <div class="d-flex justify-content-center mt-3">
                            {{ $payments->links() }}
                        </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection