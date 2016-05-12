<!DOCTYPE html>
<html lang="zh-CN">
  <head>
<!--禁止收录 -->	
<?php
    $noindex = get_post_meta($post->ID, 'noindex-post', true);
 
    if ($noindex) {
        echo '<meta name="robots" content="noindex,nofollow" />';
    }
?>
<!-- -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后-->
	<meta name="renderer" content="webkit">
	<meta name="description" content="大光物资商城为贵阳大光五金旗下电子商务公司，大光物资商城是由大光信息联手百家企业打造的“百企联盟”，是集五金机电设备、节能环保建筑材料、民用商品产业链，建筑材料等为一体的大型综合物资购物商城，是“综合物资”的网上交易平台。">
	<meta name="keywords" content="大光五金、大光信息、贵州五金机电经销商、五金工具、机电设备、发电设备、化工产品、仪器、仪表、建筑、装饰材料、劳保、安防用品、消防、水暖器材、起重、吊装设备、电力、电信、线缆、民用五金、照明电器、防爆产品、通风设备">
    <title>大光资讯&nbsp;:&nbsp;<?php the_title(); ?></title>
    <!-- Bootstrap 3-->
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <link href="ie.css" rel="stylesheet" type="text/css" />	
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--百度统计代码dag1688.com  -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c54d514f3608e5c02d54b8164796663f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


<!--百度统计代码结束  -->

<!--[if lte IE 9]>
<div id="ie8-warning">&nbsp;&nbsp;<h3>亲爱的用户,您的浏览器已经过时,不支持响应式布局</h3><h4>如果您使用的是<span style="color:#3FAF2E;">360浏览器</span>,请切换到<span style="color:#3FAF2E;">&nbsp;<i class="fa fa-bolt fa fa-2x"></i>&nbsp;极速模式&nbsp;</span>进行正常使用</h4><img src="http://dag1688.cn-hangzhou.aliapp.com/wp-content/uploads/2015/10/360bower.gif"><br /><h4>如果您正在使用 Internet Explorer 10 以下版本，建议您下载以下浏览器：<br /><a href="http://www.mozillaonline.com/" target="_blank">Firefox</a> / <a href="http://rj.baidu.com/soft/detail/14744.html" target="_blank">Chrome</a> / <a href="http://www.apple.com.cn/safari/" target="_blank">Safari</a> / <a href="http://www.operachina.com/" target="_blank">Opera</a> / <a href="http://rj.baidu.com/soft/detail/14917.html" target="_blank">Internet Explorer 10</a> </h4><h5>Copyright © 2015 大光物资商城 All Rights Reserved</h5>
</div>
<script type="text/javascript">
function position_fixed(el, eltop, elleft){  
       // check if this is IE9 
       if(!window.XMLHttpRequest)  
              window.onscroll = function(){  
                     el.style.top = (document.documentElement.scrollTop + eltop)+"px";  
                     el.style.left = (document.documentElement.scrollLeft + elleft)+"px";  
       }  
       else el.style.position = "fixed";  
}
       position_fixed(document.getElementById("ie8-warning"),0, 0);
</script>
<![endif]-->


</head>
  <body>
	<div id="header" >
			<nav class="navbar navbar-default navbar-fix" role="navigation">
			   <div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" 
					 data-target="#example-navbar-collapse">
					 <span class="sr-only">切换导航</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img id="dag1688-log" src="../blog/wp-content/themes/dag1688-mobile/images/dagnewslogo.png" alt="<?php bloginfo('name'); ?>" width="200px"></a>
			   </div>	
			   
				 <?php wp_nav_menu( 
					array( 'container_class' => 'collapse navbar-collapse',
					'container_id' => 'example-navbar-collapse',
					'theme_location' => 'primary', 
					'menu_class' => 'nav navbar-nav',
					)
					); ?>
			</nav>
	</div>
	
	

	
	
