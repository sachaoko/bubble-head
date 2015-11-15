
<?php include("assets/head.php"); ?>
<div class="container">

      <div class="row">
        <div class="col s12 m12">
          <div class="card card-home    red accent-4">
            <div class="card-content black-text">
              <span class="card-title black-text">Welcome</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
               <a class="modal-trigger" href="#modal1">Inscription</a>
              <a href="#">connexion</a>
            </div>
          </div>
        </div>
          
      </div>
    
    
           <div class="slider">
            <ul class="slides">
               <li>
                  <img src="images/cv.jpg"> 
                  <div class="caption center-align">
                     <h3>This is our big Tagline!</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/jpg.jpg"> 
                  <div class="caption left-align">
                     <h3>Left Aligned Caption</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/1.jpg">
                  <div class="caption right-align">
                     <h3>Right Aligned Caption</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/sp.jpg"> 
                  <div class="caption center-align">
                     <h3>This is our big Tagline!</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
            </ul>
         </div> 
    <div class="row">
            <div class="col s4  ">
               <div class="card">
                  <div class="card-image">
                     <img src="images/wd.jpg">
                     <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                     <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.
                     </p>
                  </div>
                  <div class="card-action">
                     <a href="#">This is a link</a>
                  </div>
               </div>
            </div>
            <div class="col s4  ">
               <div class="card">
                  <div class="card-image">
                     <img src="images/db.jpg">
                     <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                     <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.
                     </p>
                  </div>
                  <div class="card-action">
                     <a href="#">This is a link</a>
                  </div>
               </div>
            </div>
            </di>
            <div class="col s4  ">
               <div class="card">
                  <div class="card-image">
                     <img src="images/gastonlagaffe.jpg">
                     <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                     <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.
                     </p>
                  </div>
                  <div class="card-action">
                     <a href="#">This is a link</a>
                  </div>
               </div>
            </div>
         </div>
  
      <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Comics</a></li>
        <li class="tab col s3"><a  href="#test2">Manga</a></li>
        <li class="tab col s3"><a href="#test3">BD</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12"><?php include("assets/home_comics.php"); ?></div>
    <div id="test2" class="col s12"><?php include("assets/home_manga.php"); ?></div>
    <div id="test3" class="col s12"><?php include("assets/home_bd.php"); ?></div> 
    </div>
    
    
    
          </div>


<?php include("assets/footer.php"); ?>
