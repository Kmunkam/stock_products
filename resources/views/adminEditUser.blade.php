@extends('layouts.adminLayout')


@section('tille', 'Stock Product')
@section('content')

<div class="container">
    <div class="col-md-6 mt-5 ms-3">
        <h4 class="my-3 mb-5">Update data employee</h4>
        <div class="mb-3">
            <label for="idEmployee" class="form-label">ID Employee</label>
            <input type="number" class="form-control" id="idEmployee">
        </div>
        <div class="mb-3">
            <label for="firtsname" class="form-label">Firtsname</label>
            <input type="text" class="form-control" id="firtsname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname">
        </div>
        <div class="mb-3">
            <label for="phonenumber" class="form-label">Phone number</label>
            <input type="number" class="form-control" id="phonenumber">
        </div>
        <div class="mb-3">
            <label for="roleuser" class="form-label">Role</label>
            <select class="form-select rounded" aria-label="roleuser">
                <option selected>Please select role</option>
                <option value="1">Admin</option>
                <option value="2">Employee</option>
            </select>
        </div>
        <div class="mt-5">
            <a href="" class="btn btn-success">save</a>
        </div>
    </div>


</div>

<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

label{
    font-weight: bold;
}

</style>

@endsection
