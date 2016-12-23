<div class="search">
    <img src="files/search.jpg" alt="">
    <h1>Поиск</h1>
    <form action="find.php" method="get">
        <input type="text" name="find" value="Поиск..." onfocus="this.value=this.value=='Поиск...'?'':this.value"
               onblur="this.value=this.value==''?'Поиск...':this.value">
        <select name="brand">
            <?php
            if($_GET["type"])$_SESSION["type"]=$_GET["type"];
                showVendors($_SESSION["type"]);
            ?>
        </select>
        <br>
        <input type="submit" value="Поиск">
    </form>
</div>
