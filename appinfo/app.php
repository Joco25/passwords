<?php
namespace OCA\Passwords\AppInfo;

use OCP\AppFramework\App;

$app = new App('passwords');
$container = $app->getContainer();

$container->query('OCP\INavigationManager')->add(function () use ($container) {
	$urlGenerator = $container->query('OCP\IURLGenerator');
	$l10n = $container->query('OCP\IL10N');
	return [
		// the string under which your app will be referenced in owncloud
		'id' => 'passwords',

		// sorting weight for the navigation. The higher the number, the higher
		// will it be listed in the navigation
		'order' => 20,

		// the route that will be shown on startup
		'href' => $urlGenerator->linkToRoute('passwords.page.index'),

		// the icon that will be shown in the navigation
		// this file needs to exist in img/
		'icon' => $urlGenerator->imagePath('passwords', 'app.svg'),

		// the title of your application. This will be used in the
		// navigation or on the settings page of your app
		'name' => $l10n->t('Passwords'),
	];
});