<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>






<!--hero-->
<section id="home" class="d-flex align-items-center min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h1 class="dispay-4 mt-5">Gil's design</h1> <!--responsive ??????-->
            
          </div>
        </div>
      </div>
    </section>

    <!--about-->
    <section id="about" class="d-flex align-items-center min-vh-100" >
      <div class="container">
        <h2 style="text-align: right;">who am I?</h2> 
      
          <div class="row">
            <div class="col col-12 col-md-6 item top-box-2 mt-5 px-4" id="side-border-right">
            
              <p>Hey there! Nice to meet you, my name is Giedrė. I'm an enthusiastic Web | Graphic Designer with a passion in creating good looking stuff. </p>
              <p>Armed with a bit too much coffee and some design tools, I'm on a mission to sprinkle a little charm (and hopefully a few smiles) across the digital landscape.</p>
              <p>Join me as I stumble through pixels and vectors, turning nothing into something!</p>
            </div>
            
                

            <div class="col col-12 col-md-6 item top-box-3 text-align-right align-self-end p-4">
              <a href="https://indd.adobe.com/view/ee32ed1d-b9f1-4828-99a2-be5c706735a0/" class="me-4 text-reset">
                <button type="button" class="btn btn-link">CV</button> 
              </a>
              <a href="https://www.youtube.com/watch?v=8XffO0THPUA/" class="me-4 text-reset">
                <button type="button" class="btn btn-link">Video CV</button> 
              </a>
              <a href="https://www.linkedin.com/in/giedre-limantaite/" class="me-4 text-reset">
                <button type="button" class="btn btn-link">LinkedIn</button> 
              </a>
              <a href="https://www.behance.net/giedrlimantait/" class="me-4 text-reset">
                <button type="button" class="btn btn-link">Behance</button> 
              </a>
            
            </div>
          </div>
      </div>
    </section>





    

       <!--what do I do-->
       <section id="work" class="d-flex align-items-center min-vh-100 bg-dark align-items-center" style="padding: 10%;">
        <div class="container">
          <div class="row">
            <div class="col col-12 col-md-6 item top-box-2">
              <p style="color: white;">what do I do?</p>
              <br>
              <h2 style="color: white; ">designing</h2>
              <h3 id="text-line-left" style="font-style: italic;">
                experiences</h3>
                <br>
                <BR></BR>

                <div class="d-flex  top-box-3"> 
                  <p class="p-4" style="color: white;"># UI/UX DESIGN</p>
                  <P class="p-4" style="color: white;"># BRANDING</P>
                  <P class="p-4" style="color: white;"># GRAPHIC DESIGN</P>
                  
                </div>
        
               
            </div>
            <div class="col col-12 col-md-6 item top-box-3">
              <picture>
                <img src="<?php echo get_template_directory_uri() ?>/images/minime.svg" class="d-block w-100" alt="minime">
                </picture>
            </div>
          </div>
        </div>
       </section>




       <?php get_template_part("template-parts/web") ?>
       <?php get_template_part("template-parts/graphic") ?>
      









       <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>