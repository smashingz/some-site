<tr>
    <td><?php echo $name ?></td>
    <td><?php echo $vendor ?></td>
    <td><?php echo $price ?></td>
    <td><?php echo $descr ?></td>
    <td><?php echo $fulldescr?></td>
    <td><?php echo $type?></td>
    <td><img src="../files/<?php echo $img?>" alt="<?php echo $img?>" width="100"></td>
    <td>
        <form action="lib/delete.php" method="post">
            <input type="text" name="name" value="<?php echo $name?>" hidden readonly>
            <input type="submit" value="Удалить">
        </form>
    </td>
</tr>