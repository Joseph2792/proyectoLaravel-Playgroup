
var countrySelect = document.querySelector('#countrySelect');
var provSelect = document.querySelector('#provSelect');

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

  function getProvinces (provinces) {
    for (var prov of provinces) {
      var option = '<option>' + prov.state + '</option>';
      provSelect.innerHTML += option;
    }
  }

  countrySelect.addEventListener('change', function () {
    if (this.value !== 'Argentina') {
      provSelect.setAttribute('disabled', '');
      provSelect.innerHTML = '';
    } else {
      provSelect.removeAttribute('disabled');
      ajaxCall('https://dev.digitalhouse.com/api/getProvincias', getProvinces);
    }
  });


  ajaxCall('https://restcountries.eu/rest/v2/all', getCountries);
