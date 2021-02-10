function validate()
{
	if(document.getElementById("txtname").value.length==0)
	{
        alert("enter username first");
        return false;
	}
}