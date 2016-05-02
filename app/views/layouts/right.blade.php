<section id="top_header">
    <div class="component right-logo"><img width="100%" src="{{asset('images/2_qq_wx.gif')}}" alt="QQ与微信"></div>
    <div class="component top_links contact-link">
        <a href="tencent://message/?uin=1257069082" title="QQ"><img src="http://wpa.qq.com/pa?p=1:1257069082:45"></a>
        <a target="_blank" href="https://github.com/lvyahui8" title="Github"><img src="{{asset('images/github.gif')}}"></a>
        <a href="#" title="play"><img src="{{asset('images/play2.ico')}}"></a>
        <a target="_blank" href="http://user.qzone.qq.com/1257069082" title="QZone"><img src="http://b.zol-img.com.cn/mobile_soft/ms_23/160x160/soRC3iqzYjEeo.jpg"></a>
    </div>
    <div class="component music-player" id="music-player">
        {{--<audio src="{{URL::to('audios/ybxyq.mp3')}}" class="audioPlayer audioplayer-mini" loop="loop" preload="auto" controls="controls"></audio>--}}
    </div>
    <div class="component top_news list-panel post-list">
        <h2 class="list-title">最新文章</h2>
        <div class="flexcroll list-body ">
            <ul class="list">
                @foreach($newPosts as $post)
                <li class="list-item"><a class="list-item-title" href="{{URL::to('blog/view/'.$post->id)}}" target="contentFrame">{{$post->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="component right-footer">
        <nav id="footer-nav">
            <ul>
                <li><a target="_blank" href="http://www.cnblogs.com/lvyahui/">博客园</a></li>
                <li><a target="_blank" href="https://github.com/lvyahui8">GitHub</a></li>
                <li><a target="_blank" href="http://code.taobao.org/u/lvyahui/mypro/">TaoCode</a></li>
            </ul>
        </nav>
        <p id="copy">Copyright &copy; lvyahui. All Rights Reserved.</p>
    </div>
</section>