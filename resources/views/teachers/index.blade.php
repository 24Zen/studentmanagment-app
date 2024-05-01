@extends('layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->

    <style>
        /*  @import url("https://fonts.googleapis.com/css?family=Lato:400,700");*/

        /*@import url('https://fonts.googleapis.com/css?family=Libre+Franklin:100,300,400,600,700,900'); */

        /* แต่งตรง card */

        .card {
            padding-top: 8px;
            padding-right: 40px;
            padding-left: 40px;
            padding-bottom: 8px;
            margin: 15px 30px 15px 30px;
            /*บน ขวา ล่าง ซ้าย  ห่างจากวัตถุรอบข้าง */
            background-color: rgba(255, 253, 253, 0.155);
            /* สีขาว */
            border-radius: 15px;
            /* ทำให้มนเป็นวงกลม */
        }


        .title {
            padding-top: 8px;
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 8px;
            margin: 5px 50px 5px 50px;
            /*บน ขวา ล่าง ซ้าย  ห่างจากวัตถุรอบข้าง */
            font-size: 10px;
            /* เพิ่มขนาดตัวอักษรเป็น 20px */
            font-weight: 300;
            /* เพิ่มการเน้นตัวหนา */
            color: #0f0b0b;
            /* เปลี่ยนสีตัวอักษรเป็นสีดำ */
            background-color: rgba(24, 24, 16, 0.703);
        }


        .intro {
            height: 100%;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .mask-custom {
            background: rgba(24, 24, 16, 0.703);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0);
            padding-top: 5px;
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }

        .card.mask-custom2 {
            border-radius: 50px;
            background: rgba(24, 24, 16, 0.703);
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }


        .form-control {
            width: 300px;
            /* ปรับความกว้างตามต้องการ */
            padding: 10px;
            /* ปรับขนาดของพื้นที่ของช่องค้นหา */
            border-radius: 20px;
            /* ปรับเส้นขอบเพื่อให้มีมุมโค้ง */
            border: 1px solid #ccc;
            /* ปรับสีเส้นขอบ */
            font-size: 16px;
            /* ปรับขนาดตัวอักษร */
        }

        .form-control:focus {
            outline: none;
            /* ลบเส้นขอบเมื่อได้รับการเลือก */
            border-color: #3700ff64;
            /* ปรับสีเส้นขอบเมื่อได้รับการเลือก */
        }


        .primary-button {
            position: relative;
            border: 2px solid #ffffff;
            border-radius: 50px;
            /* แก้ไขเป็นค่าที่ถูกต้องสำหรับการปรับลักษณะของปุ่ม */
            width: 150px;
            height: 45px;
            overflow: hidden;
            background-color: transparent;
            text-transform: uppercase;
            color: #ffffff;
            font-size: 12px;
            font-family: "Rubik", sans-serif;
            font-weight: 500;
            text-decoration: none;
            /* เพิ่มให้ลิงก์ไม่มีขีดเส้นใต้ */
            display: inline-block;
            /* เพิ่มให้ปุ่มเป็นพื้นที่บนเว็บ */
            text-align: center;
            /* ตำแหน่งข้อความตรงกลาง */
            line-height: 45px;
            /* ทำให้ส่วนสูงของข้อความเท่ากับส่วนสูงของปุ่ม */
        }


        .primary-button:hover {
            cursor: pointer;
            border: 2px solid #0197f6;
            /* ปรับขนาดของเส้นขอบเมื่อโฮเวอร์ */
        }

        .primary-button .round {
            border-radius: 50%;
            background-color: #0197f6;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* ย้ายลวดลายให้อยู่กลางปุ่ม */
            z-index: -1;
            transition: transform 0.2s ease-in-out;
            /* เพิ่มเอฟเฟกต์การเคลื่อนไหวเมื่อคลิก */
            width: 150px;
            /* ปรับขนาดลวดลายให้เท่ากับปุ่ม */
            height: 150px;
            /* ปรับขนาดลวดลายให้เท่ากับปุ่ม */
            opacity: 0;
            /* ซ่อนลวดลายในขณะที่ไม่ได้คลิก */
        }

        .primary-button:hover .round {
            transform: scale(3);
            /* ขยายลวดลายเมื่อโฮเวอร์ */
            opacity: 1;
            /* แสดงลวดลายเมื่อโฮเวอร์ */
        }

        .primary-button:active {
            background-color: #ffffff;
            /* ปรับสีพื้นหลังให้เป็นขาวเมื่อคลิก */
        }

        .intro .bg-image.h-100 .mask.d-flex.align-items-center.h-100 .container .row.justify-content-center .col-12 .card.mask-custom .card-body h4 {
            color: white;
            /* เปลี่ยนสีตัวหนังสือเป็นขาว */
            text-align: center;
            /* จัดตำแหน่งตรงกลาง */
            padding-bottom: 5px;
            /* ปรับระยะห่างด้านล่าง */
        }


        .pagination-container {
            display: flex;
            justify-content: center;
            /* จัดให้ปุ่ม pagination อยู่กึ่งกลางในแนวนอน */
            align-items: center;
            /* จัดให้ปุ่ม pagination อยู่กึ่งกลางในแนวตั้ง */
        }

        /* เฉพาะส่วนของปุ่ม pagination */
        .pagination-container .pagination {
            display: flex;
            /* กำหนดให้ปุ่มเป็น flex เพื่อให้สามารถจัดตำแหน่งได้ */
            list-style: none;
            /* เอาลูกศรออก */
            padding: 0;
        }

        /* ระยะห่างระหว่างปุ่ม */
        .pagination-container .pagination li {
            margin: 0 0px;
            /* ระยะห่างแนวนอนระหว่างปุ่ม */
        }
    </style>
    </body>

    <section class="intro">
        <div class="bg-image h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card mask-custom">
                                <div class="card-body">

                                    <h4>Teacher Page</h4><br><br>
                                    <div id="button-container" style="display: flex; justify-content: space-between;">
                                        <a href="{{ url('/teachers/create') }}" class="primary-button">
                                            + ADD
                                            <span class="round"></span>
                                        </a>
                                        <input class="form-control" id="myInput" type="text" placeholder="  Search.."
                                            style="margin-left: auto;">
                                    </div>
                                    <br />
                                    <div class="table-responsive">

                                        <table id="myTable" class="table table-borderless text-white mb-0">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($teachers as $index => $item)
                                                <tr>
                                                    <td>{{ ($teachers->currentPage() - 1) * $teachers->perPage() + $index + 1 }}</td>
                                                        {{--<td>{{ $loop->iteration }}</td> --}}
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->mobile }}</td>

                                                        <td>

                                                            <a href="{{ url('/teachers/' . $item->id) }}"
                                                                title="View Teacher">
                                                                <button class="btn btn-sm"
                                                                    style="background: linear-gradient(-225deg, #18bcd1ce , #0aa1bcd2); color: #ffffff;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-search" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                                    </svg> View
                                                                </button>
                                                            </a>

                                                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}"
                                                                title="Edit Teacher"><button class="btn btn-sm"
                                                                    style="background: linear-gradient(-225deg, #30a83ebd,#15a42dbe); color: #ffffff;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                    </svg> Edit</button></a>

                                                            <form method="POST"
                                                                action="{{ url('/teachers' . '/' . $item->id) }}"
                                                                accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}

                                                                <button type="submit" class="btn btn-sm"
                                                                    style="background: linear-gradient(-225deg, #d62121ba, #c72c2cb2);"
                                                                    title="Delete Teacher"
                                                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
                                                                    </svg></i> Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="pagination-container">
                                            {{ $teachers->render() }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    {{--     </div>      --}}


    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tbody tr").each(function() {
                    var rowText = $(this).text().toLowerCase();
                    $(this).toggle(rowText.indexOf(value) > -1);
                });
            });
        });
    </script>


    <script>
        let button = document.querySelector(".primary-button");
        let item = document.querySelector(".primary-button .round");

        button.addEventListener("mouseenter", function(event) {
            this.classList += " animate";

            let buttonX = event.offsetX;
            let buttonY = event.offsetY;

            if (buttonY < 24) {
                item.style.top = 0 + "px";
            } else if (buttonY > 30) {
                item.style.top = 48 + "px";
            }

            item.style.left = buttonX + "px";
            item.style.width = "1px";
            item.style.height = "1px";
        });

        button.addEventListener("mouseleave", function() {
            this.classList.remove("animate");

            let buttonX = event.offsetX;
            let buttonY = event.offsetY;

            if (buttonY < 24) {
                item.style.top = 0 + "px";
            } else if (buttonY > 30) {
                item.style.top = 48 + "px";
            }
            item.style.left = buttonX + "px";
        });
    </script>
@endsection
