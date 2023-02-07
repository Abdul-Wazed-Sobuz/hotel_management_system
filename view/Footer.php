<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/FooterStyle.css">
    <title>Footer Page</title>
</head>

<body>
    <div class="footer">
        <table width="100%">
            <tr>

                <td>
                    <h2>

                        <?php
                        echo "Copyright &copy; 1996-" . date("Y") . " Acradian Software Inc.";
                        ?>
                    </h2>
                </td>
                <td>
                    <p>

                        <a href="#">Terms and Condition</a>
                        <a href="#">About Us</a>
                        <a href="#">Privacy Policy</a>
                    </p>

                </td>
            </tr>
        </table>
    </div>

</body>

</html>