<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}



function easy_fast_optimization_options() {

    ?>
    <div class="wrap projectStyle">
	<h2 style="margin-top:2rem;margin-left:3.45rem;margin-bottom:-1rem;"><?php echo __("Easy & Fast Optimization - Settings","easy-fast-optimization-lang") ?></h2>
	<div id="whiteboxH" class="postbox">
	
	<div class="inside">
        <form action="options.php" method="post">
        <?php settings_fields("easy_fast_optimization_admin_settings") ?>
        	<?php submit_button(); ?>
            <table class="form-table">

                <tr valign="top">
                    <th scope="row"><label for="easy_fast_optimization_check_enable"><?php echo __("Easy & Fast Optimization","easy-fast-optimization") ?></label></th>
                    <td>
					<label class="button-toggle-wrap">
					  <input <?php if( get_option("easy_fast_optimization_check_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_check_enable" class="toggler" type="checkbox" data-toggle="button-toggle"/>
					  <div class="button-toggle">
						<div class="handle">
						  <div class="bars"></div>
						</div>
					  </div>
					</label>
                        <p class="description" ><?php echo __("Enable Wordpress Optimization with One Click.","easy-fast-optimization") ?></p>
                    </td>
                </tr>
				
				<?php if( get_option("easy_fast_optimization_check_enable") == 1) { ?>
					<tr valign="top">
						<th scope="row"><label for="easy_fast_optimization_adv_enable"><?php echo __("Advanced Settings","easy-fast-optimization") ?></label></th>
						<td>
						<label class="button-toggle-wrap">
						  <input <?php if( get_option("easy_fast_optimization_adv_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_adv_enable" class="toggler" type="checkbox" data-toggle="button-toggle"/>
						  <div class="button-toggle">
							<div class="handle">
							  <div class="bars"></div>
							</div>
						  </div>
						</label>
							<p class="description" ><?php echo __("Activate Advanced Settings. <span style='color:red'>(All settings will be reset.)</span>","easy-fast-optimization") ?></p>
						</td>
					</tr>
					
					<?php if( get_option("easy_fast_optimization_adv_enable") == 1) { ?>
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_admn_enable">
							<input <?php if( get_option("easy_fast_optimization_admn_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_admn_enable" type="checkbox"/>
							<?php echo __("Enable WP-Admin Optimization. <span style='color:red'>(Use With Caution!)</span>","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_html_enable">
							<input <?php if( get_option("easy_fast_optimization_html_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_html_enable" type="checkbox"/>
							<?php echo __("Enable HTML Minify.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_comm_enable">
							<input <?php if( get_option("easy_fast_optimization_comm_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_comm_enable" type="checkbox"/>
							<?php echo __("Disable comment cookies.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_emoj_enable">
							<input <?php if( get_option("easy_fast_optimization_emoj_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_emoj_enable" type="checkbox"/>
							<?php echo __("Disable WordPress Emojicons.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_migr_enable">
							<input <?php if( get_option("easy_fast_optimization_migr_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_migr_enable" type="checkbox"/>
							<?php echo __("Remove jQuery Migrate.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_shor_enable">
							<input <?php if( get_option("easy_fast_optimization_shor_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_shor_enable" type="checkbox"/>
							<?php echo __("Disable WordPress Shortlinks.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_quer_enable">
							<input <?php if( get_option("easy_fast_optimization_quer_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_quer_enable" type="checkbox"/>
							<?php echo __("Disable JavaScript Query Strings.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_foot_enable">
							<input <?php if( get_option("easy_fast_optimization_foot_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_foot_enable" type="checkbox"/>
							<?php echo __("Move Scripts to Footer. <span style='color:red'>(Use With Caution!)</span>","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_async_enable">
							<input <?php if( get_option("easy_fast_optimization_async_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_async_enable" type="checkbox"/>
							<?php echo __("Enable the ASYNC Attributes for Scripts. <span style='color:red'>(Use With Caution!)</span>","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_lazy_enable">
							<input <?php if( get_option("easy_fast_optimization_lazy_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_lazy_enable" type="checkbox"/>
							<?php echo __("Enable Lazy Load Feature for Images.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_cach_enable">
							<input <?php if( get_option("easy_fast_optimization_cach_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_cach_enable" type="checkbox"/>
							<?php echo __("Enable Browser Cache Feature.","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="easy_fast_optimization_embd_enable">
							<input <?php if( get_option("easy_fast_optimization_embd_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="easy_fast_optimization_embd_enable" type="checkbox"/>
							<?php echo __("Disable WP Embed Feature. <span style='color:red'>(Use With Caution!)</span>","easy-fast-optimization") ?>
							</label>
							</p>
						</td>
					</tr>
					<?php } ?>
					
				<?php } ?>
	
			</table>
          
      </div>
	  
	</div>
</div>
            <div class="wrap projectStyle" id="whiteboxH">
				<div class="postbox">
				<div class="inside" style="display:none">
				<div>
			  
					<!--
					<div class="contentDoYouLike">
					  <p><?php /* echo __("How would you rate <strong>Easy & Fast Optimization</strong>?", "easy-fast-optimization") */ ?></p>
					</div>

					<div class="wrapperDoYouLike">
					  <input type="checkbox" id="st1" value="1" />
					  <label for="st1"></label>
					  <input type="checkbox" id="st2" value="2" />
					  <label for="st2"></label>
					  <input type="checkbox" id="st3" value="3" />
					  <label for="st3"></label>
					  <input type="checkbox" id="st4" value="4" />
					  <label for="st4"></label>
					  <input type="checkbox" id="st5" value="5" />
					  <label for="st5"></label>
					</div>					
					
					<a target="_blank" href="https://codecanyon.net/item/one-click-optimization-wordpress-speed-optimization/reviews/21226746" class="sabutton button button-primary" style="margin: -5px 0 0 50px;"><?php /* echo __("Rate this plugin!", "easy-fast-optimization") */?></a>
				-->
				
				</div>
					
				</div>

				</div>
			</div>
</form>
    <?php
}

add_action("admin_init","easy_fast_optimization_Admin_Reg");
function easy_fast_optimization_Admin_Reg() {
	//
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_check_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_admn_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_adv_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_html_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_comm_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_emoj_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_migr_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_shor_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_quer_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_foot_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_async_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_lazy_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_cach_enable");
	register_setting("easy_fast_optimization_admin_settings","easy_fast_optimization_embd_enable");
	
}