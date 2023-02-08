let count = 0;
let countNez = 0;
let countBouche = 0;
let countYeux = 0;

function changeNext(){

    images = document.getElementsByClassName("Tete");
    console.log(images)
    if(count + 1 < images.length){
        images[count].style.display = "none";
        count++;
        images[count].style.display = "block";
    }
}


function changePrevious(){
    images = document.getElementsByClassName("Tete");
    if(count - 1 >= 0){
        images[count].style.display = "none";
        count--;
        images[count].style.display = "block";
    }

}

function changeNextYeux(){
    images = document.getElementsByClassName("Yeux");
    if(countYeux + 1 < images.length){
        images[countYeux].style.display = "none";
        countYeux++;
        images[countYeux].style.display = "block";
        console.log(countYeux);
    }
}

function changePreviousYeux(){
    images = document.getElementsByClassName("Yeux");
    if(countYeux - 1 >= 0){
        images[countYeux].style.display = "none";
        countYeux--;
        images[countYeux].style.display = "block";
        console.log(countYeux);
    }

}

function changeNextBouches(){
    images = document.getElementsByClassName("Bouches");
    console.log(images)
    if(countBouche + 1 < images.length){
        images[countBouche].style.display = "none";
        countBouche++;
        images[countBouche].style.display = "block";
    }
}

function changePreviousBouches(){
    images = document.getElementsByClassName("Bouches");
    if(countBouche - 1 >= 0){
        images[countBouche].style.display = "none";
        countBouche--;
        images[countBouche].style.display = "block";
    }

}

function changeNextNez(){
    images = document.getElementsByClassName("Nez");
    console.log(images)
    if(countNez + 1 < images.length){
        images[countNez].style.display = "none";
        countNez++;
        images[countNez].style.display = "block";
    }
}

function changePreviousNez(){
    images = document.getElementsByClassName("Nez");
    if(countNez - 1 >= 0){
        images[countNez].style.display = "none";
        countNez--;
        images[countNez].style.display = "block";
    }

}

function sendAvatar(id_user)
{
    const request = new XMLHttpRequest();
    request.open('POST', 'send_avatar.php');
    request.onreadystatechange = function()
    {
        if (request.readyState === 4)
        {
            console.log(request.responseText);
            console.log(id_user);
            console.log(count);
            console.log(countYeux);
            console.log(countBouche);
            console.log(countNez);
        }
    }
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let data = "id_user=" + id_user;
    data += "&ava_tete=" + count;
    data += "&ava_yeux=" + countYeux;
    data += "&ava_bouche=" + countBouche;
    data += "&ava_nez=" + countNez;
    request.send(data);
}