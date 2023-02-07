<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Style/HeaderStyle.css">
  <title>Admin Header Page</title>
  <style>
    /*Navigation Bar */
    * {
      box-sizing: border-box;
    }

    h1 {
      color: black;
      text-align: center;
    }

    body {
      margin: 0em;
      font-family: "Times New Roman", Times, serif;
      background-image: url("Background.png");
    }

    .topnav {
      overflow: hidden;
      background-color: navy;
    }

    .topnav a {
      float: left;
      color: burlywood;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      width: 25%;
    }

    .topnav a:hover {
      background-color: #000099;
      color: blanchedalmond;
    }

    .topnav a.active {
      background-color: red;
      color: white;
    }


    /*Navigation Bar*/
  </style>
</head>

<body>

  <header>



    <h1>HOTEL PARADISE </h1>
    <div class="topnav">

      <a href="adminHome.php"><b>Home</b></a>


      <a href="profile.php"><b>Profile</b></a>
      <a href="post.php"><b>Post</b></a>


      <a href="logout.php"><b>Logout</b></a>

    </div>
  </header>

</body>

</html>