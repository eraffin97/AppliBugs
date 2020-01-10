let els = document.getElementsByClassName("trigger");
Array.from(els).forEach((el)=> {
    el.addEventListener('click', makeRequest);
});

let xhr = new XMLHttpRequest();

function makeRequest(event) {
     event.preventDefault();
     xhr.onreadystatechange = alertContent;
     let id = this.parentNode.parentNode.id.replace("bug_", "");
     let url = 'bug/update/'+id;
     console.log(url);
     xhr.open('POST', url);
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     xhr.send('closed=1');
}

function alertContent() {
    
}