<html>
<head>
	<title>
		テスト
	</title>
</head>
<body>
<form action="">
	<input type="text" id="regularExpressionInput" name="regularExpressionInput" /><br />
	<span id="displayContent"></span><br />
</form>    	
</body>
<script src="./jquery-2.1.4.min.js"></script>
<script>
    $("#regularExpressionInput").keyup(function(){
        $.ajax({
            url: "regularExpressionCore.php",
            type: "POST",
            dataType: "json",
            data: {
                value: $("#regularExpressionInput").val()
            }
        })
        .done(function(response){
            alert(response.value);
        })
        // alert("test");
    })
</script>
</html>