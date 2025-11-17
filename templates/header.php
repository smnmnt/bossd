<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>
        <?php
            if (isset($title)) {
                echo $title;
            } else {
                echo "Мой блог";
            }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/styles/styles.css">

</head>

<body>



<table class="layout">

    <tr>

        <td colspan="2" class="header">

            Мой блог

        </td>

    </tr>

    <tr>

        <td>