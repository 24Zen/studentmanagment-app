{{-- @extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />




        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}" ></br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollments->batch_id}}" ></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student_id}}" ></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrollments->join_date}}" ></br>

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}" ></br>

        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>

  </div>
</div>

@stop --}}












@extends('layout')

@section('content')
<style>
    .card {
        width: 600px;
        padding: 30px;
        margin: 30px auto;
        border: 0px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff54;
    }

    .card-header {
        font-size: 30px;
        text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow */
        background-color: #007bff00;
        color: rgb(255, 255, 255);
        text-align: center; /* Center-align the text */
        border: 0px solid #ccc;
        padding: 10px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        padding: 20px;
    }

    label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        margin-bottom: 10px;
    }

    .btn-success {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }








 /* Lato font */

/* Color/UI color variables */
:root {
  --white: #ececec;
  --black: #111111;
  --red1: #e74c3c;
  --red2: #c92918;
  --colorPrimary: var(--red1);
  --colorSecondary: var(--red2);
}

/* Button styles */
.container2 {
  text-align: center;
}

button.btn {
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 500;
  border: 0;
  position: relative;
  letter-spacing: 0.15em;
  margin: 0 auto;
  width: 150px;
  height: 50px;
  background: transparent;
  outline: none;
  font-size: 18px; /* ปรับขนาดตัวอักษรให้เหมาะสม */
  color: var(--black);
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.15s;
}
button.btn::after,
button.btn::before {
  border: 0;
  content: "";
  position: absolute;
  height: 30%;
  width: 10%;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: -2;
  border-radius: 50%;
}
button.btn::before {
  background-color: var(--colorSecondary);
  top: -0.75rem;
  left: 0.5rem;
  animation: topAnimation 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.25s infinite alternate;
}
button.btn::after {
  background-color: var(--colorPrimary);
  top: calc(50% + 25px); /* ย้ายลงมากลางตามสูงของปุ่ม */
  left: calc(50% + 75px); /* ย้ายไปด้านขวาออก */
  animation: bottomAnimation 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s infinite alternate;
}
button.btn:hover {
  color: var(--white);
}
button.btn:hover::before,
button.btn:hover::after {
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 0;
  animation: none;
}
button.btn:hover::after {
  left: 0rem;
}
button.btn:hover::before {
  top: 0.5rem;
  left: 0.35rem;
}

@keyframes topAnimation {
  from {
    transform: translate(0rem, 0);
  }
  to {
    transform: translate(0rem, 3.5rem);
  }
}
@keyframes bottomAnimation {
  from {
    transform: translate(-5.75rem, 0); /* ย้ายไปด้านขวาออก */
  }
  to {
    transform: translate(0rem, 0);
  }
}



</style>


<div class="card">
    <div class="card-header">Enrollment Edit Page</div>
    <div class="card-body">
        <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id"  value="{{$enrollments->id}}" />

            <label>Enroll No</label><br>
            <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollments->enroll_no}}" class="form-control"><br>

            <label>Batch</label><br>
            <input type="text" name="batch_id" id="batch_id" value="{{$enrollments->batch_id}}" class="form-control"><br>

            <label>Student</label><br>
            <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"><br>
            <!--<input type="submit" value="Update" class="btn btn-success"><br>-->

            <label>Join Date</label><br>
            <input type="date" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"><br>

            <label>Fee</label><br>
            <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"><br>
            <!--<input type="submit" value="Update" class="btn btn-success"><br>-->


            <div class="container2">
                <button class="btn" type="submit" value="Update">Save me!</button>
              </div>


        </form>


    </div>
</div>
@stop
