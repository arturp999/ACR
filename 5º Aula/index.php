<!DOCTYPE html>
<html>

<body>

    <ul>
    <a href="register.php"> <li> Registo</li></a>
    <a href="users.php"> <li> Pagina de Utilizadores</li></a>
    </ul>

    <?php
    if ($_GET['created'] == "false") {
        echo "Your User is not correct missing fields";
    }

    ?>

</body>

</html>