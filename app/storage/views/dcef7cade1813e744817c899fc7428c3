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
            ctx = canvas.getContext('2d'),
            chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678',
            fw = 12,
            fh = 12;

    function randY (height) {
        return -(Math.floor(Math.random() * height));
    }
    function randomChar(){
        return chars.charAt(Math.floor(Math.random() * chars.length));
    }
    function randomStr(len){
        var str = '';
        for(var i = 0 ;i < len;i++){
            str += randomChar();
        }
        return str;
    }
    function randomInt(n){
        return Math.floor(Math.random() * n);
    }

    var Snake = function(runWay,y,str){
        this.runWay = runWay;
        this.x = runWay.x;
        this.y = y;
        this.str = str;
        this.rgb = {
            r : Math.floor(Math.random() * 255),
            g : Math.floor(Math.random() * 255),
            b : Math.floor(Math.random() * 255)
        };
    };

    Snake.prototype = {
        constructor :   Snake,
        crawl    :   function(){
            var opacity = 1,
                    cy = this.y;
            // 绘制字符蛇
            for(var i = 0;i < this.str.length; i++){
                ctx.fillStyle = 'rgba('+this.rgb.r+','+this.rgb.g+','+this.rgb.b+','+Number(opacity).toString()+')';
                ctx.fillText(this.str.charAt(i),this.x, cy);
                cy -= fh;
                opacity -= 0.05;
            }

            // 向下爬行，走出边界之后，再回到道路最后一条字符蛇的尾部
            if(this.y > (canvas.height + this.str.length * fh + 1)){
                // 拼接到这条道路尾部最后一个字符串后面
                var hSnake = this.runWay.snakes[this.runWay.first],
                        tSnake = this.runWay.snakes[this.runWay.last],
                        tSnakeTail = tSnake.y -  tSnake.str.length * fh - 1;
                //
                hSnake.y = tSnakeTail > 0 ? 0 : tSnakeTail ;
                // 更新 头尾
                this.runWay.first = (this.runWay.first + 1) % this.runWay.snakes.length;
                this.runWay.last = this.runWay.first;
            }else{
                this.y += this.runWay.speed;
            }
        }
    };

    var RunWay = function(x,snakes,speed){
        this.x = x;
        this.snakes = snakes;
        this.speed = speed;
        this.first = 0;
        this.last = 0;
    };
    RunWay.prototype = {
        constructor :   RunWay,
        addSnake    :   function(snake){
            this.snakes.push(snake);
        },
        work  :   function(){
            this.snakes.map(function(snake){
                snake.crawl();
            });
        }
    };
    var Hacker  = function(canvas,width,height,strs){
        canvas.width = width;
        canvas.height = height;
        this.timer = null;
        // 初始化道路和字符蛇
        this.runWays = [];
        var yC = Math.floor(height / fh);
        for(var i = 0,n = Math.floor(width / fw);i<n;i++){
            var runWay = new RunWay(i * fw,[],Math.floor(Math.random() * 4 + 1));
            var headY = randY(height);
            for(var j = 0,total = 0;total <= yC;j++){
                var str = strs != 'undefined' ? strs[randomInt(strs.length)] : randomStr(Math.random() * 28);
                total += str.length;
                runWay.addSnake(new Snake(runWay,headY,str));
                headY -= fh * str.length;
            }
            // 第0条蛇最
            runWay.first = 0;
            runWay.last = j - 1;
            this.runWays.push(runWay);
        }
    };

    Hacker.prototype = {
        constructor : Hacker,
        run         :   function(){
            var that = this,
                    draw = function(){
                        ctx.fillStyle = '#000';
                        ctx.fillRect(0,0,canvas.width,canvas.height);
                        ctx.font = fw + 'px';
                        that.runWays.map(function(way){
                            way.work();
                        });
                    };
            this.timer = setInterval(draw,30);
        },
        stop    :   function(){
            ctx.fillRect(0,0,canvas.width,canvas.height);
            clearInterval(this.timer);
        }
    };

    var hacker = new Hacker(canvas,500,500,[
        'lvyahui8@126.com','ace','devlopment'
    ]);
    hacker.run();
</script>

<pre>
&lt;canvas id="canvas"&gt;&lt;/canvas&gt;
&lt;script&gt;
    var canvas = document.querySelector('#canvas') || document.getElementById('canvas'),
            ctx = canvas.getContext('2d'),
            chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678',
            fw = 12,
            fh = 12;

    function randY (height) {
        return -(Math.floor(Math.random() * height));
    }
    function randomChar(){
        return chars.charAt(Math.floor(Math.random() * chars.length));
    }
    function randomStr(len){
        var str = '';
        for(var i = 0 ;i &lt; len;i++){
            str += randomChar();
        }
        return str;
    }
    function randomInt(n){
        return Math.floor(Math.random() * n);
    }

    var Snake = function(runWay,y,str){
        this.runWay = runWay;
        this.x = runWay.x;
        this.y = y;
        this.str = str;
        this.rgb = {
            r : Math.floor(Math.random() * 255),
            g : Math.floor(Math.random() * 255),
            b : Math.floor(Math.random() * 255)
        };
    };

    Snake.prototype = {
        constructor :   Snake,
        crawl    :   function(){
            var opacity = 1,
                    cy = this.y;
            // 绘制字符蛇
            for(var i = 0;i &lt; this.str.length; i++){
                ctx.fillStyle = 'rgba('+this.rgb.r+','+this.rgb.g+','+this.rgb.b+','+Number(opacity).toString()+')';
                ctx.fillText(this.str.charAt(i),this.x, cy);
                cy -= fh;
                opacity -= 0.05;
            }

            // 向下爬行，走出边界之后，再回到道路最后一条字符蛇的尾部
            if(this.y &gt; (canvas.height + this.str.length * fh + 1)){
                // 拼接到这条道路尾部最后一个字符串后面
                var hSnake = this.runWay.snakes[this.runWay.first],
                        tSnake = this.runWay.snakes[this.runWay.last],
                        tSnakeTail = tSnake.y -  tSnake.str.length * fh - 1;
                //
                hSnake.y = tSnakeTail &gt; 0 ? 0 : tSnakeTail ;
                // 更新 头尾
                this.runWay.first = (this.runWay.first + 1) % this.runWay.snakes.length;
                this.runWay.last = this.runWay.first;
            }else{
                this.y += this.runWay.speed;
            }
        }
    };

    var RunWay = function(x,snakes,speed){
        this.x = x;
        this.snakes = snakes;
        this.speed = speed;
        this.first = 0;
        this.last = 0;
    };
    RunWay.prototype = {
        constructor :   RunWay,
        addSnake    :   function(snake){
            this.snakes.push(snake);
        },
        work  :   function(){
            this.snakes.map(function(snake){
                snake.crawl();
            });
        }
    };
    var Hacker  = function(canvas,width,height,strs){
        canvas.width = width;
        canvas.height = height;
        this.timer = null;
        // 初始化道路和字符蛇
        this.runWays = [];
        var yC = Math.floor(height / fh);
        for(var i = 0,n = Math.floor(width / fw);i&lt;n;i++){
            var runWay = new RunWay(i * fw,[],Math.floor(Math.random() * 4 + 1));
            var headY = randY(height);
            for(var j = 0,total = 0;total &lt;= yC;j++){
                var str = strs != 'undefined' ? strs[randomInt(strs.length)] : randomStr(Math.random() * 28);
                total += str.length;
                runWay.addSnake(new Snake(runWay,headY,str));
                headY -= fh * str.length;
            }
            // 第0条蛇最
            runWay.first = 0;
            runWay.last = j - 1;
            this.runWays.push(runWay);
        }
    };

    Hacker.prototype = {
        constructor : Hacker,
        run         :   function(){
            var that = this,
                    draw = function(){
                        ctx.fillStyle = '#000';
                        ctx.fillRect(0,0,canvas.width,canvas.height);
                        ctx.font = fw + 'px';
                        that.runWays.map(function(way){
                            way.work();
                        });
                    };
            this.timer = setInterval(draw,30);
        },
        stop    :   function(){
            ctx.fillRect(0,0,canvas.width,canvas.height);
            clearInterval(this.timer);
        }
    };

    var hacker = new Hacker(canvas,500,500,[
            'lvyahui8@126.com','ace','devlopment'
    ]);
    hacker.run();
&lt;/script&gt;
</pre>