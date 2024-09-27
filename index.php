<?php require_once './includes/header.php'; ?>

<div>

   <section class="section is-black" style="background-image: url('back.png'); background-size: cover; background-position: center;">
      <div class="container">
         <div class="is-vcentered columns is-multiline">
            <div class="column is-8 is-8-desktop mb-4">
               <h2 id="about-title" class="has-text-white mt-2 mb-3 is-size-1 is-size-3-mobile has-text-weight-bold"><?php echo $lang['title.1']; ?></h2>
               <p id="about-text1" class="has-text-white"><?php echo $lang['title.2']; ?></p>
               <p id="about-text2" class="has-text-white"><?php echo $lang['title.3']; ?></p>
               <p id="about-text3" class="has-text-white"><?php echo $lang['title.4']; ?></p>
               <br>
               <b><p id="about-text4" class="has-text-white"><?php echo $lang['title.5']; ?></p></b>
            </div>
         </div>
      </div>
   </section>
    
   <section class="section" >
      <div class="container">
         <div class="mb-6 pb-3 columns is-multiline">
            <div class="column is-12 is-6-desktop mx-auto has-text-centered">
            <h2 class="mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">
            <img src="images/haunted-icon.png" alt="Game Icon" style="max-width:40px;">
            <?php echo $lang['hauntedbricks.title']; ?></h2>
               <p class="subtitle has-text-grey mb-5"><?php echo $lang['hauntedbricks.subtitle']; ?></p>
               <div class="buttons is-centered">
                  <a class="button is-primary" href="https://play.google.com/store/apps/details?id=com.urustudios.hauntedbricks">
                  <span class="icon is-small">
                  <i class="fa fa-google"></i>
                  </span>
                  <span><?php echo $lang['hauntedbricks.google']; ?></span>
                  </a>
                  <a class="button is-primary" href="https://apps.apple.com/us/app/haunted-bricks/id6692628903?platform=iphone">
                  <span class="icon is-small">
                  <i class="fa fa-apple"></i>
                  </span><?php echo $lang['hauntedbricks.apple']; ?><span>
                  </span>
                  </a>
               </div>
            </div>
         </div>
         <div class="columns is-multiline">
            <div class="column is-12 is-6-desktop">
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                  <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['hauntedbricks.detail.title1']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['hauntedbricks.detail.desc1']; ?></p>
                  </div>
               </div>
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                     <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['hauntedbricks.detail.title2']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['hauntedbricks.detail.desc2']; ?></p>
                  </div>
               </div>
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                     <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['hauntedbricks.detail.title3']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['hauntedbricks.detail.desc3']; ?></p>
                  </div>
               </div>
            </div>
            <div class="column is-12 is-6-desktop">

               <div class="mobile-container">
               <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }'>
               <div class="carousel-cell">
               <img src="images/hauntedbricks2.png" alt="Game Image 1">
               </div>
               <div class="carousel-cell">
               <img src="images/hauntedbricks1.png" alt="Game Image 2">
               </div>
               <div class="carousel-cell">
               <iframe src="https://www.youtube.com/embed/hRXDxhLbANY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            </div>

               </div>
            </div>

         </div>
      </div>
   </section>   

   <section class="section " style="background-color: hsl(217.5deg 14.29% 10.98%);" >
      <div class="container">
         <div class="mb-6 pb-3 columns is-multiline">
            <div class="column is-12 is-6-desktop mx-auto has-text-centered">
            <h2 class="mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">
            <img src="images/icon-spiders.png" alt="Game Icon" style="max-width:40px;">
            <?php echo $lang['ants.title']; ?></h2>
               <p class="subtitle has-text-grey mb-5"><?php echo $lang['ants.subtitle']; ?></p>
               <div class="buttons is-centered">
                  <button class="button disabled is-primary" disabled>
                     <span class="icon is-small">
                     <i class="fa fa-google"></i>
                     </span>
                     <span><?php echo $lang['ants.google']; ?></span>
                  </button>
                  <button class="button disabled is-primary" disabled>
                     <span class="icon is-small">
                     <i class="fa fa-apple"></i>
                     </span><?php echo $lang['ants.apple']; ?><span>
                     
                     </span>
                  </button>
               </div>
            </div>
         </div>
         <div class="columns is-multiline">
            <div class="column is-12 is-6-desktop">
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                  <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['ants.detail.title1']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['ants.detail.desc1']; ?></p>
                  </div>
               </div>
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                     <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['ants.detail.title2']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['ants.detail.desc2']; ?></p>
                  </div>
               </div>
               <div class="mb-6 is-flex">
                  <span><img src="images/game-icon.svg" width="80" alt=""></span>
                  <div class="ml-3">
                     <h4 class="is-size-4 has-text-weight-bold mb-2"><?php echo $lang['ants.detail.title3']; ?></h4>
                     <p class="subtitle has-text-grey"><?php echo $lang['ants.detail.desc3']; ?></p>
                  </div>
               </div>
            </div>
            <div class="column is-12 is-6-desktop">

               <div class="mobile-container">
               <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": false }'>
               <div class="carousel-cell">
               <img src="images/spiders-bg.png" alt="Game Image 1">
               </div>
            </div>

               </div>
            </div>

         </div>
      </div>
   </section>
   
   
</div>

<?php require_once './includes/footer.php'; ?>
