// ********************* show/hide modal
export function modalLoggin() {
    let loggin = document.getElementById('loggin');
    let logWindow = document.getElementById('log-window');

    let register = document.getElementById('register');
    let registerWindow = document.getElementById('register-window');

    let modal = document.getElementById('modal');

    let closeLog = document.getElementById('close-log');
    let validateLog = document.getElementById('validate-log');

    let closeRegister = document.getElementById('close-register');
    let validateRegister = document.getElementById('validate-register')
    let cancelRegister = document.getElementById('cancel');

    window.addEventListener('click', function(e){
        if (loggin.contains(e.target)){
            modal.style.display = 'block';
            logWindow.style.display = 'block';
        }
        else if (!logWindow.contains(e.target) || closeLog.contains(e.target)) {
            modal.style.display = 'none';
            logWindow.style.display = 'none';
        }
    })
}
