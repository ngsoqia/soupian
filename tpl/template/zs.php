<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="gbk">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="资源搜索引擎|种子搜索|磁力搜索|电影搜索。">
<meta name="description" content="资源搜索引擎|种子搜索|磁力搜索|电影搜索。">
<link href="/image/favicon.ico" rel="icon">
<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="/tpl/template/style/feiliuzhixia.css" rel="stylesheet">
<title>查看本站资源总数 - 1974T - 资源搜索引擎|种子搜索|磁力搜索|电影搜索</title>
<style type="text/css">
<!--
.STYLE5 {font-size: 24px; font-family: "微软雅黑"; }
-->
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">磁力链接</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">1974T</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
                    <li><a href="/tpl/template/help.html" target="_blank">下载帮助</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/tpl/template/message.html" target="_blank">交流求片</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="hot_search"><div class="col-md-5  hot_form">
     <form action="/search"><div class="input-group">
     <input name="" type="hidden" value="baidu" />
     <input type="text" class="form-control" placeholder="输入关键字，搜索有惊喜" x-webkit-speech id="serach" name="kw" value=""/>
     <span class="input-group-btn">
     
     <button class="btn btn-primary" type="submit" onClick="search();return false;"><span class="glyphicon glyphicon-search"></span>搜索</button>
     </span></div>
     </form></div>
</div>       <div class="about">
    <div class="alert alert-info" role="alert">
	<p></p>
    <br><br>
	<p>如果您查找的资源不存在，或者希望通过在1974T这个网站中找到志同道合的朋友,大家一起交流分享。</p>
    <p>那么您可以在这里留言，相信大家会彼此互相帮助。</p>
	<p>你可以关注本站公众号：qingchun1974t ，或者进QQ群：325801314<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=3b5c143ab28e3c26583fe10b1c53a92c66eb3751f28e7a36e81f5532b2e2e0be"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="DHT磁力搜索BT搜索交流" title="DHT磁力搜索BT搜索交流"></a></p>
	</div>
<br><br>
<center>
  <table width="984" height="257" border="1">
    <tr>
      <td width="320" height="251" align="center" valign="middle">
        <p><img src="/tpl/template/image/left.jpg" width="320" height="248"></p>        </td>
      <td width="181" align="center" valign="middle"><p><span class="STYLE5">总资源数</span></p>
        <span class="STYLE5">
        <?php
$link=mysql_connect('localhost','root','root')or die("数据库连接失败");
//连接数据库
mysql_select_db('bt',$link);//选择数据库
mysql_query("set names gbk");//设置编码格式

$q="select * from sph_counter";//设置查询指令
$result=mysql_query($q);//执行查询
while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
{
echo $row["max_doc_id"];
 }
?>
        </span></td>
      <td width="181" align="center" valign="middle"><p><span class="STYLE5">今日新增</span></p>
        <span class="STYLE5">
        <?php
$link=mysql_connect('localhost','root','root')or die("数据库连接失败");
//连接数据库
mysql_select_db('bt',$link);//选择数据库
mysql_query("set names gbk");//设置编码格式

$q="select * from counter order by ymd desc limit 1";//设置查询指令
$result=mysql_query($q);//执行查询
while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
{
echo $row["today"];
 }
?>
        </span></td>
      <td width="320" align="center" valign="middle">
        <p align="center"><img src="/tpl/template/image/left.jpg" width="320" height="248" align="absmiddle"></p>        </td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p align="center"><a href="/">返回首页</a> | <a href="/tpl/template/zs.php" >刷新重查</a></p>
  <p align="center">&nbsp;</p>
  </center>
  <br>
       
    </div></div>



			</table>
			</div>
		</div>
	</div>
<nav class="footer navbar-inverse">
		<div class="container">
			<div class="navbar-collapse collapse navbar-text">
				<p>简单、快速、高效、稳定、影视、音乐、软件、BT、种子</p>
				 <a href="/tpl/template/dcma.html">1974T声明</a> | <a href="/tpl/template/sitemap.xml" target="_blank">网站地图</a></p>
			</div>
			<div class="navbar-text navbar-right">
				<p>(c)2015 1974t.com&nbsp;|&nbsp;</p>
				<p>1974T磁力搜索引擎，第二好用的磁力搜索引擎</p>
			</div>
		</div>
	</nav>
<!--img标签横幅广告位-->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://www.baidu.com/js/opensug.js" charset="gbk"></script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"5","bdPos":"right","bdTop":"139.5"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>