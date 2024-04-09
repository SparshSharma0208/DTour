document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('login-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        const email = form.querySelector('input[type="email"]').value;
        const password = form.querySelector('input[type="password"]').value;
        // You can perform form validation here
        // For simplicity, let's just log the values
        console.log('Email:', email);
        console.log('Password:', password);
        // Optionally, you can send these values to a server using fetch or XMLHttpRequest
    });

    const googleLoginBtn = document.querySelector('.google-login');
    googleLoginBtn.addEventListener('click', function () {
        // Perform Google login logic here
        // For simplicity, let's just log a message
        console.log('Logging in with Google...');
    });
});


