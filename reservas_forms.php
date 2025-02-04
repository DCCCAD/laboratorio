<?php
    function submit_forms( $Curso_Disciplina, $Departamento, $Responsavel, $Professor, $DataHorario_Reserva, $Horário_Reserva, $Estimativa_qtd_alunos, $AutoCAD_2025, $SketchUP, $Revit_2025, $Office_2019, $Others_2,$Email_Responsável_Reserva, $Ciente, $Obs ){ echo 'ok';

        ${putCurso}, ${putDepart}, ${putResp}, ${putProf}, ${putData} ${putHora}, ${putNumAlunos}, ${putAutoCad}, ${putSketchup}, ${putRevit}, ${putOffice}, ${putOthers}, ${putOthers}, ${putPrograms}, ${putEmail}, ${putCiente}, ${putSolicita}
        if(isset($_POST['submit'])){
            /*{print_r('Curso: ' . $_POST['Curso_Disciplina']);
                print_r('<br>');
                print_r('Departamentos: ' . $_POST['Departamento']);
                print_r('<br>');
                print_r('Responsavel: ' . $_POST['Responsavel']);
                print_r('<br>');
                print_r('Professor: ' . $_POST['Professor']);
                print_r('<br>');
                print_r('Data: ' . $_POST['DataHorario_Reserva']);
                print_r('<br>');
                print_r('Horario: ' . $_POST['Horário_Reserva']);
                print_r('<br>');
                print_r('QTD Alunos: ' . $_POST['Estimativa_qtd_alunos']);
                print_r('<br>');
                print_r('AutoCAD: ' . $_POST['AutoCAD_2025']);
                print_r('<br>');
                print_r('SketchUP: ' . $_POST['SketchUP']);
                print_r('<br>');
                print_r('Revit: ' . $_POST['Revit_2025']);
                print_r('<br>');
                print_r('Office: ' . $_POST['Office_2019']);
                print_r('<br>');
                print_r('Outros: ' . $_POST['Others']); /*2 Others*
                print_r('<br>');
                print_r('Email Responsavel: ' . $_POST['Email_Responsável_Reserva']);
                print_r('<br>');
                print_r('Termo: ' . $_POST['Ciente']);
                print_r('<br>');
                print_r('OBS: ' . $_POST['Obs']);}*/
            
            include_once('config.php');
            /*$Curso_Disciplina = $_POST['Curso_Disciplina'];
            $Departamento     = $_POST['Departamento'];
            $Responsavel      = $_POST['Responsavel'];
            $Professor        = $_POST['Professor'];
            $DataHorario_Reserva     = $_POST['DataHorario_Reserva'];
            $Horário_Reserva  = $_POST['Horário_Reserva'];
            $Estimativa_qtd_alunos     = $_POST['Estimativa_qtd_alunos'];
            $AutoCAD_2025     = $_POST['AutoCAD_2025'];
            $SketchUP         = $_POST['SketchUP'];
            $Revit_2025       = $_POST['Revit_2025'];
            $Office_2019      = $_POST['Office_2019'];
            $Others           = $_POST['Others'];
            $Others_2           = $_POST['Programas'];
            $Email_Responsável_Reserva = $_POST['Email_Responsável_Reserva'];
            $Ciente           = $_POST['Ciente'];
            $Obs          = $_POST['Obs'];*/

            //function programas(){ if(isset($_POST['Revit_2025']) == 'on'){ return 'Revit_2025/on'; }else{ return 'Revit_2025/off';}}
            //function ciente(){ if(isset($_POST['Ciente']) == 'on'){ return ture;}else{ return false;}}
            if($AutoCAD_2025 == 'on'){ $AutoCAD_2025 = 'AutoCAD_2025'; } else{ $AutoCAD_2025 = '\0'; }
                if($SketchUP == 'on'){     $SketchUP = 'SketchUP'; } else{ $SketchUP = '\0'; }
                if($Revit_2025 == 'on'){   $Revit_2025 = 'Revit_2025'; } else{ $Revit_2025 = '\0'; }
                if($Office_2019 == 'on'){  $Office_2019 = 'Office_2019'; } else{ $Office_2019 = '\0'; }
                    if($Others == 'on'){       $Others = 'Others'; } else{ $Others = '\0'; }
                    //if($Others_2 != ''){       $Others_2 = 'Programas'; } else{ $Others_2 = '\0'; }
                    if($Ciente == 'on'){       $Ciente = true; } else{ $Ciente = 0; }

            $result = mysqli_query($conexao, "INSERT INTO TBreserva_lab(/*resID,*/ resNOME_CURSO_DISCIPLINA, resNOME_DEPARTAMENTO, resNOME_RESP_CURSO_DISCIPLINA, resNOME_PROF_CURSO_DISCIPLINA, resDATA_RESERVA/*Horario*/, resDATA_PEDIDO, resHORA_RESERVA, resQTD_ALUNOS, resNOME_PROGRAMAS, resEMAIL_RESP_RESERVA, resCIENTE, resMSG_OBS)
            VALUES(
            '$Curso_Disciplina',
            '$Departamento',
            '$Responsavel',
            '$Professor',
            '$DataHorario_Reserva',
            'CURRENT_TIMESTAMP()',
            '$Horário_Reserva',
            $Estimativa_qtd_alunos,
            '$AutoCAD_2025, $SketchUP, $Revit_2025, $Office_2019, $Others_2',
            '$Email_Responsável_Reserva',
            $Ciente,
            '$Obs')");
        }
    }
?>