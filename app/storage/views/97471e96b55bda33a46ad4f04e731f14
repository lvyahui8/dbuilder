<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 23:27
 */
?>


<canvas id="canvas"></canvas>
<script>
    /*
     * 屏幕坐标体系，x为水平方向向右递增，y为垂直向下递增
     */
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas');

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11,
                chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
        // 绘制的行从第0行还是绘制，也就是y的值为0
        var randY = function () {
                    return -(Math.random() * 100);
                },
                randomChar = function(){
                    return chars.charAt(Math.floor(Math.random() * chars.length));
                },
                ySquence =  function(){
                    var arr = [];
                    for(var i = 0;i < (width / fw);i ++){
                        arr.push(randY());
                    }
                    return arr;
                };
        var  x2ys = ySquence();

        var draw = function(){
            // 注意背景一定要是透明的，这样才有渐变效果
            ctx.fillStyle = 'rgba(0,0,0,.07)';
            ctx.fillRect(0,0,width,height);
            ctx.fillStyle = "#0f0";
            x2ys.map(function(y,index){
                var x = index * fw;
                ctx.fillText(randomChar(),x, y);
                // 不停将要绘制的行向下面移动，移动的高度为一个字的高度
                x2ys[index] = y > height ? randY() : y + fh;
            });
        };
        setInterval(draw,50);
    }

    drawHacker(canvas,500,500);
</script>
<pre>
&lt;canvas id="canvas"&gt;&lt;/canvas&gt;
&lt;script&gt;
    /*
     * 屏幕坐标体系，x为水平方向向右递增，y为垂直向下递增
     */
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas');

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11,
                chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
        // 绘制的行从第0行还是绘制，也就是y的值为0
        var randY = function () {
                    return -(Math.random() * 100);
                },
                randomChar = function(){
                    return chars.charAt(Math.floor(Math.random() * chars.length));
                },
                ySquence =  function(){
                    var arr = [];
                    for(var i = 0;i &lt; (width / fw);i ++){
                        arr.push(randY());
                    }
                    return arr;
                };
        var  x2ys = ySquence();

        var draw = function(){
            // 注意背景一定要是透明的，这样才有渐变效果
            ctx.fillStyle = 'rgba(0,0,0,.07)';
            ctx.fillRect(0,0,width,height);
            ctx.fillStyle = "#0f0";
            x2ys.map(function(y,index){
                var x = index * fw;
                ctx.fillText(randomChar(),x, y);
                // 不停将要绘制的行向下面移动，移动的高度为一个字的高度
                x2ys[index] = y &gt; height ? randY() : y + fh;
            });
        };
        setInterval(draw,50);
    }

    drawHacker(canvas,500,500);
&lt;/script&gt;
</pre>