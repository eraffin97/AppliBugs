let els = document.getElementsByClassName("trigger");
Array.from(els).forEach((el)=> {
    el.addEventListener('click', makeRequest);
});

function makeRequest(event) {
     event.preventDefault();
}