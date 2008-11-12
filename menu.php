<?php
  include(DOKU_TPLINC.'tpl_functions.php');

  tpl_topbar();

  $translation = &plugin_load('syntax','translation');
	echo $translation->_showTranslations();
?>
