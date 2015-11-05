
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
<!-- start feedwind code --><script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://feeds.feedburner.com/PlaneteBdLight-ChroniquesFranco-belges",rssmikle_frame_width: "1280",rssmikle_frame_height: "400",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "test",rssmikle_title_link: "http://feeds.feedburner.com/PlaneteBdLight-ChroniquesFranco-belges",rssmikle_title_bgcolor: "#FF0000",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
<div style="font-size:10px; text-align:center; width:1280px;">
   <a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.-->
</div>
<!-- end feedwind code -->
      </div>


<?php include("assets/footer.php"); ?>
