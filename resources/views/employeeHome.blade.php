@extends('layouts.employeeLayout')

@section('tille', 'Stock Product')
@section('content')

<div class="container">

        {{-- Table Product --}}
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
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
              </tr>
              <tr>
                <th scope="row">2</th>
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
              </tr>
            </tbody>
        </table>

</div>

@endsection
