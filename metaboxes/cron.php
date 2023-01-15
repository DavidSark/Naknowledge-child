<?php
// (pas obliger pour le coup) création de tache récurrentes : 
// add_action('montheme_import_content', function (){
//     touch(__DIR__ . '/demo-' . time());
// });

// add_filter('cron_schedules', function($schedules){
//    $schedules['ten_seconds'] = [
//     'interval' => 5,
    
//    ];
//        return $schedules;
// });


// // pour supprimer un événement mais c'était juste pour un exemple
// // if($timestamp = wp_next_scheduled('montheme_import_content')){
// //     wp_unschedule_event($timestamp,'montheme_import_content');
// // };


// // echo '<pre>';
// // var_dump(_get_cron_array());
// // echo '</pre>';
// // die();
// $args = array(false);
// if (!wp_next_scheduled('montheme_import_content', $args)){
//     wp_schedule_event(time(), 'ten_seconds', 'montheme_import_content', $args);
// };