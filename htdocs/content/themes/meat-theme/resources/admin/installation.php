<?php

add_action(/**
 *
 */
    'after_switch_theme', function() {
	(new MeatInstaller)->install();

});

/**
 * Class MeatInstaller
 */
class MeatInstaller {

    /**
     *
     */
    public function install() {
		if ($this->isInstalled()) {
            $this->addAdminMessage('Se encontró la variable MEAT_INSTALLED en el <code>.env</code> por lo que no se realizaron configuraciones adicionales', null, 'warning');
			return;
		}
		$this->deleteDemoPosts()
            ->deleteDemoComments()
            ->setOptions()
            ->addSaltsToEnv()
            ->addInstalledFlagToEnv()
            ->activatePlugins()
            ->addAdminMessage('Tema MEAT instalado correctamente. Se configuró correctamente y se agregó flag MEAT_INSTALLED en archivo  <code>.env</code>');
	}

    /**
     * @return array|false|string
     */
    public function isInstalled() {
		return getenv('MEAT_INSTALLED');
	}

    /**
     * @return $this
     */
    function addSaltsToEnv()
	{
	    $secret_keys = wp_remote_get('https://api.wordpress.org/secret-key/1.1/salt/');
	    $secret_keys = explode("\n", wp_remote_retrieve_body($secret_keys));
	    foreach ($secret_keys as $k => $v) {
	        $secret_keys[$k] = substr($v, 28, 64);
	    }
	    $vars = [
	        'AUTH_KEY',
	        'SECURE_AUTH_KEY',
	        'LOGGED_IN_KEY',
	        'NONCE_KEY',
	        'AUTH_SALT',
	        'SECURE_AUTH_SALT',
	        'LOGGED_IN_SALT',
	        'NONCE_SALT'
	    ];
	    $str = '';
	    for ($i = 0; $i < count($vars); $i++) {
	        $key = $vars[$i];
	        if (!getenv($key)) {
                $str .= $key . '="' . $secret_keys[$i] . '"' . "\n";
            }
	    }
	    if ($str) {
            $str = "\n\n# Auto generated \n\n" . $str;
            file_put_contents(ABSPATH . '../../.env', $str, FILE_APPEND);
        }

        return $this;
	}

    /**
     * @return $this
     */
    function addInstalledFlagToEnv() {
		file_put_contents(ABSPATH . '../../.env', "\nMEAT_INSTALLED=1", FILE_APPEND);

        return $this;
	}
    /**
     * @return $this
     */
    private function setOptions()
    {
        // set the options to change
        $option = array(
            // we don't want no description
            'blogdescription'               => '',
            // disable comments
            'default_comment_status'        => 'closed',
            // disable trackbacks
            'use_trackback'                 => '',
            // disable pingbacks
            'default_ping_status'           => 'closed',
            // disable pinging
            'default_pingback_flag'         => '',
            // dont use year/month folders for uploads
            'uploads_use_yearmonth_folders' => '',
            // don't use those ugly smilies
            'use_smilies'                   => ''
        );
        // change the options!
        foreach ( $option as $key => $value ) {
            update_option( $key, $value );
        }

        return $this;
    }
    /**
     * @return $this
     */
    private function deleteDemoPosts()
    {
        wp_delete_post( 1, TRUE );
        wp_delete_post( 2, TRUE );

        return $this;
    }
    /**
     * @return $this
     */
    private function deleteDemoComments()
    {
        wp_delete_comment( 1 );

        return $this;
    }

    /**
     * @param $message
     * @param string $domain
     * @param string $type
     * @return $this
     */
    private function addAdminMessage($message, $domain = 'meat-theme', $type = 'success')
    {
        ?>
        <div class="notice notice-<?php echo $type; ?> is-dismissible">
            <p><?php _e( $message , $domain ); ?></p>
        </div>
        <?php

        return $this;
    }
    /**
     * @return $this
     */
    private function activatePlugins()
    {
        // we need to include the file below because the activate_plugin() function isn't normally defined in the front-end
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        // activate pre-bundled plugins
        activate_plugin("wp-sanitize-file-name-plus/wp-sanitize-file-name-plus.php");
        //activate_plugin( 'wp-super-cache/wp-cache.php' );
        activate_plugin( 'wordpress-seo/wp-seo.php' );
        activate_plugin( 'advanced-custom-fields-pro/acf.php' );

        return $this;
    }
}