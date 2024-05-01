<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Ant Design CSS -->
<link href="https://cdn.jsdelivr.net/npm/antd/dist/antd.css" rel="stylesheet">

<!-- Include your custom CSS file -->
<link rel="stylesheet" href="{{ asset('css/layout.blade.css') }}">
<title>Document</title>


    <!-- Any additional styles can be placed here -->
    <style>
        /* The side navigation menu */


        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            /* background: rgb(131,58,180); */
            /*background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgb(250, 115, 212) 100%); */
            /*background-color: #F8E6F8;*/

            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
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



        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #6347667d;
            /*background-color: #f1f1f1;*/
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: rgb(255, 255, 255);
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #e82b86c1;
            /*background-color: #E74ADA;*/
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #493947;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 100px;
            padding: 1px 10px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
/* Dropdowns */
        .dropbtn {
  background-color: rgba(255, 255, 255, 0);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/*.dropdown-content a:hover {background-color: #f1f1f1} */

.dropdown-content a:hover {
    background-color: #f1f1f1;
    padding-left: 25px; /* เพิ่มการเฉียงด้านซ้าย */
    min-width: 200px;
}



.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ffffff00;
}


    </style>
</head>



    <body>


        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-column justify-content-center align-items-center">

    <div class="container-fluid">



        <div class="row">
            <div class="col-xl-12">
                <!-- Navbar -->
                <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <!-- Navbar collapsible items -->
                    <!--<div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                        <!-- Navbar items go here -->
                    <!-- </div>
                </nav>-->


        <div class="row">
            <div class="col-lg-2">
                <!-- Sidebar -->
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{url('/students')}}">Student</a>
                    <a href="{{url('/teachers')}}">Teacher</a>
                    <a href="{{url('/courses')}}">Course</a>
                    <a href="{{url('/batches')}}">Batches</a>
                    <a href="{{url('/enrollments')}}">Enrollment</a>
                    <a href="{{url('/payments')}}">Payment</a>

                    <div class="dropdown">
                        <button class="dropbtn">
                            Language
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                            </svg>
                        </button>

                        <div class="dropdown-content">
                        <a href="#"style="display: inline-flex; align-items: center;">THAIไทย<img src="{{ asset('storage/images/thailand.png') }}" alt="Thailand Flag" style="height: 40px; margin-left: 10px;"></a>
                        <a href="#"style="display: inline-flex; align-items: center;">KOREAN <img src="{{ asset('storage/images/south-korea.png') }}" alt="Thailand Flag" style="height: 40px; margin-left: 10px;"></a>
                        <a href="#"style="display: inline-flex; align-items: center;">ENGLISH <img src="{{ asset('storage/images/united-kingdom.png') }}" alt="Thailand Flag" style="height: 40px; margin-left: 10px;"></a>
                        </div>
                      </div>




                </div>
            </div>
            <div class="col-lg-10">

                    @yield('content')

            </div>


        </div>


    </div>
</div>


    </div>

</div>
</div>










    <!-- Bootstrap and other JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
