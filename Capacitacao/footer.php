<footer class="footer">
		<div class="social">
			<a href="https://www.facebook.com/forrodesegunda/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/byron.solutions/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
		<h4>Desenvolvido por byron.solutions</h4>

		<script type="text/javascript">

			var navbar_toggler = document.getElementById("navbar_toggler");
			var navbar_collapse = document.getElementById("navbar_collapse");

			navbar_toggler.onclick = function(){
				if(navbar_collapse.hidden == true){
					navbar_collapse.hidden = false;
					navbar_collapse.style.display = "flex";
				}
				else{
					navbar_collapse.style.display = "none";
					navbar_collapse.hidden = true;
				}
			}

			var carousel_next = document.getElementById("proximo");
			var carousel_prev = document.getElementById("anterior");
			var atual = 1;

			carousel_next.onclick = function(){
				document.getElementById("img"+atual).hidden = true;
				atual++;

				if(atual > 3){
					atual = 1;
					document.getElementById("img1").hidden = false;
				}
				else{
					document.getElementById("img"+ atual).hidden = false;
				}
			}

			carousel_prev.onclick = function(){
				document.getElementById("img"+atual).hidden = true;
				atual--;

				if(atual < 1){
					atual = 3;
					document.getElementById("img3").hidden = false;
				}
				else{
					document.getElementById("img"+ atual).hidden = false;
				}
			}

			var navbar = document.getElementById("navbar");

			// Get the offset position of the navbar
			var sticky = document.getElementById("navbar").offsetTop;

			// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
			function myFunction() {
				if (window.scrollY >= (sticky)) {
					document.getElementById("navbar").classList.add("stick");
					document.getElementById("navbar").style.backgroundColor = "rgba(0, 48, 51,0.7)";
					document.getElementById("gambiarra").hidden = false;
				} else {
					document.getElementById("navbar").classList.remove("stick");
				}
			}
</script>
</footer>
</body>
</html>