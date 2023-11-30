const pass = document.getElementsByName('password');
const repass = document.getElementsByName('repassword');
const btn = document.getElementById('btn')

btn.addEventListener('click', function() {
    if (pass !== repass) {
        alert('Kata Sandi Tidak Cocok');
        pass.focus();
        event.preventDefault();
        return false;
    };
});