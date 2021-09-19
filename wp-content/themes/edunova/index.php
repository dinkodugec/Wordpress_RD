<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div id="divContentSection1Wrap">
		<div id="divContentSection1">
			<ul class="listBoxStyle1">
				<li class="gridCol3">
					<h2>Prva box stavka</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut .</p>
					<a href="#">Više</a>
				</li>
				<li class="gridCol3 listBoxStyle1Featured">
					<h2>Druga box stavka</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut .</p>
					<a href="#">Više</a>
				</li>
				<li class="gridCol3 gridLastItem">
					<h2>Treća box stavka</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut .</p>
					<a href="#">Više</a>
				</li>
			</ul>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divContentSection1Wrap -->
	<div id="divContentSection2Wrap">
		<div id="divContentSection2">
			<h1 class="SectionTitle1">Javascript funkcija i event</h1>
			<div class="divJsTest">
				<ul>
					<li onclick="ispis('Varijable mogu biti lokalne i globalne','Varijable primaju različite tipove podataka i imaju različiti scope')">Varijable</li>
					<li onclick="ispis('Najpoznatiji tipovi podataka','Integer, String, Array, Date, Decimal, Boolean')">Tipovi podataka</li>
					<li onmouseover="ispis('Tipovi operatora','Aritmetički, Logički...')">Operatori</li>
					<li>Petlje</li>
					<li>Uvjeti</li>
				</ul>
				<div id="divRez">
					<h2>Ovo je neki naslov</h2>
					<p>Ovo je neki odlomak</p>
				</div>
				<script type="text/javascript">
					function ispis(naslov,opis){
						document.getElementById('divRez').innerHTML = '<h2 class="testKlasa">'+naslov+'</h2><p>'+opis+'</p>';
					}
				</script>
				<h1 class="SectionTitle1">Javascript kontrola obrazci</h1>
				<form id="obrazac1" method="get" action="">
					<p>
						<label for="txt1">Polje 1</label>
						<input id="txt1" name="txt1" type="text" value="Neka vrijednost" onfocus="if(this.value != '') this.value = ''">
					</p>
					<p>
						<label for="txt2">Polje 2</label>
						<input id="txt2" name="txt2" type="text" value="">
					</p>
					<p><input id="btt1" name="btt1" type="button" value="Izračun" onclick="izracun()"></p>
					<div id="divRez2"></div>
					<script type="text/javascript">
						function izracun(){
							var txt1 = document.getElementById('txt1').value;
							var txt2 = document.getElementById('txt2').value;
							var rez = parseInt(txt1) + parseInt(txt2);
							if(rez > 20){
								document.getElementById('divRez2').style.backgroundColor='red';
							}else{
								document.getElementById('divRez2').style.backgroundColor='#c3c3c3';
							}
							document.getElementById('divRez2').innerHTML = rez;
						}
					</script>
				</form>
			</div>
		</div>
	</div><!-- end #divContentSection2Wrap -->
	<div id="divContentSection3Wrap">
		<div id="divContentSection3">
			<h1 class="SectionTitle1">Istaknute novosti</h1>
         <?php
	          $counter = 1;
              while (have_posts()):
                 the_posts();
         ?>


			<div class="gridCol3 <?php if($counter%3==0) echo 'gridLastitem'; ?>">
			<?php if ( has_post_thumbnail() ) : ?>
             <?php the_post_thumbnail(); ?>
                <?php else: ?>
				<img src="https://via.placeholder.com/350">
	   
            <?php endif; ?>
				<h2><?php the_title(); ?></h2>
				<div><?php the_excerpt(); ?></div>
				<a href="<?php the_permalink(); ?>" >Procitajte više</a>
			</div>
			  <?php endwhile; ?>
			<div style="clear: both;"></div>
		</div>

<?php get_footer(); ?>
