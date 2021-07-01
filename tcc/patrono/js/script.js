function searchAddress()
{
  let address = document.getElementById("endereco").value;
  let xml = new XMLHttpRequest();
  let url = `https://nominatim.openstreetmap.org/search?format=json&accept-language=pt-br&limit=5&q=${address}`;
  xml.onreadystatechange = function()
  {
    if(this.readyState==4 && this.status==200)
    {
      let response = JSON.parse(this.responseText);

      let result = "";

      if(response.length > 0)
      {
        result+= "<ul>";
        for(let i=0; i<response.length; i++)
        {
          result += `<li class="addressResult mb-2" onclick="setAddress(${response[i].lat}, ${response[i].lon})">${response[i].display_name}</li>`;
        }
        result+= "</ul>";
        
      }
      else
      {
        result+= "<div class='alert alert-danger mt-3 ml-3'>Nenhum resultado encontrado!</div>";
      }
      document.getElementById('result').innerHTML = result;
    }
  };
  xml.open("GET", url, true);
  xml.send();
}

function setAddress(lat1, long1) {      
  let lat = lat1.toFixed(8);
  let long = long1.toFixed(8);
  document.getElementById('latitude').value = lat;
  document.getElementById('longitude').value = long;

  let xml = new XMLHttpRequest();
  // https://nominatim.openstreetmap.org/reverse?format=json&accept-language=pt-br&zoom=18&lat=-23.55346340&lon=-46.59778430
  let url = `https://nominatim.openstreetmap.org/reverse?format=json&accept-language=pt-br&zoom=18&lat=${lat}&lon=${long}`;
  xml.onreadystatechange = function()
  {
    if(this.readyState==4 && this.status==200)
    {
      let response = JSON.parse(this.responseText);

      let result = [];
      result[0] = response["address"]["road"];
      result[1] = response["address"]["house_number"];
      result[2] = response["address"]["suburb"];
      result[3] = response["address"]["city"];
      result[4] = response["address"]["state"];
      result[5] = response["address"]["postcode"];

      document.getElementById('logradouro').value = result[0];
      document.getElementById('numero').value = result[1];
      document.getElementById('bairro').value = result[2];
      document.getElementById('cidade').value = result[3];
      document.getElementById('estado').value = result[4];
      document.getElementById('cep').value = result[5];
    }
  };
  xml.open("GET", url, true);
  xml.send();
}