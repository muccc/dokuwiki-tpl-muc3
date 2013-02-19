<?php
/**
 * DokuWiki Incognitek Template
 *
 * @link   http://wwww.incognitek.com
 * @author Daniel Sperl <redge@incognitek.com>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>
  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/chaos.ico" />
  <?php tpl_metaheaders()?>
  <?php include('ie6_fixes.php'); ?>
</head>

<body>
<!-- Ueberschrift -->
  <div id="wrap">
    <div id="header">
	  <a href="//muc.ccc.de/"><img src="<?php echo DOKU_TPL ?>images/muc3_klein.gif" alt="muCCC logo" id="logo" width="88" height="90" /></a>
	  <h1><a href="/">muCCC - wiki</a></h1>
	  <h2>chaos computer club muenchen</h2>
    </div>
	  <?php include('menu.php'); ?>
	<div id="content">
<!-- Inhalt -->
<!-- BEGIN OF ACTUAL PAGE CONTENTS -->
  <?php html_msgarea()?>
<!--
      <?php if($conf['breadcrumbs']) {?>
      <div id="breadcrumbs"><?php tpl_breadcrumbs()?></div>
      <?php } elseif ($conf['youarehere']) {?>
      <div id="breadcrumbs"><?php tpl_youarehere() ?></div>
      <?php }?>
-->
      <?php flush()?>    

      <div class="dokuwiki">

        <!-- wikipage start -->
        <?php tpl_content(); ?>
        <!-- wikipage stop -->

        <div class="clearer">&nbsp;</div>

        <div id="pageinfo">
          <div id="user"><?php tpl_userinfo()?></div>
	  <div id="doc">
	  <?php tpl_pageinfo();
	     
	     if($INFO['userinfo']) {
		echo "&middot; [";
		tpl_actionlink('subscribe');
		echo "]";
		echo "&middot; [";
		tpl_actionlink('profile');
		echo "]";
		echo "&middot; [";
		tpl_actionlink('top');
		echo "&#160";
		echo "]";
	     }
	  ?>
          </div>   
        </div>   
      </div>     

      <div id="footer">
        <div id="footer_left">
	 <?php tpl_button('recent')?>
	 <?php tpl_button('media')?>
	  <?php tpl_button('index')?>

        </div>
        <div id="footer_center">
	 <?php tpl_button('edit')?>
	  <?php
	        if ($INFO['exists']) { 
                tpl_button('history'); 
           }?>
          <?php tpl_button('admin')?>
	  <?php tpl_button('login')?>


        </div>
        <div id="footer_right">
          <?php tpl_searchform(); ?>        
					<?php // tpl_translation(); ?>
        </div>        
      </div>

    </div>

    <?php
    $tgt = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
    ?>

  
  </div>

<?php if ($conf['allowdebug']) { 
    echo '<!-- page made in '.round(delta_time(DOKU_START_TIME), 3).' seconds -->';
} ?>

<div class="no"><?php /* DokuWiki housekeeping */ tpl_indexerWebBug()?></div>
</body>
</html>
