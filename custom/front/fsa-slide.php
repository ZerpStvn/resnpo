<?php
function fsaSlide($slideNumber = null, $slideTitle = null, $slideDesc = null, $slideState = null)
{
?>
  <div class="fsa-slide flex <?php echo $slideState ?>" id="<?php echo "slide-" . $slideNumber ?>">
    <div class="fsa-slide-content flex">
      <div class="fsa-slide-display flex">
        <button class="fsa-nav-button sd_title active" onclick="showSlide(<?php echo $slideNumber - 1; ?>)">
          <?php echo "0" . $slideNumber; ?>
        </button>
        <div class="fsa-slide-title">
          <h3 class="sb_title"><?php echo $slideTitle ?></h3>
        </div>
      </div>
      <div class="fsa-slide-desc">
        <p>
          <?php echo $slideDesc ?>
        </p>
      </div>
    </div>
  </div>
<?php
}
