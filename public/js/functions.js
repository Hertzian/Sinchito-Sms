
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
    var latin = document.getElementById("latin-alphabet");
    var other = document.getElementById("other-alphabet");
    var textArea = document.getElementById("text-message");
    var maxlength = 160;
  
    if(latin.checked){
      maxlength = 160;
    }
    else if(other.checked){
      maxlength = 70;
    }else{
      latin.checked = true;
    }
  
    document.getElementById("letters").innerHTML = 'Message parts: 1, Characters: ' + obj.value.length +' ('+ maxlength +')';
  
    if(obj.value.length > maxlength){
      textArea.style.color="#ff0000";
    }
    else{
      textArea.style.color="#000000";
    }
  
  }
  