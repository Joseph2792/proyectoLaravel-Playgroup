window.onload = function () {

  var formulario = document.querySelector('.register-form');

  var campos = formulario.elements;

  campos = Array.from(campos);
  campos.pop();                               // porque el último elemento es el botón de enviar

  const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  var campoName = formulario.name;
  var campoNickname = formulario.nickname;
  var campoEmail = formulario.email;
  var campoPassword = formulario.password;
  var campoCountry = formulario.country;
  var campoPasswordConfirmation = formulario.password_confirmation;
  // var campoRegisterAvatar = formulario.registerAvatar;
  // var finalData = {};


  function validateEmpty (){
    var error = this.parentElement.querySelector('.invalid-feedback');
    var nombreCampo = this.parentElement.querySelector('label').innerText;

    if (this.value.trim() === '') {
        this.classList.add('is-invalid');
        error.innerText = "Este campo es obligatorio.";
    } else {
        error.innerText = "";
        this.classList.remove('is-invalid');
    }
  }


  function validateEmptyAndEmail () {
    var error = this.parentElement.querySelector('.invalid-feedback');
    var nombreCampo = this.parentElement.querySelector('label').innerText;

    if (this.value.trim() === '') {
        this.classList.add('is-invalid');
        error.innerText = "Este campo es obligatorio.";
    } else if (!regexEmail.test(this.value.trim())){
        error.innerText = "Debes ingresar un formato de email válido."
    } else {
        error.innerText = "";
        this.classList.remove('is-invalid');
    }
  }

  campoName.addEventListener('blur', validateEmpty);
  campoNickname.addEventListener('blur', validateEmpty);
  campoEmail.addEventListener('blur', validateEmptyAndEmail);
  campoPassword.addEventListener('blur', validateEmpty);
  campoCountry.addEventListener('blur', validateEmpty);
  campoPasswordConfirmation.addEventListener('blur', validateEmpty);

  campoPasswordConfirmation.addEventListener('change', function(){
    var error = this.parentElement.querySelector('.invalid-feedback');

    if(this.value.trim() !== campoPassword.value.trim()){
        this.classList.add('is-invalid');
        error.innerText = "Las contraseñas no coinciden.";
    } else {
        error.innerText = "";
        this.classList.remove('is-invalid');
    }
  });

  formulario.addEventListener('submit', function(ev) {
    if (
          campoName.value.trim() === "" ||
          campoNickname.value.trim() === "" ||
          campoEmail.value.trim() === "" ||
          campoPassword.value.trim() === "" ||
          campoCountry.value.trim() === "" ||
          campoPasswordConfirmation.value.trim() === ""
        )  {
            campos.forEach(function (campo){
              var error = campo.parentElement.querySelector('.invalid-feedback');
              var nombreCampo = campo.parentElement.querySelector('label').innerText;
              if (campo.value.trim() === "") {
                campo.classList.add('in-invalid');
                error.innerText = "El campo " + nombreCampo + " es obligatorio";
              }
            });
            ev.preventDefault();
    } else if (
          campoPasswordConfirmation.value !== campoPassword.value) {
              campoPassword.classList.add('is-invalid');
              campoPasswordConfirmation.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas no coinciden.";
              ev.preventDefault();
    } else {
          campos.forEach(function (campo) {
            var error = campo.parentElement.querySelector('.invalid-feedback');
            campo.classList.remove('is-invalid');
            campo.value = "";
            error.innerText = "";
            this.unbind('submit').submit();
          });
    }
  });





};
