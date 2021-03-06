<?php
	$mode = 'dev';
	
	function mediaURLConv($path){
		global $mode;
		if ($mode == 'dev'){
			$src = $path;
		}
		else if ($mode == 'prod'){
			$src = '{{media url=\'cms/brandpages/willowlark/' . $path . '\'}}';
		}
		else if ($mode != 'dev' && $mode != 'prod'){
			$src = 'something/went/wrong';
		}
		//Switch environment
		return $src;
	}
?>
<?php if($mode == 'dev'){?>
<!DOCTYPE html>
<html>
	<head>
		<?php } ?>
		<link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<?php if($mode == 'dev'){?>
		<link rel="stylesheet" type="text/css" href="<?php echo mediaURLConv('css/main_dev.min.css')?>">
		<script src="<?php echo mediaURLConv('js/jquery-3.2.1.min.js')?>"></script>
		<?php } else { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo mediaURLConv('css/main.min.css')?>">
		<?php } ?>
		<script src="<?php echo mediaURLConv('js/jquery.waypoints.min.js')?>"></script>
		<script src="<?php echo mediaURLConv('js/sticky.min.js')?>"></script>
		<script src="<?php echo mediaURLConv('js/script.js')?>"></script>
		<title>Willow &amp; Lark</title>
		<?php if($mode == 'dev'){?>
	</head>
	<body class="brandwrap">
		<?php } else if ($mode=='prod'){ ?>
		<div class="brandwrap">
			<?php } ?>
			<div class="brandHero section" id="story">
				<div class="container">
					<div class="row">
						<div class="brandHero--wrapper col-sm-4 col-xs-12">
							<div class="brandHero--logo">
								<img src="<?php echo mediaURLConv('img/wandl-logo-lite.svg')?>" height="100"/>
							</div>
							<p class="brandHero--description hidden-xs hidden-sm">
								Willow &amp; Lark is a new yarn brand celebrating beautifully British design.
								From colours inspired by Britain's natural landscapes, to the quality and quirky touches of British design at its best,
								we've paid attention to every detail so your Willow &amp; Lark projects are always a joy to work with, wear and give.
							</p>
						</div>
					</div>
				</div>
				<div class="brandHero--scroll hidden-xs">
					<a href="#ramble"><div class="bounce"><img src="<?php echo mediaURLConv('img/chevron-down.svg')?>" /></div>
					<span>Scroll To Explore</span></a>
				</div>
			</div>
			<div class="brandCollections">
				<div class="container">
					<div class="row">
						<div id="brandNav--wrap" class="col-md-2 hidden-xs hidden-sm">
							<div class="brandNav">
								<div class="brandNav--logo">
									<img src="<?php echo mediaURLConv('img/wandl-logo-full.svg')?>" />
								</div>
								<ul class="brandNav--nav">
									<li class="selected"><a href="#story">Story</a></li>
									<li><a href="#ramble">Ramble</a></li>
									<li><a href="#plume">Plume</a></li>
									<li><a href="#nest">Nest</a></li>
									<li><a href="#woodland">Woodland</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
									<p class="brandCollection--description visible-sm">
										Willow &amp; Lark is a new yarn brand celebrating beautifully British design.
										From colours inspired by Britain's natural landscapes, to the quality and quirky touches of British design at its best,
										we've paid attention to every detail so your Willow &amp; Lark projects are always a joy to work with, wear and give.
									</p>
								</div>
							</div>
							
							<!--Collection 1-->
							<div class="separator hidden-xs"></div>
							<div class="brandCollection section" id="ramble">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
										<div class="brandCollection--range">A really splendid superwash wool</div>
										<div class="brandCollection--title">Ramble</div>
										<p class="brandCollection--description hidden-sm hidden-xs">
											You can't beat a really splendid wool to keep you warm on crisp autumn walks in the countryside. We've tested and retested Ramble to find the perfect blend of twist and weight to create a hard-wearing fibre with great stitch definition, in a rainbow of classic, weather-beaten colours.<br/><br/>
											Over to you for final testing - blustery days, wellies and cup of tea at the ready.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<a href="https://www.loveknitting.com/willow-lark-ramble" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/collection_yarn_ramble.jpg')?>" />
											</div>
											<div class="brandTile--hover disableHover">
												<p class="brandTile--description">
												</p>
												<div class="brandTile--actions hidden-sm hidden-xs">
													<div class="btn btn-primary">Shop Ramble yarn</div>
												</div>
											</div>
										</a>
										<div class="brandFullColTile--name"><span>wool, wool and more wool </span><span class="blend">100% Merino Wool / DK / 125m / 50g </span></div>
										<div class="brandTile--colours ramble">
											<div class="yarnColour" id="ram-colour1"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139464"></a></div>
											<div class="yarnColour" id="ram-colour2"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139465"></a></div>
											<div class="yarnColour" id="ram-colour3"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139466"></a></div>
											<div class="yarnColour" id="ram-colour4"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139467"></a></div>
											<div class="yarnColour" id="ram-colour5"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139468"></a></div>
											<div class="yarnColour" id="ram-colour6"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139469"></a></div>
											<div class="yarnColour" id="ram-colour7"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139476"></a></div>
											<div class="yarnColour" id="ram-colour8"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139477"></a></div>
											<div class="yarnColour" id="ram-colour9"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139478"></a></div>
											<div class="yarnColour" id="ram-colour10"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139492"></a></div>
											<div class="yarnColour" id="ram-colour11"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139472"></a></div>
											<div class="yarnColour" id="ram-colour12"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139471"></a></div>
											<div class="yarnColour" id="ram-colour13"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139479"></a></div>
											<div class="yarnColour" id="ram-colour14"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139470"></a></div>
											<div class="yarnColour" id="ram-colour15"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139480"></a></div>
											<div class="yarnColour" id="ram-colour16"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139481"></a></div>
											<div class="yarnColour" id="ram-colour17"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139482"></a></div>
											<div class="yarnColour" id="ram-colour18"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139483"></a></div>
											<div class="yarnColour" id="ram-colour19"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139485"></a></div>
											<div class="yarnColour" id="ram-colour20"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139484"></a></div>
											<div class="yarnColour" id="ram-colour21"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139486"></a></div>
											<div class="yarnColour" id="ram-colour22"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139487"></a></div>
											<div class="yarnColour" id="ram-colour23"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139488"></a></div>
											<div class="yarnColour" id="ram-colour24"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139489"></a></div>
											<div class="yarnColour" id="ram-colour25"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139490"></a></div>
											<div class="yarnColour" id="ram-colour26"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139475"></a></div>
											<div class="yarnColour" id="ram-colour27"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139474"></a></div>
											<div class="yarnColour" id="ram-colour28"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139473"></a></div>
											<div class="yarnColour" id="ram-colour29"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139493"></a></div>
											<div class="yarnColour" id="ram-colour30"><a class="divLink" href="https://www.loveknitting.com/willow-lark-ramble?sku=10139491"></a></div>
										</div>
										<a href="https://www.loveknitting.com/willow-lark-ramble" class="brandTile--cta btn btn-primary">
											Shop Ramble yarn
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/catherine-cardigan-in-willow-lark-ramble" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/ramble-tile1.jpg')?>"/>
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The batwing Catherine cardigan makes a dramatic statement with its mix of two cables on the body and a lovely scarf-like neck band featuring a bold, diagonal cable stitch.  For a subtler impact, try knitting Catherine in a single colour.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Catherine Cardigan</div>
										<a href="https://www.loveknitting.com/catherine-cardigan-in-willow-lark-ramble" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/edward-jumper-in-willow-lark-ramble" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/ramble-tile2.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The unisex Edward jumper is a modern take on a classic fairisle design, offering both men and women a comfortable, stylish knit that's equally at home around town or on a family jaunt in the country.
													Get the Edward Jumper Pattern
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Edward Jumper</div>
										<a href="https://www.loveknitting.com/edward-jumper-in-willow-lark-ramble" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/josephine-cowl-in-willow-lark-ramble" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/ramble-tile3.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The Josephine cowl will create an elegant, practical finishing touch to any outfit. By combining slip stitch, cabling and lace stitch, the design creates a whimsical and elegant cowl full of texture and interest.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Josephine Cowl</div>
										<a href="https://www.loveknitting.com/josephine-cowl-in-willow-lark-ramble" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/victoria-jumper-in-willow-lark-ramble" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/ramble-tile4.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">For picnics come rain or shine, the pretty and charming Victoria jumper is perfect slipped in your bag with a flask of tea and umbrella. A turtle neck, designed in a wide comfortable fit, the design features a deep Sandstorm cable producing an interesting undulating pattern of ripples.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Victoria Jumper</div>
										<a href="https://www.loveknitting.com/victoria-jumper-in-willow-lark-ramble" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
								</div>
								<div class="row exploreAll">
									<a href="https://www.loveknitting.com/willow-and-lark-knitting-patterns">
										<div class="btn btn-secondary">View all patterns of Willow & Lark</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Collection 2-->
			<div class="brandCollections section" id="plume">
				<div class="container">
					<div class="row">
						<div class="col-md-2 hidden-xs hidden-sm">
						</div>
						<div class="col-md-10">
							
							<div class="separator"></div>
							<div class="brandCollection">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
										<div class="brandCollection--range">Barely-there silk-mohair</div>
										<div class="brandCollection--title">Plume</div>
										<p class="brandCollection--description hidden-xs">
											If lazy, hazy summer days are your thing, Plume is the yarn for you.  A soft silk-mohair mix in elegant, romantic colours, Plume's fine, delicate twist creates shawls and lace with a
											barely-there quality and wonderful drape.<br/><br/>
											For something a little bit different, Plume plies beautifully with either Nest or Woodland to create a lovely, unexpected halo effect.  The perfect cover-up for strawberries and cream moments where only the champagne is chilled.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<a href="https://www.loveknitting.com/willow-lark-plume" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/collection_yarn_plume.jpg')?>" />
											</div>
											<div class="brandTile--hover disableHover">
												<p class="brandTile--description">
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Shop Plume yarn</div>
												</div>
											</div>
										</a>
										<div class="brandFullColTile--name"><span>A mix of mulberry silk &amp; super kid mohair</span><span class="blend">70% Mohair, 30% Silk / Lace / 210m / 25g</span></div>
										<div class="brandTile--colours plume">
											<div class="yarnColour" id="plu-colour1"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140450"></a></div>
											<div class="yarnColour" id="plu-colour2"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140451"></a></div>
											<div class="yarnColour" id="plu-colour3"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140452"></a></div>
											<div class="yarnColour" id="plu-colour4"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140453"></a></div>
											<div class="yarnColour" id="plu-colour5"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140454"></a></div>
											<div class="yarnColour" id="plu-colour6"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140455"></a></div>
											<div class="yarnColour" id="plu-colour7"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140457"></a></div>
											<div class="yarnColour" id="plu-colour8"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140456"></a></div>
											<div class="yarnColour" id="plu-colour9"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140458"></a></div>
											<div class="yarnColour" id="plu-colour10"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140459"></a></div>
											<div class="yarnColour" id="plu-colour11"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140460"></a></div>
											<div class="yarnColour" id="plu-colour12"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140461"></a></div>
											<div class="yarnColour" id="plu-colour13"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140462"></a></div>
											<div class="yarnColour" id="plu-colour14"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140463"></a></div>
											<div class="yarnColour" id="plu-colour15"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140464"></a></div>
											<div class="yarnColour" id="plu-colour16"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140465"></a></div>
											<div class="yarnColour" id="plu-colour17"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140466"></a></div>
											<div class="yarnColour" id="plu-colour18"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140467"></a></div>
											<div class="yarnColour" id="plu-colour19"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140468"></a></div>
											<div class="yarnColour" id="plu-colour20"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140469"></a></div>
											<div class="yarnColour" id="plu-colour21"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140470"></a></div>
											<div class="yarnColour" id="plu-colour22"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140471"></a></div>
											<div class="yarnColour" id="plu-colour23"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140472"></a></div>
											<div class="yarnColour" id="plu-colour24"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140473"></a></div>
											<div class="yarnColour" id="plu-colour25"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10140474"></a></div>
											<div class="yarnColour" id="plu-colour26"><a class="divLink" href="https://www.loveknitting.com/willow-lark-plume?sku=10143074"></a></div>
										</div>
										<a href="https://www.loveknitting.com/willow-lark-plume" class="brandTile--cta btn btn-primary">
											Shop Plume yarn
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/ella-jumper-in-willow-lark-plume" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/plume-tile1.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Fashionably cropped, the Ella jumper uses a diamond lace motif to create a modern, lightweight piece that's easy to dress up or down and just as easy to knit.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Ella Jumper</div>
										<a href="https://www.loveknitting.com/ella-jumper-in-willow-lark-plume" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/felicity-scarf-in-willow-lark-plume" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/plume-tile2.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Ah, the magic of mohair – with just one soft, fluffy ball you can create this intricate, beautiful scarf.  Felicity combines lace triangle edging with trellis lace stitch to create a romantic, textured scarf that is a satisfying challenge to knit.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Felicity Scarf</div>
										<a href="https://www.loveknitting.com/felicity-scarf-in-willow-lark-plume" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/jessica-scarf-in-willow-lark-plume" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/plume-tile3.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The Jessica scarf sees a trio of soft delicate shades ripple in closed scallop stitch within the frame of a classic rectangular scarf shape. An intriguing twist on the traditional stripy scarf.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Jessica Scarf</div>
										<a href="https://www.loveknitting.com/jessica-scarf-in-willow-lark-plume" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/lucy-cardigan-in-willow-lark-plume" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/plume-tile4.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Lucy combines the lightness of mohair with a lovely fitted shape and standard braid cable to create an understated cardigan that shouts relaxed style.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Lucy Cardigan</div>
										<a href="https://www.loveknitting.com/lucy-cardigan-in-willow-lark-plume" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
								</div>
								<div class="row exploreAll">
									<a href="https://www.loveknitting.com/willow-and-lark-knitting-patterns">
										<div class="btn btn-secondary">View all patterns of Willow & Lark</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Collection 3-->
			<div class="brandCollections section" id="nest">
				<div class="container">
					<div class="row">
						<div class="col-md-2 hidden-xs hidden-sm">
						</div>
						<div class="col-md-10">
							
							<div class="separator"></div>
							<div class="brandCollection">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
										<div class="brandCollection--range">Shhhh... so soft</div>
										<div class="brandCollection--title">Nest</div>
										<p class="brandCollection--description hidden-xs">
											Nest is our softest yarn, ideal for babies and children to cuddle into on family picnics or around the bonfire. A super soft, luxurious mix of merino, cashmere and just a touch of tencel (a natural man- made fibre which adds superb durability), Nest DK comes in a whimsical mix of soft pastel, bright and neutral heirloom colours with vintage tones.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<a href="https://www.loveknitting.com/willow-lark-nest" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/collection_yarn_nest.jpg')?>" />
											</div>
											<div class="brandTile--hover disableHover">
												<p class="brandTile--description">
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Shop Nest yarn</div>
												</div>
											</div>
										</a>
										<div class="brandFullColTile--name"><span>A mix of cashmere, extra fine merino &amp; viscose</span><span class="blend">69% Extra Fine Merino, 11% Cashmere, 20% Tencel / DK / 115m / 50g</span></div>
										<div class="brandTile--colours nest">
											<div class="yarnColour" id="nest-colour1"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142065"></a></div>
											<div class="yarnColour" id="nest-colour2"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142066"></a></div>
											<div class="yarnColour" id="nest-colour3"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142067"></a></div>
											<div class="yarnColour" id="nest-colour4"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142068"></a></div>
											<div class="yarnColour" id="nest-colour5"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142069"></a></div>
											<div class="yarnColour" id="nest-colour6"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142070"></a></div>
											<div class="yarnColour" id="nest-colour7"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142072"></a></div>
											<div class="yarnColour" id="nest-colour8"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142073"></a></div>
											<div class="yarnColour" id="nest-colour9"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142074"></a></div>
											<div class="yarnColour" id="nest-colour10"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142075"></a></div>
											<div class="yarnColour" id="nest-colour11"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142076"></a></div>
											<div class="yarnColour" id="nest-colour12"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142077"></a></div>
											<div class="yarnColour" id="nest-colour13"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142078"></a></div>
											<div class="yarnColour" id="nest-colour14"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142079"></a></div>
											<div class="yarnColour" id="nest-colour15"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142080"></a></div>
											<div class="yarnColour" id="nest-colour16"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142081"></a></div>
											<div class="yarnColour" id="nest-colour17"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142082"></a></div>
											<div class="yarnColour" id="nest-colour18"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142083"></a></div>
											<div class="yarnColour" id="nest-colour19"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142084"></a></div>
											<div class="yarnColour" id="nest-colour20"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142085"></a></div>
											<div class="yarnColour" id="nest-colour21"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142086"></a></div>
											<div class="yarnColour" id="nest-colour22"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142087"></a></div>
											<div class="yarnColour" id="nest-colour23"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142088"></a></div>
											<div class="yarnColour" id="nest-colour24"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142089"></a></div>
											<div class="yarnColour" id="nest-colour25"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142090"></a></div>
											<div class="yarnColour" id="nest-colour26"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142091"></a></div>
											<div class="yarnColour" id="nest-colour27"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142092"></a></div>
											<div class="yarnColour" id="nest-colour28"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142093"></a></div>
											<div class="yarnColour" id="nest-colour29"><a class="divLink" href="https://www.loveknitting.com/willow-lark-nest?sku=10142094"></a></div>
										</div>
										<a href="https://www.loveknitting.com/willow-lark-nest" class="brandTile--cta btn btn-primary">
											Shop Nest yarn
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/flora-cardigan-in-willow-lark-nest" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/nest-tile1.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Wrapping up has never
													been more colourful than with the Flora cardigan. Offering a modern twist on a classic fairisle, Flora uses a kaleidoscope of colours to create an
													intricate floral pattern that is as ready for adventure as its wearer.
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Flora Cardigan</div>
										<a href="https://www.loveknitting.com/flora-cardigan-in-willow-lark-nest" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/arthur-jumper-in-willow-lark-nest" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/nest-tile2.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The Arthur cable jumper is a keeper. Playful and modern, an intricate trellis-like pattern weaves around the body, showing off the design with bold colour blocking. Guaranteed to raise a smile, just like the wearer.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Arthur Jumper</div>
										<a href="https://www.loveknitting.com/arthur-jumper-in-willow-lark-nest" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/little-lark-jumper-in-willow-lark-nest" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/nest-tile3.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Our signature lark motif knitted in intarsia sets off this super soft jumper to perfection. Whether the wearer likes bright and bold or soft and natural, you can choose your colourway to suit.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Little Lark Jumper</div>
										<a href="https://www.loveknitting.com/little-lark-jumper-in-willow-lark-nest" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/alice-cardigan-in-willow-lark-nest" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/nest-tile4.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">With its frilled edging and two stitch cable body pattern, Alice is a wonderfully girly cardigan suitable for all ages. Just what young ladies need for twirling.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Alice Cardigan</div>
										<a href="https://www.loveknitting.com/alice-cardigan-in-willow-lark-nest" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
								</div>
								<div class="row exploreAll">
									<a href="https://www.loveknitting.com/willow-and-lark-knitting-patterns">
										<div class="btn btn-secondary">View all patterns of Willow & Lark</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Collection 4-->
			<div class="brandCollections section" id="woodland">
				<div class="container">
					<div class="row">
						<div class="col-md-2 hidden-xs hidden-sm">
						</div>
						<div class="col-md-10">
							<div class="separator"></div>
							<div class="brandCollection">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
										<div class="brandCollection--range">Tweed with a twist</div>
										<div class="brandCollection--title">Woodland</div>
										<p class="brandCollection--description hidden-xs">
											Inspired by sunlight dappled through trees, Woodland is our classic tweed yarn with flecks of colour to pick out your project's interesting details.  Softer than many tweeds due to its 25% alpaca content, Woodland's classic twist and fleck makes it the perfect yarn to create hard-wearing yet soft garments to retreat into.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<a href="https://www.loveknitting.com/willow-lark-woodland" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/collection_yarn_woodland.jpg')?>" />
											</div>
											<div class="brandTile--hover disableHover">
												<p class="brandTile--description">
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Shop Woodland yarn</div>
												</div>
											</div>
										</a>
										<div class="brandFullColTile--name"><span>A mix of alpaca, merino &amp; viscose</span><span class="blend">50% merino wool, 25% Alpaca, 25% Viscose / DK / 175m / 50g</span></div>
										<div class="brandTile--colours woodland">
											<div class="yarnColour" id="wood-colour1"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140960"></a></div>
											<div class="yarnColour" id="wood-colour2"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140961"></a></div>
											<div class="yarnColour" id="wood-colour3"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140962"></a></div>
											<div class="yarnColour" id="wood-colour4"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140963"></a></div>
											<div class="yarnColour" id="wood-colour5"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140964"></a></div>
											<div class="yarnColour" id="wood-colour6"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140965"></a></div>
											<div class="yarnColour" id="wood-colour7"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140966"></a></div>
											<div class="yarnColour" id="wood-colour8"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140967"></a></div>
											<div class="yarnColour" id="wood-colour9"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140968"></a></div>
											<div class="yarnColour" id="wood-colour10"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140969"></a></div>
											<div class="yarnColour" id="wood-colour11"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140970"></a></div>
											<div class="yarnColour" id="wood-colour12"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140971"></a></div>
											<div class="yarnColour" id="wood-colour13"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140972"></a></div>
											<div class="yarnColour" id="wood-colour14"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140973"></a></div>
											<div class="yarnColour" id="wood-colour15"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140974"></a></div>
											<div class="yarnColour" id="wood-colour16"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140975"></a></div>
											<div class="yarnColour" id="wood-colour17"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140976"></a></div>
											<div class="yarnColour" id="wood-colour18"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140977"></a></div>
											<div class="yarnColour" id="wood-colour19"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140978"></a></div>
											<div class="yarnColour" id="wood-colour20"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140979"></a></div>
											<div class="yarnColour" id="wood-colour21"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140980"></a></div>
											<div class="yarnColour" id="wood-colour22"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140981"></a></div>
											<div class="yarnColour" id="wood-colour23"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140982"></a></div>
											<div class="yarnColour" id="wood-colour24"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140983"></a></div>
											<div class="yarnColour" id="wood-colour25"><a class="divLink" href="https://www.loveknitting.com/willow-lark-woodland?sku=10140984"></a></div>
										</div>
										<a href="https://www.loveknitting.com/willow-lark-woodland" class="brandTile--cta btn btn-primary">
											Shop Woodland yarn
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/vanessa-jumper-in-willow-lark-woodland" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/woodland-tile1.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">Perfect for woodland walks on route to the pub. The Vanessa jumper is comfy and warm, featuring beautiful ribbed neckline and lovely cable detailing on the seam.
												</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Vanessa Jumper</div>
										<a href="https://www.loveknitting.com/vanessa-jumper-in-willow-lark-woodland" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/georgina-jumper-in-willow-lark-woodland" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/woodland-tile2.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The Georgina jumper is the knitting equivalent of an invigorating walk on a crisp winter day, guaranteed to clear your head and put a smile on your face. Using seven colours, the intricate pattern creates a standard set in sleeve design with a Fair Isle top section.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Georgina Jumper</div>
										<a href="https://www.loveknitting.com/georgina-jumper-in-willow-lark-woodland" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/samantha-hat-in-willow-lark-woodland" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/woodland-tile3.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">The Samantha hat uses a striking arrow pattern to create a fresh, two colour fairisle piece. This is the perfect small project to hone your skill and practise your colourwork.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Samantha Hat</div>
										<a href="https://www.loveknitting.com/samantha-hat-in-willow-lark-woodland" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
									<div class="col-xs-6">
										<a href="https://www.loveknitting.com/emily-jumper-in-willow-lark-woodland" class="brandTile">
											<div class="imageContainer">
												<img src="<?php echo mediaURLConv('img/woodland-tile4.jpg')?>" />
											</div>
											<div class="brandTile--hover">
												<p class="brandTile--description">From quirky clashes to toning classics, express yourself in the colours you love with the Emily jumper. Its straightforward box fit shaping and all over stocking stitch make it easy to knit and easy to wear.</p>
												<div class="brandTile--actions">
													<div class="btn btn-primary">Get Pattern</div>
												</div>
											</div>
										</a>
										<div class="brandTile--name">Emily Jumper</div>
										<a href="https://www.loveknitting.com/emily-jumper-in-willow-lark-woodland" class="brandTile--cta btn btn-primary visible-sm visible-xs">
											Get pattern
										</a>
									</div>
								</div>
								<div class="row exploreAll last">
									<a href="https://www.loveknitting.com/willow-and-lark-knitting-patterns">
										<div class="btn btn-secondary">View all patterns of Willow & Lark</div>
									</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div id="way1"></div>
			<?php if($mode == 'dev'){?>
			<div style="width:100%; height:800px; background:#ccc;">Fake footer</div>
		</body>
	</html>
	<?php } else if($mode == 'prod') {?>
</div>
<?php } ?>