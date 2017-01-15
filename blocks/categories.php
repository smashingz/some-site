<div class="categories">
    <?php
    switch ($_GET["type"]) {
        case "hardware": {
            print("
    <p>Аппаратное обеспечение</p>
    <ul>
        <li><a href=\"#\">Материнские платы</a></li>
        <li><a href=\"#\">Процессоры</a></li>
        <li><a href=\"#\">Оперативная память</a></li>
        <li><a href=\"#\">Видеокарты</a></li>
        <li><a href=\"#\">Жёсткие диски</a></li>
    </ul>
    ");
            break;
        }
        case "software": {
            print("
                <p>Программное обеспечение</p>
        ");
            break;
        }
        case "netware": {
            print("
        <p>Сетевое обеспечение</p>
            ");
            break;
        }

    }
    ?>
</div>
