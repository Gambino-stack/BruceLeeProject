function myFunction1() {
    var x = document.querySelector('.identity');
    var y = document.querySelector('.skillset');
    var z = document.querySelector('.hobbies');
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";

    } else {
        x.style.display = "none";
    }
}

function myFunction2() {
    var x = document.querySelector('.identity');
    var y = document.querySelector('.skillset');
    var z = document.querySelector('.hobbies');
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
function myFunction3() {
    var x = document.querySelector('.identity');
    var y = document.querySelector('.skillset');
    var z = document.querySelector('.hobbies');
    if (z.style.display === "none") {
        z.style.display = "block";
        y.style.display = "none";
        x.style.display = "none";
    } else {
        z.style.display = "none";
    }
}