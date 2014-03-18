function reverse(str)
{
	return (str.split("").reverse().join(""));
}

function verifi_password(password)
{
	if (reverse(password) == 'lejavascriptctropcool')
	{
		alert("bravo!");
	}
	else
	{
		alert("Rate! Dommage, essaye encore ;)");
	}
	$('#pass').val('');
}

$(document).ready(function()
{
	$('#send').click(function()
	{
		verifi_password($('#pass').val());
	});
	$('#pass').keydown(function(e)
	{
		if (e.keyCode == 13)
			verifi_password($('#pass').val());
	});
});