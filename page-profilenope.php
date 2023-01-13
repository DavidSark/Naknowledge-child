<?php $current_user = wp_get_current_user();
  $link = get_edit_user_link($current_user->ID);
  echo '<a href="'.$link.'" data-user-id="<?php echo $user_id; ?>" class="view-profile">View Profile</a>'; ?>

<!-- <a href="Greyphe" data-user-id="<?php echo $user_id; ?>" class="view-profile">View Profile</a> -->


<?php 
function get_user_profile() {
    $user_id = $_POST['user_id'];
    $user_data = get_userdata($user_id);
    if ($user_data) {
        $user_meta = get_user_meta($user_id);
        $user_avatar = get_user_meta($user_id, 'wpa_profile_picture', true);
        $response = array(
            'user_id' => $user_id,
            'user_name' => $user_data->user_login,
            'user_email' => $user_data->user_email,
            'user_avatar' => $user_avatar,
            'user_meta' => $user_meta
        );
        wp_send_json_success($response);
    } else {
        wp_send_json_error('Invalid user ID');
    }
    }
    add_action('wp_ajax_get_user_profile', 'get_user_profile');?>

