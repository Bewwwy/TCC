var texto = document.getElementById("msg");
var result = document.getElementById("result");
var limit = 700;

result.texContent = 0 + "/" + limit;

texto.addEventListener("input", function() {
    var textoTamanho = texto.value.length;
    result.textContent = textoTamanho + "/" +limit;

    if (textoTamanho > limit) {
        texto.style.borderColor = "red";
        result.style.color = "red";
    } else {
        texto.style.borderColor = "#b2b2b2";
        result.style.color = "#5a5a5a";
    }
});