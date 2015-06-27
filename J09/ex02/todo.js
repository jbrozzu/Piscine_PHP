
function addNew()
{
	var add = prompt('Que souhaitez-vous ajouter ?');
	if (add == "")
		return;
	var list = document.getElementById('ft_list');
	var div = document.createElement('div');
	div.textContent = add;
	div.setAttribute('onclick', 'deleteElem(this)');
	list.insertBefore(div, list.firstChild);
	setCookie('amazingCookie', encodeURIComponent(list.innerHTML), 1);
}

function deleteElem(element)
{
	if (confirm('Cet \351l\351ment sera supprim\351 de fa\347on permanente.\n\312tes vous s\373r de votre choix?'))
	{
		var list = document.getElementById('ft_list');
		list.removeChild(element);
		setCookie('amazingCookie', encodeURIComponent(list.innerHTML), 1);
	}
}

function setCookie(cname, cvalue, exdays)
{
	var date = new Date();
	date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + date.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname)
{
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}

function restore()
{
	var list = document.getElementById('ft_list');
	list.innerHTML = decodeURIComponent(getCookie('amazingCookie'));
}