<?php

/*

plugin name:  Feedback Plugin

description:-  Simple Feedback plugin calculator

*/


function userfeed()
{ 
    include('userpart.php');
}
function adminfeed()
{
   include('adminpart.php');
}
function adminfeed2()
{
   include('adminpart.php');
}
function adminfeed3()
{
   include('adminpart.php');
}
add_shortcode('ufeed','userfeed');

function addmenu()
{
  add_menu_page('FeedBack', 'View FeedBack', '', 'my-menu','',plugins_url('feedback/img/icon.png'));
  add_submenu_page('my-menu', 'View Feed1 ', 'View Feed1', 'manage_options', 'my-menu1','adminfeed' );
  add_submenu_page('my-menu', 'Search Feed ', 'View Feed2', 'manage_options', 'my-menu2','adminfeed2' );
  add_submenu_page('my-menu', 'Delete Feed ', 'View Feed3', 'manage_options', 'my-menu3','adminfeed3' );
  
}
add_action('admin_menu', 'addmenu');
?>