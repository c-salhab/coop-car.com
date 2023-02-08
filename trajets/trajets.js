function acceptOffre(id_conducteur, id_trajet)
{
	const request = new XMLHttpRequest();
	request.open('POST', 'accept_offre.php');
    request.onreadystatechange = function()
    {
    	if (request.readyState === 4)
    	{
        document.getElementById(("offre"+id_conducteur)+id_trajet).parentNode.innerHTML = "La proposition est acceptée! Vous pouvez toujours revenir sur votre avis plus tard en en acceptant une autre.";
    	}
    }
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let data = "id_conducteur=" + id_conducteur;
    data += "&id_trajet=" + id_trajet;
    request.send(data);
}

function deleteTrajet(id_trajet)
{
    const request = new XMLHttpRequest();
    request.open('POST', 'delete_trajet.php');
    request.onreadystatechange = function()
    {
        if (request.readyState === 4)
        {
            document.getElementById("trajet"+id_trajet).remove();
        }
    }
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let data = "id_trajet=" + id_trajet;
    request.send(data);
}
