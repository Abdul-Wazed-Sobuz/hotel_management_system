<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/ReservationStyle.css">
    <title>Reservation Page</title>
</head>
<style>
    a {
        text-decoration: none;
    }
</style>

<body>
    <?php include 'Header.php'; ?>
    <br>

    <table width='100%'>
        <th>
            <img src="./Images/Reservation.jpg" alt="No Image" style="width:1000px;height:350px;">
        </th>
    </table>
    <form method="post" action="Payment.php">

        <fieldset>
            <legend align="center">
                <h1>Reservation Form</h1>
            </legend>

            <h2>Personal Information</h2>

            <label for="title"><b>Title: </b></label>
            <select id="title">
                <option value=" "></option>
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="miss">Miss</option>
                <option value="dr">Dr</option>
            </select>
            <br>
            <hr>

            <label for="fname"><b>First Name: </b></label>
            <input type="text" size="40" name="fname" id="fname" placeholder="First Name.." required="">
            <br>
            <hr>

            <label for="lname"><b>Last Name: </b></label>
            <input type="text" size="40" name="lname" id="lname" placeholder="Last Name.." required="">
            <br>
            <hr>

            <label for="phone"><b>Contact Number: </b></label>
            <input type="tel" size="40" name="phone" id="phone" placeholder="XXXXX-XXX-XXX" pattern="[0-9]{5}-[0-9]{3}-[0-9]{3}" required="">
            <br>
            <hr>

            <label for="email"><b>E-mail: </b></label>
            <input type="email" size="40" name="email" id="email" placeholder="xx@xx.xx" required="">
            <br>
            <hr>

            <label for="np"><b>NID/PASSPORT: </b></label>
            <input type="number_format" size="40" name="np" id="np" placeholder="NID/Passport.." required="">
            <br>
            <hr>

            <label for="address"><b>Address: </b></label>
            <input type="text" size="40" name="address" id="address" placeholder="Address.." required="">
            <br>
            <hr>

            <label for="city"><b>City: </b></label>
            <input type="text" size="40" name="city" id="city" placeholder="City.." required="">
            <br>
            <hr>

            <label for="zip"><b>Postcode/ZIP: </b></label>
            <input type="text" size="40" name="zip" id="zip" placeholder="Pstcode/ZIP.." required="">
            <br>
            <hr>

            <label for="country"><b>Country: </b></label>
            <input type="text" name="country" id="country" placeholder="Country.." required="">
            <br>
            <hr>

            <label for="n"><b>Nationality: </b></label>
            <input type="text" size="40" name="n" id="n" placeholder="Nationality.." required="">
            <br>
            <br>
            <hr>

            <h2>Reservation Details</h2>

            <label for="title"><b>Room Type: </b></label>
            <select id="title">
                <option value="select"></option>
                <option value="dk">Deluxe King</option>
                <option value="sd">Super Deluxe</option>
                <option value="dt">Deluxe Twin</option>
                <option value="r">Regular</option>
            </select>
            <br>
            <hr>

            <label for="nr"><b>Number of Room: </b></label>
            <input type="number" size="40" name="nr" id="nr" placeholder="Number of Room.." required="">
            <br>
            <hr>

            <label for="np"><b>Number of Persons: </b></label>

            <input id="numb" placeholder="Please Keep within 4">
            <br>

            <button type="button" onclick="myFunction()">Submit</button>

            <p id="demo"></p>

            <script>
                function myFunction() {
                    // Get the value of the input field with id="numb"
                    let x = document.getElementById("numb").value;
                    // If x is Not a Number or less than one or greater than 10
                    let text;
                    if (isNaN(x) || x < 1 || x > 4) {
                        text = "Number of persons limit exceeded.";
                    } else {
                        text = "Number of persons valid.";
                    }
                    document.getElementById("demo").innerHTML = text;
                }
            </script>
            <hr>


            <label for="ci"><b>Check-in Date: </b></label>
            <input type="date" name="ci" id="ci" required="">
            <br>
            <br>
            <label for="co"><b>Check-out Date: </b></label>
            <input type="date" name="co" id="co" required="">
            <br>
            <hr>

            <label for="td"><b>Number of Days: </b></label>
            <input type="number" size="40" name="td" id="td" required="">
            <br>
            <hr>

            <lable><b>Note: </b></lable><textarea name="comment" rows="5" cols="40" placeholder="Write Something.."></textarea>
            <br>
            <hr>

            <label for="cb"></label>
            <input type="checkbox" name="cb" id="cb" required=""><b>I have read, understood and agree with the <a href="#">Terms and Condition</a>. </b>
            <br>
            <hr>
            <div class="clearfix">
                <button type="submit" onclick="myFunction()" class="signupbtn" formaction="./Payment.php">
                    <h3>Continue to Pay</h3>
                </button>
            </div>


        </fieldset>
    </form>


    <?php include 'Footer.php'; ?>

</body>

</html>