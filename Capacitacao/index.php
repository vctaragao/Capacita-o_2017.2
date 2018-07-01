<?php include("header.php") ?>

	<div id="gambiarra" class="gambiarra" hidden></div>

	<section class="sobre">
		<div id="sobre"></div>
		<h2>O melhor forró do mundo!</h2>
		<h4> O Forró de Segunda é um projeto voluntário que promove aulas e encontros de dança na modalidade forró.</h4>

		<p>O projeto teve seu início em 2012, com alunos da UNIFEI que se juntaram para dançar e trocar experiências dentro da dança. Depois de muito crescer, se tornou um grupo heterogêneo, que se propõe a ensinar forró pra todos que se interessarem, sejam essas pessoas universitárias ou não.

		Com aulas três vezes por semana e muita paixão, o Forró de Segunda te convida a vir dançar e a adentrar essa família enorme na qual se transformou!</p>
	</section>

	<section  class="eventos">
		<div id="eventos"></div>
		<h1>EVENTOS</h1>
		<div class="evento">
			<img src="img/forrónarep-9edição.jpg">
			<h2>FORRÓ NA REP 9ª EDIÇÃO</h2>
			<h3>Nossa classica festa de forró que acontece todo o semestre!! O melhor do open bar com os as bebidas exclusivas da nossa festa: Xote dos Milagres e Xote	 da Alegria!</h3>
		</div>
		<div class="evento">
			<img src="img/IMG_6990.jpg">
			<h2>FORRÓ SEM GENERO</h2>
			<h3>No dia 30/04/2017 alguns de nossos professores deram uma oficina de forró sem gênero no Encontro Regional de Estudantes de Medicina (EREM). Contando com apoio da nossa amiga Letícia de BH. Foi um domingo especial para quem estava presente, um dia pra quebrar todos os tipos de preconceitos, paradigmas e tabus.</h3>
		</div>
		<div class="evento">
			<img src="img/workshop.jpg">
			<h2>WOKSHOP PD - ABRIL 2016</h2>
			<h3>Final de semana maravilhoso que o Rafael Wilker e a Milena, do Pé Descalço, nos proporcionaram!! Muito aprendizado e descrontração! Que venham os próximos!!</h3>
		</div>
	</section>

	<section  class="produtos">
		<div id="nossos_produtos"></div>
		<h1>NOSSOS PRODUTOS</h1>
		<h3>Nós temos uma linha de produtos do Forró de Segunda, compre com a gente e vista essa paixão!!</h3>
		<div class="carousel_background">
			<div id="anterior" class="anterior" role="button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
			<div class="carrosel">
				<img id="img1" src="img/forródesegunda-branca.jpg">
				<img id="img2" src="img/forródesegunda-preta.jpg" hidden>
				<img id="img3" src="img/sacolinha.jpg" hidden>
			</div>
			<div id="proximo" class="proximo" role="button"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
		</div>
		
	</section>

	<section class="contato">
		<div id="contato"></div>
		<h1>CONTATO</h1>
		<form>
			<input type="text" name="nome" placeholder="Nome:" required>
			<input type="text" name="email" placeholder="E-mail:" required>
			<input type="text" name="telefone" placeholder="Telefone:" required>
			<textarea rows="6" placeholder="Mensagem:" required></textarea>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</section>


<?php include("footer.php") ?>