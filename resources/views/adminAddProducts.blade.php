@extends('layouts.adminLayout')


@section('tille', 'Stock Product')
@section('content')

<div class="container">
    <div class="col-md-6 mt-5 ms-3">
        <h4 class="my-3">เพิ่มสินค้าใหม่</h4>
        <div class="mb-3 mt-5">
            <label for="productID" class="form-label">รหัสสินค้า</label>
            <input type="text" class="form-control" id="productID">
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">ชื่อสินค้า</label>
            <input type="text" class="form-control" id="productName">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">ราคา (บาท)</label>
            <input type="number" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="quantity" class="form-label">จำนวน</label>
                <input type="number" class="form-control" id="quantity">
                </div>
                <div class="col">
                    <label for="unit" class="form-label">หน่วย</label>
                    <input type="text" class="form-control" id="unit">
                </div>
            </div>
        </div>

        {{-- button --}}
        <div class="mt-5">
            <a href="" class="btn btn-success me-3">บันทึก</a>
            <a href="" class="btn btn-danger">ยกเลิก</a>
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
