<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> <?= $title ?? 'Sobirjonov Shoxjaxon'; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="assets/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->


<script>
  PositionX = 100;
  PositionY = 100;
  defaultWidth  = 500;
  defaultHeight = 500;
  var AutoClose = true;
  if (parseInt(navigator.appVersion.charAt(0))>=4){
  var isNN=(navigator.appName=="Netscape")?1:0;
  var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
  var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
  var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
  function popImage(imageURL,imageTitle){
  if (isNN){imgWin=window.open('about:blank','',optNN);}
  if (isIE){imgWin=window.open('about:blank','',optIE);}
  with (imgWin.document){
  writeln('<html><head><title>Loading...</title><style>body{margin:0px;}</style>');writeln('<sc'+'ript>');
  writeln('var isNN,isIE;');writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
  writeln('isNN=(navigator.appName=="Netscape")?1:0;');writeln('isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
  writeln('function reSizeToImage(){');writeln('if (isIE){');writeln('window.resizeTo(300,300);');
  writeln('width=300-(document.body.clientWidth-document.images[0].width);');
  writeln('height=300-(document.body.clientHeight-document.images[0].height);');
  writeln('window.resizeTo(width,height);}');writeln('if (isNN){');       
  writeln('window.innerWidth=document.images["George"].width;');writeln('window.innerHeight=document.images["George"].height;}}');
  writeln('function doTitle(){document.title="'+imageTitle+'";}');writeln('</sc'+'ript>');
  if (!AutoClose) writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()">')
  else writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()" onblur="self.close()">');
  writeln('<img name="George" src='+imageURL+' style="display:block"></body></html>');
  close();		
  }}
</script>

</head>
<body>

<div id="main_container">

  <div id="header">
    <div class="top_right">
      <div class="languages">
        <div class="lang_text">Languages:</div>
       
        <a href="#" class="lang"><img src="assets/images/en.gif" alt=""  /></a> <a href="#" class="lang"><img src="assets/images/de.gif" alt=""  /></a> </div>
      <div class="big_banner"> <a href="#"><img src="assets/images/banner728.jpg" alt=""  /></a> </div>
    </div>
    <div id="logo"> <a href="#"><img src="assets/images/logo.png" alt=""  width="182" height="85" /></a> </div>
  </div>

