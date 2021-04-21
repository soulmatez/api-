<!DOCTYPE html>

<html>

<head>

<title>钱包</title>

<meta http-equiv="Content-Type" content="textml; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/layer.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="css/style.css"/>




</head>

<body>

<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <div id="qrcode" style="margin:auto"></div> 
      <button class="adbtn ewm_btn">分享链接</button>
      
    </div>
  </div>
</div>



<div class="wrapper">

  

</div>


<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
	
	
	function showalert()
	{	
		
		$.ajax({
			               //请求方式
			               type : "GET",
			               //请求地址
			               url : "https://api.binance.com/api/v3/ticker/price",
			               //请求成功
			               success : function(result) {
			                   console.log(result);
			               },
			               //请求失败，包含具体的错误信息
			               error : function(e){
			                   console.log(e.status);
			                   console.log(e.responseText);
			               }
			           });
		
	}
	
	 $(function(){
		 
		setInterval(showalert, 2000);
		
	 });
	
</script>




</body>

</html>

