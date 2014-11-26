<?php get_header(); ?>

<?php if(!is_front_page()) { ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="twelve columns">
			
<h1><?php if ( is_category() ) {
		single_cat_title();
		} elseif (is_tag() ) {
		echo (__( 'Archives for ', 'discover' )); single_tag_title();
		} elseif (is_author() ) {
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));		
		echo (__( 'Archives for ', 'discover' )); echo $curauth->nickname;		
	} elseif (is_archive() ) {
		echo (__( 'Archives for ', 'discover' )); single_month_title(' ', true);
	} else {
		wp_title('',true);
	} ?></h1>
			
			</div>	
			
	</div></div>
	
<?php } ?>


<!-- slider -->
<?php if(is_front_page()) { ?>

<div id="slider_container">

	<div class="row">
	
		<div class="four columns">
			<div class='greybox'>
				<h2 style='font-size:22px; color:#f38b00'>This Week's Flyer</h2>
				<a href='/flyers/ns'>Nova Scotia</a><br />
				<a href='/flyers/nl'>Newfoundland</a><br />
				<a href='/flyers/nb'>New Brunswick</a><br />
				<a href='/flyers/pe'>Prince Edward Island</a><br />
			</div>
			<div class='greybox' style='border-top:7px solid #d1d1d2'>
				<h2 style='font-size:22px; color:#f38b00'>Prescription Refills</h2>
				<a href='/rx-refills'>Click here<br />
						to conveniently refill<br />
						your existing prescriptions.</a>
			</div>		
		</div>	

		<div class="eight columns">
			<?php get_template_part( 'element-slider', 'home' ); ?>
		</div>
	
		<div class='clear'></div>
			<div id='full_width' style='background:#eee;'>
				<div class='peachbox' style='margin:0px;color:#4d4d4f;font-size:15px;padding:25px;'>
				<h2 style='font-size:22px;display:inline;margin-right:10px;color:#f38b00;'>Store and Walk-In Clinic Locator:</h2>  
				<a href='/stores' style='color:#4d4d4f;'>Find a Lawtons Drugs or a clinic near you.</a>
			</div>		
		</div>
</div>

<?php } ?> <!-- slider end -->


	
<!-- home boxes -->
<?php if(is_front_page()) { ?>
	
	<div class="row" id="box_container">

		<?php get_template_part( 'element-boxes', 'home' ); ?>

	</div>
	
<!-- home boxes end -->

<div class="clear"></div>
<?php } ?> 


		

<?php get_footer(); ?>