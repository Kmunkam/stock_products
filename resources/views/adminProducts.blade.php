@extends('layouts.adminLayout')


@section('tille', 'Stock Product')

@section('content')

<div class="container">
    {{-- nav --}}
    <div class="row g-3 mt-3 ">
        <div class="">
            <div class="col-sm input-group mb-2">
                <a href="" class="btn btn-sm btn-primary rounded me-2">Add Products</a>
                <a href="" class="btn btn-sm btn-info rounded ms-2">Edit Products</a>
                <form class="d-flex ms-auto input-group-sm">
                    <input type="text" class="form-control rounded-start rounded-0" placeholder="search" aria-label="search" aria-describedby="button-search">
                    <button class="btn btn-outline-secondary rounded-end rounded-0" type="button" id="button-search">ค้นหา</button>
                </form>
            </div>
        </div>

    </div>


    <div class="">

        {{-- Table Product --}}
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อสินค้า</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">update</th>
                <th scope="col">user edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>


</div>

@endsection
