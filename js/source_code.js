function Operations()
{

    var aObject = document.getElementById('a');
    var operandA = aObject.innerHTML;
    var bObject = document.getElementById('b');
    var operandB = bObject.innerHTML;
    var c = multiplier(operandA, operandB);
    document.getElementById('product').innerHTML = c;

    function writeViaInnerHTML()
    {
        document.getElementById("java").innerHTML = "THIS CAME FROM THE WRITE VIA INNER HTML FUNCTION";
    }

    function writeViaDocumentWrite()
    {
        document.write("Hello World");
    }

    function multiplier(a, b)
    {
        return a * b;
    }
}








