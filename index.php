<!-- ************************** BANNER ***********************-->
<!-- ************************** HEADER ***********************-->
<?php include("header.php"); ?>


<!-- ************** BACKGROUND *******************-->
<div class="dcc-background"><a class="a-logo" href="#"><p class="lab-capuano">DCC CAD</p></a></div>



<!-- ****************** MAIN SECTION **********************-->
<main>
        <section class="conteudo-main">
            <div class="container-section">
                <div class="section-center">
                    <div class="display-container">
                        <div class="div-container">
                            
                            <h2><b>Departamento de Edificio FATEC SP</b></h2>
                            <p>
                                <br/>
                                Dep de edificios: Terréo Bloco A e B... 
                                <br/>
                                Email: edificio@fatecsp.br
                                <br/>
                                Telefone: (11) 3322-2278 - Dep. de Edifícios
                            </p>
                        </div> <!-- class: div-section -->
                        <br/>
                        <div class="div-container" id="div-container2">
                            
                            <h2><b>DCC Laboratório CAD</b></h2>
                            <p>
                                <br/>
                                Contato: dcccad@gmail.com &nbsp;
                                dcclabcad@gmail.com
                                <br/>
                                Telefone: (11) 3322-2273
                                <br/>
                                Horário de atendimento: Seg. a Sex. das 09h às 19:30h
                            </p>
                        </div> <!-- class: div-section -->
                    </div>
                    
                    <div class="div-container-auxiliares">
                        <br/>
                        <b id="b-aux-container">Auxiliares do corpo docente</b>
                        <br/>
                        <ul class="ul-aux-container">
                            <li class="li-aux-container"><i class="i-aux-container"><a class="a-aux-container" href="#footer">Geovane  </a></i></li>
                            <li class="li-aux-container"><i class="i-aux-container"><a class="a-aux-container" href="#footer">Jefferson</a></i></li>
                            <li class="li-aux-container"><i class="i-aux-container"><a class="a-aux-container" href="#footer">Leticia  </a></i></li>
                            <li class="li-aux-container"><i class="i-aux-container"><a class="a-aux-container" href="#footer">Paulo    </a></i></li>
                        </ul>
                    </div><!-- class: div-section-auxiliares -->
                </div><!-- class: section-center -->
            </div><!-- class: container-section -->
        </section>

        <div class="carrossel-container">
            <div class="carrossel-slide">
                <div class="slide" style="background-image: url(./images/labcad01.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad02.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad03.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad04.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad05.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad06.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad07.jpg);"></div>
                <div class="slide" style="background-image: url(./images/labcad08.jpg);"></div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094</button>
            <button class="next" onclick="moveSlide(1)">&#10095</button>
            <div class="pagination-carrossel">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
            </div>
        </div>
    </main>
<!--*********************** FOOTER ****************************-->
<!-- ********************** SCRIPTS ***************************-->
<?php include("footer.php"); ?>