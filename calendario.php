<!-- ************************** BANNER ***********************-->
<!-- ************************** HEADER ***********************-->
<?php include("header.php"); ?>

    <!-- ************** BACKGROUND *******************-->
    <!--<div class="dcc-background"><a class="a-logo" href="#"><p class="lab-capuano">DCC CAD</p></a></div>-->
    


    <!-- ****************** MAIN SECTION **********************-->
    <main>
        <section class="conteudo-main">
            <div class="section-center">

            </div>
        </section>
    </main>
    <h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>
<!--*********************** FOOTER ****************************-->
<!-- ********************** SCRIPTS ***************************-->
<?php include("footer.php"); ?>