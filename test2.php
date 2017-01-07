<!DOCTYPE html>
<html>
<head>
<style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('http://imgur.com/WAwhSg6.jpg');

    font:0.5;
    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1024px) {
    .parallax {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>


<div class="parallax"></div>

<div style="height:1000px;background-color:black;font-size:36px">
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>

<!--<div class="parallax"></div>-->

</body>
</html>

