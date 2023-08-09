# wp-install-custom

## Prerequisites

- [Composer](https://getcomposer.org/)
- [WP-CLI](https://wp-cli.org/fr/)

## How to use

1. Run `composer install` to download WordPress, plugins and themes.
2. Create a database with a dedicated user.
3. Fill the `wp-config.php` file (copy of `wp-config-sample.php`) with:
    1. Database informations
    2. [Salt keys](https://api.wordpress.org/secret-key/1.1/salt/)
    3. Homepage URL (constant `WP_HOME`)
4. Change right of the current directory:
   - `sudo chown -R $USER:www-data .`
   - `sudo find . -type f -exec chmod 664 {} +`
   - `sudo find . -type d -exec chmod 775 {} +`
   - `sudo chmod g-w .htaccess`
5.. Install WordPress with `wp core install --prompt` ([more details](https://developer.wordpress.org/cli/commands/core/install/))
