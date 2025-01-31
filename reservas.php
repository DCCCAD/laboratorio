<!-- ************************** BANNER ***********************-->
<!-- ************************** HEADER ***********************-->
<?php include("header.php"); ?>

<!-- ************** BACKGROUND *******************-->




<!-- ****************** MAIN SECTION **********************-->
<main>
    <section class="conteudo-main">
        <div class="section-center">
            <form class="reserva-cad" name="Reserva-Laboratorio" action="reservas_forms.php" method="POST">
                <h2 class="titulo-informativo">Reversa Laboratorio</h2>
                <label for="curso">Curso/Disciplina *</label>
                <input type="text" name="Curso_Disciplina" id="curso" placeholder="Ex: Desenhos de Construção Civil" required>
                

                <label for="depart">Departamento *</label>
                <input type="text" name="Departamento" id="depart" placeholder="Ex: Edifícios" maxlength="100"  required>

                <label for="resp">Nome do(a) Responsavel pelo Curso/Disciplina *</label>
                <input type="text" name="Responsavel" id="resp" placeholder="Ex: Prof. Me. Ieda M. Nolla" required>

                <label for="prof">Nome do Professor(a) que ministrará o Curso/Disciplina *</label>
                <input type="text" name="Professor" id="prof" placeholder="Ex: Prof. Silvio A. Santos" required>

                <!-- ONFOCUS quando click no input torna-se do type='time' e ONBLUR caso não seja inserido algum valor volta a ser type='text' -->
                <label for="reserva-data">Data da Reserva e Horário *</label>
                <input type="text" name="DataHorario_Reserva" id="reserva-data" placeholder="dd/mm/aaaa hh:mm" onfocus="this.type='datetime-local'" onblur="if(!this.value)this.type='text'" required>

                <label for="reserva-hora">Horário da Reserva *</label>
                <input type="text" name="Horário_Reserva" id="reserva-hora" placeholder="hh:mm" onfocus="this.type='time'" onblur="if(!this.value)this.type='text'" required>

                <label for="num-alunos">Estimativa da quantidade de alunos *</label>
                <input type="number" name="Estimativa_qtd_alunos" id="num-alunos" placeholder="Max: 20 alunos por laboratório" required>

            <label for="inputOthers">Programas *</label><br/>
                <!--<div name="Programas" id="programs">--><!--</div>-->
                <input type="checkbox" name="AutoCAD_2025" id="autocad" checked><label for="autocad"> AutoCad 2024/5</label>
                    <br/>
                <input type="checkbox" name="SketchUP" id="sketchup"><label for="sketchup"> SketchUP</label>
                    <br/>
                <input type="checkbox" name="Revit_2025" id="revit"><label for="revit">  Revit 2024/5</label>
                    <br/>
                <input type="checkbox" name="Office_2019" id="office"><label for="office"> Office 2019</label>
                    <br/>
                <input type="checkbox" name="Others" id="checkOthers"><label for="checkOthers"> Others</label>
                <input type="text" name="putOthers" id="inputOthres" placeholder="Ex: Visual Studio">
                    <br/><br/>
                
                <label for="email-resp">Email do Responsável pela reserva *</label>
                <input type="email" name="Email_Responsável_Reserva" id="email-resp" placeholder="Ex:silvio@fatecsp.br" required>

                <br/><br/>
                <p>&nbsp; O laboratório Enedina Capuano pertence ao departamento de Edifícios, que disponibiliza as grades horárias semestralmente. Desta forma, a reserva dos horários disponíveis deverá ser feita no início de cada semestre. *</p>
                &NonBreakingSpace; <input type="checkbox" name="Ciente" id="ciente" required>
                <label for="ciente"> Ciente</label>
                <br/><br/>
                
                <label for="solicitacoes">Campo para solicitar um Pedido/Item/Observações</label>
                <p id="adendo-forms">Caso precise de uma monitoria durante o uso do laboratório escreva aqui...</p>
                <textarea name="Obs" id="solicitacoes" wrap="hard" placeholder="Diga-me o seu pedido..."></textarea>

                    <!--<label for="file">Arquivo</label>
                    <input type="file" name="Arquivo" id="file">-->
                
                <br/><br/>
                
                
                <!--<input type="hidden" name="_next" value="https://formsubmit.co/b092a3476a9e1d898ccfc6c73c4a1ef7">-->
                <p id="legenda-simbolos"> * Campo Obrigatório </p>
                <h2 class="titulo-informativo">Aviso</h2>
                <p>&nbsp; Aos responsáveis pela reserva do Laboratório, compete 
                    zelar pela integridade das instalações, o cumprimento das regras do laboratório e pela eventual retirada e 
                    devolução das chaves. Aguarde confirmação da reserva no e-mail indicado.</p>
                <button type="submit" name="submit" id="btn-submit">Send</button>
            </form>

            <br/>
            <img src="./images/normasLAB.jpg" alt="Normas do Laboratório">
        </div>
    </section>
    <div class="grade-lab">
        <img src="./images/gradeAulas2024.jpg" alt="Grade do Laboratório" id="gradeAula">
    </div>
</main>

<!--*********************** FOOTER ****************************-->
<!-- ********************** SCRIPTS ***************************-->
<?php include("footer.php"); ?>