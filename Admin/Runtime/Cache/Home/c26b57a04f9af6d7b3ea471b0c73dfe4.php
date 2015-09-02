<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
  	<style type="text/css">
  	*{padding: 0px;margin: 0px;}
    body{position: absolute;top:50%;margin-top: -300px;left: 50%;margin-left: -490px;}
  	.top{margin:0 auto;width:980px; height: 120px;background-color: #cfcece;font-size: 20px;text-align: center;line-height: 120px;}
  	.bottom{margin: 0 auto;width: 980px;height: 120px;}
  	.left{float:left;width: 180px;height:480px;background-color:#cfcece;text-align: center;}
    .left ul{list-style-type:none;font-size: 15px;}
    .left ul li a:link,.left ul li a:visited{color: #000;text-decoration: none}
    .left ul li a:hover{text-decoration: none}
    h3{background-color: #9b9b9b;}
    .right{float:left;margin-left:20px;width: 780px;height:480px;background-color: #cfcece;}
  	.right iframe{width: 780px;height:480px;border: none;border: 1px solid #fff;}
    a:link,a:visited{color:#031bc1;}
    </style>
  	</head>
  	<body>
  		<div class="top"><h1>小董快餐管理后台</h1></div>
  		<div class="bottom">
  			<div class="left">
  					<h3>商品管理</h3>
            <ul>
              <li><a href="/xdkc/admin.php/Home/Category/show" target="window">类别编辑</a></li>
            </ul>
            <ul>
              <li><a href="/xdkc/admin.php/Home/Goods/show" target="window">商品编辑</a></li>
              <li><a href="/xdkc/admin.php/Home/Goods/add_view" target="window">商品添加</a></li>
            </ul>
   					<h3>用户管理</h3>
            <ul>
              <li><a href="/xdkc/admin.php/Home/User/user" target="window">用户信息</a></li>
            </ul>
            <h3>订单管理</h3>
            <ul>
              <li><a href="/xdkc/admin.php/Home/Order/order" target="window">已下订单</a></li>
            </ul>
  					<h3>员工管理</h3>
  				</ul>
  			</div>
  			<div class="right">
          <iframe name="window" src="/xdkc/admin.php/Home/Order/order"></iframe>
        </div>
  		</div>
  	</body>
</html>