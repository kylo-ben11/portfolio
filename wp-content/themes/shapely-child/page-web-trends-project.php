<?php get_header(); ?>
<style media="screen">




section.content-area {
  background-color: #000;
}
.container {
  width: 100%;
  padding:0;
}
.block {
  background-color: #f5f5f5;
  width: 100%;
  padding: 50px;
}
.footer-inner, .nav-bar {
  width: 1170px;
}
.banner {
  margin: 80px auto auto 35%;
}


</style>

<div class="block block_innovation">
  <h2 class=" animated slideInLeft duration1 eds-on-scroll ">"Innovation distinguishes between a leader and a follower."</h2>
  <h3 class="animated slideInRight duration1 eds-on-scroll">-Steve Jobs</h3>
</div>
<div class="block_explanation block_explanation__innovation">
  <div class="shape_explanation"></div>
  <span class="get_right"><?= get_field('heading_one');?></span>
  <?= the_content(); ?>
  <div class="shape_explanation2"></div>
  <span class="get_left"><?= get_field('heading_two');?></span>
  <?= get_field('explain_create');?>
</div>

<div class="block block_possibilities">
  <h2 class=" animated slideInLeft duration1 eds-on-scroll ">"The true sign of intelligence is not knowledge, but imagination."</h2>
  <h3 class="animated slideInRight duration1 eds-on-scroll">-Albert Einstein</h3>
</div>
<div class="block_explanation block_explanation__possibilities">
  <div class="shape_explanation3"></div>
<span class="get_right2"><?= get_field('heading_three');?></span>
<?= get_field('creative_potential');?>
</div>
<div class="img-clip-block">
    <div class="img-clip-row">
        <div class="img-clip-wrap">
        </div>
    </div>

    <div class="img-clip-row">
        <a href="<?= esc_url(home_url());?>" class="img-clip-wrap">
            <div class="overlay">
                <div class="overlay-content">Home
              </div>
            </div>
        </a>

        <a href="<?= esc_url(get_permalink(108));?>" class="img-clip-wrap">
            <div class="overlay">
                <div class="overlay-content">The Xavier Gallery</div>
            </div>
        </a>
    </div>

    <div class="img-clip-row">
        <a href="<?=esc_url(get_permalink(102)); ?>" class="img-clip-wrap polygon-clip-rhombus">
            <div class="overlay">
                <div class="overlay-content">The Eska Gallery</div>
            </div>
        </a>
    </div>
</div> <!-- /img-clip-block -->

<svg class="clip-svg">
    <defs>
        <clipPath id="clip-diamond-demo" clipPathUnits="objectBoundingBox">
            <polygon points="0.5 0, 1 0.5, 0.5 1, 0 0.5" />
        </clipPath>
    </defs>
</svg>

<div class="block block_testing">
  <h2 class=" animated slideInLeft duration1 eds-on-scroll ">Testing & Reflection</h2>
</div>
<div class="block_explanation__testing">
  <span class="get_left"><?= get_field('heading_four');?></span>
  <?= get_field('testing_content');?>
  <span class="get_right"><?= get_field('heading_five');?></span>
  <?= get_field('reflection_statement');?>
  <span class="get_left"><?= get_field('heading_six');?></span>
  <?= get_field('works_cited');?>
</div>

<script src="<?php echo home_url('/wp-content/themes/shapely-child/animate.js');?>"></script>
<?php get_footer(); ?>
