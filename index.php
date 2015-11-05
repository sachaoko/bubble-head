
<?php include("assets/head.php"); ?>
<div class="container">
         <div class="row">
            <div class="col s12 center">
               <nav class="card red accent-2">
                  <div class="nav-wrapper">
                     <form>
                        <div class="input-field">
                           <input id="search" type="search" required>
                           <label for="search"><i class="material-icons">search</i></label>
                           <i class="material-icons">close</i>
                        </div>
                     </form>
                  </div>
               </nav>
            </div>
         </div>
         <div class="row">
            <div class="input-field col s6">
               <select>
                  <option value="" disabled selected>Genre</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
               </select>
            </div>
            <div class="input-field col s6">
               <select>
                  <option value="" disabled selected>Années</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
               </select>
            </div>
            <a class="btn right" onclick="Materialize.toast('I am a toast', 4000)">Toast!</a>
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
         <div class="slider">
            <ul class="slides">
               <li>
                  <img src="images/cv.jpg"> <!-- random image -->
                  <div class="caption center-align">
                     <h3>This is our big Tagline!</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/jpg.jpg"> <!-- random image -->
                  <div class="caption left-align">
                     <h3>Left Aligned Caption</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/1.jpg"> <!-- random image -->
                  <div class="caption right-align">
                     <h3>Right Aligned Caption</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
               <li>
                  <img src="images/sp.jpg"> <!-- random image -->
                  <div class="caption center-align">
                     <h3>This is our big Tagline!</h3>
                     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                  </div>
               </li>
            </ul>
         </div>
      </div>


<?php include("assets/footer.php"); ?>
