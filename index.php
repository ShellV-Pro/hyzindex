<!doctype html>
<?php
$the_host = $_SERVER['HTTP_HOST'];  
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';  
if($the_host == 'www.shadow.hyz.moe')  {  
header('HTTP/1.1 301 Moved Permanently');  
header('Location: http://hyz.moe/w/index.php/27.html ');//  '.$request_uri
}
if($the_host == 'shadow.hyz.moe')  {  
header('HTTP/1.1 301 Moved Permanently');  
header('Location: http://hyz.moe/w/index.php/27.html ');//  '.$request_uri
}    

?>  
<!--hyzweb2.0 
1.加入bootstrap
2.主页导航nav由原版的class改为id
3.取消应用栏，取消利用jquery页面转换
4.取消导航字体大小切换

--2016.3.15 语义化
-->
<script>
var 弹窗 = alert;
</script>
<html onselectstart="return false;" xmlns:wb="http://open.weibo.com/wb">
	<head>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
		<meta charset="utf-8">
		<meta name="keywords" content="哈一中,哈尔滨市第一中学校,哈一中官网">
		<meta name="description" content="哈一中哈尔滨市第一中学校官网">
		<meta name="author" content="哈尔滨市第一中学校信息技术社">
		<title>哈尔滨市第一中学校</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="shortcut icon" href="hyzicon.png">
		<meta name="viewport" content="user-scalable=no,width=640">
		<style>
		*{font-family:'PT serif',\5FAE\8EDF\6B63\9ED1\9AD4,\5FAE\8F6F\96C5\9ED1,\534E\6587\7EC6\9ED1;}
		</style>
		<title>码农公社 MoeCoder Assn.</title>
		<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- 可选的Bootstrap主题文件（一般不使用） -->
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script>
			//-----------------------------------------------------------------------------

			function goindex(){/*首页*//*晚上敲成功!!!!!!!!!!!!!!!!!!!!!!!!*/
				var myhost=location.hostname;
				window.location.assign("http://hyz.moe");
			}
			//=============================================================================


			function noThing(){/*什么的都没有*/
				alert('这什么都没有啦，我们还在开发站点捏...OAQ');
			}
		</script>

	</head>
	<!--本站点由哈尔滨市第一中学信息技术社-码农公社 倾情制作ㄟ(▔▽▔ㄟ) (╯▔▽▔)╯ 请保留原作一切著作权，未经允许的传播或使用 (╬▔皿▔)凸 本社团保留一切追究权利-->

	<body id="body" onselectstart="return false" onpaste="return false" oncopy="return false;" oncut="return false;" oncontextmenu="return false;" galleryimg="no">
	<nav>	
		<!--顶部白条-->
		<div class="topsome">
			<a href="http://weibo.com/ShellV" target='_blank'> -->我想提问题个 OAQ</a>
			<div style='float:left;width:69;height:26;'><wb:follow-button uid="5534849528" type="red_1" width="67" height="24" ></wb:follow-button></div>
		</div>
	
		<!--导航栏-->
		<div id="nav" id="imptt"> <!--onmousemove="bigImg(this)" onmouseout="normalImg(this)" ()-->
			<a href="#" onclick="goindex()"  id="navz" id="navbig">首页</a>  <!--class="oneisbig"-->
			
			<!--<a href="#文章_(:3」∠)_" onclick="docuMents()" class="navz" id="navsmall">应用</a>-->
			<a href="/w" onclick="docuMents()" id="navz" id="navsmall" target="_blank">新闻分站</a>
			<a href="http://www.hyzwx.com/" alt="这里是哈尔滨市地址一中学网校" class="navz" id="navsmall" target="_blank">哈一官网</a>
			<a href="/u/tieba" onclick="docuMents()" id="navz" id="navsmall" target="_blank">校园贴吧</a>
			<a href="#..." onclick="noThing()" id="navz" id="navsmall">...</a>
		</div>
	</nav>
	<section>
		<p id="nimaline"></p><!--DOM、jq添加元素标志标志线，在这个下边添加元素用-->
		

	<!--内容部分-->
		<div id="content" class="ctt">
			
			<img alt="哈尔滨市第一中学校"  src="hyz.jpg" ondragstart="return false;"/><br/><br/>
			<span class="alltitle" >哈尔滨市第一中学校</span><br/><br/>
			<span class="smalltitle" >内图发展个性·外图供献人群</span>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</div>
		
	<!--内容
	<section class="container panel panel-default">
			<div class="row">
				<div class="col-sm-4">
					<h2 style="color:#2db4d8"><center>历史悠久</center></h2>
					<p><center>哈尔滨市第一中学（）<br>(σ‘・д･)σ</center></p>
				</div>
				<div class="col-sm-4">
					<h2 style="color:#2db4d8"><center>ACG文化</center></h2>
					<p><center>俗话说：“不混ACG的码农不是好码农”，团队完全尊重ACG文化。并有过组团搭建ACG文化项目，（SO欢迎加入卖moe &nbsp;）<br>(●′ω`●)</center></p>
				</div>
				<div class="col-sm-4">
					<h2 style="color:#2db4d8"><center>团队合作</center></h2>
					<p><center>开放、分享与协作，一个能够让你感受到无私力量的团体，搭建项目制度以代码贡献制为主（有具体声明项目除外哦），全过程任何人都可以参与贡献自己的想法和码子<br>（～￣▽￣～）</center></p>
				</div>
			</div>
		</section>
	-->
	<!--底边栏-->
	</section>
	<footer style=" background-color:#000000;" id="footer">
						
						<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255824985'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1255824985' type='text/javascript'%3E%3C/script%3E"));</script>
						
						<a href="/fm" target='_blank'>二次元FM</a>&nbsp;
						<a href="/w" target='_blank'>一中文库</a>
						<a href="http://221.208.241.163:8081/ZHcheck/studentloginCheckScore" target="_blank">2015会考查询入口</a>
						<a href="http://www.hyz.moe/w/index.php/archives/14.html" target='_blank'>橙光游戏</a>
	</footer>
	</body>
</html>

<!-- 
		<div id='content' class='ctt'>
			<div id='docdad'>
				<a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=10' target='_blank'>校园简介</a>
				<a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=41' target='_blank'>校风校纪</a>
				<a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=12' target='_blank'>辉煌业绩</a>
				<a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=11' target='_blank'>历任校长</a>
				<br/><br/><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<br/>
				<br/>
				<br/>
			</div>
				<br/>
				<br/>
				<br/>
				<span style='font-size:280%;color:#339933;'><a href='/w/' target='_blank'>!?Σ(ﾟдﾟ;)想看更多?来文库瞧瞧</a></span>
		</div>
 -->
<!--
<div id='content' class='ctt'><div id='docdad'><a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=10' target='_blank'>校园简介</a><a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=41' target='_blank'>校风校纪</a><a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=12' target='_blank'>辉煌业绩</a><a class='smalldoc' href='http://www.hyzwx.com/web/newsinfo.htm?newsid=11' target='_blank'>历任校长</a><br/><br/><br/><a class='doclist' href='#123' target='_blank'>暂无文章</a><br/><a class='doclist' href='#123' target='_blank'>暂无文章</a><br/><a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
				<a class='doclist' href='#123' target='_blank'>暂无文章</a><br/>
			</div>
		</div>
-->