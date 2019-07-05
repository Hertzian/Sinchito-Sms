
  $(document).ready( function () {
    $('#table_template').DataTable();
  } );
  
  
  function deleteElement() {
      Delete();
  }
  
  function ok() {
    alertTimer();
  }
  
  async function Delete() {
      const {
        value: formValues
      } = await Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
  }
  
  
  async function alertTimer() {
    const {
      value: formValues
      } = await Swal.fire({
      title: 'Good job!',
      text: "You won't be able to revert this!",
      type: 'success',
      timer: 1500,
      showConfirmButton: false
    })
  }
  
  async function  r() {
    const {
      value: formValues
      } = await Swal.fire({
      title: 'Oops...',
      text: "Something went wrong!",
      type: 'success',
      timer: 1500,
      showConfirmButton: false
    })
  }
  
  function validarPass() {
    var pass = document.getElementsByName('pass').value;
    var rpass = document.getElementsByName('rpass').value;
    var espacios = false;
    var cont = 0;
  
    if (pass != rpass) {
      //don't match
    } else {
      // the password it's ok 
      while (!espacios && (cont < p1.length)) {
        if (p1.charAt(cont) == " ")
          espacios = true;
        cont++;
      }
      if (espacios) {
        alert ("La contraseña no puede contener espacios en blanco");
        return false;
      }
    }
  }
  
  function valpass()
  {
    
  }
  
  function valTextMessage(obj)
  {
    var textArea = document.getElementById("texto_personalizado");
    var maxlength = 160;
    var part = 1;
    var max = 160;
    
    document.getElementById("letters").innerHTML = 'Message parts: '+ part +', Characters: ' + obj.value.length;
  }

  // Limpiar campos
  
  function limpiar_single() {
    document.getElementById('tel').value ='';
    document.getElementById('texto_personalizado').value ='';
  }

  function limpiar_template() {
    document.getElementById('temaplate-name').value = '';
    document.getElementById('texto_personalizado').value = '';
  }

  function Prueba() {
    alert("alert");
  }

  function limpiar_() {
    document.getElementById('type').value = '';
    document.getElementById('message_limit').value = '';
    document.getElementById('balance').value = '';
    document.getElementById('status').value = '';
  }

  function limpiar_mensaje_single() {
    document.getElementById('texto_personalizado').value = '';
    console.log("L_mensaje_single se ejecuto");
    
  }

  function limpiar_newitem() {
    document.getElementById('name').value = '';
    document.getElementById('number').value = '';
  }

  function change_info() {

    
    // document.getElementById('name-a').classList.add('cambioinput');
    // document.getElementById('name-i').classList.remove('baseinput');

    // document.getElementById('lastname-a').classList.add('baseinput');
    // document.getElementById('lastname-i').classList.remove('cambioinput');
    
    // document.getElementById('name-a').classList.add('baseinput');
    // document.getElementById('name-i').classList.remove('cambioinput');

    // document.getElementById('email-a').classList.add('baseinput');
    // document.getElementById('email-i').classList.remove('cambioinput');

    // document.getElementById('phone-a').classList.add('baseinput');
    // document.getElementById('phone-i').classList.remove('cambioinput');

    // document.getElementById('country-a').classList.add('baseinput');
    // document.getElementById('country-i').classList.remove('cambioinput');

    // document.getElementById('state-a').classList.add('baseinput');
    // document.getElementById('state-i').classList.remove('cambioinput');

    // document.getElementById('city-a').classList.add('baseinput');
    // document.getElementById('city-i').classList.remove('cambioinput');

    // document.getElementById('address-a').classList.add('baseinput');
    // document.getElementById('address-i').classList.remove('cambioinput');
    
  }

  $(function () {
    'use strict'
    // Composite line charts, the second using values supplied via javascript
    $("#lineIncrease").sparkline([1,8,6,5,6,8,7,9,7,8,10,16,14,10], {
      type: 'line',
      width: '100%',
      height: '140',
      lineWidth: 2,
      lineColor: '#ffffff',
      fillColor: "#398bf7",
      spotColor: '#ffffff',
      minSpotColor: '#ffffff',
      maxSpotColor: '#ffffff',
      spotRadius: 3,
    });

    $("#lineAnalytics1").sparkline([1,3,5,7,5,3,8,9,5,8,12], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#06d79c',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
    });
    
    $("#lineAnalytics2").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#06d79c',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
    });
    
    $("#lineAnalytics3").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#06d79c',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
    });
    
  }); 