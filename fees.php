<html>
<head>
  <title>HOME</title>
<style>
.topp{
    display: flex;
    flex-direction: row;
    justify-content:space-between;
    background-color: white;
    align-items: top;
    
}
.topp img{
    margin: 0px;
    border-bottom: 5px solid rgb(11, 145, 235);
}
ul {
    height:13%;
    width:auto;
    list-style-type: none;
    display:flex;
    flex-direction: row;
    float: right;
    margin:0px;
    font-weight: bold;
    /* justify-content:right; */
}

a.cd {
    float: left;
    width: auto;
    height: 75px;
    text-decoration: none;
    color: rgb(11, 145, 235);
    background-color: white;
    padding-top:8em;
    padding: 1.7em 0.6em;
    width: 100%;
    border-bottom: 5px solid rgb(11, 145, 235);
}
body{background-color:white;}

a.cd:hover {
    transition-duration: 0.5s ;
    background-color: rgb(250, 244, 114);
    text-decoration: underline;
}

li {display: inline;}
    
</style>
</head>
<body>
<div class="topp">
        <img src="images.png" alt="some_text" height="13%">
       <ul>
            <li><a class="cd" href="index.html">Home</a></li>
         <li><a class="cd" href="index1.html">About us</a></li>
         <li><a class="cd" href="index2.html">Academics</a></li>
         <li><a class="cd" href="index3.html">Fee</a></li>
         <li><a class="cd" href="index4.html">Admissions</a></li>
         <li><a class="cd" href="index5.html" >Career</a></li>
           <li><a class="cd" href="index6.html" >Register</a></li>
           <li><a class="cd" href="index7.html" >Login</a></li>
           <li><a class="cd" href="index8.html" >Admin Login</a></li>
       </ul>
</div>
<style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
   
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
    </head>
    <body>
    <?php 
     $g=$_POST['appid'];
     $z=$_POST['fee'];
    $sql="select appid from `se1`.`std` where appid=$g";
     if($sql==false)
    {
        echo"Password Dont Match";
        echo '<script type="text/javascript">'; 
echo 'alert("review your entries");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
    }
     ?>
    <marquee behavior="alternate"><h2>ONE OF THE BEST COLLEGE OF INDIA</h2></marquee>
    <h1>Your Fees is Clear</h1>
    
    <h1>Click <a href="index.html">here</a> to go to home page </h1>
    
<!-- <img src="Nelson-Mandela-Quotes-Education2.jpg" alt="some_text" height="70%" width="100%" > -->
<footer><div ><img src="Untitled2.png" alt="some_text" height="15%" width="100%"></div></footer>
</body>
</html>