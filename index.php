<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.5.1.min.js"></script>

</head>

<body>
<div class="wrapper">
    <h1>Test work</h1>
    <form id="form" action="feedback.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="phone" placeholder="Телефонный номер">
        <input type="text" name="email" placeholder="Ваш email">

        <h4>Файлы:</h4>
        <div class="files-btns">
            <button class="btn-plus">+</button>
            <button class="btn-minus">-</button>
        </div>

        <div id="filelist"></div>

        <input type="submit" value="submit" name="submit">

    </form>
</div>

<script src="js/script.js"></script>
</body>

</html>