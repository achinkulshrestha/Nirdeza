<?php
//SQL highlighting colors
$sql_color_normal = "black";
$sql_color_comment = "orange";
$sql_color_sql_comment = "darkorange";
$sql_color_values = "darkblue";
$sql_color_fields = "blue";

print "<?xml version=\"1.0\" encoding=\"". $charset ."\"?>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php print $charset; ?>" /> 
	<title>MySQL-Admin <?php print $version ?> | <?php print $lang['title']; ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php print $dir_to_template_files ?>style.css" />
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 7") !== false){ ?>
	<style type="text/css">
		TD[align=center]
		{
			text-align:center;
		}
		TD[align=right]
		{
			text-align:right;
		}
		TD
		{
			text-align:left;
		}
	</style>
	<?php } ?>
</head>
<body <?php if($lang_filename=="left.php"){print "class=\"left\"";}?>>
