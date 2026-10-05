@extends('layouts.admin')
@section('content')
     <main>
                    <div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4">Category</h1>
                            <a href="" class="btn btn-primary float-end">Add Category</a>
                        </div>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Categories</li>
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
                                            <th>Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Name</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php 
                                            $j= 1;
                                            @endphp

                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{$j++}}</td>
                                                    <td>{{$category->name}}</td>
                                                </tr>

                                            @endforeach

                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

@endsection