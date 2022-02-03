@extends('layouts.adminLayout')


@section('tille', 'Stock Product')

@section('content')

<div class="container">
        {{-- nav --}}
        <div class="row g-3 mt-3 ">
            <div class="col-sm-3">
                <a href="{{ url('/admin/addProducts') }}" type="button" class="btn btn-success btn-sm">เพิ่มสินค้า</a>
            </div>
            <div class="col-sm input-group input-group-sm mb-3">
                <form class="d-flex ms-auto input-group-sm">
                    <input type="text" class="form-control rounded-start rounded-0" placeholder="search" aria-label="search" aria-describedby="button-search">
                    <button class="btn btn-outline-secondary rounded-end rounded-0" type="button" id="button-search">Button</button>
                </form>
            </div>
        </div>

        <div class="">
            {{-- Table Product --}}
            <table class="table table-bordered mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">รหัสสินค้า</th>
                    <th scope="col">ชื่อสินค้า</th>
                    <th scope="col">ราคา (บาท)</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">หน่วย</th>
                    <th scope="col">update</th>
                    <th scope="col">User update</th>
                    <th scope="col">action</th>
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
                    <td></td>
                    <td class="d-grid gap-2 d-md-block">
                        <a href="{{ url("/admin/updateProducts") }}" type="button" class="btn btn-primary btn-sm">edit</a>
                        <a href="" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delProduct" >del</a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="delProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-auto">
                    <p>ต้องการลบ "รหัสสินค้า ชื่อสินค้า" ใช่หรือไม่</p>
                </div>
                <div class="mx-auto mb-3">
                    <button type="button" class="btn btn-primary" >ใช่</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
            </div>
        </div>




</div>

@endsection
