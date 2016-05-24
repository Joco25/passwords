<ul>
	<?php
	$auth_type = OC::$server->getConfig()->getUserValue(OC::$server->getUserSession()->getUser()->getUID(), 'passwords', 'extra_auth_type', 'owncloud');
	$show_lock = OC::$server->getConfig()->getUserValue(OC::$server->getUserSession()->getUser()->getUID(), 'passwords', 'show_lockbutton', 'true') == 'true';
	if ($auth_type != 'none' && $show_lock) { ?>
		<input id="lock_btn" class="button" type="button" value="<?php p(strtoupper($l->t("Lock"))); ?>">
	<?php } ?>
	<li id="list_active" class="with-counter active">
		<a href="#"><?php p($l->t("Active passwords")); ?></a>
		<div class="app-navigation-entry-utils">
			<ul>
				<li class="app-navigation-entry-utils-counter menu_passwords_active"></li>
			</ul>
		</div>
	</li>
	<li id="list_trash" class="with-counter">
		<a href="#"><?php p($l->t("Trash bin")); ?></a>
		<div class="app-navigation-entry-utils">
			<ul>
				<li class="app-navigation-entry-utils-counter menu_passwords_trashbin"></li>
			</ul>
		</div>
	</li>
	<li id="list_category">
		<a href="#"><?php p($l->t("Filter")); ?>:</a>
		<div class="app-navigation-entry-utils nav-cat-counter">
			<ul>
				<li id="nav_category_list" class="app-navigation-entry-utils-counter"></li>
			</ul>
		</div>
	</li>

	<div id="PasswordsTableSearch">
		<input id="search_text" type="text" placeholder="<?php p($l->t("Search for")); ?>..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
		<input id="search_clear" type="button" value="<?php p($l->t("Clear")); ?>">
	</div>

	<div id="add_password_div">
		<h3><?php p($l->t("Add new password")); ?></h3>
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-link"><input type="text" id="new_address" placeholder="<?php p($l->t("Full URL (optional)")); ?>" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-rename"><textarea id="new_notes" placeholder="<?php p($l->t("Notes (optional)")); ?>"></textarea>
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-category"><div id="new_category"></div>
		
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-share"><input type="text" id="new_website" placeholder="<?php p($l->t("site.com or Name Inc.")); ?>" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-user"><input type="text" id="new_username" placeholder="<?php p($l->t("Login name or e-mail")); ?>" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('passwords', 'blank.svg')); ?>" class="icon-password"><input type="text" id="new_password" class="password_field" placeholder="<?php p($l->t("Password")); ?>" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
		<div id="generate-password">
			<p id="generate_strength"></p>
			<div id="generate_passwordtools">
				<label>
					<input class="check" type="checkbox" id="gen_lower" checked> <?php p($l->t("Lowercase characters")); ?>
				</label>
				<br>
				<label>
					<input class="check" type="checkbox" id="gen_upper" checked> <?php p($l->t("Uppercase characters")); ?>
				</label>
				<br>
				<label>
					<input class="check" type="checkbox" id="gen_numbers" checked> <?php p($l->t("Numbers")); ?>
				</label>
				<br>
				<label>
					<input class="check" type="checkbox" id="gen_special" checked> <?php p($l->t("Punctuation marks")); ?>
				</label>
				<br>
				<label>
					<input type="text" id="gen_length" value="30"> <?php p($l->t("characters")); ?>
				</label>
				<br>
			</div>
			<input id="new_generate" type="button" class="search_clear_shown" value="<?php p($l->t("Generate password")); ?>">
		</div>
		<input id="new_password_add" type="button" value="<?php p($l->t("Add password")); ?>">
	</div>

</ul>
