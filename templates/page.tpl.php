<!DOCTYPE html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">  	
			
<body>		
	<div class="row-fluid" >
	<!--- side title and slogan -->	
		<div class="span12">
			
			<div class= "span9" id="tittle">
				<?php if ($site_name || $site_slogan): ?>
				<div id="name-and-slogan">
				<?php if ($site_name): ?>
				<?php if ($title): ?>
				<div id="site-name">
					<a id="site-name-node" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
				</div>
				<?php else: /* Use h1 when the content title is empty */ ?>
				<h1 id="site-name">
				<?php print $site_name; ?>
				</h1>
				<?php endif; ?>
				<?php endif; ?>

				<?php if ($site_slogan): ?>
				<div id="site-slogan">
				<h2><?php print $site_slogan; ?></h2>
				</div>
				<?php endif; ?>

				</div> <!-- /#name-and-slogan -->
				<?php endif; ?>
			</div>
				<!---end side title and slogan -->
			<a id="tabzilla" href="http://www.mozilla.org/"><div ID="top_mozilla" class="span2"></div></a>	
				
		</div>
	<?php if ($main_menu): ?>
      <div id="main_menu" class="span12">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
	<?php endif; ?>
      </div>
				<div class="row-fluid">
					<div class="span8" id="content">
						<?php print render($title_prefix); ?>
						<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
						<?php print render($title_suffix); ?>
						<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
						<?php print render($page['help']); ?>
						<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
						<?php print render($page['content']); ?>
					</div>
					<div class="span4" id="right_sidebar">
						 <?php print render($page['right_sidebar']);  ?>
						<!-- login Menu -->
					<div id="login_menu">
						<ul> <h3> Meta</h3>				
							<?php if ($user->uid == 0) : ?>
							<li><a href="<?php print $front_page; ?>user/register">register</a></li>
							<li><a href="<?php print $front_page; ?>user/login">Login</a></li>
							<li><a href="<?php print $front_page; ?>user/password">Forgotyour password</a></li>
							<?php else: ?>
										
							<li><a href="<?php print $front_page; ?>user/logout">Logout</a></li>
							<?php endif; ?>	
							<?php print render($page['Home_login']); ?>
						</ul>
					</div> 
					</div>
				</div>
		


		
	</div>
</body>

<!--<footer class="row-fluid">
	<div class="span12">
		<div class="span3" id="footer-wrap">
			<p id="foot-logo">
				<a class="logo" href="http://mozilla.org" rel="external">Mozilla</a>
			</p>
		</div>
		<div class="span4">
			<p id="colophon">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
			</p>
		</div>
		<div class="span4">
			<nav id="nav-meta">
			  <ul role="navigation">
				<li><a href="http://www.mozilla.org/contact/" rel="external">Contact Us</a></li>
				<li><a href="http://www.mozilla.org/en-US/privacy" rel="external">Privacy Policy</a></li>
				<li><a href="http://www.mozilla.org/about/legal.html" rel="external">Legal Notices</a></li>
				<li><a href="http://www.mozilla.org/legal/fraud-report/index.html" rel="external">Report Trademark Abuse</a></li> 
			  </ul>
			</nav>
		</div>
	</div>

</footer>-->
<footer>
	<div class="row-fluid">
		<div class="span12">
			<div class="span4"> 
				<a class="logo" href="http://mozilla.org" rel="external">Mozilla</a>
			</div>
			<div class="span4"> 
				<p id="colophon">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
				</p>
			</div>
			<div class="span4"> 
				<nav id="nav-meta">
				  <ul role="navigation">
					<li><a href="http://www.mozilla.org/contact/" rel="external">Contact Us</a></li>
					<li><a href="http://www.mozilla.org/en-US/privacy" rel="external">Privacy Policy</a></li>
					<li><a href="http://www.mozilla.org/about/legal.html" rel="external">Legal Notices</a></li>
					<li><a href="http://www.mozilla.org/legal/fraud-report/index.html" rel="external">Report Trademark Abuse</a></li> 
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</footer>
<!--<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>_->
