function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';
}

function openForm(formType) {
    document.getElementById("myForm").style.display = "block";
    
    if (formType === 'login') {
        document.getElementById("loginForm").style.display = "block";
        document.getElementById("registerForm").style.display = "none";
    } else if (formType === 'register') {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("registerForm").style.display = "block";
    }
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function showRegister() {
    openForm('register');
}

function showLogin() {
    openForm('login');
}

function showSizeDropdown() {
    const paymentOption = document.getElementById('paymentOptions').value;
    const sizeDropdown = document.getElementById('sizeDropdown');
    
    if (paymentOption === 'school_shirt') {
        sizeDropdown.style.display = 'block';
    } else {
        sizeDropdown.style.display = 'none';
    }
}

function processPayment() {
    const selectedOption = document.getElementById('paymentOptions').value;
    const selectedSize = document.getElementById('shirtSize').value;
    const description = document.getElementById('description').value;

    if (selectedOption) {
        let message = 'You have selected: ' + selectedOption;
        if (selectedOption === 'school_shirt' && selectedSize) {
            message += '\nSize: ' + selectedSize;
        }
        alert(message + (description ? '\nAdditional Information: ' + description : ''));
        window.open('https://yourpaymentportal.com', '_blank'); // Replace with your actual payment portal URL
    } else {
        alert('Please select an option to proceed.');
    }
}