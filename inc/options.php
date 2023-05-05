<?php 
    function da_options() {
        add_menu_page('DA', 'DA Options', 'administrator',
        'da_options', 'da_adjustments', '', 20.125);
    }

    add_action('admin_menu', 'da_options');

    function da_settings() {
        // Information Group
        register_setting('da_options_info',
        'da_location', );
        register_setting('da_options_info',
        'da_address');
        register_setting('da_options_info',
        'da_citystate');
        register_setting('da_options_info',
        'da_zip');
        register_setting('da_options_info',
        'da_phonenumber');
        register_setting('da_options_info',
        'da_email');
    }
    add_action('init', 'da_settings');

    function da_adjustments() { ?>
    <div class="wrap">
        <h1>Dos Amigos Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('da_options_info');
            do_settings_sections('da_options_info');
            ?>
            <!-- <h2>Location Adjustments</h2> -->
            <table class="form-table">
                <!-- <tr valign="top">
                    <th scope="row">Address: </th>
                    <td>
                        <input type="text"
                        name="da_location"
                        value="<?php echo esc_attr(
                            get_option( 'da_location'
                            )) ?>">
                    </td>
                </tr> -->
                <tr valign="top">
                    <th scope="row">Address: </th>
                    <td>
                        <input type="text"
                        name="da_address"
                        value="<?php echo esc_attr(
                            get_option( 'da_address'
                            )) ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">City, State: </th>
                    <td>
                        <input type="text"
                        name="da_citystate"
                        value="<?php echo esc_attr(
                            get_option( 'da_citystate'
                            )) ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Zip: </th>
                    <td>
                        <input type="text"
                        name="da_zip"
                        value="<?php echo esc_attr(
                            get_option( 'da_zip'
                            )) ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Phone: </th>
                    <td>
                        <input type="text"
                        name="da_phonenumber"
                        value="<?php echo esc_attr(
                            get_option(
                                'da_phonenumber' )) ?>">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Email: </th>
                    <td>
                        <input type="text"
                        name="da_email"
                        value="<?php echo esc_attr(
                            get_option(
                                'da_email' )) ?>">
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
            
        </form>

    </div>   

    <?php
}
?>