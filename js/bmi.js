console.clear();
//user goes to form 
//ask them what their height and weight is in ponds and feet 

function setupBMI() {
    const form = document.querySelector('.bmi-form form');
    const heightFtInput = document.querySelector('#feet');
    const heightInInput = document.querySelector('#inches');
    const weightInput = document.querySelector('#weight');
    const labelSelectFt = document.querySelector('#label-feet');
    const labelSelectIn = document.querySelector('#label-inches');
    const output = form.querySelector('output');

    // Initialize the labels based on initial input values
    let heightFt = Number(heightFtInput.value);
    labelSelectFt.innerHTML = `${heightFt} feet`;
    let heightIn = Number(heightInInput.value);
    labelSelectIn.innerHTML = `${heightIn} inches`;

    heightFtInput.addEventListener('input', function(event){
        heightFt = Number(heightFtInput.value);
        labelSelectFt.innerHTML = `${heightFt} feet`;
    });

    heightInInput.addEventListener('input', function(event){
        heightIn = Number(heightInInput.value);
        labelSelectIn.innerHTML = `${heightIn} inches`;
    });

    form.addEventListener('submit', function(event){
        event.preventDefault();
        
        // Make sure they completed the form 
        if(heightFtInput.value && heightInInput.value && weightInput.value){
            // Convert feet to inches
            var ftConversion = heightFt * 12;
            var totalHeightIn = ftConversion + heightIn;
            // Do math
            var bmi = (weightInput.value / (totalHeightIn * totalHeightIn)) * 703;
            bmi = Math.round(bmi * 100) / 100;

            // Compare to good BMI and provide feedback
            if(bmi > 25){
                output.innerHTML = `<p style="color:red;">Your BMI is ${bmi}. \nThat's too high. Lose some weight.</p>`;
            } else if(bmi < 18.5){
                output.innerHTML = `<p style="color:red;">Your BMI is ${bmi}. \nThat's too low. Gain some weight.</p>`;
            } else {
                output.innerHTML = `<p style="color:green;">Your BMI is ${bmi}. \nThat's good! You're a normal weight!</p>`;
            }
        } else {
            output.innerHTML = `Please complete the form.`;
        }
    });
}

// Call the setupBMI function
setupBMI();

