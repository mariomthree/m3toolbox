<?php
/**
 * Plugin Name: M3 Toolbox
 * Plugin URI:  https://github.com/mariomthree/M3Toolbox
 * Description: O M3 Toolbox é um conjunto de ferramentas e widgets que o tema webnews necessita para o seu funcionamento.
 * Author:      Mario Manuel Mabande
 * Author URI:  https://github.com/mariomthree/
 * Version:     1.0.0
 * Text Domain: toolbox
 */
$file_dir = dirname( __FILE__ );

require $file_dir . '/widgets/ContactInfo.php';

require $file_dir . '/widgets/SocialLinks.php';

require $file_dir . '/widgets/FacebookPage.php';

require $file_dir . '/widgets/LatestTweets.php';