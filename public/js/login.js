document.querySelector('.eye-icon').addEventListener('click', function() {
    var emailInput = document.getElementById('password');
    var type = emailInput.getAttribute('type') === 'password' ? 'text' : 'password';
    emailInput.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
