<?php include 'headerFindActor.php';?>


 <!--! end of #sidebar -->

    <div id="content"  style="width:750px;"class="defaults">

       <!-- navigation holder -->
      <div class="holder"></div>

      <!-- item container -->
      <ul id="itemContainer">
      <?php 
     for ($i=1; $i < 40; $i++) { 
      ?>
        <li><img src="<?php echo base_url();?>assets/img/preload.png" data-original="<?php echo base_url();?>assets/img/img1/img (<?php echo $i;?>).jpg" alt="image"></li>
<?php
}
        ?>
      </ul>
<div class="holder"></div>

    </div> <!--! end of #content -->


  <script>

  /* Download lazy load plugin and make sure you add it in the head of your page. */

  /* when document is ready */
  $(function() {

    /* initiate lazyload defining a custom event to trigger image loading  */
    $("ul li img").lazyload({
      event : "turnPage",
      effect : "fadeIn"
    });

    /* initiate plugin */
    $("div.holder").jPages({
      containerID : "itemContainer",
      animation   : "fadeInUp",
      callback    : function( pages, items ){
        /* lazy load current images */
        items.showing.find("img").trigger("turnPage");
        /* lazy load next page images */
        items.oncoming.find("img").trigger("turnPage");
      }
    });

  });
  </script>
