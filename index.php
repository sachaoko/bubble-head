<?php include("assets/head.php"); ?>
    <div class="container">




        <div class="slider card-home">
            <ul class="slides">
                <li>
                    <img src="images/scott.jpg">
                    <div class="caption slide1  left-align">
                        <h3>Scott Pilgrim</h3>
                        <h5 class="light grey-text text-lighten-3">Il revient en couleur</h5>
                    </div>
                </li>
                <li>
                    <img src="images/jpg.jpg">
                    <div class="caption right-align">
                        <h3>Le chat du rabin</h3>
                        <h5 class="light grey-text text-lighten-3">Nouvelle BD de Joan Sfar</h5>
                    </div>
                </li>
                <li>
                    <img src="images/gally.jpeg">
                    <div class="caption right-align">
                        <h3>Gumn</h3>
                        <h5 class="light grey-text text-lighten-3">Redécouvrir le manga Culte</h5>
                    </div>
                </li>
                <li>
                    <img src="images/cv.jpg">
                    <div class="caption left-align">
                        <h3>Hellboy in Hell</h3>
                        <h5 class="light grey-text text-lighten-3">Nouvelle étape dans la vie de Hellboy</h5>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col s6 m6">
                <div class="card card-home red accent-4">
                    <div class="card-content white-text">
                        <span class="card-title white-text">Welcome</span>
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a class="modal-trigger" href="#modal1">Inscription</a>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card card-home red accent-4">
                    <div class="card-content white-text">
                        <span class="card-title white-text">Welcome</span>
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a class="modal-trigger" href="#modal2">connexion</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4  ">
                <div class="card">
                    <div class="card-image">
                        <img src="images/wd.jpg">
                        <span class="card-title">Comics</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
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
                        <span class="card-title">Manga</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
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
                        <span class="card-title">BD</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
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
                    <li class="tab col s3"><a href="#test2">Manga</a></li>
                    <li class="tab col s3"><a href="#test3">BD</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <?php include("assets/home_comics.php"); ?>
            </div>
            <div id="test2" class="col s12">
                <?php include("assets/home_manga.php"); ?>
            </div>
            <div id="test3" class="col s12">
                <?php include("assets/home_bd.php"); ?>
            </div>
        </div>



    </div>


    <?php include("assets/footer.php"); ?>