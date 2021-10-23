function user() {
    var myEle = document.getElementById("user");
    if (myEle !== null) {
        var aElement = document.querySelector('#user');
        aElement.setAttribute('class', 'arrow');
    }
}



function setting() {
    var myEle = document.getElementById("setting");
    if (myEle !== null) {
        var aElement = document.querySelector('#setting');
        aElement.setAttribute('class', 'arrow');
    }
}



function blog() {
    var myEle = document.getElementById("blog");
    if (myEle !== null) {
        var aElement = document.querySelector('#blog');
        aElement.setAttribute('class', 'arrow');
    }
}

//^=================================================================================================//
//^-----------------------another ansower for backgroung when i open the page-----------------------//
//^=================================================================================================//


function addColor() {
    let elements = document.querySelectorAll('.nav-item .nav-link i + p')
    let param = window.location.href.split("/")
    let uniqeword = param[param.length - 2]

    elements.forEach((el) => {
        if(el.textContent.trim().toLocaleLowerCase() == uniqeword){
            el.parentElement.parentElement.classList.add('arrow')
        }else{
            el.parentElement.parentElement.classList.remove('arrow')
        }

    })
};
addColor()

//^=================================================================================================//
//^----------------------------------------------alert----------------------------------------------//
//^=================================================================================================//



function alertt() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
}






// jQuery.ajax({
//     type: "POST",
//     url: 'index.php',
//     dataType: 'json',
//     data: {functionname: 'add', arguments: [1, 2]},

//     success: function (obj, textstatus) {
//                   if( !('error' in obj) ) {
//                       yourVariable = obj.result;
//                   }
//                   else {
//                       console.log(obj.error);
//                   }
//             }
// });


/* animation */

var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: true
    })
    .add({
        targets: '.ml10 .letter',
        rotateY: [-90, 0],
        duration: 1300,
        delay: (el, i) => 45 * i
    }).add({
        targets: '.ml10',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });