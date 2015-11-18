
<?php include("assets/head.php"); ?>
<div class="container">

    
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-3 z-depth-1 cardProfil">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="images/batman.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
            </div>
          </div>
        </div>
      </div>
    
    
    
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">messagerie</a></li>
        <li class="tab col s3"><a  href="#test2">vente</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12"><?php include("assets/messagerie.php"); ?></div>
    <div id="test2" class="col s12"><?php include("assets/vente.php"); ?></div>
    </div>
    
    
    
          </div>

    
          </div>


<?php include("assets/footer.php"); ?>
