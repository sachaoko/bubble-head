 <ul id="slide-out" class="side-nav">
     <li> <a class="modal-trigger" href="#modal1"><img class="circle right profil_home" src="images/spidey.png"></a></li>
         <li><a href="#!">Profil</a></li>
         <li><a href="#!">Messagerie</a></li>
         <li><a href="#!">Vendre</a></li>
         <li><a href="#!">Déconnexion</a></li>
            
      </ul>
   <!--   <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
         <a data-activates="slide-out" class="mail btn-floating btn-large red">
         <i class="material-icons">email</i>
         </a>
      </div>
      --><footer class="page-footer red accent-2">
         <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <h5 class="white-text">Footer Content</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
               </div>
               <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                     <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                     <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                     <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                     <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               © 2014 Copyright Text
               <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
         </div>
      </footer>
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <script>
         $(document).ready(function() {
         $('select').material_select();
         });
            
          $(document).ready(function(){
          $('.slider').slider({full_width: true});
         });
         
          $('.mail').sideNav({
          menuWidth: 240, // Default is 240
          edge: 'left', // Choose the horizontal origin
         }
         );
          
         $(document).ready(function(){
         // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
         $('.modal-trigger').leanModal();
         });
         
      </script>
   </body>
</html> 