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
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas'),
            chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11;

        canvas.width = width;
        canvas.height = height;

        var Snake = function(ctx,x,y,str){
            this.ctx = ctx;
            this.x = x;
            this.y = y;
            this.str = str;
        };

        Snake.prototype = {
            constructor :   Snake,
            draw    :   function(){
                var opacity = 1,
                        cy = this.y;
                for(var i = 0;i < this.str.length; i++){
                    this.ctx.fillStyle = 'rgba(0,255,0,'+Number(opacity).toString()+')';
                    this.ctx.fillText(this.str.charAt(i),this.x, cy);
                    cy -= fh;
                    opacity -= 0.05;
                }
                if(this.y > (height + this.str.length * fh)){
                    this.y = randY();
                }else{
                    this.y += fh;
                }
            }
        };

        var randY = function () {
                    return -(Math.random() * height);
                },
                randomChar = function(){
                    return chars.charAt(Math.floor(Math.random() * chars.length));
                },
                randomStr = function(len){
                    var str = '';
                    for(var i = 0 ;i < len;i++){
                        str += randomChar();
                    }
                    return str;
                };
        var snakes = [],
                n = Math.floor(width / fw);
        for(var i = 0;i<500;i++){
            snakes.push(new Snake(ctx, (Math.random() * n) * fw,randY(),randomStr(Math.random() * 16)));
        }
        var draw = function(){
            ctx.fillStyle = '#000';
            ctx.fillRect(0,0,width,height);
            snakes.map(function(snake){
                snake.draw();
            });
        };
        setInterval(draw,60);
    }

    drawHacker(canvas,500,500);
</script>

<pre>
&lt;canvas id="canvas"&gt;&lt;/canvas&gt;
&lt;script&gt;
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas'),
            chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11;

        canvas.width = width;
        canvas.height = height;

        var Snake = function(ctx,x,y,str){
            this.ctx = ctx;
            this.x = x;
            this.y = y;
            this.str = str;
        };

        Snake.prototype = {
            constructor :   Snake,
            draw    :   function(){
                var opacity = 1,
                        cy = this.y;
                for(var i = 0;i &lt; this.str.length; i++){
                    this.ctx.fillStyle = 'rgba(0,255,0,'+Number(opacity).toString()+')';
                    this.ctx.fillText(this.str.charAt(i),this.x, cy);
                    cy -= fh;
                    opacity -= 0.05;
                }
                if(this.y &gt; (height + this.str.length * fh)){
                    this.y = randY();
                }else{
                    this.y += fh;
                }
            }
        };

        var randY = function () {
                    return -(Math.random() * height);
                },
                randomChar = function(){
                    return chars.charAt(Math.floor(Math.random() * chars.length));
                },
                randomStr = function(len){
                    var str = '';
                    for(var i = 0 ;i &lt; len;i++){
                        str += randomChar();
                    }
                    return str;
                };
        var snakes = [],
                n = Math.floor(width / fw);
        for(var i = 0;i&lt;500;i++){
            snakes.push(new Snake(ctx, (Math.random() * n) * fw,randY(),randomStr(Math.random() * 16)));
        }
        var draw = function(){
            ctx.fillStyle = '#000';
            ctx.fillRect(0,0,width,height);
            snakes.map(function(snake){
                snake.draw();
            });
        };
        setInterval(draw,60);
    }

    drawHacker(canvas,500,500);
&lt;/script&gt;
</pre>