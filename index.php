<?

class Site{
	function Site($name, $year, $link){
		$this->name = $name;
		$this->year = $year;
		$this->link = $link;
	}
}

$sites = array(
	new Site('13AMP', '2001', '13amp'),
	new Site('Datachip', '2001', 'datachip'),
	new Site('Powerpoint', '2001', 'powerpoint'),
	new Site('Antoni+Alison', '2001', 'aa'),
	new Site('Motorway', '2000', 'motorway'),
	new Site('Playground', '2000', 'playground'),
	new Site('Kraftwerk', '2000', 'waschmaschine'),
	new Site('Get Jet Set', '1998', 'getjetset'),
	
);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Friendchip</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Kip Parker">
	<!-- Date: 2009-09-18 -->
	<style type="text/css" media="screen">
		#container{
			width:600px;
			margin:auto;
		}
		body{
			font-family: Geneva, Arial, sans;
			font-size:12px;
			margin-top:50px;
		}
		dl{
			width:600px;
			display:block;
			clear:left;
		}
		dt, dd{
			width:260px;
			padding:2px;
			padding-left:10px;
			margin:10px;
			
			
			background-color:#ffffcc;
			float:left;
		}
		
		a{
			text-decoration:none;
			color:black;
			display:block;
			width:260px;
		}
		
	</style>
	<script src="media/system_scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("dd").hide();
		$("dt a").mouseover(function(){
			$(this).parent().next().show();
		});
		$("dt a").mouseout(function(){
			$(this).parent().next().hide();
		});
	});
	</script>
</head>
<body>
	<div id="container">
<?
foreach($sites as $site){
	?>
	<dl>
		<dt><a href="<?=$site->link?>"><?=$site->name?></a></dt>
		<dd><?=$site->year?></dd>
	</dl>
	
	<?
}
?>
	<dl>
		<dt><a href="mailto:kontakt@friendchip.com">Kontakt</a></dt>
		<dd>@friendchip.com</dd>
	</dl>
</div>
</body>
</html>
