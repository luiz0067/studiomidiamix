<script> 
          		
                $(function(){
                        $('#slides').cycle({
                                fx: 'zoom', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                                pager:  '#paginador',
                                speed: 300,
                                timeout: 5000,
                                cleartype: false,
                                pause: true
                        });
                });
        </script> 
		
			<div class="clear" style="height:22px;"></div>
			
            <div id="principal" style="overflow:hidden;">
                <div class="conteudo">
				<div class='conteudoInterno'>
					<p>Destaque:</p>
					<div id="paginador"></div>
				</div>
				<?php include("parceiros.php");?>
                    <div class='conteudoInterno'>
					
                       <div id="slider">
					   
							<div id="slides">
								<img src="./banner_inicial/3.jpg" width="767" height="266" alt="1" />
								<img src="./banner_inicial/banner_7galomotofest.jpg" width="767" height="266" alt="1" />
								<img src="./banner_inicial/31.jpg" width="767" height="266" alt="1" />
								<img src="./banner_inicial/39.jpg" width="767" height="266" alt="1" />
							</div>
							
			
							</div>
						</div>
						
						<!--barra direita-->
						
							
						<div class="conteudoInterno" style="margin-top:14px;"> 
							
							<p>Ultimas Fotos:</p>
							<ul id="listaGaleria" style="margin-top:10px;">
							
								<li class="bgHover" >
									<div class="transparente">
									<a href="./fotos_camiseta.php">
										<img src="./fotos/lancamento_camiseta/59.JPG" width="123" height="112">
									</a>
									</div>
									<div style="background-color:#999999; padding:10px;">
										<div class="data cor" style="margin-top:0px;">Lançamento Camiseta</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">00/00/000</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">98 fotos
											<a href="./fotos_camiseta.php">
										<div class="data cor" style="text-align:right; margin-top:3px;">Ver galeria</div></div>
									</div>
									</a>
								</li>
								<li class="bgHover" >
									<div class="transparente">
										<a href="./fotos_almoco_menino_deus.php">
										<img src="./fotos/almoco_menino_deus/42.JPG" width="123" height="112">
									</a>
									</div>
									<div style="background-color:#999999; padding:10px;">
										<div class="data cor" style="margin-top:0px;">Almoço Menino Deus</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">00/00/000</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">80 fotos
											<a href="./fotos_almoco_menino_deus.php">
										<div class="data cor" style="text-align:right; margin-top:3px;">Ver galeria</div></div>
									</div>
									</a>
								</li>
							<li class="bgHover">
									<div class="transparente">
									<a href="./fotos_7galo.php">
										<img src="./fotos/7galo/27.JPG" width="123" height="112">
									</a>
									</div>
									<div style="background-color:#999999; padding:10px;">
										<div class="data cor" style="margin-top:0px;">7 Galo</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">00/00/000</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">70 fotos
											<a href="./fotos_7galo.php">
										<div class="data cor" style="text-align:right; margin-top:3px;">Ver galeria</div></div>
									</div>
								</li>
							<li class="bgHover">
									<div class="transparente">
									<a href="./fotos_almoco.php">
										<img src="./fotos/almoco/73.JPG" width="123" height="112">
									</a>
									</div>
									<div style="background-color:#999999; padding:10px;">
										<div class="data cor" style="margin-top:0px;">Almoço</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">00/00/000</div>
										<div class="data cor" style="text-align:left; margin-top:3px;">20 fotos
											<a href="./fotos_almoco.php">
										<div class="data cor" style="text-align:right; margin-top:3px;">Ver galeria</div></div>
									</div>
								</li>
							<li class="bgHover" >
								<div class="transparente">
								<a href="?">
									<img src="./banner_inicial/3.jpg" width="123" height="112">
								</a>
								</div>
								<div style="background-color:#999999; padding:10px;">
									<div class="data cor" style="margin-top:0px;">Galeria vazia</div>
									<div class="data cor" style="text-align:left; margin-top:3px;">00/00/00</div>
									<div class="data cor" style="text-align:left; margin-top:3px;">0 fotos
										<a href="?">
									<div class="data cor" style="text-align:right; margin-top:3px;">Ver galeria</div></div>
								</div>
								</a>
							</li>
						</ul>
						
							<div class="conteudoInterno" style="margin-top:40px;"> 
								<p>Ultimas Notícias:</p>
								<div class="ultimas_noticias" style="margin-top:10px;">
								<a href="./noticias.php">Notícias</a><br>
								
								
								<a href="./noticias.php"><div class="data cor" style=" margin-top:3px;">Ver todas</a></div>
								</div>
							</div>
						</div>
						
			</div>
					
			</div>