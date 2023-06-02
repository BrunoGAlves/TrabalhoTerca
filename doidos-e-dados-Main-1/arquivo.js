


document.querySelector("#formularioShow").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("ativado");
});

document.querySelector(".popup .fecharBtn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("ativado");
});


var Form1 = document.getElementById("form_primario");
var Form2 = document.getElementById("form_segundario");
var Form3 = document.getElementById("form_terceiario");

var Next1 = document.getElementById("next1");
var Next2 = document.getElementById("next2");
var Back1 = document.getElementById("back1");
var Back2 = document.getElementById("back2");


Next1.onclick = function(){
    Form1.style.opacity = "0";
    Form1.style.pointerEvents = "none";
    Form2.style.opacity = "1";
    Form2.style.pointerEvents = "auto";
}

Back1.onclick = function(){
    Form1.style.opacity = "1";
    Form1.style.pointerEvents = "auto";
    Form2.style.opacity = "0";
    Form2.style.pointerEvents = "none";
}

Next2.onclick = function(){
    Form2.style.opacity = "0";
    Form2.style.pointerEvents = "none";
    Form3.style.opacity = "1";
    Form3.style.pointerEvents = "auto";
}

Back2.onclick = function(){
    Form2.style.opacity = "1";
    Form2.style.pointerEvents = "auto";
    Form3.style.opacity = "0";
    Form3.style.pointerEvents = "none";
}



backBtn.addEventListener("click", () => form.classList.remove('secActive'));