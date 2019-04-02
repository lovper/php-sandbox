<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <title>Document</title>
</head>

<body>

<?php for($i = 0; $i < 10; $i++){ ?>
    <div id="people">
        <div id="person">
            <div class="pic-frame">
                <img id="the-pic" src="">
            </div>
            <p class="small-text">Hello. My name is</p>
            <p class="big-text"><span id="fname">...</span> <span id="lname">...</span></p>
            <p class="small-text">My email adress is</p>
            <p class="big-text"><span id="email">...</span></p>
        </div>
    </div>
<?php } ?>
    <h2 id="heading"></h2>
    <script type="text/javascript" src="fetch.js"></script>
</body>

</html>
