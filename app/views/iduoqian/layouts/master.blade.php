<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    @section('head')
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>多钱网-成都地区最值得信赖的贷款网络平台！</title>
    <link rel="shortcut icon" href= "{{asset('iduoqian/favicon.ico/')}}">
    <meta name="keywords" content="成都贷款，小额贷款，住房贷款，购车贷款，消费贷款,贷款计算器" />
    <meta name="description" content="缺钱就找多钱网！ 成都地区最值得信赖的贷款平台，超过数万个贷款产品，帮助你快速贷款。 成都小额贷款，住房贷款，购车贷款，消费贷款尽在多钱网！" />

    <script type="text/javascript" src="{{URL::asset('iduoqian/js/jquery.min.js/')}}"></script>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/headCommon.css"/>
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/index.css"/>
    @show
</head>
<body>
   @section('banner')
<!--头部区域-->
   <div class="header">
       <!--顶部导航-->
       <div class="topnav">
           <span class="topnav_left">缺钱，上多钱网！</span>
           <ul class="topnav_right">
               <li>速贷服务热线：028-6866-3366</li>
               <li><a href="" class="xindai">信贷经理登录</a></li>
               <li>|</li>
               <li><a href="" class="xindai">信贷经理注册&nbsp;&nbsp;</a></li>
               <li><a href=""><i class="fa fa-apple icon">&nbsp;iphone/ipad</i></a></li>
               <li><a href=""><i class="fa fa-android icon">&nbsp;Android</i></a></li>
           </ul>
       </div>
       <!--主导航-->
       <div class="mainnav">
           <div class="mainnav_div">
               <img src="{{asset('iduoqian')}}/images/logo.gif"/>
               <div class="city">
                   <span><a href="">成都&nbsp;&nbsp;<i class="fa fa-sort-down"></i></a></span>
               </div>
               <p><a href="">[切换城市]</a></p>
               <ul class="nav_right">
                   <li><a href="">首页</a></li>
                   <li><a href="">个人理财</a></li>
                   <li><a href="">贷款攻略</a></li>
                   <li><a href="">理财攻略</a></li>
                   <li><a href="">人才招聘</a></li>
               </ul>
           </div>
       </div>
   </div>
   @show
  @section('content')
  @show

</body>

</html>