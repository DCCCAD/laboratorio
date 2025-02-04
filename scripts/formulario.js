/*while(checkOthers.checked == true){
    if(putOthers.value == "")checkOthers.checked=true;
    
    alert(putOthers.value );
}*/
// teclas-> Esc=27 Shift=16 Ctrl=17 Del=46 BackSpace=8 Tab=9 CapsLock=20 Space=32 '"=192 -=189  ==187 [=221 ]=220
// F1-F12 -> 112-123 Windows=91 Alt=18
let checkOthers = window.document.querySelector("#checkOthers");
function disablecheck(){
    let putOthers = window.document.querySelector(".inputOthers");
    if(putOthers.value == "")checkOthers.checked=false;
}
//somente estão sendo desativadas teclas do lado esquerdo do teclado,
//  teclas na parte de setas ou numericas de funções não foram desativas...
function inicializa(){let tecla = event.keyCode;
    if( tecla == 9 || tecla == 16 || tecla == 17 || tecla == 18 || tecla == 20 || tecla == 27 || tecla == 46 
    /*|| tecla == 91*/ || tecla == 187 || tecla == 189 || tecla == 192 || tecla == 220 || tecla == 220)
            checkOthers.checked =false;
    else checkOthers.checked = true;
    //disablecheck();
} //capturar até a penúltima letra apagada para ativar o checked****************

//textAREA
function textArea(){
    let labelput = window.document.getElementByClassName(".labelInput");
    let txtarea = window.document.getElementByClassName(".textareaReserva");
    let msgArea = window.document.getElementByClassName("messageArea").addEventListenner("keydown", msgArea.innerHTML = 
        `<style>
            .textareaReserva:focus ~ .labelTextarea{
                top: -20px;
                font-size: 12px;
                color: dodgerblue;
            }</style>`
    /*if(txtarea == ""){
        txtarea.innerHTML = 
        `<style>
            .textareaReserva:empty ~ .labelInput{ top:0px; font-size: normal; color: white; }
        </style>`
    }else{
        txtarea.innerHTML = 
        `<style>
            .textareaReserva ~ .labelTextarea{
                top: -20px;
                font-size: 12px;
                color: dodgerblue;
            }
        </style>`
    }*/
)}