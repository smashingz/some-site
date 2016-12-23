<div class="offer">
    <h1><?php echo $title ?></h1>
    <img src="files/<?php echo $img ?>" alt="<?php echo $img ?>">
    <div class="descr">
        <span class="price"><?php echo $price . ' руб' ?></span>
        <p><?php echo $descr;if(!$_GET["title"])echo '...'?></p>
        <?php
        if (!$_GET["title"]){
            print('<a href="find.php?title='.$title.'" target="_blank">Читать дальше</a>');
        }
        ?>
    </div>
</div>