<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
</head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 <title>小董快餐</title>
 <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
 <link href="/xdkc/Public/css/page.css" rel="stylesheet" type="text/css" />
 <body class="community_body">
	<div class="community">
		<div class="header">
			<img src="/xdkc/Public/images/jry1.jpg">
			<div class="tit">
				<p>&nbsp;小董社区</p>
				<p class="topic">&nbsp;&nbsp;话题<b>680</b></p>
			</div>
		</div>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><div class='post'>	
					<div class='post_people'>
						<img src='/xdkc/Public/<?php echo ($user["user_icon"]); ?>' class='head'>
						<div class='post_name'>
							<p class='name'><?php echo ($user["user_nickname"]); ?></p>
							<p class='time'><?php echo ($vo["post_time"]); ?></p>
						</div>
          			</div>
					<div class='post_content'><?php echo ($vo["post_con"]); ?>
					</div>
					<div class='interact'>
						<span><a href='javascript:void(0)' class='praise <?php echo ($vo["post_id"]); ?>'>赞</a></span>
						<span class="favour"><?php echo ($vo["post_favour"]); ?></span>
						<span class='post_id'><?php echo ($vo["post_id"]); ?></span>
						<span><a href='javascript:void(0)' class='reply reply_id'>回复</a></span>
					</div>
					<div class='reply'>
						 
							<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo["post_id"]) == $vo1["post_id"]): ?><p>
										<?php echo ($vo1['voo'][0]['user_nickname']); ?>：<?php echo ($vo1["reply_con"]); ?>
									</p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				 	</div>
				</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
			
	<div class="deliver"><a href="/xdkc/index.php/Home/Post/post_deliver">发话题</a></div>

	<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
	<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
	<script type="text/javascript">
		$(".praise").click(function(){
			$this=$(this);
			var post_id = $(this).attr("class").substr(6);
			$.ajax({
				type: "GET",
             	url: "/xdkc/index.php/Home/Post/post",
             	data:{id:post_id},
            	success:function(data){$this.parents(".interact").find(".favour").text(data);}
			})
		})

		$(".reply_id").click(function(){
			$("body").css({"height":"100%","overflow":"hidden"});
		    var post_id=$(this).parent().siblings(".post_id").text();
			var reply_div=document.createElement("div");
			document.body.appendChild(reply_div);
			reply_div.id="reply_div";
			$("#reply_div").css({"position":"absolute","left":0,"top":$(window).scrollTop()});
			// alert($(window).scrollTop());
			reply_div.innerHTML="<form action='/xdkc/index.php/Home/Post/reply/post_id/"+post_id+"' method='post'><textarea name='reply_con'>回两句吧</textarea><p><input type='button' value='取消' class='aa' id='cancel'><input type='submit' value='发送'></p></form>";
			$(".community").css({"position":"absolute","width":"100%","opacity":"0.3"});
			$("#cancel").click(function(){
			$("body").css({"height":"auto","overflow":"visible"});
		    reply_div.remove();         //注意这个地方
		    $(".community").css({"opacity":"1"});
		    })



		    $("#reply_div textarea").focus(function(){
		    	$(this).text("");
		    })
		})
	</script>
</body>
</html>