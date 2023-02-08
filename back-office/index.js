function fetch(input){
    ajax(input.value)
}


function ajax(val) {
    let request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if(request.readyState === 4) {
            if(request.status === 200)
                parent = document.getElementById('user-table')
                parent.innerHTML = ""
                res = JSON.parse(request.response)
                res.forEach((item, i) => {
                    p = document.createElement("tr")
                    
                    ident = document.createElement("td");
                    ident.innerHTML = item['identifiant'];
                    p.appendChild(ident);

                    email = document.createElement("td");
                    email.innerHTML = item['email'];
                    p.appendChild(email);

                    stat = document.createElement("td");
                    if (item['statut'] == "0") {
                        stat.innerHTML = "Actif";
                    } else if (item['statut'] == "1") {
                        stat.innerHTML = "Admin";
                    } else if (item['statut'] == "2") {
                        stat.innerHTML = "Inactif";
                    } else {
                        stat.innerHTML = "Statut illisible";
                    }
                    p.appendChild(stat);

                    links = document.createElement("td");
                    links.innerHTML = 
                    "<a href=modif_user.php?id=" + item['id'] + ">Modifier</a> <br>" +
                    "<a href=suppr_user.php?id=" + item['id'] + ">Supprimer</a>";
                    p.appendChild(links);

                    parent.appendChild(p);
                });

            } else {
                console.log(request.response) ;
            }
        }

    request.open("GET", "./fetch.php?word=" + val, true);
    request.setRequestHeader("Content-Type", "application/json; charset=utf-8");
    request.send();
}
