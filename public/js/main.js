



// addEventListener("scroll",(ev) => {

//     element = document.getElementById('job-fixed');

//     if(window.scrollY >= 370) {
//         element.classList.add('job-fixed-show');
//     } else {
//         element.classList.remove('job-fixed-show');
//     }

// });

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


// Start job types button

// const selectJobTypeBut = document.querySelectorAll('#job-type');

// selectJobTypeBut.forEach((but) => {

//     but.addEventListener('click',() => {
        
//         if(but.classList.contains('types-job-types-type-true')) {

//             but.getElementsByTagName('svg')[1].classList.add('hidden')
//             but.getElementsByTagName('svg')[0].classList.remove('hidden')

//             but.classList.remove('types-job-types-type-true');

            
//         }else {
            
//             but.getElementsByTagName('svg')[0].classList.add('hidden')
//             but.getElementsByTagName('svg')[1].classList.remove('hidden')

//             but.classList.add('types-job-types-type-true');

//         }
            
//     });

// });


// End job types button