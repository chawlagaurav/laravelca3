<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <style>
      
        /* Google Font Import - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: cyan;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
}

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;  
}
/* .sidebar.close{
    width: 88px;
} */

/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 1;
}
/* =========================== */

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}

.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
}
body.dark .home .text{
    color: var(--text-color);
}
input[type=text], input[type=number] {
  width: 16%;
  padding: 12px 20px;
  margin: 8px 0;
  display:flex;
  justify-content:center;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid cyan;

}
input[type=file]{
    padding: 12px 20px;
  margin: 8px 0;
  display:flex;
  justify-content:center;
  box-sizing: border-box;
  
}
select{
    width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  display:flex;
  justify-content:center;
  border: none;
  border-bottom: 2px solid cyan;

}
.btns {
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: cyan;
  font-size: 20px;
  
  z-index: 5;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}
input[type=submit]{
    background: #fcfcfd;
}

.btns:hover {
  color:#fcfcfd;
  text-decoration: none;
  background: cyan;
}
    </style>
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Admin Page</title> 


</head>
<body>

    <nav class="sidebar close">
    
        <header>
            <div class="image-text">
                <span class="image">
                   
                </span>

                <div class="text logo-text">
                    <span style="color:aqua;" class="name">HEALTHBUD</span>
                    <span class="profession">For your health</span>
                </div>
            </div>

            <!-- <i class='bx bx-chevron-right toggle'></i> -->
        </header>

        <div class="menu-bar">
            <div class="menu">

       

                

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{url('add_doctor_view')}}">
                            <i class='bx bx-plus-medical icon'></i>
                            <span class="text nav-text">New Doctor</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{url('showappointment')}}">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Appointments</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{url('showdoctor')}}">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">All Doctors</span>
                        </a>
                    </li>

                    

                </ul>
            </div>

            <div class="bottom-content">
                <!-- <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li> -->

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
    <x-app-layout>

</x-app-layout>
<div class="container-fluid page-body-wrapper">
      
      

      <div class="container" align="center" style="padding:30px;">

      @if(session()->has('message'))

<div class="alert alert-success">


{{session()->get('message')}}

<button type="button"class="btn-close" data-dismiss="alert">x</button>
</div>

@endif


      <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div style="padding:15px;">
              <label for="">Doctor Name</label>
              <input type="text" style="color:black;" name="name" value="{{$data->name}}">
          </div>

          <div style="padding:15px;">
              <label for="">Phone</label>
              <input type="number" style="color:black;" name="phone" value="{{$data->phone}}">
          </div>

          <div style="padding:15px;">
              <label for="">Speciality</label>
              <input type="text" style="color:black;" name="speciality" value="{{$data->speciality}}">
          </div>

          <div style="padding:15px;">
              <label for="">Room</label>
              <input type="text" style="color:black;" name="room" value="{{$data->room}}">
          </div>

        

          <div style="padding:15px;">
              <label for="">Change Image</label>
              <input type="file" name="file">
          </div>

          <div style="padding:15px;">
              <input  type="submit" class="btns" >
          </div>


      </form>

      </div>

</div>
   
    </section>

    <script>

const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
        
        modeSwitch.addEventListener("click" , () =>{
            body.classList.toggle("dark");
            
            if(body.classList.contains("dark")){
                modeText.innerText = "Light mode";
            }else{
                modeText.innerText = "Dark mode";
                
            }
        });
            </script>

</body>
</html>