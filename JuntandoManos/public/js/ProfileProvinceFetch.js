window.addEventListener('load', function () {

  // capturo el select
  var selectPaises = document.querySelector('#country');
  // capturo el select
	var selectProvincias = document.querySelector('#province');
  // capturo el... label?
  var contenedorProvincias = selectProvincias.parentElement.parentElement;


  // Función genérica para hacer llamados FETCH
  function genericFetchCall (endPoint, callback) {
    fetch(endPoint)
      .then(function (response) {
        return response.json(); // array de objetos literales
      })
      .then(function (data) {
        callback(data);
      })
      .catch(function (error) {
        console.log('El error fue: ' + error);
      });
  }

  // Función para traer los países e insertarlos en el selectPaises
	function insertCountries (countries) {
		countries.forEach(function (oneCountry) {
			selectPaises.innerHTML += `<option value="${oneCountry.name}">${oneCountry.name}</option>`;
		});
	}

	// Llamamos a la api de Paises
	genericFetchCall('https://restcountries.eu/rest/v2/all', insertCountries);

	// Función para traer las provincias e insertarlas en el selectProvincias
	function insertProvinces (provinces) {
		provinces.provincias.forEach(function (unaProvincia) {
			selectProvincias.innerHTML += `<option value="${unaProvincia.nombre}">${unaProvincia.nombre}</option>`;
		});
	}

	// selectProvincias.addEventListener('click', function () {
	// 	if (selectPaises.value.toLowerCase() === 'argentina') {
	// 		// contenedorProvincias.style.display = 'flex';
  //     // selectProvincias.innerHTML = '<option value="">Elegí tu Provincia</option>';
	// 		genericFetchCall('https://apis.datos.gob.ar/georef/api/provincias', insertProvinces);
	// 	}});

  selectPaises.addEventListener('change', function () {
    if (selectPaises.value.toLowerCase() === 'argentina') {
			contenedorProvincias.style.display = 'flex';
			genericFetchCall('https://apis.datos.gob.ar/georef/api/provincias', insertProvinces);
		}
    else if (selectPaises.value.toLowerCase() != 'argentina') {

    	contenedorProvincias.style.display = 'none';
			selectProvincias.innerHTML = '<option value=null>Elegí tu Provincia</option>';
		}});

}
)
