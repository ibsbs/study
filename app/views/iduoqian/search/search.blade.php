@extends('iduoqian.layouts.master')
@section('head')
    @parent
    <link rel="stylesheet" href="{{asset('iduoqian')}}/css/sousuo.css" />
@stop

@section('content')
    <div class="content">
       <div class="content_img">
           <img src="{{asset('iduoqian')}}/images/banner.jpg" alt=""/>
       </div>
       <div class="content_top">
           <ul>
               <li>
                   <span class="dk_jine">贷款金额：</span>
                   <div class="dropdown jine">
                       <p class="one">5万元</p>
                       <p class="top"><i class="fa fa-sort-down right"></i></p>
                       <ul>
                           <li>5万元</li>
                           <li>10万元</li>
                           <li>20万元</li>
                           <li>30万元</li>
                       </ul>
                   </div>
               </li>
               <li style="margin-right: 130px;">
                   <span class="dk_qixian">贷款期限：</span>
                   <div class="qixian">
                       <p class="two">12个月</p>
                       <p class="down"><i class="fa fa-sort-down right"></i></p>
                       <ul>
                           <li>3个月</li>
                           <li>6个月</li>
                           <li>12个月</li>
                           <li>2年</li>
                           <li>5年</li>
                           <li>10年</li>
                           <li>30年</li>
                       </ul>
                   </div>
               </li>
               <li>
                   <a href=""><input class="ul_but" type="button" value="搜索贷款"/></a>
               </li>
               <li>
                   <a href=""><input class="ul_btn" type="button" value="贷款身价计算器"/></a>
               </li>
           </ul>
       </div>
       <div class="content_two">
          <div class="content_center">
              <ul class="center_wai">
                  <li>
                      <ul class="center_li">
                          <li>您的身份：</li>
                          <li><a href="">公司企业</a></li>
                          <li><a href="">主业务员</a></li>
                          <li><a href="">工薪阶层</a></li>
                          <li><a href="">个体工商户</a></li>
                      </ul>
                  </li>
                  <li>
                      <ul class="center_li">
                          <li>名下是否有房：</li>
                          <li><a href="">无本地商品房</a></li>
                          <li><a href="">本人名下有（有房产证）</a></li>
                          <li><a href="">父母、配偶名下有（有房产证）</a></li>
                      </ul>
                  </li>
                  <li>
                      <ul class="center_li">
                          <li>名下是否有车：</li>
                          <li><a href="">无车</a></li>
                          <li><a href="">10万以下</a></li>
                          <li><a href="">10万-30万</a></li>
                          <li><a href="">30万-50万</a></li>
                          <li><a href="">50万以上</a></li>
                      </ul>
                  </li>
                  <li>
                      <ul class="center_li">
                          <li>是否有信用记录：</li>
                          <li><a href="">无信用记录</a></li>
                          <li><a href="">有信息记录（信用卡、贷款等）</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
           <div  class="c_bottom"></div>
       </div>
       <div class="center">
           <div class="center_left">
               <div class="left_top">
                   <ul>
                       <li>
                           <div class="jigou">
                               <p class="three">不限机构类型</p>
                               <p class="top_one"><i class="fa fa-sort-down right"></i></p>
                               <ul>
                                   <li>银行</li>
                                   <li>小贷公司</li>
                                   <li>典当行</li>
                                   <li>其他</li>
                               </ul>
                           </div>
                       </li>
                       <li>
                           <div class="diya">
                               <p class="four">不限抵押类型</p>
                               <p class="top_two"><i class="fa fa-sort-down right"></i></p>
                               <ul>
                                   <li>房屋抵押</li>
                                   <li>车辆抵押</li>
                                   <li>其他抵押物</li>
                                   <li>无抵押</li>
                                   <li>信用卡</li>
                                   <li>担保</li>
                               </ul>
                           </div>
                       </li>
                       <li>
                           <div class="huankuan">
                               <p class="five">不限还款方式</p>
                               <p class="top_three"><i class="fa fa-sort-down right"></i></p>
                               <ul>
                                   <li>分期还款</li>
                                   <li>到期还款</li>
                                   <li>其他抵押物</li>
                                   <li>随借随还</li>
                               </ul>
                           </div>
                       </li>
                       <li>
                           <button class="button_b">默认排序</button>
                           <button class="button_b">月供</button>
                           <button class="button_b">总利息</button>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                  <div>
                      <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                      <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                  </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="left_one">
                   <div>
                       <a href=""><img src="{{asset('iduoqian')}}/images/syixing.png" alt=""/></a>
                       <a href="" class="touzi"><p>证大投资 - 随房贷</p></a>
                   </div>
                   <ul class="left_li">
                       <li>
                           <ul class="left_ul">
                               <li><a href="">无需抵押</a></li>
                               <li><a href="">无身份限制</a></li>
                               <li><a href="">3天放款</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">要求有本地房产</a></li>
                               <li><a href="">对办公楼房龄有要求</a></li>
                               <li><a href="">对商铺房龄有要求</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href="">贷款金额：10-500万</a></li>
                               <li><a href="">月　供：  5332元</a></li>
                               <li><a href="">利率1.5% -2.3%</a></li>
                           </ul>
                       </li>
                       <li>
                           <ul class="left_ul">
                               <li><a href=""><button class="left_but">查看</button></a></li>
                               <li><a href=""><span class="shu_span">200人成功申请</span></a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
               <div class="page">
                   <button  class="left_up"><i class="fa fa-caret-left caret"></i>上一页</button>
                   <div class="page_one"><span >1</span></div>
                   <div class="page_two"><span >2</span></div>
                   <div class="page_three"><span >3</span></div>
                   <div class="page_dian"> <span>...</span></div>
                   <div class="page_all"> <span>123</span></div>
                   <div class="left_down"><button>下一页<i class="fa fa-caret-right right_i"></i></button></div>
               </div>
           </div>
           <div class="center_right">
               <div class="right_head">
                   <div class="head_title">
                       <h4><span class="span_su">|</span> 推荐机构经理</h4>
                   </div>
                   <div class="head_one">
                       <div>
                           <a href=""><img src="{{asset('iduoqian')}}/images/manger2.png" alt=""/></a>
                           <a href="" class="renming"><p>薛怀义</p></a>
                       </div>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/user.png" alt=""/>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/xing.png" alt=""/>
                       <ul class="right_li">
                           <li><a href="">3日贷，信用贷，消费贷</a></li>
                           <li><a href="">联合10家银行为您的资金需求...</a></li>
                           <li><i class="fa fa-phone"></i> 400-890-0015转10012</li>
                       </ul>
                   </div>
                   <div class="head_one">
                       <div>
                           <a href=""><img src="{{asset('iduoqian')}}/images/manger3.png" alt=""/></a>
                           <a href="" class="renming"><p>王经理</p></a>
                       </div>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/user.png" alt=""/>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/xing.png" alt=""/>
                       <ul class="right_ul">
                           <li><a href="">企业贷款、个人贷款、抵押贷款</a></li>
                           <li><i class="fa fa-phone"></i> 400-890-0015转10012</li>
                       </ul>
                   </div>
                   <div class="head_one">
                       <div>
                           <a href=""><img src="{{asset('iduoqian')}}/images/manger4.png" alt=""/></a>
                           <a href="" class="renming"><p>李经理</p></a>
                       </div>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/user.png" alt=""/>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/xing.png" alt=""/>
                       <ul class="right_li">
                           <li><a href="">信用贷款 流水贷款、打卡工资贷</a></li>
                           <li><a href="">无营业执照贷.</a></li>
                           <li><i class="fa fa-phone"></i> 400-890-0015转10012</li>
                       </ul>
                   </div>
                   <div class="head_one">
                       <div>
                           <a href=""><img src="{{asset('iduoqian')}}/images/manger1.png" alt=""/></a>
                           <a href="" class="renming"><p>张经理</p></a>
                       </div>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/user.png" alt=""/>
                       <img class="icon_img" src="{{asset('iduoqian')}}/images/xing.png" alt=""/>
                       <ul class="right_ul">
                           <li><a href="">7日贷，银行合作房贷</a></li>
                           <li><i class="fa fa-phone"></i> 400-890-0015转10012</li>
                       </ul>
                   </div>
               </div>
               <div class="right_two">
                   <span>贷款助手，帮您快速挑选贷款</span>
               </div>
               <div class="right_three">
                   <div class="c_r_top">
                       <p><span class="right_sp">|</span> 贷款助手</p>
                       <ul>
                           <li><img src="{{asset('iduoqian')}}/images/jisuan1.png"><span><a href=""> 房屋税费计算器</a></span></li>
                           <li><img src="{{asset('iduoqian')}}/images/jisuan2.png"><span><a href=""> 个人所得税计算器</a></span></li>
                           <li><img src="{{asset('iduoqian')}}/images/jisuan3.png"><span><a href=""> 定期存款计算器</a></span></li>
                           <li><img src="{{asset('iduoqian')}}/images/jisuan4.png"><span><a href=""> 购房能力评估计算器</a></span></li>
                       </ul>
                   </div>
               </div>
               <div class="right_four">
                   <p class="right_p"><span class="right_sp">|</span> 新手贷款攻略</p><br />
                   <ul>
                       <li><a href="">公积金收益低贷款额度少 不如余额宝？</a></li>
                       <li><a href="">外资小贷求解水土不服 消费贷款借线上破局</a></li>
                       <li><a href="">定向降准显效 银行理财产品收益率年中难飙高</a></li>
                       <li><a href="">上海金融谷投融资服务平台起航</a></li>
                       <li><a href="">股转系统股权质押贷款活跃</a></li>
                       <li><a href="">宜宾住房公积金贷款9.5亿 完成年计划73%</a></li>
                       <li><a href="">英国将向印度提供10亿英镑基础设施贷款</a></li>
                       <li><a href="">P2P网贷“麻烦”不断部分平台谋求转型</a></li>
                       <li><a href="">央行要求提前支取罚息 贷基协存特权不再</a></li>
                       <li><a href="">手机银行对个人理财的三个贡献</a></li>
                       <li><a href="" id="chakan">查看更多>></a></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
@stop

@section('add')
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
    };
    $(function(){
        $(".top").click(function(){
            var ul = $(".dropdown ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".one").click(function(){
            var ul = $(".dropdown ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".dropdown ul li").click(function(){
            var txt = $(this).text();
            $(".one").html(txt);
            $(".dropdown ul").hide();
        });


        $(".one,.top").click(function(){
            $(".qixian ul,.jigou ul,.diya ul,.huankuan ul").hide();
        })

//        贷款期限
        $(".down").click(function(){
            var ul = $(".qixian ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".two").click(function(){
            var ul = $(".qixian ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".qixian ul li").click(function(){
            var txt = $(this).text();
            $(".two").html(txt);
            $(".qixian ul").hide();
        });

        $(".down,.two").click(function(){
            $(".dropdown ul,.jigou ul,.diya ul,.huankuan ul").hide();
        })
//        机构类型
        $(".top_one").click(function(){
            var ul = $(".jigou ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".three").click(function(){
            var ul = $(".jigou ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".jigou ul li").click(function(){
            var txt = $(this).text();
            $(".three").html(txt);
            $(".jigou ul").hide();
        });
        $(".three,.top_one").click(function(){
            $(".dropdown ul,.qixian ul,.diya ul,.huankuan ul").hide();
        })
//        抵押类型
        $(".top_two").click(function(){
            var ul = $(".diya ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".four").click(function(){
            var ul = $(".diya ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".diya ul li").click(function(){
            var txt = $(this).text();
            $(".four").html(txt);
            $(".diya ul").hide();
        });
        $(".four,.top_two").click(function(){
            $(".dropdown ul,.jigou ul,.qixian ul,.huankuan ul").hide();
        })
//        还款方式
        $(".top_three").click(function(){
            var ul = $(".huankuan ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".five").click(function(){
            var ul = $(".huankuan ul");
            if(ul.css("display")=="none"){
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
            }
        });
        $(".huankuan ul li").click(function(){
            var txt = $(this).text();
            $(".five").html(txt);
            $(".huankuan ul").hide();
        });
        $(".five,.top_three").click(function(){
            $(".dropdown ul,.jigou ul,.diya ul,.qixian ul").hide();
        })
        $(".left_one").click(function(){
            $(".dropdown ul,.jigou ul,.diya ul,.qixian ul,.huankuan ul").hide();
        })
        $(".content_center").click(function(){
            $(".dropdown ul,.jigou ul,.diya ul,.qixian ul,.huankuan ul").hide();
        })
    })



</script>
@stop