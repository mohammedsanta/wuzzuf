



addEventListener("scroll",(ev) => {

    element = document.getElementById('job-fixed');

    if(window.scrollY >= 370) {
        element.classList.add('job-fixed-show');
    } else {
        element.classList.remove('job-fixed-show');
    }

});

// 





const appearProfileButtons = () => {

    const profileButtons = document.getElementById('profile-buttons');

    const isHasClass = profileButtons.classList.contains('buttons-profile-appear');

    
    if(!isHasClass) {
        profileButtons.classList.add('buttons-profile-appear')
    } else {
        profileButtons.classList.remove('buttons-profile-appear')
    }

}


// const disappearButtons = () => {


//     if(isHasClass) {
//         console.log('disappear')
//         profileButtons.classList.remove('buttons-profile-appear')
//     }


// }

// const app = document.getElementById('app');

// app.onclick = (ev => {

//     if(isHasClass) {
//         disappearButtons()
//     }

// });