function writeViaInnerHTML()
{
    document.getElementById("java").innerHTML = "THIS IS A NEW TEST";
}

function multiply() {
    var a = document.getElementById('a');
    var b = document.getElementById('b');
    var c = Multiplier(5, 4);
    document.write(c);
}

function Multiplier(a, b) {
    return a * b;

}

function writeViaDocumentWrite()
{
    document.write("Hello World");
}