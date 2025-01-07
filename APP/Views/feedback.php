<?php include VIEWS . "inc/header.php";?>



<div class="main-container">

    <h3>Feedback</h3>

    <form action="<?php url("feedback/send") ?>" method="post">
        <div class="feed">
            <label for="">UserName</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($username) ?>" readonly>
        </div>

        <div class="feed">
            <label for="">Feedback</label>
            <textarea name="feedback" id="txtarea" cols="2" rows="10"
                placeholder=" Send us your Feedback here..."></textarea>
        </div>

        <input type="submit" value="Send" name="submit" id="submit_btn">
    </form>
</div>

<?php include VIEWS . "inc/footer.php"; ?>