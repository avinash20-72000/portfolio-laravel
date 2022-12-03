@extends('layout.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Table</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
               {{ $users->links() }}
            </ul>
        </div>
    </div>
@endsection
