let els = document.getElementsByClassName("trigger");
Array.from(els).forEach((el)=> {
    el.addEventListener('click', makeRequest);
});

let xhr = new XMLHttpRequest();

let chkbox = document.getElementsByClassName("checkbox");
// chkbox[0].addEventListener("click");

function makeRequest(event) {
     event.preventDefault();
     xhr.onreadystatechange = alertContent;
     let id = this.parentNode.parentNode.id.replace("bug_", "");
     let url = 'update/'+id;
     console.log(url);
     xhr.open('POST', url);
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     xhr.send('closed=1');
}




function alertContent() {
    
    if (xhr.readyState === XMLHttpRequest.DONE) {
        let jsonVar = JSON.parse(xhr.responseText);
        let col_statut = document.getElementById(jsonVar.id.toString());
        let statut_content = col_statut.querySelector(".statut");
        statut_content.innerHTML = "<span>Résolu</span>";
    };
    
}