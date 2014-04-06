function reverse(str)
{
	return (str.split("").reverse().join(""));
}

function verifi_password(password)
{
	if (reverse(password) == 'lejavascriptctropcool')
	{
		alert("bravo, valide pour avoir ton flag !");
		document.location.href=unescape("%69%6E%64%65%78%2E%70%68%70%3F%73%63%6F%72%69%6E%67%3D%31");
	}
	else
	{
		alert("Rate! Dommage, essaye encore ;)");
	}
	$('#password').val('');
}
