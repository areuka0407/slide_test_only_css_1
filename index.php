<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS only Hamburger Menu</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <nav>
        <label for="menu_input">
            <i class="fas fa-bars" id="menu"></i>
        </label>
    </nav>

    <input type="checkbox" id="menu_input" class="hidden">
    <div id="sideBar">
    </div>

    <input type="radio" id="slide_1" class='hidden' name="slide">
    <input type="radio" id="slide_2"  class='hidden' name="slide">
    <input type="radio" id="slide_3" class='hidden' name="slide">
    <input type="radio" id="slide_4" class='hidden' name="slide">

    <div id="slide_area">
        <div id="slide">
            <img src="./slide%20image/rush.jpg" class="slide_image">
            <img src="./slide%20image/tree.jpg"  class="slide_image">
            <img src="./slide%20image/sky.jpg" class="slide_image">
            <img src="./slide%20image/blade.jpg" class="slide_image">
        </div>
        <div id="blur"></div>
        <div id="slide_control">
            <label for="slide_1" id="label_1">
            </label>
            <label for="slide_2" id="label_2">
            </label>
            <label for="slide_3" id="label_3">
            </label>
            <label for="slide_4" id="label_4">
            </label>
        </div>
    </div>
</body>
</html>