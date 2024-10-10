<?php

function articlefront($articletitle = null, $articlecontent = null, $articleimage = null)
{

?>
  <section class="front-section">
    <div class="front-section-content scaleIn  ">
      <h1>
        <?php echo $articletitle  ?>
      </h1>
      <p class="text-justified">
        <?php echo $articlecontent ?>
    </div>
    <div class="front-section-image slideleft">
      <img src="<?php echo RESNPO_IMAGE . $articleimage ?>" alt="">
    </div>
  </section>
<?php


}
