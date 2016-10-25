<?php get_header(''); ?>






  <div class="side-container">
    <header class="main-slider">
      <div class="row expanded collapse">
        <div class="column small-12">
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
          <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="orbit-slide">
            <div>
            <h2> W nauce nie chodzi o to, aby o niej umieć mówić, ale żeby mieć w niej coś do powiedzenia.</h2>
            <img src="<?php bloginfo('template_url'); ?>/img/slide-1.jpg" alt="">
             </div> 
            </li>
           <li class="orbit-slide">
            <div>
            <h2>Liceum Ogolnokształcące dla dorosłych Wiedza.pl w Garwolinie</h2>
         <img src="<?php bloginfo('template_url'); ?>/img/slide-2.jpg" alt="">
         </div>
            </li>
            <li class="orbit-slide">
            <div>
            <h2>Policealna Szkoła Zawodowa Wiedza.pl w Garwolinie</h2>
          <img src="<?php bloginfo('template_url'); ?>/img/slide-3.jpg" alt="">
          </div>
              
            </li>
          </ul>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          </nav>
        </div>
      </div>
      </div>
    </header>
    <main class="site-main">
    
     

     <section class="post-base">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <div class="row">
            <div class="column small-12">
              <h2><?php the_title( ); ?></h2>
            </div>
            </div>
            <p><?php the_content(); ?></p>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Post'); ?></p>
        <?php endif; ?>
       
    </section>
    
    </main>
    <?php get_footer( ); ?>