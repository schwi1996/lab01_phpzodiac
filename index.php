<?php $title = "Home"; ?>
<?php include("_header.php"); ?>

    <div>
        <form action="zodiac.php" method="post">
            <label for="year">Year: </label>
            <br/>
            <br/>
            <input type="number" name="year" id="year" min="1900" max="2025" required>
            <br/>
            <br/>
            <button type="submit">Get Zodiac</button>
            <button type="reset">Clear</button>
        </form>
    </div>
    <br/>
    <br/>
    <div>
        Made by Helen Liu A01327365
    </div>


<?php include("_footer.php"); ?>