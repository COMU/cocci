<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta charset="utf-8" />
	<meta name="description" content="coccinelle yaması oluşturan web sayfasıdır">
	<meta name="keywords" content="cocci,coccinelle,patch">
	<meta name="author" content="yeliztaneroglu,melikeyurtoglu">
	<link rel="shortcut icon" href="http://bebefaismoisigne.com/wp-content/uploads/2013/03/coccinelle-rouge.jpg">
	<title>Coccinelle</title>
	<style>
		body {
                color: blue;
		font-family: Verdana;
		font-size: 20px;
		font-weight: bold;
		text-align: center;
		background:white;

		}

		.button {
			text-decoration: none;
			color: #fff;
			padding: 8px 10px;
			font:bold 2px  Tahoma, Geneva, sans-serif;
			border-radius: 10px;
			background-color: #808080 ;
			box-shadow: 0 5px 5px #313131, 0 9px 0 #393939, 0px 9px 10px rgba(0,0,0,0.4), inset 0px 2px 9px rgba(255,255,255,0.2), inset 0 -2px 9px rgba(0,0,0,0.2);
			position: relative;
			border-bottom: 1px solid rgba(255,255,255,0.2);
			display: inline-block;
			text-shadow: 0px -1px 0px rgba(0,0,0,0.2);
			margin-bottom: 3px;
			margin-right: 2px;
			}
 
		a{
			color:darkblue;
			text-decoration:none;
			font:bold;
		} 
		a:hover{
			color:#660000
		}
		a:focus{
			color:#CC6666
		}
		.change-color:focus {
    		background-color: gainsboro;
		box-shadow: 0 0 5px black inset,0 0 5px 2px black;
		overflow: auto;
		resize: none;
				}
		.button:hover{
			opacity: 1;
			cursor: pointer;
			box-shadow: 0 5px 5px #313131, 0 9px 0 #393939, 0px 9px 10px rgba(0,0,0,0.4), inset 0px 2px 15px rgba(255,255,255,0.4), inset 0 -2px 9px rgba(0,0,0,0.2);
			transition: background-color.3s linear;
			transform: scale(1.3);
        		-webkit-transform: scale(1.3);
			}
		.button:active {
			top: 7px;
			box-shadow: 0 2px 0 #393939, 0px 4px 4px rgba(0,0,0,0.4), inset 0px 2px 5px rgba(0,0,0,0.2);
		}	

		
	</style>
	</head>

	<body>


		<h1 align="center" style="color:red;text-shadow: 1px 1px 4px black;"><i>Coccinelle </i></h1>
	<p></p>
	<!--<img src="http://img.webme.com/pic/u/uqurboceqim/aaa.jpg" alt="coccinelle" width="50" height="50"/> <br> -->
	
<table broder="0" width="100%" cellpadding="0">
<tr>
<td width="50%" valing="top">
<form>
	<fieldset>
		<legend style="text-shadow: 1px 1px 4px ;"><a href="http://coccinelle.lip6.fr/" target=”_blank” title="Coccinelle Home" >Please enter the script here</a></legend>
		<label></label><textarea class="change-color"style="border: 3px  solid black;font-family: Verdana;
		font-size: 20px; " rows="10" cols="30"></textarea> <br/><br/>
	
	</fieldset>

</form>
</td>
<td width="50%" valign="top">
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<img style="width: 60px; height: 60px;" src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-9/256/open-file-icon.png"/>
	<center><form action="yukle.php" method="post" enctype="multipart/form-data">
		<h1>UPLOAD</h1>
		<p><input type="file" class="button" style="font-size: 15px;font-weight: bold;" name="dosya" /></p>
		<input type="submit" value="Upload The File" />
						</form></center>





</td>

<table><br/>

	<input class="button"style="font-size: 15px;
		font-weight: bold;"type="button" value="Run"/>
</table>
<br/>
<table broder="0" width="100%" cellpadding="10" >
<tr>
<td width="50%" valing="top">
<form>
	<fieldset>
		<legend style="text-shadow: 1px 1px 4px darkblue;">Patch output</legend>
		<label></label><textarea class="change-color"style="border: 3px  solid black;font-family: Verdana;
		font-size: 20px;" rows="10" cols="30"></textarea> <br/><br/>
	</fieldset>

</form>
</td>
<td width="50%" valign="top">
<br/><br/><br/><br/><br/><br/>
	<img style="width: 60px; height: 60px;" src="https://cdn0.iconfinder.com/data/icons/Folder_Icons_akkasone/256/Downloads-Folder-Icon.png"/>
	<center><input  class="button"style="font-size: 15px;
		font-weight: bold;"type="button" value="Download"/></center></a>
</td>
<table>
<div>
<footer>
    <address>
<br/><br/><br/><br/><br/><br/><br/>
        <small>2014 |   | ↄ⃝<br>
    </address>
</footer>
</div>
</table>
</body>
</html> 
