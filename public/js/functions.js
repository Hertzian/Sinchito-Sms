
$(document).ready( function () {
    $('#balance-table').DataTable();
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
  
  async function alertWrongTimer() {
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
  
  function limpiar_single() {
    var box1 = document.getElementById("tel").value ='';
    var box2 = document.getElementById("texto_personalizado").value ='';
  }

  function limpiar_template() {
    var box1 = document.getElementById("temaplate-name").value ='';
    var box2 = document.getElementById("texto_personalizado").value ='';
  }
