/**
  * autor:Xiao
  * date :2014.7.12
  * qq :837514294
  * 曾经沧海难为水，除却巫山不是人
  */
;(function(w,d){
	//核心函数
	var Layout = {
		get:function(){
			return {
				//获取元素
				getById :function(el){
					return el && d.getElementById(el);
				},
				//获取类型
				getTags :function(){
					return [
						["服务","利率"],
						["信用卡","优惠","理财"],
						["金融","银行","改革"],
						["信贷","利率","攻略"],
						["贷款","汽车"]
					];
				},
				//颜色字典
				getColor:function(){
					return {
						"col_0":[2,4],
						"col_1":[1,3,2],
						"col_2":[3,1,4],
						"col_3":[4,2,3],
						"col_4":[1,4]
					}
				}
			}
		},
		init:function(){
			var _this = this,i=0,col=5,_html="";
			//创建列
			for(;i<col;i++){
				//每列创建的个数
				var _count = (i == 0 || i== col-1) ? 2 : 3,
					_left = i*47,
					_top,
					_txt;
				//创建行
				for(var j=0;j<_count;j++){
					_top = j*53;
					_txt = _this.get().getTags()[i][j];
					//特殊的top
					(i==0 || i==2 ||i==4) && (_top += 27);
					//获取颜色
					//console.log(_this.get().getColor()["col_"+i])
					_color = _this.get().getColor()["col_"+i][j];
					//构建HTML
					_html += "<a href='#' class='cate-0"+_color+"' style='left:"+_left+"px;top:"+_top+"px;'>"+_txt+"</a>";
				}
			}
			//填充HTML
			_this.get().getById("tags-layout").innerHTML = _html;
		}
	};
	Layout.init();
})(window,document);