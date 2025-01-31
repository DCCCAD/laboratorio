function submit_form(){
    
//window.document.getElementById('btn-submit').addEventListenner('clickdown', ()=>{})

    let putCurso = window.document.getElementById("curso");
    let putDepart = window.document.getElementById("depart");
    let putResp = window.document.getElementById("resp");
    let putProf = window.document.getElementById("prof");
    let putData = window.document.getElementById("reserva-data");
    let putHora = window.document.getElementById("reserva-hora");
    let putNumAlunos = window.document.getElementById("num-alunos");
    let putAutoCad = window.document.getElementById("autocad");
    let putSketup = window.document.getElementById("sketchup");
    let putRevit = window.document.getElementById("revit");
    let putOffice = window.document.getElementById("office");
    let putOthers = window.document.getElementById("others");
    let putProgrms = window.document.getElementById("programs");
    let putEmail = window.document.getElementById("email-resp");
    let putCiente = window.document.getElementById("ciente");
    let putSolicita = window.document.getElementById("solicitacoes");
    
    let btn = `<?php echo submit_forms( ${putCurso}, ${putDepart}, ${putResp}, ${putProf}, ${putData} ${putHora}, ${putNumAlunos}, ${putAutoCad}, ${putSketchup}, ${putRevit}, ${putOffice}, ${putOthers}, ${putOthers}, ${putPrograms}, ${putEmail}, ${putCiente}, ${putSolicita} ); ?>`;
    if(btn)console.log("Deu certo!");
}