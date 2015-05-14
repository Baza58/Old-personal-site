<?php include 'header.php'; ?>
        <div id="home"></div>
        <div class="body-container">
        <div class="menu">
            <div class="menu-container">
                <div class="menu-content" >
                    <nav class="menu-header">
                        <a href="#home">Home</a>
                        <a href="http://blog.petrbazout.cz">Blog</a>
                        <a href="#aboutme">About me</a>
                        <a href="#work">Work</a>
                        <a href="#cv">CV</a>
                        <a href="#contact">Contact</a>               
                    </nav> 
                    <div class="icons-header">
                        <a href="https://www.facebook.com/bazout" target="_blank">
                            <?php include 'assets/icons/fb-icon.php'; ?>
                        </a>
                        <a href="https://twitter.com/PetrBa" target="_blank">
                            <?php include 'assets/icons/twitter-icon.php'; ?>
                        </a>
                        <a href="https://cz.linkedin.com/in/bazout" target="_blank">
                            <?php include 'assets/icons/linkedin-icon.php'; ?>
                        </a>
                        <a href="mailto:bazout.p@gmail.com">
                            <?php include 'assets/icons/gmail-icon.php'; ?>
                        </a>
                    </div> 
                    <div class="lang">
                        <?php include 'assets/icons/lang-en.php'; ?>                  
                    </div>
                </div>
            </div> 
        </div>
        <div class="container">
           <header>
               <a href="#home" class="logo">
                   <?php include 'assets/icons/logo.php'; ?>
               </a>
               <div class="menu-icon-container">
                   <div class="menu-icon menu-div1"></div>
                   <div class="menu-icon menu-div2"></div>
                   <div class="menu-icon menu-div3"></div>
               </div>
           </header>
           <div class="arrowcontainer">
               <a href="#aboutme" class="arrow">
                   <div class="arrow-container2">
                       <div class="arrow1"></div>
                       <div class="arrow2"></div>
                   </div>
               </a>
           </div>
           <div class="text">
               <h1>Petr Bažout</h1>
               <h2> Front-End Web Developer</h2>
           </div>
        </div>
        <section id="aboutme" class="profil"> 
            <div class="content-container">
                <div class="content">
                    <h1 class="profil-header">About me</h1>
                    <div class="headshot-comtainer" >
                        <img class="headshot" src="assets/img/hs.svg" />
                    </div>
                    <div class="content-text-container" >
                        <p class="content-text">
                            <span>Hi! My name is Petr Bažout and I'm interested in web development.</span> My skills include HTML5, CSS3, JavaScript, jQuery and  Wordpress. When I'm not developing for web I usually do sports or read. <br>
                            Feel free to contact me with job offers.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="prace">
            <div class="prace-container">
                <div class="prace-content">
                    <h1 class="profil-header">Work</h1>
                    <div class="prace-img">
                        <img src="assets/img/sakura-crop.jpg">
                        <div class="overlay overlay1"> 
                            <h1 class="overlay-text">Sakura Žatec</h1> 
                        </div>
                    </div>
                </div>
                <div class="prace-content-container">
                    <div class="prace-content-img prace-content-img1">
                        <h1>Sakura Žatec</h1>
                        <p>
                            Website for Karate-Do Club Sakura Žatec. You can visit the site at <a href="http://sakurazatec.cz" class="work-section-link" target="_blank">sakurazatec.cz</a>
                        </p>
                        <img src="assets/img/sakura-zatec-screenshot.png">
                    </div>
                </div>
            </div>
        </section>
        <section id="cv" class="CV">
            <div class="zivotopis-container">
                <div class="zivotopis-content">
                    <h1 class="profil-header">CV</h1>
                    <div class="zivotopis-download-container">
                        <a href="assets/downloads/petr-bazout-cv.pdf" download class="zivotopis-download">Download CV</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="kontakt">
            <div class="kontakt-container">
                <div class="kontakt-content">
                    <h1 class="profil-header">Contact</h1>
                    <div class="form-container">
                        <form method="post" action="mail.php">
                            <div class="form-group">
                                <label class="label">  
                                    <input type="text" name="Jméno"  class="input" required autocomplete="off">
                                    <span class="labelformspan">Name</span>
                                </label>
                                <label>
                                    <input type="email" name="Email" class="input" required autocomplete="off"> 
                                    <span class="labelformspan">Email</span>
                                </label>
                            </div>
                            <label class="obs">                                    
                                <textarea name="obsah" rows="8" required autocomplete="off"></textarea>
                                <span class="obsah">How can I help you?</span>
                            </label>
                            <label>
                                <input class="submit" type="submit" value="Send">      
                            </label>    
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer-en.php'; ?>