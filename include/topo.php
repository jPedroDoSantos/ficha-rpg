



<?php ?>
<nav id="menu-wrap">
   <ul id="menu">
      <li><a href='principal.php' target='corpo'>Home</a></li>
      <li>
         <a href=''>Parâmetros</a>
         <ul>
            <li><a href='?pag=cadusu'>Usuários</a></li>
            <li><a href='?pag=config'>Configurações</a></li>
         </ul>
      </li>   
      <li>
         <a href=''>Cadastros</a>
         <ul>
            <li><a href='?pag=cadgru'>Grupos</a></li>
            <li><a href='?pag=cadpro'>Produtos</a></li>
            <li><a href=''>Personagens</a></li>
            <li><a href='?pag=cadcla'>Classes</a></li>
            <li><a href='?pag=cadrac'>Raças</a>/</li>
         </ul>
      </li>   
      <li><a href='index.php'>Sair</a></li>
   </ul>
</nav> <br> 
<script>
      $(function() {
		   /* Mobile */
		   $('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');		
		   $("#menu-trigger").on("click", function(){
			   $("#menu").slideToggle();
		   });
         $('#menu a').on("click", function (){
            $("#menu").slideUp();
         });
         // iPad
		   var isiPad = navigator.userAgent.match(/iPad/i) != null;
		   if (isiPad) $('#menu ul').addClass('no-transition');      
      });          
   </script>
<?php ?>