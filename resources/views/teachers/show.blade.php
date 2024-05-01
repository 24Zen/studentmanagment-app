{{--@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection--}}




@extends('layout')
@section('content')

<style>
.card {
    width: 600px; /* กำหนดความกว้างของการ์ด */
    padding: 30px;
    margin: 30px auto; /* จัดการระยะห่างรอบๆการ์ดและจัดกึ่งกลางในแนวนอน */
    border: 0px solid #ccc; /* ขอบสีเทา */
    border-radius: 8px; /* โค้งขอบ */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เงา */
    background-color: #ffffff54; /* สีพื้นหลังของส่วนหัวการ์ด */
  }

  .card-header {
    font-size: 24px;
    background-color: #007bff00; /* สีพื้นหลังของส่วนหัวการ์ด */
    color: rgb(0, 0, 0); /* สีของตัวหนังสือในส่วนหัว */
    border: 0px solid #ccc; /* ขอบสีเทา */
    padding: 10px; /* ระยะห่างภายในส่วนหัว */
    border-top-left-radius: 8px; /* โค้งขอบด้านบนซ้าย */
    border-top-right-radius: 8px; /* โค้งขอบด้านบนขวา */
  }

  .card-body {
    padding: 20px; /* ระยะห่างภายในส่วนเนื้อหา */
  }

  .card-title {
    font-size: 18px; /* ขนาดตัวอักษรของหัวข้อ */
    margin-bottom: 10px; /* ระยะห่างด้านล่างของหัวข้อ */
  }

  .card-text {
    margin-bottom: 10px; /* ระยะห่างด้านล่างของข้อความ */
  }

  /* กำหนดระยะห่างระหว่างองค์ประกอบภายใน card-body */
  .card-body > *:not(:last-child) {
    margin-bottom: 10px;
  }
</style>

<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
  </div>

    </hr>

  </div>
</div>

@endsection

