<?php
	include('./adm/conecta.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empresa</title>
<meta name="description" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações."/>
<meta name="classification" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações."/>
<meta name="keywords" content="Studio Midia Mix : Comunicação interativa, Web sites, Design Gráfico, Desenvolvimento 3D, Illustrações. Sites em toledo, empresa de sites toledo, Jhonathan Kern, Wilson Nunes />
Patricia Lunkes, maquete em toledo, design em toledo, 3d em toledo, w10 comunicacao, sites bons "/>
<meta name="author" content="Studio Midia Mix - http://www.studiomidiamix.com.br" />
<meta name="title" content="Studio Midia Mix Comunicação Interativa" />
<meta name="resource-type" content="document" />
<meta name="robots" content="all" />
<meta name="language" content="pt-br" />
<meta name="doc-class" content="completed" />
<meta name="doc-rights" content="Public" />
<meta name="geo.placename" content="Toledo, Parana, Brazil" />
<meta name="geo.region" content="br-pr" />
<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico" />
<link rel="icon" type="image/png" href="imagens/favicon.png" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" />


<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
	<script src="lightbox/js/prototype.js" type="text/javascript"></script>
	<script src="lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="lightbox/js/lightbox.js" type="text/javascript"></script>




<style type="text/css">
body {
	margin-top:0px;
	margin-left:0px;
	margin-bottom:0px;
	margin-right:0px;
	width:100%;
	height:100%;
}
</style>
        <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
        <script type="text/javascript">
            function MM_preloadImages() { //v3.0
              var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
            }
        </script>
</head>

        <!------------------------------------------topo---------------------------------------------->
       
       <center>
        <?php include("topo.php"); ?>
        <!------------------------------------------topo---------------------------------------------->
        <body>
<div class="center" style="height:498px;">
<div class="branco" style="height:498px; width:876px; float:left;">
 
    <div class="branco" style="height:284px; width:876px; float:left;">
              <div class="branco" style="width:429px; height:284px; font-family:Verdana, Geneva, sans-serif; font-size:14px; line-height:150%; text-align:justify; color:#666666;"> <br>
					
							<?php
							$sql	= "SELECT codigo,nome,conteudo,data_inicio,data_fim FROM paginas where (nome='empresa') and (data_fim is null) order by data_inicio desc";
							//echo $sql;
							$result = mysql_query($sql, $link);
							if($result!=null){
								$row = mysql_fetch_assoc($result);
								$conteudo=$row["conteudo"];
								echo $conteudo;
							}
					?>
				</div>
              <div class="branco" style="width:447px; height:284px;">
        <div class="branco" style="width:23px; height:284px;"></div>
        
        <div class="branco" style="width:424px; height:284px;">
          
          	<object id="desenhado" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="424" height="284">
            <param name="movie" value="flashswf/midiamixdesenhado.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="7.0.70.0" />
            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="flashswf/midiamixdesenhado.swf" width="424" height="284">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="7.0.70.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object>
          
        </div>
      </div>
            </div>
  </div>
        </div>
</div>
</body>
</html>
<?php
	include('./adm/rodape.php');
?>
</center>