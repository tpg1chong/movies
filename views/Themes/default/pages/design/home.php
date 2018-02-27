<?php

$this->sliderList = array();
$this->sliderList[] = array('image' => array('src'=>IMAGES.'demo/1.jpg'), 'title'=>'The BFG', 'date');
$this->sliderList[] = array('image' => array('src'=>IMAGES.'demo/2.jpg'), 'title'=>'The BFG', 'date');
$this->sliderList[] = array('image' => array('src'=>IMAGES.'demo/0.jpg'), 'title'=>'The BFG', 'date');
$this->sliderList[] = array('image' => array('src'=>IMAGES.'demo/3.jpg'), 'title'=>'The BFG', 'date');

?><section class="slider-outer module">
	<div class="slider-wrapper">
		<div id="slider" class="slider slider-over" data-plugins="slider2">
			<div id="slide-items" class="slide-items">
				<?php 
				foreach ($this->sliderList as $key => $value) {

					// if( $key==1 ) break;

					$img = '<div class="pic"><img class="slide-img" src="'.$value['image']['src'].'" alt="'.$value['title'].'"></div>';
					// <!-- <div class="img" style="background-image:url(<?=$value['src'])"></div> -->

					echo '<div class="slide-item" data-id="'.$key.'"><div class="slide-stage clearfix">';
					
						if( !empty($value['link']) ){

							echo '<a class="slide-thumb" href="'.$value['link'].'">'.$img.'</a>';
						}else{ 
							echo '<div class="slide-thumb">'.$img.'</div>';
						}

						// echo '<div class="slide-content">'.
							/*<div class="post-details">
								<a href="'.$value['forum_url'].'" title="'.$value['forum_name'].'">'.$value['forum_name'].'</a>
								<span class="date">'.$value['created_str'].'</span>
							</div>
							
							<h2><a href="'.$value['url'].'" title="'.$value['title'].'">'.$value['title'].'</a></h2>
							<p class="clearfix">'.$value['summary'].'</p>
						
							<ul class="slider-navigation">
								<li class="slider-control slider-control-prev"><a title="prev" data-action="prev"><i class="icon-chevron-left"></i></a></li>
								<li class="slider-control slider-control-next"><a title="next" data-action="next"><i class="icon-chevron-right"></i></a></li>
							</ul>*/

						// '</div>';

					echo '</div></div>';
				
				} ?>
			</div>


			
		</div>

		
	</div>

	<div class="slide-show-item" style="">
			
		<div class="slide-thumb" href=""><a class="pic"><img class="slide-img" src="http://localhost/movies/public/images/demo/0.jpg" alt="The BFG"></a></div>
		<div class="slide-content">
		</div>
	</div>
</section>

<section id="popular" class="module" style="overflow: hidden;">
	
	<header class="page-title clearfix container">

		<div class="top-nav">
			<h2 class="title-container">Discover Movies</h2>
			<div class="links-container">
				<a class="nav-link">Rendom</a>
				<a class="nav-link active">Popular</a>
				<a class="nav-link">Recent</a>
			</div>

			<form class="search-container form-search">

				<input type="text" name="" class="inputtext search-input" placeholder="Find Movies">
				<button class="search-icon" type="submit"><i class="icon-search"></i></button>
			</form>
		</div>
	</header>
	
	<div class="" style="background-color: rgba(0,0,0,.5);padding-top: 50px;padding-bottom: 50px">
		
		<div class="container">
	
			<div class="items col-6 vertical picture-cover clearfix"><?php for ($i=0; $i < 12; $i++) { 
				?><div class="item"><div class="item-outer">
					

					<div class="pic-warp" style="position: relative;">
						<a class="pic">
							<img src="<?=IMAGES?>demo/<?=$i?>.jpg">
						</a>
						<div class="ratingValue">5.3</div>
					</div>
					<div class="content">
						<div class="category"><a>2016</a> / <span><a>Fiction</a>, <a>Drama</a></span></div>
						<h2 class="header"><a>Paper Towns</a></h2>
					</div>
					
				</div></div><?php } ?>
			</div>

			<div class="tac" style="margin-top: 50px">
				<a href="" class="btn btn-blue">Movies More</a>
			</div>
			
		</div>
	</div>
</section>


<div class="module container">
	
	<div class="two-columns clearfix">
		<div class="side-content narrow">
			
			<header class="page-title clearfix container">
				<h2>Hall Of Fame</h2>
			</header>

			<section class="section">
				<div class="section-header clearfix">
					<h3 class="section-header-title lfloat">Top Idols</h3>
					<a class="section-header-more rfloat">See All</a>
				</div>
				<ul class="section-list">
					<?php for ($i=0; $i < 10; $i++) { ?>	
					<li class="clearfix">
						<div class="anchor anchor32">
							<div class="avatar lfloat mrm"></div>
							<div class="content">
								<div class="spacer"></div>
								<div class="massages">
									<h2><a>วันอลวน วิญญาณอลเวง Coco</a></h2>
									<div class="category"><a>2016</a> / <span><a>Fiction</a>, <a>Drama</a></span></div>
									<div class="ratingValue">5.3</div>
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</section>

			<section class="section">
				<div class="section-header clearfix">
					<h3 class="section-header-title lfloat">Top Idols</h3>
					<a class="section-header-more rfloat">See All</a>
				</div>
				<ul class="section-list">
					<?php for ($i=0; $i < 10; $i++) { ?>	
					<li class="clearfix">
						<div class="anchor anchor32">
							<div class="avatar lfloat mrm"></div>
							<div class="content">
								<div class="spacer"></div>
								<div class="massages">
									<h2><a>Edna Freeman</a></h2>
									<div class="ratingValue">5.3</div>
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</section>

		</div>
		<div class="primary-content wide">
			
			<header class="page-title">
				<h2>New</h2>
			</header>

			<section class="featured-new">

				<div class="top-new clearfix">
					<div class="item view-list"><div class="item-outer clearfix">
					

						<div class="pic-warp" style="position: relative;">
							<a class="pic">
								<img src="<?=IMAGES?>demo/<?=$i?>.jpg">
							</a>
						</div>
						<div class="content">
							<div class="category"><a>2016</a> / <span><a>Fiction</a>, <a>Drama</a></span></div>
							<h2 class="header"><a>Paper Towns</a></h2>
						</div>
						
					</div></div>
				</div>

				<div class="items col-3 clearfix"><?php for ($i=0; $i < 9; $i++) { 
					?><div class="item"><div class="item-outer">
						

						<div class="pic-warp" style="position: relative;">
							<a class="pic">
								<img src="<?=IMAGES?>demo/<?=$i?>.jpg">
							</a>
						</div>
						<div class="content">
							<div class="category"><a>2016</a> / <span><a>Fiction</a>, <a>Drama</a></span></div>
							<h2 class="header"><a>Paper Towns</a></h2>
						</div>
						
					</div></div><?php } ?>
				</div>

				<div class="tac" style="margin-top: 50px">
					<a href="" class="btn btn-blue">New More</a>
				</div>
			</section>


		</div>
	</div>
</div>