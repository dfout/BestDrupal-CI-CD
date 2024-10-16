<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';


$settings['hash_salt'] = 'cS6MDxKS49GDYyYRBtcduMbl/MnzYa6kpaQoog6lFSA=';



/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Database settings for local environment using Pantheon database.
 */
$databases['default']['default'] = array (
  'database' => 'pantheon',                   // Pantheon database name
  'username' => 'pantheon',                   // Pantheon database username
  'password' => 'rwXptbdN6ktgdkXRf92KFtyCKCjXRlGu',  // Pantheon database password
  'host' => 'dbserver.dev.cfa49be2-4917-4548-a8ea-6e89fe10b10a.drush.in', // Pantheon database host
  'port' => '12908',                          // Pantheon database port
  'driver' => 'mysql',
  'prefix' => '',
);

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
