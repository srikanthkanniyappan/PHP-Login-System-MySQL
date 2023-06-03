<?php
$con=mysqli_connect("localhost","root","","Login");
if($con)
{
    if(isset($_POST['signin']))
    {
        echo '<style type="text/css">
                .form2{
                    margin: 100px auto;
                    max-width: 600px;
                    background-color:rgb(0, 0, 0,.5);
                    padding: 10px;
                    border-radius: 10px;
                    text-align: center;
                    color:snow;
                }
                body{
                    background-image:url(img/img3.jpg);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center center;
                    font-family: Georgia, "Times New Roman", Times, serif;
                }
            </style>';    
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $sql1="select * from login where email='$email' and password='$pwd';";
        $qry1=mysqli_query($con,$sql1);
        $result=mysqli_num_rows($qry1);
        echo "<div class='form2'>";
        if($result==1)
        {
            $row=mysqli_fetch_array($qry1);
            echo "<h1>Login Successfully.</h1>";
            echo "<h1>Hello ".$row['uname']."...</h1>";
        }
        else
        {
            echo "<h1>Login Denied...</h1>";
            echo "<h3>Please Enter Correct UserName Or Password.</h3>";
        }
        echo "</div>";
    }
}
?>