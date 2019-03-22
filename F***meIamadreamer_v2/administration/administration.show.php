

 <!-- -------------------------------------- -->
 
<!--  ----------------------  -->
<!-- |    PAGE 5 : SHOWS    | -->
<!--  ----------------------  -->

		<!-- Titre page -->
	<?php
	$titrePage1 = "SHOWS";
	?>

		<!-- Présentation -->
	<?php
	$image = "../images/images_shows/shows.png";
	$titrecategorie = "Shows";
	$description ="We've imagined the events you've always wanted to see and the shows you're dreaming about. Just be ready to be entertained...";
	?>

		<!-- Cards -->
	<?php
		// tableau = titre  image  decription  prix  moreinfoimage   moreinfotext 
            $productsshow = [
                "CABARET DE PARIS" => ["../images/images_shows/cabaret.jpg","Choose your favorite 'Revue de Cabaret' and we'll organize it to your living room ! Lorem ipsum dolor sit amet, consectetur adipiscing elit.","3,500.00$","../images/images_shows/cabaret_details.jpg","Once in your life you'll be transported by the incredible sensation of dreaming awake ! With a complete transformation of your interior or outdoor, we will offer you a cabaret night at home !"],

                "FIREWORKS" => ["../images/images_shows/fireworks.jpeg","Some fireworks whirl in a spiral, others shatter into thousands of multicolor sparks, some tumble like a scarlet waterfall or float in a glittering silver shower...","1,500.$","../images/images_shows/fireworks_eiffel_tower.gif","We study each Dream to create a unique show with a wide range of fireworks. Each fire is realized by our artistic director for 5 to 30 minutes. "],

                "UNDERWATER SHOW" => ["../images/images_shows/underwater.jpg","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.","250.00$","../images/exotic fishes from Thailand-Bay","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor."],

                "WCS HACKATHON" => ["../images/images_shows/hackathon.jpg","Go to the next Wild World Hackathon Tour ! Build products, practice skills, learn languages and technologies, win prizes, and grow your own Dreams.","0.00$","../images/images_shows/hackathon_details.png","You'll need a sleeping bag, a coffe cup and probably your favorite toothbrush !"],

                "CONCERT VIP" => ["../images/images_shows/concert.jpg","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.","200.00$","../images/images_shows/concert_details.jpg","Discover your VIP pass to live an unique Concert experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus."],

                "OLYMPIC GAMES VIP" => ["../images/images_shows/olympic.jpg","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.","399.00$","../images/images_shows/olympic_details.jpg","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor."],

            ];
        ?>



