<?php
$con=mysqli_connect("localhost","root","","Login");
if($con)
{
    if(isset($_POST['Reg']))
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
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $sql1="select * from login where email='$email';";
        $qry1=mysqli_query($con,$sql1);
        $result=mysqli_num_rows($qry1);
        echo "<div class='form2'>";
        if($result==1)
        {
            echo "<h1>User Already Exist.</h1>";
        }
        else
        {
            $sql2="insert into login values('$name','$pwd','$email');";
            $qry2=mysqli_query($con,$sql2);
            if($qry2){
                echo "<h1>Account Created Successfully.</h1>";
                echo "<h1>Hello $name..</h1>";
            }
        }
        echo "</div>";

    }
}
?>