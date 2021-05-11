@extends('design.admin.layout.app')


@section('title', 'Dashboard')

@section('content')
<style>.avatar{width: 64px;border-radius:50%;}</style>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Registered Users
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Provider</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Provider</th>
                                <th>Created At</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img src="{{ $user->avatar ? asset($user->avatar) : asset('images/profile-icon.png') }}" class="avatar" alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->provider_name ?: 'Direct Register' }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
});
</script>
@endsection