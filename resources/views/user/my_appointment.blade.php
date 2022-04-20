<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>HealthBud</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

body
{
    background-image: linear-gradient(#fcfcfd, #fcfafa );
    color: #00ffff;
    font-family: 'Poppins', sans-serif;
    text-align:center;
}
h2{
    margin-top:30px;
}
table{
    text-align:center;
    font-family: 'Poppins', sans-serif;
    width: 80%;
    border-spacing:20px;


    
    
}
th {
      background-color: #010107;
      color: #fcfcfd;
      border-radius:20px;
      border:0;
    
      
   }
td{
    height: 30px;
    vertical-align:center;
    border-radius:20px;
    background-color:#00ffff ;
    color:#fcfcfd;
    border:0;
}
th,td{
    padding:5px;
    border-bottom: 1px solid #fcfcfd;
}
td a{
    text-decoration:none;
    color:#fcfcfd;
}
td a:hover{
    color: #010107;
}

  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">HealthBud</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>          

            @if(Route::has('login'))

            @auth 
            <li class="nav-item active">
              <a class="nav-link" href="{{url('myappointment')}}">Appointment</a>
            </li>
            <x-app-layout>
            </x-app-layout>
            @else

            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:70px;">
      <table >
          <tr>
              <th >Doctor Name</th>
              <th >Date</th>
              <th >Message</th>
              <th >Status</th>
              <th >Cancel</th>
          </tr>

          @foreach($appoint as $appoints)
          <tr >
              <td>{{$appoints->doctor}}</td>
              <td>{{$appoints->date}}</td>
              <td>{{$appoints->message}}</td>
              <td>{{$appoints->status}}</td>
              <td><a  onclick="return confirm('Are you sure ?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
          </tr>
          @endforeach
      </table>
  </div>

 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>