<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="icofont/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Site</title>
</head>
<body>
		<div class="container">
				<nav style="text-align:center">
					<h2 class="logo">TECNOLOGIA S.A</h2>
					<a href="#">Clientes</a>
					<a href="#">Quem somos</a>
					<a href="#">De onde somos</a>
					<a href="#">Carreira</a>
					<a href="#">Fale conosco</a>
					<a href="#">Impressa</a>
					<i class="icofont-facebook"></i>
					<i class="icofont-instagram"></i>
					<i class="icofont-linkedin"></i>
					<input type="text" name="textbusca" placeholder="Buscar...">
					<i class="icofont-search"></i>
				</nav>
		</div>
			<h2 style="text-align:center">Tecnologia para o Brasil</h2>
				<div class="cccontainer">
					<!-- <img class="mySlides" src="img/tec1.png"> -->
					<img class="mySlides" src="img/tec2.jpg">
					<img class="mySlides" src="img/tec3.jpg">
				</div>
					<script>
						var myIndex = 0;
						carousel();

						function carousel() {
						  var i;
						  var x = document.getElementsByClassName("mySlides");
						  for (i = 0; i < x.length; i++) {
						    x[i].style.display = "none";  
						  }
						  myIndex++;
						  if (myIndex > x.length) {myIndex = 1}    
						  x[myIndex-1].style.display = "block";  
						  setTimeout(carousel, 2000); // Change image every 2 seconds
						}
					</script>
		<h2 >Quem somos</h2>
		<p align="justfy">
			A personalidade dinâmica e versátil, aliada aos valores sólidos em ética e respeito, a trazem até o momento que a Companhia vive hoje: diversificação de negócios. Fazem parte do portfólio computadores, celulares, servidores, tablets, acessórios, soluções para casas e escritórios inteligentes, além de tecnologias educacionais.


Diversificação de produtos: fazem parte de seu porfolio computadores, celulares, tablets, servidores, dispositivos para casas e escritórios inteligentes, além de tecnologias educacionais para escolas de mais de 40 países.


Expansão geográfica: a atuação internacional compreendeu a exportação de tecnologia educacional até 2010. Foi quando levar dispositivos para outros países tornou-se viável e, com entusiasmo e garra, começou a expandir operações para outros países. Tem presença na Argentina, Ruanda, Quênia, China e Taiwan.


Marcas e negócios: tecnologia, inovação, agilidade e adaptação para alcançar específicos público e mercado. Pensadas cuidadosamente para cada perfil de consumo, as marcas e áreas de negócios Positivo, Vaio, Compaq, Positivo Casa Inteligente, Anker, 2 A.M., Positivo Servers & Solutions, Quantum e Educacional, assim como a Positivo BGH - nossa joint venture na Argentina, carregam a história de sucesso e empreendedorismo que vislumbra expansão e diversificação da trajetória. A amplitude de soluções e segmentos de atuação garante o status de companhia multimarca e possibilita trabalhar com a complementaridade de portfolio para atender a todos os perfis de clientes. O pioneirismo que acompanha a Positivo Tecnologia desde a fundação permeia o dia a dia de todo o time. A Companhia segue trabalhando fortemente em busca de inovação constante para que a tecnologia seja utilizada para tornar a vida melhor e mais inteligente.
		</p>
		<footer id="footrs">
			<img src="img/tecn1.jpg">
			<img src="img/tecn2.jpg"><br>
			<a href="">Termos de uso</a>|<a href="">Privacidade</a>
			<p>Desenvolvido por Gabriel</p>
		</footer>
</body>
</html>