
// Capturamos al formulario
var theForm = document.querySelector('form');

// Obtenemos todos los campos, pero parseamos la colección a un Array
var formInputs = Array.from(theForm.elements);

// // Sacamos la provincia del array que no es obligatoria
// var
formInputs.splice(7, 1);

// Sacamos la 1er posición del array que es el un <input> hidden del token
formInputs.shift();

// Sacamos al último elemento que es el <button>
formInputs.pop();

// Objeto literal para verificar si un campo tiene error
var errorsObj = {};

// Recorremos el array y asignamos la validación básica
formInputs.forEach(function (oneInput) {
  oneInput.addEventListener('blur', function () {

    // Validación si el campo está vacío

		if (this.value.trim() === '') {
			// Si el campo está vacío, le agrego la clase 'is-invalid'
			this.classList.add('is-invalid');
			// Ademas, al <div> con clase 'invalid-feedback' le agremamos el texto de error
			this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('name') + '</b> es obligatorio';
			// Si un campo tiene error, creamos una key con el nombre del campo y valor true
			errorsObj[this.name] = true;
		} else {
			// Cuando el campo NO está vacío

			// Quitamos la clase de error SI existiera
			this.classList.remove('is-invalid');

			// Si la data es correcta, asignamos esta clase de bootstrap
			this.classList.add('is-valid');

			// Al mensaje de error le sacamos el texto
			this.nextElementSibling.innerHTML = '';

			// Si un campo NO tiene error, eliminamos la key del objeto y su valor
			delete errorsObj[this.name];

      // Validamos el name
      if (this.name === 'name') {
        // Validamos que el texto insertado NO supere las 25 letras
        if (this.value.length > 25) {
          this.classList.add('is-invalid');
          this.nextElementSibling.innerHTML = 'El nombre debe ser inferior a 25 letras';
          // Si un campo tiene error, creamos una key con el nombre del campo y valor true
          errorsObj[this.name] = true;
        }
      }

      // Validamos el username
      if (this.name === 'username') {
        // Validamos que el texto insertado NO supere las 25 letras
        if (this.value.length > 25) {
          this.classList.add('is-invalid');
          this.nextElementSibling.innerHTML = 'El usuario debe ser inferior a 25 letras';
          // Si un campo tiene error, creamos una key con el nombre del campo y valor true
          errorsObj[this.name] = true;
        }
      }

      function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
      }

      // Validamos el email
      if (this.name === 'email') {
        // Validamos que el texto insertado sea valido para un email
        if (!validateEmail(this.value)) {
          this.classList.add('is-invalid');
          this.nextElementSibling.innerHTML = 'El formato del email debe ser correcto';
          // Si un campo tiene error, creamos una key con el nombre del campo y valor true
          errorsObj[this.name] = true;
        }
      }

      function validatePasswordRegex(password) {
        var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        return re.test(String(password));
      }

      // Validamos la password
      if (this.name === 'password') {
        // Validamos que el texto insertado sea valido para la regex
        if (!validatePasswordRegex(this.value)) {
          this.classList.add('is-invalid');
          this.nextElementSibling.innerHTML = 'La contraseña debe tener una mayuscula, una minuscula y un numero';
          // Si un campo tiene error, creamos una key con el nombre del campo y valor true
          errorsObj[this.name] = true;
        }
      }

      // Validamos la length de la password
      if (this.name === 'password') {
        // Validamos que el texto insertado supere las 8 letras
        if (this.value.length < 8) {
          this.classList.add('is-invalid');
          this.nextElementSibling.innerHTML = 'La contraseña debe ser superior a 8 letras';
          // Si un campo tiene error, creamos una key con el nombre del campo y valor true
          errorsObj[this.name] = true;
        }
      }
  }

}
  )

}
  )

// Si tratan de enviar el formulario
theForm.addEventListener('submit', function (event) {
	// Al momento de SUBMITEAR el formulario iteramos los campos y validamos si están vacíos
	formInputs.forEach(function (input) {
		if (input.value.trim() === '') {
			// Si el campo está vacío creamos dentro del objeto de errores una key con valor true
			errorsObj[input.name] = true;
			// Asiganmos la clase de CSS
			input.classList.add('is-invalid');
			// Mostramos el mensaje de error
			input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> es obligatorio';
		}
	});

	console.log('Campos con errores:', errorsObj);
	console.log('Cantidad de campos con errores:', Object.keys(errorsObj).length);

	// Si el objeto que contiene los errores NO está vacío evitamos que se SUBMITEE el formulario
	if (Object.keys(errorsObj).length > 0) {
		event.preventDefault();
	}
});
