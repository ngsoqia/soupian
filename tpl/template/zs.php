<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="gbk">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="��Դ��������|��������|��������|��Ӱ������">
<meta name="description" content="��Դ��������|��������|��������|��Ӱ������">
<link href="/image/favicon.ico" rel="icon">
<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="/tpl/template/style/feiliuzhixia.css" rel="stylesheet">
<title>�鿴��վ��Դ���� - 1974T - ��Դ��������|��������|��������|��Ӱ����</title>
<style type="text/css">
<!--
.STYLE5 {font-size: 24px; font-family: "΢���ź�"; }
-->
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">��������</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">1974T</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
                    <li><a href="/tpl/template/help.html" target="_blank">���ذ���</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/tpl/template/message.html" target="_blank">������Ƭ</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="hot_search"><div class="col-md-5  hot_form">
     <form action="/search"><div class="input-group">
     <input name="" type="hidden" value="baidu" />
     <input type="text" class="form-control" placeholder="����ؼ��֣������о�ϲ" x-webkit-speech id="serach" name="kw" value=""/>
     <span class="input-group-btn">
     
     <button class="btn btn-primary" type="submit" onClick="search();return false;"><span class="glyphicon glyphicon-search"></span>����</button>
     </span></div>
     </form></div>
</div>       <div class="about">
    <div class="alert alert-info" role="alert">
	<p></p>
    <br><br>
	<p>��������ҵ���Դ�����ڣ�����ϣ��ͨ����1974T�����վ���ҵ�־ͬ���ϵ�����,���һ��������</p>
    <p>��ô���������������ԣ����Ŵ�һ�˴˻��������</p>
	<p>����Թ�ע��վ���ںţ�qingchun1974t �����߽�QQȺ��325801314<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=3b5c143ab28e3c26583fe10b1c53a92c66eb3751f28e7a36e81f5532b2e2e0be"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="DHT��������BT��������" title="DHT��������BT��������"></a></p>
	</div>
<br><br>
<center>
  <table width="984" height="257" border="1">
    <tr>
      <td width="320" height="251" align="center" valign="middle">
        <p><img src="/tpl/template/image/left.jpg" width="320" height="248"></p>        </td>
      <td width="181" align="center" valign="middle"><p><span class="STYLE5">����Դ��</span></p>
        <span class="STYLE5">
        <?php
$link=mysql_connect('localhost','root','root')or die("���ݿ�����ʧ��");
//�������ݿ�
mysql_select_db('bt',$link);//ѡ�����ݿ�
mysql_query("set names gbk");//���ñ����ʽ

$q="select * from sph_counter";//���ò�ѯָ��
$result=mysql_query($q);//ִ�в�ѯ
while($row=mysql_fetch_assoc($result))//��result������в�ѯ���ȡ��һ��
{
echo $row["max_doc_id"];
 }
?>
        </span></td>
      <td width="181" align="center" valign="middle"><p><span class="STYLE5">��������</span></p>
        <span class="STYLE5">
        <?php
$link=mysql_connect('localhost','root','root')or die("���ݿ�����ʧ��");
//�������ݿ�
mysql_select_db('bt',$link);//ѡ�����ݿ�
mysql_query("set names gbk");//���ñ����ʽ

$q="select * from counter order by ymd desc limit 1";//���ò�ѯָ��
$result=mysql_query($q);//ִ�в�ѯ
while($row=mysql_fetch_assoc($result))//��result������в�ѯ���ȡ��һ��
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
  <p align="center"><a href="/">������ҳ</a> | <a href="/tpl/template/zs.php" >ˢ���ز�</a></p>
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
				<p>�򵥡����١���Ч���ȶ���Ӱ�ӡ����֡������BT������</p>
				 <a href="/tpl/template/dcma.html">1974T����</a> | <a href="/tpl/template/sitemap.xml" target="_blank">��վ��ͼ</a></p>
			</div>
			<div class="navbar-text navbar-right">
				<p>(c)2015 1974t.com&nbsp;|&nbsp;</p>
				<p>1974T�����������棬�ڶ����õĴ�����������</p>
			</div>
		</div>
	</nav>
<!--img��ǩ������λ-->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://www.baidu.com/js/opensug.js" charset="gbk"></script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"5","bdPos":"right","bdTop":"139.5"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>