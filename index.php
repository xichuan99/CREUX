<DOCTYPE html>
    <head>
    <title>CREUX</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <div class="nav">
            <div class="nav-line"></div>
            <div class="nav-logo-sq">
                <div class="logo" style="background-image: url('Assets/CREUX_logo_full color_SVG.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
            </div>
            <!--
            <div class="input-cont">
            <select id="country" name="country" placeholder="Country"; class="dropdown">
                    <option value="Afganistan">English</option>
                    <option value="Albania">Indonesia</option>
                </select>
                
                </form>
                <hr class="hr-email"></hr>
                <hr class="hr-drpdown"></hr>
            </div>
            -->
            <div class="lang-cont">
                <div class="lang-txt">ENGLISH</div>
                <div class="dr-icon" style="background-image: url('Assets/dropdown.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
            </div>
            <div class="menu-icon" style="background-image: url('Assets/burger-menu.svg'); background-size: cover;
            background-repeat: no-repeat;"></div>
        </div>

        <section id="teampage">

            <div id="main-car">
                <div class="main-car-inner" data-ride="carousel">
                    <div class="item-active" style="background-image: url('Assets/team_carousel.jpg'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="car-item-title">LOREM IPSUM</div>
                        <div class="car-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus ipsum ut sapien aliquet.</div>
                        <div class="ovl-car"></div>
                    </div>

                    <div class="item-active" style="background-image: url('Assets/team_carousel2.jpg'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="car-item-title">LOREM IPSUM</div>
                        <div class="car-item-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus ipsum ut sapien aliquet.</div>
                        <div class="ovl-car"></div>
                    </div>
                </div>

                <div class="left-car-ctrl" href="#main-car" data-slide="prev">
                    <div class="left-icon" style="background-image: url('Assets/left-icon.svg'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                </div>
                <div class="right-car-ctrl" href="#main-car" data-slide="next">
                    <div class="right-icon" style="background-image: url('Assets/right-icon.svg'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                </div>

                <div class="scrll-icon" style="background-image: url('Assets/scroll-icon.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
            </div>
            <div class="bg"> 
                <div class="bg-overlay-top"></div>
                <div class="bg-ornament" style="background-image: url('Assets/ornament_single color_cropped.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
            </div>
            <div class="partners-title">PARTNERS</div>
            <div class="partners-line-left"></div>
            <div id="partners-car">
                <div class="pcar-indicator"></div>
                
                <script>
                    const scrollContainer = document.querySelector("#partners-car");

                    scrollContainer.addEventListener("wheel", (evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                    });
                </script>
                <div class="pcar-inner">
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-1.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-2.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-3.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-4.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-5.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-6.svg'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-1.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-2.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-3.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                    <div class="pcar-item" style="background-image: url('Assets/logo-disp-4.png'); background-size: cover;
                    background-repeat: no-repeat;"></div>
                </div>

                <div class="pcar-left-cntrl"></div>
                <div class="pcar-right-cntrl"></div>
            </div>
            <div class="partners-line-right"></div>
            <div class="partners-btn">
                <div class="partners-btn-txt">SEE MORE</div>
            </div>
            
            <div class="matches-title">Matches</div>
                <script>
                    const scrollContainer = document.querySelector("#matches-car");

                    scrollContainer.addEventListener("wheel", (evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                    });
                </script>
            <div id="matches-car">
                <div class="mcar-indicator"></div>
                <div class="mcar-inner">
                    <div class="mcar-item">
                        <div class="mcar-item-line"></div>
                        <div class="mcar-item-logo" style="background-image: url('Assets/esl-logo-vector.svg'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="mcar-item-title">
                            <h2>Lorem Ipsum Dolor sit Amet</h2>
                        </div>
                        <div class="mcar-item-date">
                            <h3>XX February 2024</h3>
                        </div>
                    </div>
                    <div class="mcar-item">
                        <div class="mcar-item-line"></div>
                        <div class="mcar-item-logo" style="background-image: url('Assets/esl-logo-vector.svg'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="mcar-item-title">
                            <h2>Lorem Ipsum Dolor sit Amet</h2>
                        </div>
                        <div class="mcar-item-date">
                            <h3>XX February 2024</h3>
                        </div>
                    </div>
                    <div class="mcar-item">
                        <div class="mcar-item-line"></div>
                        <div class="mcar-item-logo" style="background-image: url('Assets/esl-logo-vector.svg'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="mcar-item-title">
                            <h2>Lorem Ipsum Dolor sit Amet</h2>
                        </div>
                        <div class="mcar-item-date">
                            <h3>XX February 2024</h3>
                        </div>
                    </div>
                </div>

                <div class="mcar-left-cntrl"></div>
                <div class="mcar-right-cntrl"></div>
            </div>
            <div class="matches-btn">
                <div class="matches-btn-txt">SEE MORE</div>
            </div>

            <div class="teams-title">Teams</div>
            <div id="teams-car">
                <div class="tcar-indicator"></div>
                <script>
                    const scrollContainer = document.querySelector("#teams-car");

                    scrollContainer.addEventListener("wheel", (evt) => {
                    evt.preventDefault();
                    scrollContainer.scrollLeft += evt.deltaY;
                    });
                </script>
                <div class="tcar-inner">
                    <div class="tcar-item" style="background-image: url('Assets/card team.png'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="tcar-item-logo" style="background-image: url('Assets/logo ml.png'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="tcar-item-title">
                            <h4>Mobile Legend Team</h4>
                        </div>
                    </div>
                    <div class="tcar-item" style="background-image: url('Assets/card team.png'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="tcar-item-logo" style="background-image: url('Assets/logo ml.png'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="tcar-item-title">
                            <h4>Mobile Legend Team</h4>
                        </div>
                    </div>
                    <div class="tcar-item" style="background-image: url('Assets/card team.png'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="tcar-item-logo" style="background-image: url('Assets/logo ml.png'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="tcar-item-title">
                            <h4>Mobile Legend Team</h4>
                        </div>
                    </div>
                    <div class="tcar-item" style="background-image: url('Assets/card team.png'); background-size: cover;
                        background-repeat: no-repeat;">
                        <div class="tcar-item-logo" style="background-image: url('Assets/logo ml.png'); background-size: cover;
                        background-repeat: no-repeat;"></div>
                        <div class="tcar-item-title">
                            <h4>Mobile Legend Team</h4>
                        </div>
                    </div>
                </div>

                <div class="tcar-left-cntrl"></div>
                <div class="tcar-right-cntrl"></div>
            </div>
            <div class="teams-btn">
                <div class="teams-btn-txt">SEE MORE</div>
            </div>
            <div class="stt-img" style="background-image: url('Assets/team full.png'); background-size: cover;
            background-repeat: no-repeat;"></div>
            <div class="stt-title">Lorem Ipsum</div>
            <div class="stt-txt">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenean hendrerit eros eget diam commodo hendrerit. Proin
                    congue lacinia iaculis. Praesent non sapien vel neque volutpat
                    finibus et sit amet ex. Fusce arcu enim, pharetra non dapibus
                    a, egestas vel nulla.</h1>
            </div>
            <div class="bg-overlay-btm"></div>
        </section>

        <div class="footer">
            <div class="ftr-logo" style="background-image: url('Assets/CREUX_logo_all white_png.png'); background-size: cover;
            background-repeat: no-repeat;"></div>
            <div class="ftr-copyright">©creuxteam</div>
            <div class="socmed-cont">
                <div class="socmed-icon" style="background-image: url('Assets/tiktok.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
                <div class="socmed-icon" style="background-image: url('Assets/yutub.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
                <div class="socmed-icon" style="background-image: url('Assets/twitter.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
                <div class="socmed-icon" style="background-image: url('Assets/fb.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
                <div class="socmed-icon" style="background-image: url('Assets/ig.svg'); background-size: cover;
                background-repeat: no-repeat;"></div>
            </div>
            <div class="ftr-email-txt">contact@creux.co</div>
        </div>
    </body>
</html>