<!--底部区域-->
<div class="footer">
    <div class="footer_bg">
       <div class="foot_all">
           <ul>
               <li>
                   <div class="footer_guimo">
                       <img src="{{asset('iduoqian')}}/images/guimo.png" alt=""/>
                       <ul style="width: 170px;">
                           <li>规模最大的贷款网站</li>
                           <li>即将开通去国200多个城市分站</li>
                           <li>共有105贷款顾问</li>
                           <li>685家贷款机构</li>
                       </ul>
                   </div>
               </li>
               <li>
                   <div class="footer_guimo">
                       <img src="{{asset('iduoqian')}}/images/fangwen.png" alt=""/>
                       <ul>
                           <li>访问量最大的贷款网站</li>
                           <li>每天近8万 贷款需求者访问</li>
                           <li>每月页面浏览量达到200万次</li>
                           <li>全国超过50万人提供了贷款咨询服务</li>
                       </ul>
                   </div>
               </li>
               <li>
                   <div class="footer_guimo">
                       <img src="{{asset('iduoqian')}}/images/quanmian.png" alt=""/>
                       <ul>
                           <li>全免费服务</li>
                           <li>多钱网不向贷款者收取任何费用</li>
                           <li>向全国贷款需求者提供包括问答电话</li>
                           <li>咨询、QQ交流等多种渠道的免费服务</li>
                       </ul>
                   </div>
               </li>
               <li>
                   <div class="footer_rexian">
                       <ul>
                           <li>7*24小时服务</li>
                           <li>多钱网向贷款需求者提供免费服务</li>
                           <li style="color: #c9af7d;">投诉热线：</li>
                           <li>400-865-8865</li>
                       </ul>
                   </div>
               </li>
           </ul>
       </div>
    </div>
    <div class="footer_word">
        <ul>
            <li>多钱首页 |</li>
            <li>网站地图 |</li>
            <li>关于多钱 |</li>
            <li>服务条款 |</li>
            <li>法律声明 |</li>
            <li>诚聘英才 |</li>
            <li>联系我们 |</li>
            <li>广告服务 |</li>
            <li>贷款攻略 |</li>
            <li>新手入门 |</li>
            <li>免费申请贷款</li>
        </ul>
    </div>
    <div class="foot_ying">Copyright 2013 DuoQian Corporation.All Rights Reserved.成都多钱网 蜀ICP备12019260号-3</div>
    <div class="ditu">
        <img src="{{asset('iduoqian')}}/images/ditu.png" alt=""/>
    </div>
    <div class="back" onclick="scollmove()"><i class="fa fa-angle-up up"></i></div>
 </div>
 <script src="{{asset('iduoqian')}}/js/layout.js"></script>
<script type="text/javascript">
//    回到顶部
    function scollmove(){
        var tempwindow =  $(window)
        var aniid = setInterval(function(){
            var tempheight = tempwindow.scrollTop();
            tempwindow.scrollTop(tempheight/2);
            if(tempheight<=2){
                clearInterval(aniid);
            }
        },100);
    }

</script>