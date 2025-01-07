<?php include VIEWS . 'inc/Header.php'; ?>




<form action="<?php url("product/store"); ?>" method="POST">

    <label for=""> Product Name
        <input type="text" required name="name">
    </label>


    <label for=""> Product Price
        <input type="text" required name="price">
    </label>


    <label for=""> Product Desc
        <input type="text" required name="desc">
    </label>


    <label for=""> Product Stock
        <input type="text" required name="quan">
    </label>

    <button class="submit" name="submit" type="submit">Submit</button>

</form>


<style>
    <?php include ASSETS . 'Style.css' ?>
</style>
<?php include VIEWS . 'inc/Footer.php'; ?>