<html>
<head>
     
	 
    <style>
 body {font-family: Verdana, sans-serif;}
        .topp{
            display: flex;
            flex-direction: row;
            justify-content:space-between;
            background-color: white;
            align-items: top;
            height:110px;
        }
        .topp img{
            /* border-bottom: 5px solid rgb(11, 145, 235); */
        }
        ul {
        
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

<style>
     div{
            background-color: #e0ebeb;
         
         height: auto;
        }
    /* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    height:10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 0px 0px;
    margin: 0px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    width=25%;
}
table {
    width :90%;
   align-items: flex-start;
    
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
    border-spacing: 10px ;
}
    
tr, th {border-collapse: collapse;
    text-align: center;
    border: 1px solid black;
    background-color: aliceblue;
     border-spacing: 10px ;
    padding: 15px;
	
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 15%;
    height: 5%;
}
footer {
    position : absolute;
        background-color: white;
    bottom : 0px;
    height : 100px;
    margin-top : 0;
       }
    body{
        background-color: darkgoldenrod;
    }
/* Add padding to container elements */
.container {width:100%;
    
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
    height:30px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
    table {
    width:60%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table td:nth-child(even) {
    background-color: #eee;
}
table td:nth-child(odd) {
   background-color:#fff;
}
table th {
    background-color: black;
    color: white;
}
    </style>
     </head>
<body>
    <<div class="topp">
            <img src="images.png" alt="some_text" height="100%">
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
   <style>h1
    {
    color : blue;
    }
       label{
min-width:180px;
display: inline-block;
}
    </style> 
    <title>
    Register</title>
   <div>
    <h2>Students applied and status</h2>

    <?php
    $con = new mysqli("localhost","root","");
    $con->select_db("se1");
session_start();
if(isset($_SESSION['Name'])) {
echo "Welcome " . $_SESSION['Name']." to your Account";
     $_a=$_SESSION['Name'];
  $query = "SELECT * FROM std ;";
    function mysql_query_or_die($query) {
    $result = $con->query($query);
    if ($result)
        return $result;
    else {
        $err = $con->error;
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}
$result = mysql_query_or_die($query);
echo("<table width:80%>");
$first_row = true;
while ($row = $result->fetch_assoc()) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
    
}
echo("</table>"); 
    
    
    /*
    $sql = "SELECT * FROM std where appid='$_a';";
$res1=$con->query($sql); 
if ($res1->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/
    }
     ?>
    <h2>To change status <a href="index10.html">click here</a></h2>
    <br>
    </div>
  <div><footer><img src="Untitled2.png" alt="some_text" height="100%" width="100%"></footer></div>
    </body>
</html>