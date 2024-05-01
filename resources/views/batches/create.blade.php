{{--@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('batches/style.css') }}">


<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">

      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Course Name</label></br>
        <!--<input type="text" name="course_id" id="course_id" class="form-control"></br>-->

        <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>


        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>


        <input type="submit" value="Save" class="btn btn-success">

    </br>
    </form>

  </div>
</div>

@stop --}}









@extends('layout')
@section('content')


    <style>
        @import url('https://fonts.googleapis.com/css?family=Libre+Franklin:100,300,400,600,700,900');

        $primary =#ff8d00 $box-shadow--vertical =0 3px 6px 6px $dark =#111922 $grey-light =#a1a2a3
        /* -----------------------
      Presentational stuff
    ----------------------- */
        body font-family 'Libre Franklin',
        sans-serif background $dark h1 font-weight 900 // text-transform uppercase
        color $primary @media (min-width: 1200px) font-size 60px
        /* -----------------------
      Form
    ----------------------- */
        .form-control border-radius 0 &:focus box-shadow none .form-group position relative margin-bottom 25px>label text-transform uppercase font-size 10px color $grey-light transform-origin 0 0 transform scale(1.4) pointer-events none position relative z-index 5>input width 100% // Label dinamica
        >label transition transform .4s transform-origin 0 0 transform scale(1.4) translateY(20px) &.not-empty>label transform none // .form-group



        /*------------------------------
     Form
    ------------------------------*/
        .form-control border 0 border-bottom 1px solid $grey-light &,
        &:focus,
        &:focus:hover color $primary background none outline none &:focus,
        &:focus:hover border-bottom 1px solid $primary body {
            font-family: 'Libre Franklin',
            sans-serif;
            background: #111922;
        }

        h1 {
            font-weight: 900;
            color: #ff8d00;
        }
        /* .form-control {
            border-radius: 0;
        } */

        .form-control {
    border: 0;
    border-bottom: 1px solid #f0f7ff;
    color: #ff8d00;
    background: none;
    outline: none;
    text-align: center; /* เพิ่มคำสั่งนี้เพื่อให้ตัวหนังสืออยู่ตรงกลาง */
}

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group>label {
            text-transform: uppercase;
            font-size: 10px;
            color: #eef7ff;
            transform-origin: 0 0;
            transform: scale(1.4);
            pointer-events: none;
            position: relative;
            z-index: 5;
        }

        .form-group>input {
            width: 100%;
        }

        .form-group>label {
            transition: transform 0.4s;
            transform-origin: 0 0;
            transform: scale(1.4) translateY(20px);
        }

        .form-group.not-empty>label {
            transform: none;
        }

        .form-control {
            border: 0;
            border-bottom: 1px solid #f0f7ff;
            color: #ff8d00;
            background: none;
            outline: none;
        }

        .form-control:focus,
        .form-control:focus:hover {
            border-bottom: 1px solid #ff8d00;
        }

        /* แต่งภาพ*/
        .carousel-item img {
            border-radius: 10px;
            /* ทำให้มีการโค้งขอบ 10px */

            /* border-radius: 50%; /* ทำให้ภาพเป็นวงกลม */
            /*width: 50%; /* กำหนดขนาดความกว้างของภาพให้เป็น 50% */
        }

        /* แต่งภาพ*/
        .container {
            /* background-color: #f0f0f056; */
            background-color: #3E3B3B5A;
            /* เลือกสีพื้นหลังตามที่คุณต้องการ */
            border-radius: 10px;
            /* ทำให้มีการโค้งขอบ 10px */
            padding: 20px;
            /* เพิ่ม padding หรือขอบรอบของ container ตามความต้องการ */
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }


        /* ตัวอักษรด้านบน */
        .card-header {
            height: 58px;
            width: 450px;
            /* กำหนดความกว้างเป็น 450px */
            /* background-color: #f0f0f056; */
            background-color: #3E3B3B5A;
            /* เลือกสีพื้นหลังตามที่คุณต้องการ */
            border-radius: 30px;
            /* โค้งขอบด้านล่างซ้ายและขวา โค้งขอบด้านบนซ้ายและขวา */
            padding: 10px;
            /* เพิ่ม padding 10px ทั้งสี่ด้าน */
            margin: 10px auto;
            /* เพิ่ม margin 10px ทั้งสี่ด้าน และจัดตำแหน่งตรงกลางด้วยการกำหนด margin ด้านล่างและด้านบนเป็น auto */
        }

        .card-header h4 {
            color: white;
            /* เปลี่ยนสีตัวหนังสือเป็นขาว */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            /* เพิ่มเงาตัวหนังสือด้านขวา */
            text-align: center;
            /* จัดตำแหน่งตรงกลาง */
        }

        /* ตัวอักษรด้านบน */

/* ปุ่ม Save */
        .bubbly-button {
            font-family: 'Helvetica', 'Arial', sans-serif;
            display: inline-block;
            font-size: 1em;
            padding: 1em 2em;
            margin-top: 10px;
            margin-bottom: 10px;
            -webkit-appearance: none;
            appearance: none;
            background-color: #ff0081;
            color: #fff;
            border-radius: 100px;
            border: none;
            cursor: pointer;
            position: relative;
            transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
            box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
        }

        .bubbly-button:focus {
            outline: 0;
        }

        .bubbly-button:before,
        .bubbly-button:after {
            position: absolute;
            content: '';
            display: block;
            width: 140%;
            height: 100%;
            left: -20%;
            z-index: -1000;
            transition: all ease-in-out 0.5s;
            background-repeat: no-repeat;
        }

        .bubbly-button:before {
            display: none;
            top: -75%;
            background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 20%, #ff0081 20%, transparent 30%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
        }

        .bubbly-button:after {
            display: none;
            bottom: -75%;
            background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
            background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
        }

        .bubbly-button:active {
            transform: scale(0.9);
            background-color: #e60073;
            box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
        }

        .bubbly-button.animate:before {
            display: block;
            animation: topBubbles ease-in-out 0.75s forwards;
        }

        .bubbly-button.animate:after {
            display: block;
            animation: bottomBubbles ease-in-out 0.75s forwards;
        }

        @keyframes topBubbles {
            0% {
                background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
            }

            50% {
                background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
            }

            100% {
                background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }

        @keyframes bottomBubbles {
            0% {
                background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
            }

            50% {
                background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
            }

            100% {
                background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
                background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }
/* ปุ่ม Save */

    /* เพิ่ม text-indent เพื่อเยื้องตัวเลือกไปทางขวา 15px */
    /*select.form-control {
        text-indent: 70px;
    } */


    /* CSS สำหรับเปลี่ยนสีไอคอนปฏิทิน */
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }




    </style>



    <div class="card-header">
        <h4>Batches Page Create</h4>
    </div>





    <!-- ภาพเท่ากัน -->
    {{-- <div class="carousel-item">
                <img src="{{ asset('storage/images/white-1842315_1280.jpg') }}" class="d-block rounded-circle" style="width: 380px; height: 380px;" alt="...">
              </div> --}}

    <div class="container mt-5">


        <div class="row justify-content-center">


            <div class="col-md-5 d-flex align-items-center">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" rounded-end>
                            <img src="{{ asset('storage/images/white-1842315_1280.jpg') }}"
                                class="d-block w-100 rounded-start" alt="...">
                        </div>
                        <div class="carousel-item" rounded-end>
                            <img src="{{ asset('storage/images/pedestrians-400811_1280.jpg') }}"
                                class="d-block w-100 rounded-start" alt="...">
                        </div>
                        <!-- เพิ่มสไตล์ rounded-end เพื่อให้มุมด้านข้างที่สิ้นสุดของภาพเป็นสี่เหลี่ยมโค้ง -->
                        <div class="carousel-item rounded-end">
                            <img src="{{ asset('storage/images/bram-naus-n8Qb1ZAkK88-unsplash.jpg') }}"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" rounded-end>
                            <img src="{{ asset('storage/images/books-5433432_1280.jpg') }}"
                                class="d-block w-100 rounded-start" alt="...">
                        </div>
                        <div class="carousel-item" rounded-end>
                            <img src="{{ asset('storage/images/pens-1867899_1280.jpg') }}"
                                class="d-block w-100 rounded-start" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>







            <div class="col-md-5 offset-md-1">
                <form class="mt-4 mt-md-0" form action="{{ url('batches') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name">Batch Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>


                    <div class="form-group">
    <label for="course_id">Course Name</label>
    <select name="course_id" id="course_id" class="form-control">
        @foreach($courses as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

                        <div class="form-group">
                        <label for="email">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control"> </br></br>

                        <button class="bubbly-button" type="submit" style="float: right;">SAVE</button>

                        <!-- <button class="bubbly-button" type="submit" float: right;>SAVE</button>
                <input type="submit" value="Save" class="btn" style="width: 50%; background: rgb(9, 9, 121); background: linear-gradient(90deg, rgb(211, 28, 202) 35%, rgb(232, 46, 121) 100%); color: white; box-shadow: 5px 0px 20px rgba(39, 4, 4, 0.5); float: right;">--></br>


                    </div>

                </form>
            </div>











        </div>
    </div>

    </br>

    <!-- นำเข้า jQuery ก่อนใช้งานคำสั่ง -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(() => {
            $('.form-group').each((i, e) => {
                $('.form-control', e)
                    .focus(function() {
                        e.classList.add('not-empty');
                    })
                    .blur(function() {
                        this.value === '' ? e.classList.remove('not-empty') : null;
                    });
            });
        });
    </script>






    <script>
        var animateButton = function(e) {

            e.preventDefault;
            //reset animation
            e.target.classList.remove('animate');

            e.target.classList.add('animate');
            setTimeout(function() {
                e.target.classList.remove('animate');
            }, 700);
        };

        var bubblyButtons = document.getElementsByClassName("bubbly-button");

        for (var i = 0; i < bubblyButtons.length; i++) {
            bubblyButtons[i].addEventListener('click', animateButton, false);
        }
    </script>







@stop
