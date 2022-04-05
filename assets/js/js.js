
function verifSaisie() 
{
    if (document.getElementById("userlog").value == "" || document.getElementById("userpass").value == "")
    {
        alert("Tous les champs doivent �tre compl�t�s");
        document.getElementById("userlog").focus;
        document.getElementById("userpass").focus;
		return false;
    }
}