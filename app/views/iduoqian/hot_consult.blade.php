
<div class="right_zi">
    <p class="right_p"><span class="right_sp">|</span>热门资讯</p><br />
    <ul>
        @foreach($news as $key=>$value)
        <li><a href="">{{$value->title}}</a></li>
        @endforeach
    </ul>
</div>