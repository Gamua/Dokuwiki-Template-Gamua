<?php
/**
 * Starling Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=790" />
  <title>
    <?php tpl_pagetitle()?> - <?php echo strip_tags($conf['title'])?>
  </title>

  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon(array('favicon', 'mobile')) ?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
  
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400|Ubuntu:400,500,700|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">  

  <div class="stylehead">    
    <div class="header_row">
      <div class="header">
        <a href="<?php echo(wl()) ?>">
          <div class="logo">
            <h1><?php echo $conf['title'] ?></h1>
          </div>
        </a>
        <div id="navigation">
          <?php include('menu.php'); ?>
        </div>
        <div class="clearer"></div>
      </div>
    </div>
  </div>
  
  <div class="breadcrumbs_bar">
    <!--
    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>    
    -->
    
    <div class="breadcrumbs">
      <?php if ($conf['youarehere']) tpl_youarehere();
            else tpl_breadcrumbs(); ?>
      <?php tpl_searchform() ?>
    </div>  
  </div>
  
  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page_bar">    
    <div class="page">
    
      <?php html_msgarea()?>
    
      <!-- wikipage start -->
      <?php tpl_content()?>
      <!-- wikipage stop -->
    
      <div class="meta">
        <div class="user">
          <?php tpl_userinfo()?>
        </div>
        <div class="doc">&nbsp;
          <?php tpl_pageinfo()?>
        </div>
      </div>
    
    </div>
  </div>

  <div class="clearer">&nbsp;</div>

  <?php tpl_flush()?>
  
  <div class="stylefoot">    

    <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

    <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
        <?php tpl_button('revert')?>
      </div>
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('subscribe')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
      </div>
      <div class="clearer"></div>
    </div>

    <div class="credits">Powered by <a href="http://www.dokuwiki.org">DokuWiki</a></div>

    <!-- <?php tpl_license(false);?> -->
    <!-- <?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?> -->
    
  </div>

</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
