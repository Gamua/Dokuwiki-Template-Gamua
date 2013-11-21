<ul>
  <li><?php tpl_link(wl("start"),"Start"); ?></li>
  <li><?php tpl_link(wl("doc:start"),"Documentation"); ?></li>
  <li><?php tpl_link(wl("extensions:start"),"Extensions"); ?></li>

  <!-- you can add links depending on a custom logic -->
  <?php if (strpos($conf['title'], "Starling") === 0) { ?>
    <li><?php tpl_link(wl("feathers:start"),"Feathers"); ?></li>
  <?php } ?>

</ul>