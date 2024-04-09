// Select the form element
const form = document.getElementById('signup-form');

// Add a submit event listener to the form
form.addEventListener('submit', function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Get the values from the form inputs
    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validate the inputs
    if (firstName.trim() === '') {
        alert('Please enter your first name');
        return;
    }

    if (email.trim() === '') {
        alert('Please enter your email');
        return;
    }

    if (password.trim() === '') {
        alert('Please enter your password');
        return;
    }

    // If all inputs are valid, you can proceed with form submission or other actions
    alert('Form submitted successfully!');
    // Here, you can add code to submit the form to the server or perform any other actions
});
