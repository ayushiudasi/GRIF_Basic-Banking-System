<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type = "text/css">
         body{
            margin : 0px;
            padding:0px;
      background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("p.jpg");
      background-repeat: none;
      background-position: center;
      background-size: cover; 
      width: 100%;
      height: 100vh;
      position: relative;
          }
          

    
          .bgimage{
            
            background-size:100%100%;
            width: 100%;
            height: 100vh;
          }

            .menu{
            width :100%;
            height:80px;
            background-color:rgba(0,0,0,0.75);
        
          }
          .lmenu{
            width : 35%;
            line-height: 80px;
            float: left;
            font-weight:bold;
            color:white;
            font-size:12px;
            font-family: 'Righteous', cursive;
            margin-left: 20px;

          }
          .rmenu{
           width : 60%;
           height:15vh;
           float:right;
           font-size: 15px;
           font-weight:bold;
           color:white; 
           font-family: 'Righteous', cursive;

          }
          .rmenu ul li {
            display:inline;
            list-style: none;
            font-weight: bold;
            line-height: 80px;
            margin-left:75px;
            font-size: 20px;  
            font-family: 'Righteous', cursive;
          

          }
          .text{
            
            margin-left: 100px;
            margin-top: 40px;
           }

           .rmenu li a{
             text-decoration: none;
             color:#fff;

           }
           
            #b1{
              
                background: #fb743e;
      background-image: -webkit-linear-gradient(top, #fb743e, #fb743e);
      background-image: -moz-linear-gradient(top, #fb743e, #fb743e);
      background-image: -ms-linear-gradient(top, #fb743e, #fb743e);
      background-image: -o-linear-gradient(top, #fb743e, #fb743e);
      background-image: linear-gradient(to bottom, #fb743e, #fb743e);
      -webkit-border-radius: 28;
      -moz-border-radius: 28;
      border-radius: 28px;
      font-family: Georgia;
      color: #ffffff;
      font-size: 20px;
      padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: none;
            }
            #b1:hover {
              
               background: #fb743e;
  background-image: -webkit-linear-gradient(top, #fb743e, #3498db);
  background-image: -moz-linear-gradient(top, #fb743e, #3498db);
  background-image: -ms-linear-gradient(top, #fb743e, #3498db);
  background-image: -o-linear-gradient(top, #fb743e, #3498db);
  background-image: linear-gradient(to bottom, #fb743e, #3498db);
  text-decoration: none;
                }
            #b2{
                background-color:#EDE61C;
                border: 2px solid black;
                color: black;
                padding: 15px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                margin-left: 80px;
                font-family: 'Righteous', cursive;

              }
            #b2:hover {
              background-color: rgba(0,0,0,0.8);
              color: white; 
                }


            
            margin-left: 450px;
            margin-right: 200px;
            height:405px;
            width:405px;
            font-size:50px;
            font-family:'Righteous', cursive;
            background-color:white;
            color:black;
            border-radius: 50%;
            display: inline-block;
           }*/
           .exp:hover{
            
            background: linear-gradient(to right, #43cea2,#185a9d);
            color:black;
            opacity: 0.8;
            transform: scale(1);
            box-shadow: 0 2px 4px #000, 0 8px 32px rgba(0, 0, 0, 0.5);
           }
           .exp:hover:before,
.exp:hover:after {
  position: absolute;
  content: "";
  background: linear-gradient(90deg, #ddd 40%, transparent 40%);
  top: -5px;
  bottom: -5px;
  left: -5px;
  right: -5px;
  z-index: 1;
  border-radius: 4px;
  background-size: 200% 4px;
  background-repeat: no-repeat;
  filter: drop-shadow(0 0 8px #fff);
  background-position: 80% 0;
}

.exp:hover:before {
  animation: beforeLineAnim 2s linear infinite;
}

.exp:hover:after {
  animation: afterLineAnim 2s linear infinite;
  transform: rotate(-90deg);
  background-position: -20% 0;
}

footer{
  background-color:rgb(56,56,56);
  color:white;
  font-family:Brawler;
  z-index:-99;
  opacity:0.85;
}
footer a{
  color: #ffffff;
  text-decoration: none !important;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}   footer a:hover{
  color:#ffffff;
}
footer ul.quick-links li{
  padding: 3px 0;
  color: #ffffff;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
footer ul.quick-links li:hover{
  padding: 3px 0;
  color: #ffffff;
  margin-left:15px;
  font-weight:700;
}

           <----from here ->
           .socio{
           width : 60%;
           float:right;
           font-size: 15px;
           font-weight:bold;
           color:white; 
           font-family: 'Righteous', cursive;

           }
           .socio ul li{
            display:inline;
            list-style: none;
            font-weight: bold;
            margin-left: 85px;
             

           }
           #id1{
            font-family: 'Montserrat', sans-serif;
            font-size: 50px;
            color:rgba(0,0,0,0.75);
            border: 4px solid black;
            margin-left: 70px;
            margin-right: 70px;
            border-radius: 70px;
            background-color: #89beb3;
           }
           #id2{
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            margin-left:33px;
            margin-top: -50px;

           }
           #ld{
            margin-top: 50px;
            margin-left: 30px;
            color:white;

           }
           @media screen and (max-width: 400px){
            #mmain{
              width:100%;

           }
           .bgimage{
              width:100% ;
           }
           .menu{
            height:40vh;
           }
           .lmenu{
              width:35%;
           }
           .rmenu{
            width:75%;
           }
         }

      </style>
      
</head>
<body style="">
  
  <div id = "mmain">
   <div class = "bgimage">
    <div class = "menu">
        
         <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #010101;">
     
            <a  class="navbar-brand"href="index.php">&nbsp;SPARKS BANK</a>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="viewcustomer.php">ALL CUSTOMERS</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="transfer.php">TRANSFER MONEY</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="history.php">VIEW HISTORY</a>
          </li>
              </ul>        
          </div>
        </nav>
    </div>
    <div class = "text">
      
      <BR>     
        <div style="margin-top: 200px;margin-left: 600px;">        
        <button  style="margin-left: 150px;" name = "b1" id = "b1" onclick="window.location.href = 'viewcustomer.php';">View All Customers</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button name = "b2" id = "b1" onclick="window.location.href = 'history.php';">View History</button>&nbsp;&nbsp;
        </div>
    </div>

  </div>
 <footer class="page-footer font-small  pt-4">
       <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
          <h2 class="text"style="margin-left: 0px;">SPARKS BANK</h2>
          <h4>The best job in less time</h4>
          </div>

          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
           <h5 class="text-uppercase">About Us</h5>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Contact Us</h5>
        </div>
          </div>
         </div>        
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        SPOTHIRE.com
        </div>
    </footer>

</body>
</html>