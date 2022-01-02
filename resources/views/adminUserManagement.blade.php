@extends('layouts.adminLayout')


@section('tille', 'Stock Product')
@section('content')

<div class="container">
    <div class="">
        <div class="col-sm input-group mb-2 mt-5">
            <a href="{{ url('/admin/userManagement/addUser')}}" class="btn btn-sm btn-outline-success rounded">Add User</a>
            <form class="d-flex ms-auto input-group-sm">
                <input type="text" class="form-control rounded-start rounded-0" placeholder="search" aria-label="search" aria-describedby="button-search">
                <button class="btn btn-outline-secondary rounded-end rounded-0" type="button" id="button-search">ค้นหา</button>
            </form>
        </div>
    </div>

    {{-- Table --}}
    <table class="table table-bordered mt-5" id="tableUser">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" style="width: 150px">ID</th>
            <th scope="col" style="width: 300px">Name</th>
            <th scope="col" style="width: 200px">Phone number</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-outline-secondary btn-sm me-1" href="#" role="button">Edit</a>
                <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Del</a>
            </td>
          </tr>
        </tbody>
    </table>
</div>


@endsection
