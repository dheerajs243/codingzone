<?php

include("connection.php");
error_reporting(0);
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Speech Therapiest Manish Kumar</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Maan Fitness Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/Index.html">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/channel/UCnYEPxez9Lfvk37PE0rH1EQ">Watch Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/maanfitnessclub/contactus.php">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex">

                    <a id="app" href="#"> <button class="btn btn-outline-success" type="submit">Make an
                            Appointement</a></button>
                </form>
            </div>
        </div>
    </nav>
    <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $first=$_POST['f_name'];
    $last=$_POST['l_name'];
    $mobile=$_POST['phone'];
    $emailid=$_POST['email'];
    $state=$_POST['state'];
    $messg=$_POST['msg'];
    

 $sql="INSERT INTO `maan_club` (`First Name`, `Last Name`, `Phone No.`, `Email`, `State`, `Message`) 
VALUES ('$first', '$last', '$mobile', '$emailid', '$state', '$messg')";

$result=mysqli_query($conn,$sql);


if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your data recorded successfully. We will get in touch with you sortly.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

}
else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> We are facing some technical problem .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

}
}
?>
    <img src="images/contactus.jpg" width=100% height="400px" alt="">

    <div class="container">
        <form action="contactus.php" method="post">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="f_name" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="l_name" placeholder="Your last name..">

            <label for="lname">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Your Phone No.">

            <label for="lname">Email</label>
            <input type="email" id="emailid" name="email" placeholder="Enter your email Id..">



         
            <label for="State">State</label>
            <select id="State" name="state">
                <option value="Select">---Select----</option>
                <option value="australia">Andhra Pradesh</option>
                <option value="canada">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhatishgarh">Chhatishgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhaya Pradesh">Madhaya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>

                <option value="Meghalya">Meghalya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
            </select>

            <label for="subject">Message</label>
            <textarea id="subject" name="msg" placeholder="Tell Me Your Query.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>

    </div>

    <footer class=" footcolor footbody footbody-resp">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="do-para">?? 2021 Maan fitness Club. All right Reserved ?? <a href="#">Privacy</a> ?? <a href="#">Terms</a></p>
    </footer> 







</body>

</html>


