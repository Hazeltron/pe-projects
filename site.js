console.clear();

const resume = document.querySelector('.full-resume');
const resumeButton = document.querySelector('.resume-button');




// function dropDown(content, button) {

//     button.addEventListener('click', function(click) {
//         if(content.style.display !== 'block') {
//             content.style.display = 'block';
//             console.log("It waas pressed");
    
//         } else {
//             content.style.display = 'none';
//             console.log("that didnt work");
//         }
//     });

// };

// dropDown(resume, resumeButton);
// dropDown(caseStudy, vacationButton);
// dropDown(caseStudy, hydroButton);

resumeButton.addEventListener('click', function(click) {
    if(resume.style.display !== 'block') {
        resume.style.display = 'block';
        console.log("It waas pressed");

    } else {
        resume.style.display = 'none';
        console.log("that didnt work");
    }
});

