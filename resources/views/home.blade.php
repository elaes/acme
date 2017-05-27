<!DOCTYPE html>
<html>
<title>Le titre du site</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Lien externe -->
<link rel="stylesheet" href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('//www.w3schools.com/w3css/4/w3.css') }}">
<script type="text/javascript" src="{{ URL::asset('//code.angularjs.org/1.2.13/angular.js') }}"></script>

<!-- Lien interne -->
{!! Html::script('js/myScript.js'); !!} {!! Html::style('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css')!!}

<body>



    <div class="w3-container w3-top">
        <div class="w3-bar w3-black">
            <a href="#" class="w3-bar-item w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>
    </div>

    <div>
        <h2>External JavaScript</h2>

        <p id="demo">A Paragraph.</p>

        <button type="button" onclick="myFunction()">Try it</button>

        <p>(myFunction is stored in an external file called "myScript.js")</p>
    </div>

</body>

</html>