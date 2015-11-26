<div class="field">
  <?php foreach (range(1, 28) as $y) { ?>
    <div class="row">
      <?php foreach (range(1, 28) as $x) { ?>
        <div class="land"
          data-coordinates="<?php echo $x; ?>,<?php echo $y; ?>">
            <span class="debug-coords"><?php echo $x; ?>,<?php echo $y; ?></span>
          
          <?php if (($y == 10 && $x == 15)) { ?>
            <mage></mage>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  <?php } ?>
</div>
