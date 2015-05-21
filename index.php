<?php include 'header.php'; ?>
        <div id="uvod"></div>
        <div class="body-container">
        <div class="menu">
            <div class="menu-container">
                <div class="menu-content" >
                    <nav class="menu-header">
                        <a href="#uvod">Úvod</a>
                        <a href="http://blog.petrbazout.cz">Blog</a>
                        <a href="#omne">O mně</a>
                        <a href="#prace">Práce</a>
                        <a href="#zivotopis">Životopis</a>
                        <a href="#kontakt">Kontakt</a>               
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
                        <?php include 'assets/icons/lang.php'; ?>                  
                    </div>
                </div>
            </div> 
        </div>
       <div class="container">   
           <header>
               <a href="#uvod" class="logo">
                   <?php include 'assets/icons/logo.php'; ?>
               </a>
               <div class="menu-icon-container">
                   <div class="menu-icon menu-div1"></div>
                   <div class="menu-icon menu-div2"></div>
                   <div class="menu-icon menu-div3"></div>
               </div>
           </header>
           <div class="arrowcontainer">
               <a href="#omne" class="arrow">   
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
        <section id="omne" class="profil"> 
            <div class="content-container">
                <div class="content">
                    <h1 class="profil-header">O mně</h1>
                    <div class="headshot-comtainer" >
                        <img class="headshot" src="assets/img/hs.svg" alt="Profilový obrázek"/>
                    </div>
                    <div class="content-text-container" >
                        <p class="content-text">
                            <span>Ahoj! Jmenuju se Petr Bažout a zajímám se o vývoj webu.</span> Mezi moje znalosti patří například HTML5, CSS3, JavaScript, jQuery, Wordpress. Pokud se zrovna nezabývám webem, tak s největší pravděpodobností sportuju nebo čtu. <br>
                            Neváhejte mě kontaktovat s nabídky práce. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="prace" class="prace">
            <div class="prace-container">
                <div class="prace-content">
                    <h1 class="profil-header">Práce</h1>
                    <div class="prace-img">
                        <img src="assets/img/sakura-crop.jpg" alt="Sakura Žatec stránky screenshot">
                        <div class="overlay overlay1"> 
                            <h1 class="overlay-text">Sakura Žatec</h1> 
                        </div>
                    </div>    
                </div>
                <div class="prace-content-container">
                    <div class="prace-content-img prace-content-img1">
                        <h1>Sakura Žatec</h1>
                        <p>
                            Stránky věnované soukromému Karate-Do klubu Sakura Žatec. Stránky můžete navštívit na adrese <a href="http://sakurazatec.cz" class="work-section-link" target="_blank">sakurazatec.cz</a>
                        </p>
                        <img src="assets/img/sakura-zatec-screenshot.jpg" srcset="assets/img/sakura-zatec-screenshot.jpg 1x, assets/img/sakura-zatec-screenshot2x.jpg 2x" alt="Sakura Žatec stránky screenshot">
                    </div> 
                </div>
            </div>
        </section>
        <section id="zivotopis" class="zivotopis">
            <div class="zivotopis-container">
                <div class="zivotopis-content">
                    <h1 class="profil-header">Životopis</h1>
                    <div class="zivotopis-download-container">
                        <a href="/assets/downloads/petr-bazout-zivotopis.pdf" download class="zivotopis-download">Stáhnout životopis</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontakt" class="kontakt">
            <div class="kontakt-container">
                <div class="kontakt-content">
                    <h1 class="profil-header">Kontakt</h1>
                    <div class="form-container">
                        <form method="post" action="mail.php">
                            <div class="form-group">
                                <label class="label">  
                                    <input type="text" name="name"  class="input" required autocomplete="off">
                                    <span class="labelformspan">Jméno</span>
                                </label>
                                <label>
                                    <input type="email" name="email" class="input" required autocomplete="off"> 
                                    <span class="labelformspan">Email</span>
                                </label>
                            </div>
                            <label class="obs">   
                                <textarea name="message" rows="8" required autocomplete="off" class="input"></textarea>
                                <span class="obsah">S čím vám mohu pomoci?</span>
                            </label>
                            <label>
                                <input class="submit" type="submit" value="Odeslat">      
                            </label>    
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php'; ?>