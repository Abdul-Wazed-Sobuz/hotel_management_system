<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PaymentStyle.css">
    <title>Payment Page</title>
</head>

<style>
    .header {
        color: blueviolet;
        text-align: center;
    }

    table,
    th,
    td {
        border: 2px solid black;
        ;
    }
</style>

<body>
    <?php include 'Header.php'; ?>
    <br><br>

    <center>
        <img src="./Images/VISA.png" alt="no image" width="300" height="100">
        <img src="./Images/BKASH.jpg" alt="no image" width="200" height="100">
    </center>

    <div class="header">
        <h1>Payment Details</h1>
    </div>
    <center>
        <table style="width: 50%;">
            <tr>
                <th>Payment Details</th>
                <th>Count</th>
            </tr>
            <tr>
                <td><b>Days for stay-in: </b></td>
                <td style="text-align: center;">
                    <?php echo $_POST["td"]; ?>
                </td>
            </tr>

            <tr>
                <td><b>Room No: </b></td>
                <td>
                    <p id="rn" style="text-align: center;">
                    </p>
                </td>
            </tr>



            <tr>
                <td><b>First Name: </b></td>
                <td style="text-align: center;">
                    <?php echo $_POST["fname"]; ?>
                </td>
            </tr>

            <tr>
                <td><b>Email: </b></td>
                <td style="text-align: center;">
                    <?php echo $_POST["email"]; ?>
                </td>
            </tr>

            <tr>
                <td><b>Order ID: </b></td>
                <td>
                    <p id="tt" style="text-align: center;">
                    </p>
                </td>
            </tr>

            <tr>
                <td><b>Total Amount: </b></td>
                <td style="text-align: center;">
                    <?php echo $_POST["td"] * 1100; ?>
                </td>
            </tr>


        </table>
    </center>
    <br><br>

    <tr>
        <td>*This price is converted to show you the approximate cost in BDT. You'll pay in US$ or BDT. The exchange rate might change before you pay. Keep in mind that your card issuer may charge you a foreign transaction fee.</td>
    </tr>

    <br><br>


    <form action="./Message.php" method="post">
        <center>

            <button type="submit" a href="Login.php"> Pay Now</button>

        </center>
    </form>


    <br>
    <script>
        var randNum1, randNum2;
        randNum1 = Math.floor(Math.random() * 100 + 1);
        randNum2 = Math.floor(Math.random() * 1000);

        document.getElementById("rn").innerHTML = randNum1;
        document.getElementById("tt").innerHTML = randNum2;

        let x = $_POST["td"];
        let y = 1100;
        let z = x * y;
        document.getElementById("am").innerHTML = z;
    </script>

    <?php include 'Footer.php'; ?>
</body>

</html>