const box = document.getElementById("list");
const final = document.getElementById("result");
document.getElementById("check").onclick = function(){


    if (box.value === '') {
        alert("This cannot be empty")
    } else {
        let lis = document.createElement('li');
        lis.innerHTML = box.value;
        final.appendChild(lis)
        let span = document.createElement(span);
        span.innerHTML = "\u00d7";
        lis.appendChild(span);
    }
    box.value = '';

}

