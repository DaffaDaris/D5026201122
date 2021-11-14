<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
            $jumlah = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $jumlah = test_input($_POST["jumlah"]);
            }

            function test_input($data) {
            $data=trim($data);
            $data=stripslashes($data);
            return $data;
            }


    ?>


    <div class="container">
        <div class="col-3">
            <h1 >Piramid Terbalik</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $jumlah = test_input($_POST["jumlah"]);
            }

            for ($i = $jumlah; $i > 0; $i--) {
                for ($j = $jumlah - $i; $j > 0; $j--) {
                    echo "&nbsp&nbsp&nbsp";
                }
                for ($k = 2 * $i - 1; $k > 0; $k--) {
                    echo ("&nbsp*");
                }
                echo "<br>";
            }

            ?>
        </div>
</body>

</html>
