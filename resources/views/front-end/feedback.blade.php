<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/front-end/manual/style.css">
    <link rel="shortcut icon" href="{{ asset('/') }}/front-end/manual/thumbsup.png">
    <link href="{{ asset('/') }}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <title>Thank-you</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="jumbotron well col-md-5 col-md-offset-3" id="td">
            <p class="pnew">Thank you for your Feedback !<3</p>
            <p class="pnew">You can visit my another live Project. Here is the link-----</p> <br>
            <p class="pnew"> Portfolio : <a href="http://tanmoydeb1.epizy.com/" target="_blank">
                    tanmoydeb1.epizy.com
                </a></p>
            <p class="pnew"> Live E-commerce : <a href="http://crazybazar.epizy.com/" target="_blank">
                    crazybazar.epizy.com
                </a></p>

            <a href="{{ route('/') }}">
                <button type="button" class="btn pnew simpleCart_empty btn-success">Go Back -></button>
            </a>

        </div>

    </div>
</div>

</body>
</html>