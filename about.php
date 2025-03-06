<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>張惠芯簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:#a2d2e2; font-size:60px;}
		h2 {color:#a4abd6; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1text").innerText = "資訊管理導論";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}
		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1text").innerText = "張惠芯";
  			document.getElementById("h2text").innerText = "Hui-Hsin Chang";
		}
	</script>
</head>
<body>
	<?php echo date("Y-m-d") ?>
	<table border="1">
		<tr>
			<td>
				a
			</td>
			<td>
				b
			</td>
			<td>
				c
			</td>
		</tr>
		<tr>
			<td>
				d
			</td>
			<td>
				e
			</td>
			<td>
				
			</td>
		</tr>
	</table>

	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" width="100%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>
				<h1 id="h1text">張惠芯</h1>
				<h2 id="h2text">Hui-Hsin Chang</h2>
			</td>
		</tr>
	</table>

<table width="70%" border="1">
		<tr>
			<td>
				靜宜大學：<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
				FB：<a href="https://www.facebook.com/share/15tQv5UCZR/">https://www.facebook.com/share/15tQv5UCZR/</a><br>
				Tel: <a href="tel:04-26328001#18110">04-26328001#18110</a><br>
				E-Mail: <a href="mailto:s1120053@o365st.pu.edu.tw">s1120053@o365st.pu.edu.tw</a><br>
			</td>
			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
					<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>
			<td>
				LifeLinker<br>
				<iframe src="https://www.youtube.com/embed/ozCWS9TtWe0" allowfullscreen></iframe>
			</td>
			<td>
				<iframe
    				allow="microphone;"
    				width="350"
    				height="430"
    				src="https://console.dialogflow.com/api-client/demo/embedded/f77f0355-1ead-4771-92c0-eeb9bb68c153">
				</iframe>
			</td>
		</tr>
	</table>
</body>
</html>