<?php 
/** Fenom template 'frontend/adminlte/index.tpl' compiled at 2017-03-07 11:29:05 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?> <?php
/* frontend/adminlte/index.tpl:7: {var $template_url = $.php.base_url() ~ "templates/" ~ $theme_path} */
 $var["template_url"]=(call_user_func_array('base_url', array()).strval("templates/").strval($var["theme_path"])); ?>  <?php
/* frontend/adminlte/index.tpl:9: {var $resource['home1']} */
 ob_start(); ?> <link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:10: {$template_url} */
 echo $var["template_url"]; ?>bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:11: {$template_url} */
 echo $var["template_url"]; ?>font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:12: {$template_url} */
 echo $var["template_url"]; ?>plugins/ionicons/css/ionicons.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:13: {$template_url} */
 echo $var["template_url"]; ?>dist/css/AdminLTE.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:14: {$template_url} */
 echo $var["template_url"]; ?>dist/css/skins/_all-skins.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:15: {$template_url} */
 echo $var["template_url"]; ?>css/custom.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:16: {$template_url} */
 echo $var["template_url"]; ?>plugins/bootstrap-dialog/css/bootstrap-dialog.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:17: {$template_url} */
 echo $var["template_url"]; ?>plugins/iCheck/flat/blue.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:18: {$template_url} */
 echo $var["template_url"]; ?>plugins/morris/morris.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:19: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:20: {$template_url} */
 echo $var["template_url"]; ?>plugins/datepicker/datepicker3.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:21: {$template_url} */
 echo $var["template_url"]; ?>plugins/daterangepicker/daterangepicker-bs3.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:22: {$template_url} */
 echo $var["template_url"]; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:23: {$template_url} */
 echo $var["template_url"]; ?>plugins/pace/pace.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:24: {$template_url} */
 echo $var["template_url"]; ?>plugins/autoComplete/jquery.auto-complete.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:25: {$template_url} */
 echo $var["template_url"]; ?>plugins/marquee/css/jquery.marquee.min.css"><script src="<?php
/* frontend/adminlte/index.tpl:27: {$template_url} */
 echo $var["template_url"]; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:28: {$template_url} */
 echo $var["template_url"]; ?>plugins/jQueryUI/jquery-ui.min.js"></script><script>$.widget.bridge("uibutton", $.ui.button);</script><script src="<?php
/* frontend/adminlte/index.tpl:30: {$template_url} */
 echo $var["template_url"]; ?>bootstrap/js/bootstrap.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:31: {$template_url} */
 echo $var["template_url"]; ?>plugins/pace/pace.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:32: {$template_url} */
 echo $var["template_url"]; ?>plugins/bootstrap-dialog/js/bootstrap-dialog.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:33: {$template_url} */
 echo $var["template_url"]; ?>plugins/raphael/raphael-min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:34: {$template_url} */
 echo $var["template_url"]; ?>plugins/morris/morris.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:35: {$template_url} */
 echo $var["template_url"]; ?>plugins/sparkline/jquery.sparkline.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:36: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:37: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:38: {$template_url} */
 echo $var["template_url"]; ?>plugins/knob/jquery.knob.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:39: {$template_url} */
 echo $var["template_url"]; ?>plugins/moment/min/moment.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:40: {$template_url} */
 echo $var["template_url"]; ?>plugins/daterangepicker/daterangepicker.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:41: {$template_url} */
 echo $var["template_url"]; ?>plugins/datepicker/bootstrap-datepicker.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:42: {$template_url} */
 echo $var["template_url"]; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:43: {$template_url} */
 echo $var["template_url"]; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:44: {$template_url} */
 echo $var["template_url"]; ?>plugins/fastclick/fastclick.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:45: {$template_url} */
 echo $var["template_url"]; ?>plugins/autoComplete/jquery.auto-complete.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:46: {$template_url} */
 echo $var["template_url"]; ?>dist/js/app.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:47: {$template_url} */
 echo $var["template_url"]; ?>plugins/validation/jquery.validate.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:48: {$template_url} */
 echo $var["template_url"]; ?>plugins/marquee/lib/jquery.marquee.min.js"></script> <?php
/* frontend/adminlte/index.tpl:49: {/var} */
 $var["resource"]['home1']=ob_get_clean();; ?> <?php
/* frontend/adminlte/index.tpl:50: {var  $resource['home2']} */
 ob_start(); ?> <link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:51: {$template_url} */
 echo $var["template_url"]; ?>bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:52: {$template_url} */
 echo $var["template_url"]; ?>plugins/pace/pace.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:53: {$template_url} */
 echo $var["template_url"]; ?>font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:54: {$template_url} */
 echo $var["template_url"]; ?>plugins/ionicons/css/ionicons.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:55: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:56: {$template_url} */
 echo $var["template_url"]; ?>dist/css/AdminLTE.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:57: {$template_url} */
 echo $var["template_url"]; ?>dist/css/skins/_all-skins.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:58: {$template_url} */
 echo $var["template_url"]; ?>plugins/jQueryUI/jquery-ui.min.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:59: {$template_url} */
 echo $var["template_url"]; ?>plugins/autoComplete/jquery.auto-complete.css"><link rel="stylesheet" href="<?php
/* frontend/adminlte/index.tpl:60: {$template_url} */
 echo $var["template_url"]; ?>css/custom.css"><script src="<?php
/* frontend/adminlte/index.tpl:62: {$template_url} */
 echo $var["template_url"]; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:63: {$template_url} */
 echo $var["template_url"]; ?>bootstrap/js/bootstrap.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:64: {$template_url} */
 echo $var["template_url"]; ?>plugins/pace/pace.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:65: {$template_url} */
 echo $var["template_url"]; ?>plugins/fastclick/fastclick.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:66: {$template_url} */
 echo $var["template_url"]; ?>plugins/autoComplete/jquery.auto-complete.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:67: {$template_url} */
 echo $var["template_url"]; ?>dist/js/app.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:68: {$template_url} */
 echo $var["template_url"]; ?>plugins/sparkline/jquery.sparkline.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:69: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:70: {$template_url} */
 echo $var["template_url"]; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:71: {$template_url} */
 echo $var["template_url"]; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:72: {$template_url} */
 echo $var["template_url"]; ?>plugins/chartjs/Chart.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:73: {$template_url} */
 echo $var["template_url"]; ?>dist/js/pages/dashboard2.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:74: {$template_url} */
 echo $var["template_url"]; ?>plugins/jQueryUI/jquery-ui.min.js"></script><script src="<?php
/* frontend/adminlte/index.tpl:75: {$template_url} */
 echo $var["template_url"]; ?>plugins/validation/jquery.validate.min.js"></script> <?php
/* frontend/adminlte/index.tpl:76: {/var} */
 $var["resource"]['home2']=ob_get_clean();; ?> <!DOCTYPE html><html><head><script type="text/javascript" src="<?php
/* frontend/adminlte/index.tpl:80: {$.const.ASSET_URL} */
 echo @constant('ASSET_URL'); ?>js/common.func.js"></script><script>  <?php
/* frontend/adminlte/index.tpl:83: {var $api_base_url = $.const.API_BASE_URL} */
 $var["api_base_url"]=@constant('API_BASE_URL'); ?> <?php
/* frontend/adminlte/index.tpl:84: {var $head_title = $head_title !: $.const.TITLE_F} */
 $var["head_title"]=(isset($var["head_title"]) ? $var["head_title"] : (@constant('TITLE_F'))); ?> <?php
/* frontend/adminlte/index.tpl:85: {var $page_title = $.const.TITLE_F} */
 $var["page_title"]=@constant('TITLE_F'); ?> <?php
/* frontend/adminlte/index.tpl:86: {var $logo_text_mn = $.const.WEB_LOGO_TEXT_MN_F} */
 $var["logo_text_mn"]=@constant('WEB_LOGO_TEXT_MN_F'); ?> <?php
/* frontend/adminlte/index.tpl:87: {var $logo_text_lg = $.const.WEB_LOGO_TEXT_LG_F} */
 $var["logo_text_lg"]=@constant('WEB_LOGO_TEXT_LG_F'); ?>        <?php
/* frontend/adminlte/index.tpl:96: {var $home_link = $.php.base_url()~$.const.HOME_F_LNK} */
 $var["home_link"]=(call_user_func_array('base_url', array()).strval(@constant('HOME_F_LNK'))); ?> <?php
/* frontend/adminlte/index.tpl:97: {var $login_link = $.php.base_url()~$.const.LOGIN_LNK} */
 $var["login_link"]=(call_user_func_array('base_url', array()).strval(@constant('LOGIN_LNK'))); ?> <?php
/* frontend/adminlte/index.tpl:98: {var $skin = $.session.skin !: 'skin-purple'} */
 $var["skin"]=(((isset($_SESSION["skin"]) ? $_SESSION["skin"] : null) !== null) ? (isset($_SESSION["skin"]) ? $_SESSION["skin"] : null) : ('skin-purple')); ?> <?php
/* frontend/adminlte/index.tpl:99: {var $sidebar = $.session.sidebar !: ''} */
 $var["sidebar"]=(((isset($_SESSION["sidebar"]) ? $_SESSION["sidebar"] : null) !== null) ? (isset($_SESSION["sidebar"]) ? $_SESSION["sidebar"] : null) : ('')); ?> var base_url = '<?php
/* frontend/adminlte/index.tpl:100: {$.php.base_url()} */
 echo call_user_func_array('base_url', array()); ?>'; var api_base_url = '<?php
/* frontend/adminlte/index.tpl:101: {$.const.API_BASE_URL} */
 echo @constant('API_BASE_URL'); ?>'; var InfoLst_url = '<?php
/* frontend/adminlte/index.tpl:102: {$.php.base_url()~$.const.INFOLST_LNK} */
 echo (call_user_func_array('base_url', array()).strval(@constant('INFOLST_LNK'))); ?>'; var username = '<?php
/* frontend/adminlte/index.tpl:103: {$.session.name} */
 echo (isset($_SESSION["name"]) ? $_SESSION["name"] : null); ?>'; store('skin', '<?php
/* frontend/adminlte/index.tpl:105: {$skin} */
 echo $var["skin"]; ?>'); store('sidebar', '<?php
/* frontend/adminlte/index.tpl:106: {$sidebar} */
 echo $var["sidebar"]; ?>'); store('screen_timeout', '<?php
/* frontend/adminlte/index.tpl:107: {$.session.screen_timeout !: 60000} */
 echo (((isset($_SESSION["screen_timeout"]) ? $_SESSION["screen_timeout"] : null) !== null) ? (isset($_SESSION["screen_timeout"]) ? $_SESSION["screen_timeout"] : null) : (60000)); ?>'); <?php
/* frontend/adminlte/index.tpl:109: {var $dashboard = $dashboard !: []} */
 $var["dashboard"]=(isset($var["dashboard"]) ? $var["dashboard"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:110: {var $content_box_3 = $content_box_3 !: []} */
 $var["content_box_3"]=(isset($var["content_box_3"]) ? $var["content_box_3"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:111: {var $include_box_3 = $include_box_3 !: []} */
 $var["include_box_3"]=(isset($var["include_box_3"]) ? $var["include_box_3"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:112: {var $content_box_5 = $content_box_5 !: []} */
 $var["content_box_5"]=(isset($var["content_box_5"]) ? $var["content_box_5"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:113: {var $include_box_5 = $include_box_5 !: []} */
 $var["include_box_5"]=(isset($var["include_box_5"]) ? $var["include_box_5"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:114: {var $content_box_7 = $content_box_7 !: []} */
 $var["content_box_7"]=(isset($var["content_box_7"]) ? $var["content_box_7"] : (array())); ?> <?php
/* frontend/adminlte/index.tpl:115: {var $include_box_7 = $include_box_7 !: []} */
 $var["include_box_7"]=(isset($var["include_box_7"]) ? $var["include_box_7"] : (array())); ?> <?php  if(!empty($var["dashboard"]) && (is_array($var["dashboard"]) || $var["dashboard"] instanceof \Traversable)) {
  foreach($var["dashboard"] as $var["board"]) { ?> <?php
/* frontend/adminlte/index.tpl:117: {if ($board->type=='BOX-3')} */
 if(($var["board"]->type == 'BOX-3')) { ?> <?php
/* frontend/adminlte/index.tpl:118: {var $content_box_3[] = "{$board->url}"} */
 $var["content_box_3"][]=($var["board"]->url).""; ?> <?php
/* frontend/adminlte/index.tpl:119: {if (! empty($board->include_files))} */
 if((!empty($var["board"]->include_files))) { ?> <?php
/* frontend/adminlte/index.tpl:120: {var $include_box_3[] = "{$board->include_files}"} */
 $var["include_box_3"][]=($var["board"]->include_files).""; ?> <?php
/* frontend/adminlte/index.tpl:121: {/if} */
 } ?> <?php
/* frontend/adminlte/index.tpl:122: {elseif ($board->type=='BOX-5')} */
 } elseif(($var["board"]->type == 'BOX-5')) { ?> <?php
/* frontend/adminlte/index.tpl:123: {var $content_box_5[] = "{$board->url}"} */
 $var["content_box_5"][]=($var["board"]->url).""; ?> <?php
/* frontend/adminlte/index.tpl:124: {if (! empty($board->include_files))} */
 if((!empty($var["board"]->include_files))) { ?> <?php
/* frontend/adminlte/index.tpl:125: {var $include_box_5[] = "{$board->include_files}"} */
 $var["include_box_5"][]=($var["board"]->include_files).""; ?> <?php
/* frontend/adminlte/index.tpl:126: {/if} */
 } ?> <?php
/* frontend/adminlte/index.tpl:127: {elseif ($board->type=='BOX-7')} */
 } elseif(($var["board"]->type == 'BOX-7')) { ?> <?php
/* frontend/adminlte/index.tpl:128: {var $content_box_7[] = "{$board->url}"} */
 $var["content_box_7"][]=($var["board"]->url).""; ?> <?php
/* frontend/adminlte/index.tpl:129: {if (! empty($board->include_files))} */
 if((!empty($var["board"]->include_files))) { ?> <?php
/* frontend/adminlte/index.tpl:130: {var $include_box_7[] = "{$board->include_files}"} */
 $var["include_box_7"][]=($var["board"]->include_files).""; ?> <?php
/* frontend/adminlte/index.tpl:131: {/if} */
 } ?> <?php
/* frontend/adminlte/index.tpl:132: {/if} */
 } ?> <?php
/* frontend/adminlte/index.tpl:133: {/foreach} */
   } } ?> </script><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><title><?php
/* frontend/adminlte/index.tpl:140: {$head_title} */
 echo $var["head_title"]; ?></title> <?php
/* frontend/adminlte/index.tpl:142: {$resource[$category]} */
 echo $var["resource"][$var["category"]]; ?> </head><body class="hold-transition <?php
/* frontend/adminlte/index.tpl:145: {$skin} */
 echo $var["skin"]; ?> fixed sidebar-mini <?php
/* frontend/adminlte/index.tpl:145: {$sidebar} */
 echo $var["sidebar"]; ?>"><!-- Site wrapper --><div class="wrapper">  <?php
/* frontend/adminlte/index.tpl:151: {include $theme_path ~ "include/main_header.tpl"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval("include/main_header.tpl")))->display($var); ?> <!-- =============================================== --><!-- Left side column. contains the sidebar -->  <?php
/* frontend/adminlte/index.tpl:157: {include $theme_path ~ "include/navbar_left.tpl"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval("include/navbar_left.tpl")))->display($var); ?> <!-- =============================================== --><!-- Content Wrapper. Contains page content --> <?php
/* frontend/adminlte/index.tpl:162: {include $content} */
 $tpl->getStorage()->getTemplate($var["content"])->display($var); ?>  <!-- /.content-wrapper -->  <?php
/* frontend/adminlte/index.tpl:167: {include $theme_path ~ "include/main_footer.tpl"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval("include/main_footer.tpl")))->display($var); ?> <!-- Control Sidebar -->  <?php
/* frontend/adminlte/index.tpl:171: {include $theme_path ~ "include/navbar_right.tpl"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval("include/navbar_right.tpl")))->display($var); ?> <!-- /.control-sidebar --><!-- Add the sidebar's background. This div must be placed immediately after the control sidebar --><div class="control-sidebar-bg"></div></div><!-- ./wrapper --> <?php
/* frontend/adminlte/index.tpl:181: {if (count($content_box_5) > 0 || count($content_box_7) > 0)} */
 if((count($var["content_box_5"]) > 0 || count($var["content_box_7"]) > 0)) { ?> <?php  if(!empty($var["include_box_5"]) && (is_array($var["include_box_5"]) || $var["include_box_5"] instanceof \Traversable)) {
  foreach($var["include_box_5"] as $var["inc"]) { ?> <?php
/* frontend/adminlte/index.tpl:183: {include $theme_path ~ "{$inc}"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval(($var["inc"])."")))->display($var); ?> <?php
/* frontend/adminlte/index.tpl:184: {/foreach} */
   } } ?> <?php  if(!empty($var["include_box_7"]) && (is_array($var["include_box_7"]) || $var["include_box_7"] instanceof \Traversable)) {
  foreach($var["include_box_7"] as $var["inc"]) { ?> <?php
/* frontend/adminlte/index.tpl:186: {include $theme_path ~ "{$inc}"} */
 $tpl->getStorage()->getTemplate(($var["theme_path"].strval(($var["inc"])."")))->display($var); ?> <?php
/* frontend/adminlte/index.tpl:187: {/foreach} */
   } } ?> <?php
/* frontend/adminlte/index.tpl:188: {/if} */
 } ?> <script src="<?php
/* frontend/adminlte/index.tpl:189: {$template_url} */
 echo $var["template_url"]; ?>js/custom.js"></script></body></html><?php
}, array(
	'options' => 20608,
	'provider' => false,
	'name' => 'frontend/adminlte/index.tpl',
	'base_name' => 'frontend/adminlte/index.tpl',
	'time' => 1488181881,
	'depends' => array (
  0 => 
  array (
    'frontend/adminlte/index.tpl' => 1488181881,
  ),
),
	'macros' => array(),

        ));