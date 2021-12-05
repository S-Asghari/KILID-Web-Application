<?php
require './db.php';
session_start();
?>
<html>

<head>
    <title>Edit Occasion</title>
    <link rel="stylesheet" type="text/css" href="./cssFile4.css" media="screen" />
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit'])) {
        $title = $_POST['edit'];
        $_SESSION['title'] = $title;
        $result = $mysqli->query("SELECT * FROM occasions WHERE title='$title'");
        $row = $result->fetch_assoc();

        $price = $row["price"];
        $type = $row["type"];
        $area = $row["area"];
        $locality = $row["locality"];
        $bedrooms = $row["bedrooms"];
        $parkings = $row["parkings"];
    } elseif (isset($_POST['saveChanges'])) {

        $title = $_SESSION['title'];
        $price = $mysqli->escape_string($_POST['price']);
        $type = $mysqli->escape_string($_POST['type']);
        $area = $mysqli->escape_string($_POST['area']);
        $locality = $mysqli->escape_string($_POST['locality']);
        $bedrooms = $mysqli->escape_string($_POST['bedrooms']);
        $parkings = $mysqli->escape_string($_POST['parkings']);
        $pic = $mysqli->escape_string($_POST['pic']);

        $sql = "UPDATE occasions SET price='$price', type='$type', area='$area', " .
            "locality='$locality', bedrooms='$bedrooms', parkings='$parkings'  WHERE title='$title'";
        if ($mysqli->query($sql)) {
        } else {
            echo $mysqli->error;
        }

        if ($pic !== "") {
            $sql2 = "INSERT INTO housePics (house_id, image)"
                . "VALUES('$title', '$pic')";

            $mysqli->query($sql2);
        }
    }
    elseif(isset($_POST['removeOcc'])){
        $title = $_SESSION['title'];
        $sql = "DELETE FROM occasions WHERE title='$title'";
        if ($mysqli->query($sql)) {
        } else {
            echo $mysqli->error;
        }
        $sql2 = "DELETE FROM housePics WHERE house_id='$title'";
        $mysqli->query($sql2);
        header("location: ./editHouse.php");
    }
}
?>

<body>
    <div class="sidenav" style="right: 4%; top: 5%; height: 50%">
        <div style="text-align: center; border-bottom: 1px solid #eee; padding-bottom: 10px; font-size: 16px; color: red">
            آگهی های من
        </div>

        <div style="text-align: center; margin-top:3%">
            <?php
            if (isset($_SESSION['user_id']) and !empty($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $result = $mysqli->query("SELECT title FROM occasions WHERE user_id='$user_id'");
                while ($row = $result->fetch_assoc()) {
                    echo "<form action='./editHouse.php' method='POST'>
                                <input type='submit' value='" . $row["title"] . "' name='edit' style='font-size:16px;' />
                              </form>";
                }
            }

            ?>
        </div>
    </div>

    <div class="sidenav" style="margin-top: 2%; width: 30%; height: 110%; position:unset; margin-right: 35%; background-color:papayawhip">
        <div style="text-align: center; border-bottom: 1px solid black; padding-bottom: 3%; font-size: 17px; color:red">
            <?php echo $title; ?>
        </div>
        <form action="./editHouse.php" method="POST" style="color:darkred; font-size: 14px; margin-top: 3%">

            قیمت به ریال: <div style="text-align: center; margin-bottom: 5%"><input type="text" name="price" size="30" maxlength="40" value=<?php echo $price; ?> required /></div>

            نوع ملک: <div style="margin-right:25%; margin-bottom: 5%">
                <input type="radio" name="type" value="residential" required <?php if ($type === "residential") {
                                                                                    echo "checked";
                                                                                } ?> />مسکونی<br />
                <input type="radio" name="type" value="commercial" required <?php if ($type === "commercial") {
                                                                                echo "checked";
                                                                            } ?> />تجاری
            </div>

            مساحت ساختمان:<div style="text-align: center; margin-bottom: 5%">
                <input type="text" name="area" size="30" maxlength="40" value=<?php echo $area; ?> required />
            </div>

            محله:<div style="text-align: center; margin-bottom: 5%">
                <input type="text" name="locality" size="30" maxlength="40" value=<?php echo $locality; ?> required />
            </div>

            تعداد اتاق خواب:<div style="text-align: center; margin-bottom: 5%">
                <input type="text" name="bedrooms" size="30" maxlength="40" value=<?php echo $bedrooms; ?> required />
            </div>

            تعداد پارکینگ:<div style="text-align: center; margin-bottom: 5%">
                <input type="text" name="parkings" size="30" maxlength="40" value=<?php echo $parkings; ?> required />
            </div>

            افزودن عکس:<div style="text-align: center; margin-bottom: 5%">
                <input type="file" name="pic" accept="image/*" />
            </div>

            <div style="text-align: center">
                <input type="submit" name="saveChanges" value="ذخیره" style="margin-left: 3%;">
                <input type="submit" name="removeOcc" value="حذف آگهی">
            </div>


        </form>

    </div>

</body>

</html>