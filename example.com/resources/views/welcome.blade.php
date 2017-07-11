@extends('layouts.master')

@extends('includes.sidebar')
@section('content')
    <script src="https://code.createjs.com/easeljs-0.8.2.min.js"></script>
    <script src="https://code.createjs.com/tweenjs-0.6.2.min.js"></script>
    <body onload="init();">
    <canvas id="demoCanvas" width="500" height="300"></canvas>
    </body>
    <script>
    function init() {
    var stage = new createjs.Stage("demoCanvas");
    var square = new createjs.Shape();
    var text = new createjs.Text("Hello World", "bold 16px Arial", "#ff7700");

    square.graphics.beginFill('Gold').drawRect(0,0,150,150);
    square.x = 100;
    square.y = 100;

    stage.addChild(square,text);

    createjs.Tween.get(square, {loop: true})
    .to({x: 400}, 1000, createjs.Ease.getPowInOut(4))
    .to({alpha: 0, y: 75}, 500, createjs.Ease.getPowInOut(2))
    .to({alpha: 0, y: 125}, 100)
    .to({alpha: 1, y: 100}, 500, createjs.Ease.getPowInOut(2))
    .to({x: 100}, 800, createjs.Ease.getPowInOut(2));
    createjs.Ticker.setFPS(60);
    createjs.Ticker.addEventListener("tick", stage);

    square.addEventListener("click", function(event) { alert("You hit the square!"); })
    }
    </script>
@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop