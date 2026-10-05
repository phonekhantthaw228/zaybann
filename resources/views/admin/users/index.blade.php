@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <h1 class="mt-4 d-inline">Users</h1>
                <a href="" class="btn btn-warning float-end">Manage Users</a>
            </div>
            
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">View Users</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Users List
                </div>
                <div class="card-body">
                    <!-- 1. Wrapped table inside table-responsive div -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Profile</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Profile</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($users as $index=>$user)
                                    <tr>
                                        <td>{{ $users->firstItem() + $index }}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        
                                        <!-- 2. Display profile URL as a visual thumbnail image instead of raw text -->
                                        <td>
                                            <img src="{{$user->profile}}" alt="Profile" class="rounded-circle shadow-sm" style="width: 40px; height: 40px; object-fit: cover;">
                                        </td>
                                        
                                        <td>{{$user->email}}</td>
                                        
                                        <!-- 3. Mask the messy password hash string to look secure and neat -->
                                        <td>
                                            <code>********</code>
                                        </td>
                                        
                                        <td>
                                            <span class="badge {{ $user->role === 'Admin' ? 'bg-danger' : 'bg-secondary' }}">
                                                {{$user->role}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /table-responsive -->

                    <div class="d-flex justify-content-center mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
