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
        extract($_POST);
        echo "<p>You were born in the year of " . $year . ".</p>";
        $remainder = $year % 12;
        echo "<p>Your zodiac sign is " . $zodiac[$remainder] . ".</p>";
        echo "<img src='images/" . $zodiac[$remainder] . ".png' alt='" . $zodiac[$remainder] . "'>";
    ?>

<?php include("_footer.php"); ?>