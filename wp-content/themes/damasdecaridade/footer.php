<footer>
		<div class="footer-links">
			<div class="footer-tit">ADAC</div>
			<?php if (has_nav_menu('TOPO')) wp_page_menu( 'sort_column=menu_order' ); else wp_nav_menu(); ?>
		</div>
		<div class="footer-info">
			<div class="footer-tit">Contamos com Você</div>Pedimos a sua a atenção a nossa questão, através da contribuição em mãos de equentosipam, alimento não perecível, roupas, brinquedos e doações em dinheiro, depósito em conta e vindo conhecer a associação presencialmente ou ainda pelo PagSeguro através do link abaixo.<br><br> <center><!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post" target="_blank">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="currency" value="BRL" />
<input type="hidden" name="receiverEmail" value="adac.org@gmail.com" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="<?php bloginfo('template_directory'); ?>/img/logo-pagseguro.png" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" width="80" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO --></center>
		</div>
		<div class="footer-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.817211465531!2d-48.55077198494029!3d-27.59919608283691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9527383ab27df7d9%3A0x810d28c768915549!2sR.+Tiradentes%2C+175+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88010-430!5e0!3m2!1spt-BR!2sbr!4v1501103341659" height="199" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="footer-endereco"><b>Associação das Damas de Caridade de Florianópolis</b><br>Endereço: R. Tiradentes, 175 - Centro<br>Florianópolis - SC, 88010-430<br>
Telefone: (48) 3025-2324</div>
	</footer>

	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b8f1d85a0429dd"></script> 

	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
	$.noConflict();
	// Code that uses other library's $ can follow here.
	</script>
	<script src="<?php bloginfo('template_directory'); ?>/vendor/fancybox/jquery.fancybox.min.js"></script>
	<script type="text/javascript">
		jQuery(".texto-internas a img").parent().addClass("fancybox");
		jQuery(".fancybox").attr("data-fancybox", "group");
		jQuery(".fancybox").fancybox({
			toolbar  : false,
			smallBtn : true,
			loop: true
		}); 
	</script>

</body>
</html>