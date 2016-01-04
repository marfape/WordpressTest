
function notIsEmpty()
{
	var ret=true;
	var objText=document.getElementById('desc');
	var objMsg=document.getElementById('message');

	if (objText.value==''){
		ret=false;
		objMsg.innerHTML='Please insert a value';
	}
	
	return ret;
}

function enableDescription()
{
	document.getElementById('desc').disabled = false;
}

function deleteConfirm()
{
	return confirm("Are you sure you want to Delete this value?");
	
}



