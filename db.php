<?php
include "lib/lastdate.php";
include "lib/dbconnect.php";
include "lib/fx.php";

        $post_code 				= addslashes($_POST['post_code']);
	$dept	 				= addslashes($_POST['dept']);
	$name 					= addslashes($_POST['name']);
	

$out_post = mysql_query("SELECT `post_name` FROM `post`
										WHERE `post_code` = '$post_code'");
				while($post_name = mysql_fetch_array($out_post))
				{
					extract($post_row);
				}
				
           $post_name = "$post_name";


<?php echo "The post Name: $post_name";


?>
</body>
</html>
