<main id="primary" class="site-main">

		
<article id="post-122" class="post-122 page type-page status-publish hentry">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title()?></h1>	</header><!-- .entry-header -->

	
	<div class="entry-content">
		
<div class="wpum-template wpum-profile-page" id="wpum-profile">

	
	<div id="profile-header-container">
		
<div id="header-cover-image">
			<div id="header-avatar-container">
			<a href="http://localhost/naknowledge/profile/Greyphe">
                <?php echo get_avatar( get_the_author_email(), 35 );?>
            </a>
		</div>
	</div>

<div id="header-profile-details">
	<div id="header-name-container">
		<h2>
        <?php $current_user = wp_get_current_user();
    $display_name = $current_user->data->display_name;
    echo '<p>Nom : '.$display_name.'</p>';?>					
            <a href="http://localhost/naknowledge/account-2/"><small>Edit account</small></a>
			</h2>
	</div>
	<div id="profile-navigation">
		
<nav class="profile-navbar">
			<a href="http://localhost/naknowledge/profile/Greyphe/about" class="tab-about 			active">About</a>
	</nav>
	</div>
</div>
	</div>

	<div id="profile-tab-content">
		
<div id="profile-content-about" class="profile-content-settings">

	
		
							<div class="profile-fields-group profile-fields-group-1">
									<h3 class="group-title">Primary fields</h3>
				
				
				<table class="profile-fields-table">
					<tbody>
																																								<tr class="field_2 field_email field_type_email">
								<td class="label">Email</td>
								<td class="data">greyyyphe@gmail.com</td>
							</tr>
																																																									<tr class="field_6 field_nickname field_type_text">
								<td class="label">Nickname</td>
								<td class="data">Greyphe</td>
							</tr>
																								<tr class="field_7 field_display-name field_type_dropdown">
								<td class="label">Display name</td>
								<td class="data">Greyphe</td>
							</tr>
																								<tr class="field_8 field_website field_type_url">
								<td class="label">Website</td>
								<td class="data"><a href="http://localhost/naknowledge" target="_blank" rel="noopener noreferrer">http://localhost/naknowledge</a></td>
							</tr>
																								<tr class="field_9 field_description field_type_textarea">
								<td class="label">Description</td>
								<td class="data"><p>bonjour j’en ai marre</p>
</td>
							</tr>
																											</tbody>
				</table>
				</div>
			
		
	
</div>
	</div>

	<div class="wpum_clearfix"></div>

	
</div>
	</div><!-- .entry-content -->

			<footer class="entry-footer">
			<span class="edit-link"><a class="post-edit-link" href="http://localhost/naknowledge/wp-admin/post.php?post=122&amp;action=edit">Edit <span class="screen-reader-text">Profile</span></a></span>		</footer><!-- .entry-footer -->
	</article><!-- #post-122 -->

	</main>