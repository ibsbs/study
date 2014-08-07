@extends('iduoqian.layouts.master')
@section('head')
  @parent
  <link rel="stylesheet" href="{{asset('iduoqian')}}/css/index.css"/>
@stop
@section('contents')
 <div class="content">
       <div class="content_all">
           <div id="huandengpian">
               <div class="inner">
                   <img src="{{asset('iduoqian')}}/images/bj1.jpg" alt=""/>
                   <img src="{{asset('iduoqian')}}/images/bj2.jpg" alt=""/>
                   <img src="{{asset('iduoqian')}}/images/bj3.jpg" alt=""/>
                   <img src="{{asset('iduoqian')}}/images/bj4.jpg" alt=""/>
               </div>
               <div class="next">></div>
               <div class="prev"><</div>
           </div>
           <div class="neirong">
               <div id="neirong_tanchu">
                   <img class="logo_main" src="{{asset('iduoqian')}}/images/logo_m.png" alt=""/>
                   <ul class="content_ul">
                       <li>
                           <div class="content_btn" id="wudiya">无抵押信用贷款</div>
                           <!--无抵押信用贷款搜索框区域-->
                           <div class="content_hidden">
                               <div class="content_search">
                                   <div class="content_san"></div>
                               </div>
                               <div class="content_input" >
                                   <div class="jigou">
                                       <p class="three">贷款金额</p>
                                       <p class="top_one"><i class="fa fa-sort-down right"></i></p>
                                       <ul>
                                           <li>5万元</li>
                                           <li>10万元</li>
                                           <li>20万元</li>
                                           <li>30万元</li>
                                       </ul>
                                   </div>
                                   <div class="qixian">
                                       <p class="four">贷款期限</p>
                                       <p class="top_two"><i class="fa fa-sort-down right"></i></p>
                                       <ul>
                                           <li>3个月</li>
                                           <li>6个月</li>
                                           <li>1年</li>
                                           <li>2年</li>
                                           <li>5年</li>
                                           <li>10年</li>
                                           <li>20年</li>
                                           <li>30年</li>
                                       </ul>
                                   </div>
                                   <input type="button" class="content_but" value="搜&nbsp;&nbsp;索">
                                   <ul class="search_ul">
                                       <li>热门搜索：</li>
                                       <li><a href="">10万信用贷</a></li>
                                       <li><a href="">20万信用贷</a></li>
                                       <li><a href="">30万信用贷</a></li>
                                   </ul>
                               </div>
                           </div>
                       </li>
                       <li>
                           <div class="content_btn" id="diya">抵押贷款</div>
                           <!--抵押贷款搜索框区域-->
                           <div class="content_show" >
                               <div class="content_diya">
                                   <div class="content_san"></div>
                               </div>
                               <div class="content_input">
                                   <div class="zhonglei">
                                       <p class="two">贷款种类</p>
                                       <p class="top_three"><i class="fa fa-sort-down right"></i></p>
                                       <ul>
                                           <ul>
                                               <li>个人消费</li>
                                               <li>贷款买房</li>
                                               <li>贷款买车</li>
                                               <li>经营周转</li>
                                               <li>不限</li>
                                           </ul>
                                       </ul>
                                   </div>
                                   <div class="jigou" id="jin_qian">
                                       <p class="three">贷款金额</p>
                                       <p class="top_one"><i class="fa fa-sort-down right"></i></p>
                                       <ul>
                                           <ul>
                                               <li>5万元</li>
                                               <li>10万元</li>
                                               <li>20万元</li>
                                               <li>30万元</li>
                                           </ul>
                                       </ul>
                                   </div>
                                   <div class="qixian">
                                       <p class="four">贷款期限</p>
                                       <p class="top_two"><i class="fa fa-sort-down right"></i></p>
                                       <ul>
                                           <li>3个月</li>
                                           <li>6个月</li>
                                           <li>1年</li>
                                           <li>2年</li>
                                           <li>5年</li>
                                           <li>10年</li>
                                           <li>20年</li>
                                           <li>30年</li>
                                       </ul>
                                   </div>
                                   <input type="button" class="content_but" value="搜&nbsp;&nbsp;索">
                                   <ul class="search_ul">
                                       <li>热门搜索：</li>
                                       <li><a href="">10万信用贷</a></li>
                                       <li><a href="">20万信用贷</a></li>
                                       <li><a href="">30万信用贷</a></li>
                                   </ul>
                               </div>
                           </div>
                       </li>
                       <li><a href=""><div class="content_btn daikuan">我要贷款&nbsp;></div></a></li>
                       <li><a href=""><div class="content_btn daikuan">债权转让&nbsp;></div></a></li>
                   </ul>
                   <div class="content_foot">
                       <ul>
                           <li><a href="">多钱手机端</a></li>
                           <li><a href="">找机构</a></li>
                           <li><a href="">找客服经理</a></li>
                           <li><a href="">贷款计数器</a></li>
                       </ul>
                   </div>
               </div>
               <div class="content_tu"><img src="{{asset('iduoqian')}}/images/start.png" alt=""/></div>
           </div>
       </div>
       <!--弹出层区域-->
       <div class="tanchu">
           <div class="img"><img src="{{asset('iduoqian')}}/images/tanchu1.jpg" alt=""/></div>
           <div class="tanchu_div">
               <ul>
                   <li>
                       <img src="{{asset('iduoqian')}}/images/tanchu01.png" alt="" />
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-home home"></i><p class="manager">找机构</p></a>
                       </div>
                   </li>
                   <li>
                       <img src="{{asset('iduoqian')}}/images/tanchu02.png" alt=""/>
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-user user"></i><p class="manager">找经理</p></a>
                       </div>
                   </li>
                   <li>
                       <img src="{{asset('iduoqian')}}/images/tanchu03.png" alt="">
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-calendar calendar"></i><p class="manager">计算器</p></a>
                       </div>
                   </li>
               </ul>
               <div class="tanchu_dai">
                   <ul>
                       <li><img src="{{asset('iduoqian')}}/images/tanchu04.png" alt=""/></li>
                       <li><img src="{{asset('iduoqian')}}/images/tanchu05.png" alt=""/></li>
                       <li><img src="{{asset('iduoqian')}}/images/tanchu06.png" alt=""/></li>
                       <li><img src="{{asset('iduoqian')}}/images/tanchu07.png" alt=""/></li>
                   </ul>
               </div>
               <div class="tanchu_word">
                   <ul>
                       <li><a href="">薪资贷</a></li>
                       <li><a href="">旅游贷</a></li>
                       <li><a href="">二次抵押贷</a></li>
                       <li><a href="">房产抵押贷</a></li>
                   </ul>
               </div>
               <div class="tanchu_wordli">
                   <ul>
                       <li><a href="">纯信用、无抵押</a></li>
                       <li><a href="">抵押贷还贷灵活</a></li>
                       <li><a href="">二手房捷贷</a></li>
                       <li><a href="">房产抵押，放贷快</a></li>
                   </ul>
               </div>
           </div>
           <div class="img_hidden"><img src="{{asset('iduoqian')}}/images/hidden.png" alt=""/></div>
       </div>
   </div>

   <script type="text/javascript">
    // 幻灯片播放
    $(function(){
        var isdong = true;
        $(".next").click(function(){
            next();
        });
        $(".prev").click(function(){
            prev();
        });
        $("#huandengpian").mouseover(function(){
            isdong = false;
        });
        $("#huandengpian").mouseout(function(){
            isdong = true;
        });
        setInterval(function(){
            if(isdong){
                next();
            }
        },9000);

        function next(){
            var n = parseInt($(".inner").css("left")) - 1920;
            if(n > -7680 ){
                $(".inner").animate({
                            "left": n+"px"
                        },300
                );
            }else{
                $(".inner").animate({
                            "left": "0px"
                        },300
                );
            }
        }
        function prev(){
            var n = parseInt($(".inner").css("left")) + 1920;
            if(n >= 1920 ){
                $(".inner").animate({
                            "left": "-5760px"
                        },300
                );
            }else{
                $(".inner").animate({
                            "left": n+"px"
                        },300
                );
            }
        }
    });
    //下拉菜单
    $(function(){
        //贷款金额
        $(".three").click(function(){
            var ul = $(".jigou ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".three").click(function(){
            $(".qixian ul").hide();
        });
        $(".top_one").click(function(){
            $(".qixian ul").hide();
        });
        $(".top_one").click(function(){
            var ul = $(".jigou ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".jigou ul li ").click(function(){
            var txt = $(this).text();
            $(".three").html(txt);
            $(".jigou ul").hide();
        });
        $(".content_search").bind({
            click:function(){ $(".jigou ul").hide();},
            mouseleave:function(){ $(".jigou ul").hide();}
        });
        $(".content_diya").bind({
            click:function(){ $(".jigou ul").hide();},
            mouseleave:function(){ $(".jigou ul").hide();}
        });

        //贷款期限
        $(".four").click(function(){
            var ul = $(".qixian ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".top_two").click(function(){
            var ul = $(".qixian ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".qixian ul li").click(function(){
            var txt = $(this).text();
            $(".four").html(txt);
            $(".qixian ul").hide();
        });
        $(".content_search").bind({
            click:function(){ $(".qixian ul").hide();},
            mouseleave:function(){ $(".qixian ul").hide();}
        });
        $(".content_diya").bind({
            click:function(){ $(".qixian ul").hide();},
            mouseleave:function(){ $(".qixian ul").hide();}
        });
//        贷款种类
        $(".two").click(function(){
            var ul = $(".zhonglei ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".top_three").click(function(){
                var ul = $(".zhonglei ul");
                if(ul.css("display")=="none"){
                    ul.slideDown("fast");
                }else{
                    ul.slideUp("fast");
                }
        });

        $(".two").click(function(){
            $(".jigou ul").hide();
        });
        $(".top_three").click(function(){
            $(".jigou ul").hide();
        });

        $(".zhonglei ul li").click(function(){
            var txt = $(this).text();
            $(".two").html(txt);
            $(".zhonglei ul").hide();
        });
        $(".content_diya").bind({
            click:function(){ $(".zhonglei ul").hide();},
            mouseleave:function(){ $(".zhonglei ul").hide();}
        });

    });
    $(function(){
//            搜索框显示隐藏
        $("#wudiya").mouseenter(function(){
            $(".content_hidden").show();
            $(".content_show").hide();
        });
        $("#diya").mouseenter(function(){
            $(".content_show").show();
            $(".content_hidden").hide();
        });

        $("#huandengpian").mousedown(function(){
            $(".content_hidden").hide();
        });

        $("#huandengpian").mousedown(function(){
            $(".content_show").hide();
        });
//       找机构、找经理、计算器显示隐藏
        $(".tanchu_icon a .user").hover(function(){
            $(this).next().show();
        },function(){
            $(this).next().hide();
        });
        $(".tanchu_icon a .home").hover(function(){
            $(this).next().show();
        },function(){
            $(this).next().hide();
        });
        $(".tanchu_icon a .calendar").hover(function(){
            $(this).next().show();
        },function(){
            $(this).next().hide();
        });
//        弹出层显示隐藏
        $(".content_tu img").hover(function(){
            $(".content_all").hide();
            $(".tanchu").show();
        });
        $(".mainnav_div").hover(function(){
            $(".content_all").show();
            $(".tanchu").hide();
        });
        $(".img img").click(function(){
            $(".content_all").show();
            $(".tanchu").hide();
        });
        $(".img_hidden img").click(function(e){
            $(".tanchu").hide();
            $(".content_all").show();
            e.preventDefault();})


        });

</script>
@stop


