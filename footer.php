<script>
		function goback(){
			window.location.href="index.php?page_no=<?=$_GET['page_no']?>&query=<?php echo $_GET['query'] ?>";
			alert(console.log($_GET['page_no']));
			// ------------back button functions------------
			// javascript:history.go(-1);
			// window.history.back();
		}

		function newRecord(){
			window.location.href="new_record.php?page_no=<?php echo $_GET['page_no']; ?>&query=<?php echo $_GET['query'] ?>";
        }

		function forget(){
			window.location.href="forget.php";
        }

		function display_ct() {
			var d = new Date();
			var refresh=1000; // Refresh rate in milli seconds
			var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
		    "AUG","SEP","OCT","NOV","DEC"];
			document.getElementById('ct').innerHTML = d.getDate()+"  "+months[d.getMonth()]+", "+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds() ;
			mytime=setTimeout('display_ct()',refresh)
		}

		//highlight the field
		
		$(document).ready(function(){
			$("#myCheck").click(function(){
				if($(this).prop("checked") == true){
					$("input").css("background-color", "#b3ffd9");
					$("#id").css("background-color", "#ffb3b3");
					$("#text1").css("background-color", "yellow");
					$("#text2").css("background-color", "yellow");

				} else{
					$("input").css("background-color", "white");
				}
			});
		});

		

</script>
</body>
</html>
