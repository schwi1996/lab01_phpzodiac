<?php $title = "Results"; ?>
<?php include("_header.php"); ?>

    <?php
        $zodiac = array(
            "monkey",
            "rooster",
            "dog",
            "pig",
            "rat",
            "ox",
            "tiger",
            "rabbit",
            "dragon",
            "snake",
            "horse",
            "goat",
        );
    ?>

    <?php
        $remainder = 0;
        $year = 0;
        extract($_POST);
        $remainder = $year % 12;
        echo "<p>Your zodiac sign is " . $zodiac[$remainder] . ".</p>";
        echo "<img src='images/" . $zodiac[$remainder] . ".png' alt='" . $zodiac[$remainder] . "'>";
    ?>

<?php include("_footer.php"); ?>