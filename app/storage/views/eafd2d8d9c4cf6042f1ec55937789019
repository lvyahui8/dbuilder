<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 23:27
 */
?>

<canvas id="canvas">
    你的浏览器不支持Canvas，请使用chrome浏览器
</canvas>

<script>
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas'),
            ctx = canvas.getContext("2d"),
            yPoss = new Array(51).join('0').split('');

    var draw = function(){
        ctx.fillStyle = 'rgba(0,0,0,.07)';
        ctx.fillRect(0,0,500,500);
        ctx.fillStyle="#0f0";
        yPoss.map(function(y,index){
            var x = (index * 10);
            ctx.fillText(''+Math.random() * 10,x, y);
            yPoss[index] = y > 500 ? 0 : y + 10;
        });
    };

    setInterval(draw,50);
</script>

<pre>
&lt;canvas id="canvas"&gt;
    你的浏览器不支持Canvas，请使用chrome浏览器
&lt;/canvas&gt;

&lt;script&gt;
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas'),
            ctx = canvas.getContext("2d"),
            yPoss = new Array(51).join('0').split('');

    var draw = function(){
        ctx.fillStyle = 'rgba(0,0,0,.07)';
        ctx.fillRect(0,0,500,500);
        ctx.fillStyle="#0f0";
        yPoss.map(function(y,index){
            var x = (index * 10);
            ctx.fillText(''+Math.random() * 10,x, y);
            yPoss[index] = y &gt; 500 ? 0 : y + 10;
        });
    };

    setInterval(draw,50);
&lt;/script&gt;
</pre>
