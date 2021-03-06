<?php

// Default options values
$uncg_unit_options = array(
	'addressHTML' => '<dl title="University Contact Information">
                          <dt>Office of Research</dt>
                          <dd><strong>Location</strong> 1601 </dd>
                          <dd><strong>Mailing Address</strong> PO Box 26170, Greensboro, NC 27402-6170</dd>
                          <dd><strong>Telephone</strong> 336.334.5000</dd>
                      </dl>',
    'siteTier' => 'primary',
    'siteDomain' => 'research.uncg.edu',
    'siteDepartment' => 'Research & Engagement',
    'siteAdminEmail' => 'dastarne@uncg.edu'

);

if ( is_admin() ) : // Load only if we are viewing an admin page


    function uncg_unit_register_settings() {
            // Register settings and call sanitation functions
            register_setting( 'uncg_unit_theme_options', 'uncg_unit_options');
    }

    add_action( 'admin_init', 'uncg_unit_register_settings' );

    function uncg_unit_theme_options() {
            // Add theme options page to the addmin menu
            add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'uncg_unit_theme_options_page' );
            wp_register_style("themecss", get_bloginfo('template_directory', false) . "/theme/themecss.css", array(), false, false);
            wp_enqueue_style("themecss");
    }

    add_action( 'admin_menu', 'uncg_unit_theme_options' );

    // Function to generate options page
    function uncg_unit_theme_options_page() {
            global $uncg_unit_options;

            if ( ! isset( $_REQUEST['updated'] ) )
                    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

            <div class="wrap">

            <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>";
            // This shows the page's name and an icon if one has been provided ?>

            <?php if ( false !== $_REQUEST['updated'] ) : ?>
            <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
            <?php endif; // If the form has just been submitted, this shows the notification ?>

            <form method="post" action="options.php">

            <?php $settings = get_option( 'uncg_unit_options', $uncg_unit_options ); ?>

            <?php settings_fields( 'uncg_unit_theme_options' );
            /* This function outputs some hidden fields required by the form,
            including a nonce, a unique number used to ensure the form has been submitted from the admin page
            and not somewhere else, very important for security */ ?>

            <div class="container_12">
				<div class="option_row">

					<div class="grid_3">
						<label for="addressHTML"><strong>Footer Address</strong></label><p style="line-height:1.8em;margin-left:15px;"> Enter the address information to be displayed in the site footer.  Please enter valid HTML;</p>
					</div>

					<div class="grid_7">
						<textarea rows="10" cols="120" id="addressHTML" name="uncg_unit_options[addressHTML]"><?php echo $settings['addressHTML'];?></textarea>
					</div>
								<div class="clear"></div>
					<div class="grid_7">
						<label for="siteTier"><strong>Site Tier</strong></label><p style="line-height:1.8em;margin-left:15px;"> Site is currently set as <strong><?php echo $settings['siteTier'];?></strong>. To change tier, please select from the options below.</p>
						<input type="radio" id="siteTier" name="uncg_unit_options[siteTier]" value="primary" >Primary (Uses UNCG primary heading 'secondary-heading.php')<br>
						<input type="radio" id="siteTier" name="uncg_unit_options[siteTier]" value="secondary" checked>Secondary (Uses UNCG secondary heading 'heading.php')<br>
					</div>
								<div class="clear"></div><br>
					<div class="grid_7">
						<label for="sitePrivacyPolicy"><strong>Privacy Policy Settings</strong></label>
						<br>
						<p style="line-height:1.8em;margin-left:15px;"> Enter your department and site domain name here.</p>
						Department Domain: <strong><?php echo $settings['siteDomain'];?></strong><br>
						<input type="text" id="siteDomain" name="uncg_unit_options[siteDomain]" value="<?php echo $settings['siteDomain'];?>"><br>
						Department Name: <strong><?php echo $settings['siteDepartment'];?></strong><br>
						<input type="text" id="siteDepartment" name="uncg_unit_options[siteDepartment]" value="<?php echo $settings['siteDepartment'];?>"><br>
						Site Admin Email: <strong><?php echo $settings['siteAdminEmail'];?></strong><br>
						<input type="text" id="siteAdminEmail" name="uncg_unit_options[siteAdminEmail]" value="<?php echo $settings['siteAdminEmail'];?>"><br>
						Privacy policy page has to be titled "Privacy Policy" and has to have the following URL format:
						yourdomain.uncg.edu/privacy-policy.<br>
						Remember to add this shortcode to your privacy policy page: [privacy_policy]
					</div>
				</div>
			</div>
            <p class="submit"><input type="submit" class="button-primary" value="Save Theme Options" /></p>
            </form>

            </div>

            <?php
    }


endif;  // EndIf is_admin()
?>
