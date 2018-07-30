<html>
    <head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){
      $(".js-ajax-php-json").submit(function(){
        var data = {
          "action": "test"
        };
        d = $(this).serialize() + "&" + $.param(data);
        $.ajax({
          type: "POST",
          dataType: "json",
          url: "bresponse.php", 
          data: d,
          success: function(data) {
			if(data.coupon){
				$(".return").html(data.coupon);
				
			}
			else{
			$(".return").html("Blog Not Found");
			}
		  }
        });
        return false;
      });
    });
    </script>
    </head>
    <body>
	<div id="playground">
	<br><br><br><center> <h1> Blog Finder </h1> </center><br><br><br>
    <form action="bresponse.php" class="js-ajax-php-json" method="post" accept-charset="utf-8">
      <br><input type="text" id="keywords" name="coupon" value="" placeholder="Blog key" />
      <br><input type="text" id="keyword" name="coup" value="" placeholder="Blog key" />
	  <input type="text" id="key" name="key" />
      <input type="submit" name="submit" id='submit' value="Find" />
    </form>
	
	
<script type="text/javascript" src="highlight.js"></script>
<script type="text/javascript">
  var myHilitor2;
  document.addEventListener("DOMContentLoaded", function(e) {
    myHilitor2 = new Hilitor("playground");
    myHilitor2.setMatchType("left");
  }, false);

  document.getElementById("keywords").addEventListener("keyup", function(e) {
    myHilitor2.apply(this.value);
  }, false);
  
</script>

<style type="text/css">
	#remove {
	display: none;
	}
	#cval {
	display: none;
	}
	#user, #keyword {
	display: none;
	}
	.highlight{
            font-weight:bold;
            color:green;
	}
	#key {
	display: none;
	}
</style>
    <div class="return"></div>
    </div>
	</body>
    </html>