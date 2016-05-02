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
    /*增加渐进色彩*/
    /*
     * 屏幕坐标体系，x为水平方向向右递增，y为垂直向下递增
     */
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas');

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11,
                str = 'lvyahui2devl',
                y = 0;
        var hexMap = (function(){
            var map = [];
            for(var i = 0;i<16;i++){
                map[Number(i).toString(16)] = i;
                if(i > 9){
                    map[i] = Number(i).toString(16);
                }
            }
            return map;
        })();
        function verticalStr(ctx,str,x,y){
            var opacity = 1;
            for(var i = 0;i < str.length; i++){
                ctx.fillStyle = 'rgba(0,255,0,'+Number(opacity).toString()+')';
                ctx.fillText(str.charAt(i),x, y);
                y -= fh;
                opacity -= 0.05;
            }
        }
        var draw = function(){
            ctx.fillStyle = '#000';
            ctx.fillRect(0,0,width,height);
            //
            var  x = Math.floor(width / 2),cy = y;
            verticalStr(ctx,str,x,cy);
            y = y > height ? 0 : y +fh;
        };
        setInterval(draw,50);
    }

    drawHacker(canvas,500,300);
</script>

<pre>
&lt;canvas id="canvas"&gt;&lt;/canvas&gt;
&lt;script&gt;
    /*增加渐进色彩*/
    /*
     * 屏幕坐标体系，x为水平方向向右递增，y为垂直向下递增
     */
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas');

    function drawHacker(canvas,width,height){
        var ctx = canvas.getContext('2d'),
                fh = 11,fw = 11,
                str = 'lvyahui2devl',
                y = 0;
        var hexMap = (function(){
            var map = [];
            for(var i = 0;i&lt;16;i++){
                map[Number(i).toString(16)] = i;
                if(i &gt; 9){
                    map[i] = Number(i).toString(16);
                }
            }
            return map;
        })();
        function verticalStr(ctx,str,x,y){
            var opacity = 1;
            for(var i = 0;i &lt; str.length; i++){
                ctx.fillStyle = 'rgba(0,255,0,'+Number(opacity).toString()+')';
                ctx.fillText(str.charAt(i),x, y);
                y -= fh;
                opacity -= 0.05;
            }
        }
        var draw = function(){
            ctx.fillStyle = '#000';
            ctx.fillRect(0,0,width,height);
            //
            var  x = Math.floor(width / 2),cy = y;
            verticalStr(ctx,str,x,cy);
            y = y &gt; height ? 0 : y +fh;
        };
        setInterval(draw,50);
    }

    drawHacker(canvas,500,300);
&lt;/script&gt;
</pre>