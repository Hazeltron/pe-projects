console.clear();

const resume = document.querySelector('.full-resume');
const resumeButton = document.querySelector('.resume-button');

resumeButton.addEventListener('click', function(click) {
    if(resume.style.display === 'none') {
        resume.style.display = 'block';
        console.log("It waas pressed");

    } else {
        resume.style.display = 'none';
    }
});

