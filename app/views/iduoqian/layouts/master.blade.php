@extends('iduoqian.layouts.layout')
@section('head')
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>多钱网-成都地区最值得信赖的贷款网络平台！</title>
    <link rel="shortcut icon" href="{{asset('iduoqian')}}/favicon.ico">
    <meta name="keywords" content="成都贷款，小额贷款，住房贷款，购车贷款，消费贷款,贷款计算器" />
    <meta name="description" content="缺钱就找多钱网！ 成都地区最值得信赖的贷款平台，超过数万个贷款产品，帮助你快速贷款。 成都小额贷款，住房贷款，购车贷款，消费贷款尽在多钱网！" />
    <script type="text/javascript" src="{{asset('iduoqian')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('iduoqian')}}/js/popup/layer.min.js"></script>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/headCommon.css"/>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/index.css"/>
    <link rel="stylesheet" href="{{asset('bootstrap')}}/js/bootstrap.js" />
    <link rel="stylesheet" href="{{asset('bootstrap')}}/css/bootstrap.css" />
@stop
@section('banner')
<div class="header">
<!--顶部导航-->
    <div class="topnav">
        <span class="topnav_left">缺钱，上多钱网！</span>
        <ul class="topnav_right">
           <li>速贷服务热线：400-865-8865</li>
           <li><a href="" class="xindai">信贷经理登录</a></li>
           <li>|</li>
           <li><a href="" class="xindai">信贷经理注册&nbsp;&nbsp;</a></li>
           <li><a href=""><i class="fa fa-apple icon"> iphone/ipad</i></a></li>
           <li><a href=""><i class="fa fa-android icon"> Android</i></a></li>
        </ul>
    </div>
    <!--主导航-->
    <div class="mainnav_div">
        <a href="index.html"><img src="{{asset('iduoqian')}}/images/logo.gif"/></a>
        <div class="city">
            <span><a href="">成都&nbsp;&nbsp;<i class="fa fa-sort-down"></i></a></span>
        </div>
        <p><a href="diming.html">[切换城市]</a></p>
        <ul class="nav_right">
            <li><a href="">首页</a></li>
            <li><a href="">个人理财</a></li>
            <li><a href="/iduoqian/gonglue">贷款攻略</a></li>
            <li><a href="">关于我们</a></li>
            <li><a href="">人才招聘</a></li>
        </ul>
    </div>
</div>
@stop
@section('contents')
<div class="bg">
    @section('content')
    @show
    @section('footer')
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
    @show
</div>   <!--底部结束-->
    @section('add')
    @show
@stop
