<!-- ************************** BANNER ***********************-->
<!-- ************************** HEADER ***********************-->
<?php include("header.php"); ?>

    <!-- ************** BACKGROUND *******************-->
    <!--<div class="dcc-background"><a class="a-logo" href="#"><p class="lab-capuano">DCC CAD</p></a></div>-->
    


    <!-- ****************** MAIN SECTION **********************-->
    <main>
        <section class="conteudo-main">
            <div class="section-center">
                <div class="box">
                    <form class="reserva-cad" name="Reserva-Laboratorio" action="https://formsubmit.co/b092a3476a9e1d898ccfc6c73c4a1ef7" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend><b>Fale Conosco</b></legend>
                            <p>Fale conosco para sugestões ou  reclamações.
                                <br/> A sua colaboração e bem vinda!
                            </p>
                            <br/>
                            <div class="inputBox">
                                <input type="text" name="Responsavel" class="inputReserva" id="resp" placeholder="Ex: Prof. Me. Ieda M. Nolla" required>
                                <label for="resp" class="labelInput">Nome do(a) Responsavel pelo Curso/Disciplina *</label>
                            </div>
                            <br/><br/>


                            <div class="inputBox messageArea">
                                <textarea name="Message" class="textareaReserva" id="solicitacoes" wrap="hard" placeholder="Diga-me o seu pedido..."></textarea>
                                <label for="solicitacoes" class="labelTextarea">Campo para solicitar algum Pedido/Item</label>

                            </div>
                            <button type="submit">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
<!--*********************** FOOTER ****************************-->
<!-- ********************** SCRIPTS ***************************-->
<?php include("footer.php"); ?>