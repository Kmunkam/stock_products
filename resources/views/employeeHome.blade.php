@extends('layouts.employeeLayout')

@section('tille', 'Stock Product')
@section('content')

<div class="container">

    {{-- nav --}}
    <div class="row g-3 mt-3 ">
        <div class="col-sm-3">
            <a href="{{ url('/AddProducts') }}" type="button" class="btn btn-success btn-sm">เพิ่มสินค้า</a>
        </div>
        <div class="col-sm input-group input-group-sm mb-3">
            <form class="d-flex ms-auto input-group-sm">
                <input type="text" class="form-control rounded-start rounded-0" placeholder="search" aria-label="search" aria-describedby="button-search">
                <button class="btn btn-outline-secondary rounded-end rounded-0" type="button" id="button-search">Button</button>
            </form>
        </div>
    </div>

        {{-- Table Product --}}
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID สินค้า</th>
                <th scope="col">ชื่อสินค้า</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">หน่วย</th>
                <th scope="col">update</th>
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
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td></td>
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
                <td></td>
              </tr>
            </tbody>
        </table>

</div>

@endsection
