@extends('iduoqian.layouts.master')

@section('content')
<!--内容区域-->
   <div class="content">
       <div id="huandengpian">
           <div class="inner">
               <img src="images/bj1.jpg" alt=""/>
               <img src="images/bj2.jpg" alt=""/>
               <img src="images/bj3.jpg" alt=""/>
               <img src="images/bj4.jpg" alt=""/>
           </div>
           <div class="next">></div>
           <div class="prev"><</div>
       </div>
       <div class="neirong">
           <div id="neirong_tanchu">
               <img class="logo_main" src="images/logo_m.png" alt=""/>
               <ul class="content_ul">
                   <li>
                       <div class="content_btn" id="wudiya">无抵押信用贷款</div>
                       <!--无抵押信用贷款搜索框区域-->
                       <div class="content_hidden">
                           <div class="content_search">
                               <div class="content_san"></div>
                           </div>
                           <div class="content_input">
                               <select name="money" class="content_select">
                                   <option value="5万元">5万元</option>
                                   <option value="10万元">10万元</option>
                                   <option value="20万元">20万元</option>
                                   <option value="30万元">30万元</option>
                                   <option selected=selected>贷款金额</option>
                               </select>
                               <select name="time" class="content_select">
                                   <option value="3个月">3个月</option>
                                   <option value="6个月">6个月</option>
                                   <option value="1年">1年</option>
                                   <option value="2年">2年</option>
                                   <option value="5年">5年</option>
                                   <option value="10年">10年</option>
                                   <option value="20年">20年</option>
                                   <option value="30年">30年</option>
                                   <option selected=selected>贷款期限</option>
                               </select>
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
                               <select name="zhonglei" class="content_select">
                                   <option selected=selected>不限</option>
                                   <option value="个人消费">个人消费</option>
                                   <option value="贷款买房">贷款买房</option>
                                   <option value="贷款买车">贷款买车</option>
                                   <option value="经营周转">经营周转</option>
                               </select>
                               <select name="money" class="content_select">
                                   <option value="5万元">5万元</option>
                                   <option value="10万元">10万元</option>
                                   <option value="20万元">20万元</option>
                                   <option value="30万元">30万元</option>
                                   <option selected=selected>万元</option>
                               </select>
                               <select name="time" class="content_select">
                                   <option value="3个月">3个月</option>
                                   <option value="6个月">6个月</option>
                                   <option value="1年">1年</option>
                                   <option value="2年">2年</option>
                                   <option value="5年">5年</option>
                                   <option value="10年">10年</option>
                                   <option value="20年">20年</option>
                                   <option value="30年">30年</option>
                                   <option selected=selected>贷款期限</option>
                               </select>
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
           <div class="content_tu"><img src="images/start.png" alt=""/></div>
       </div>
       <!--弹出层区域-->
       <div class="tanchu">
           <div class="img"><img src="images/tanchu1.jpg" alt=""/></div>
           <div class="tanchu_div">
               <ul>
                   <li>
                       <img src="images/tanchu01.png" alt="" />
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-home home"></i><p class="manager">找机构</p></a>
                       </div>
                   </li>
                   <li>
                       <img src="images/tanchu02.png" alt=""/>
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-user user"></i><p class="manager">找经理</p></a>
                       </div>
                   </li>
                   <li>
                       <img src="images/tanchu03.png" alt="">
                       <div class="tanchu_icon">
                           <a href=""><i class="fa fa-calendar calendar"></i><p class="manager">计算器</p></a>
                       </div>
                   </li>
               </ul>
               <div class="tanchu_dai">
                   <ul>
                       <li><img src="images/tanchu04.png" alt=""/></li>
                       <li><img src="images/tanchu05.png" alt=""/></li>
                       <li><img src="images/tanchu06.png" alt=""/></li>
                       <li><img src="images/tanchu07.png" alt=""/></li>
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
           <div class="img_hidden"><img src="images/hidden.png" alt=""/></div>
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
        },3000);

        function next(){
            var n = parseInt($(".inner").css("left")) - 1920;
            if(n > -7680 ){
                $(".inner").animate({
                            "left": n+"px"
                        },400
                );
            }else{
                $(".inner").animate({
                            "left": "0px"
                        },400
                );
            }
        }
        function prev(){
            var n = parseInt($(".inner").css("left")) + 1920;
            if(n >= 1920 ){
                $(".inner").animate({
                            "left": "-5760px"
                        },400
                );
            }else{
                $(".inner").animate({
                            "left": n+"px"
                        },400
                );
            }
        }
    });
    $(function(){
        //    搜索框显示隐藏
        $("#wudiya").hover(function(){
            $(".content_hidden").show();
            $(".content_show").hide();
        });
        $(".content_hidden").mouseleave(function(){
            $(this).hide();
        });
        $("#diya").hover(function(){
            $(".content_show").show();
            $(".content_hidden").hide();
        });
        $(".content_show").mouseleave(function(){
            $(this).hide();
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
            $("#neirong_tanchu").hide();
            $(".tanchu").show();
        });
        $(".mainnav").hover(function(){
            $("#neirong_tanchu").show();
            $(".tanchu").hide();
        });
    })
</script>

@stop