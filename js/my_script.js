// jQuery(document).ready(function ($) {
//     $('.view-profile').on('click', function (e) {
//         e.preventDefault();
//         var user_id = $(this).data('user-id');
//         $.ajax({
//             type: 'POST',
//             url: ajaxurl,
//             data: {
//                 action: 'get_user_profile',
//                 user_id: user_id
//             },
//             success: function (response) {
//                 // Afficher les informations de l'utilisateur dans une fenêtre modale ou une zone dédiée sur votre site
//                 console.log(response);
//             }
//         });
//         console.log(user_id);
//     });
// });