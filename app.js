document.querySelector('form').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Check if fields are not empty
    if (name === "" || email === "" || message === "") {
        event.preventDefault(); // Prevent form submission
        alert("Please fill all the fields.");
    }

    // Email validation (simple)
    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        event.preventDefault();
        alert("Please enter a valid email address.");
    }
});
