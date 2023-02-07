<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us Page </title>
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: 30px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .row table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 90%;
            border: 5px solid #ddd;
        }

        .row td {
            text-align: left;
            padding: 16px;
        }

        .row th {
            text-align: center;
            padding: 16px;
            background-color: aqua;
            color: navy;

        }


        .row table,
        .row td {
            border: 2px solid aqua;
        }

        .row tr:nth-child(odd) {
            background-color: navy;
            color: white;

        }
    </style>

</head>

<body>

    <?php include 'Header.php' ?>
    <br><br>

    <body>

        <div class="row">
            <div class="column">
                <table>
                    <tr>
                        <th colspan="2">Contacts</th>
                    </tr>
                    <tr>
                        <td><b>Address:</b></td>
                        <td>408/1, Kuratoli, Khilkhet, Dhaka 1229, Bangladesh</td>
                    </tr>
                    <tr>
                        <td><b>Telephone:</b></td>
                        <td>+88 02 841 4046-9; +88 02 841 4050</td>
                    </tr>
                    <tr>
                        <td><b>Fax:</b></td>
                        <td>+88 02 841 2255</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>info@hparadise.com</td>
                    </tr>
                    <tr>
                </table>
            </div>
            <div class="column">
                <br><br><br><br><br><br><br><br><br><br>
                <table>
                    <tr>
                        <th colspan="2"> Social Media</th>
                    </tr>
                    <td><b>Web:</b></td>
                    <td>www.hotelparadise.com</td>
                    </tr>
                    <tr>
                        <td><b>Facebook:</b></td>
                        <td>www.facebook.com/aiub.edu</td>
                    </tr>
                    <tr>
                        <td><b>Twitter:</b></td>
                        <td>@hotelparadise_official</td>
                    </tr>
                    <tr>
                        <td><b>Pinterest:</b></td>
                        <td>@paradiseHotels</td>
                    </tr>

                </table>
            </div>

            <div class="column">
                <br><br><br>
                <table>
                    <th>Other branches</th>
                    <tr>
                        <td>
                            <?php
                            $myfile = fopen("Contact-content.txt", "r") or die("Unable to open file!");
                            // Output one line until end-of-file
                            while (!feof($myfile)) {
                                echo fgets($myfile) . "<br>";
                            }
                            fclose($myfile);
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>


        <br><br><br><br>

        <?php include "Footer.php" ?>
    </body>

</html>