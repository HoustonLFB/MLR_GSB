
function verifSaisie() 
{
    if (document.getElementById("userlog").value == "" || document.getElementById("userpass").value == "")
    {
        alert("Tous les champs doivent ètre complétés");
        document.getElementById("userlog").focus;
        document.getElementById("userpass").focus;
		return false;
    }
}