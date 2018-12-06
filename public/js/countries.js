
var countrySelect = document.querySelector('#countrySelect');
console.log(countrySelect);
// var prov = document.getElementById('prov');

  function ajaxCall (url, callback) {
    window.fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      callback(data);
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  function getCountries (countries) {
    for (var country of countries) {
      var option = '<option>' + country.name + '</option>';
      countrySelect.innerHTML += option;
    }
  }

  ajaxCall('https://restcountries.eu/rest/v2/all', getCountries);


// function getcities (provinces) {
//   for (var prov of provinces) {
//     var option = '<option>' + prov.state + '</option>';
//     prov.innerHTML += option;
//   }
// }

//
// country.addEventListener('change', function () {
//   if (this.value === 'Argentina') {
//     prov.style.display = 'inline-block';
//     ajaxCall('https://dev.digitalhouse.com/api/getProvincias', getcities);
//   } else {
//       prov.innerHTML = '';
//       prov.style.display = 'none';
//   }
