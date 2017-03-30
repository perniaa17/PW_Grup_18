$(document).ready(function() {
    $('#formulario').submit(function(e){
      var name = $('#name').val();
      var pass1 = $('#pass1').val();
      var pass2 = $('#pass2').val();
      var valid = true;

      if(!validNameCaracters(name)) {
        valid = false;
        alert("Username solo puede tener letras y numeros");
      }

      if(!validNameSize(name)) {
        valid = false;
        alert("Username tiene que tener entre 2 y 20 caracteres");
      }

      if(!validPass1Size(pass1)) {
        valid = false;
        alert("el password tiene que tener entre 6 y 12 caracteres");
      }

      if(!validPass1Mayusc(pass1)) {
        valid = false;
        alert("el password ha de contener mayusc");
      }

      if(!validPass1Minusc(pass1)) {
        valid = false;
        alert("el password ha de contener minusc");
      }

      if(!validPass1Nums(pass1)) {
        valid = false;
        alert("el password ha de contener nums");
      }

      if(pass1 != pass2) {
        valid = false;
        alert("els passwords no coinciden");
      }

      if (!valid) {
        e.preventDefault();
      }
    });
});

function validNameCaracters(name) {
  if(name.search(/[^a-zA-Z0-9]+/) != -1 || name == "" ){
    return false;
  }
  return true;
}

function validNameSize(name) {
  if(name.length <= 20 && name.length >= 2){
    return true;
  }else {
    return false;
  }
}

function validPass1Size(pass1) {
  if(pass1.length >= 6 && pass1.length <= 12){
    return true;
  }else {
    return false;
  }
}

function validPass1Mayusc(pass1) {
  var mayusc = /[A-Z]/;
  if (!mayusc.test(pass1)) {
    return false;
  }
  return true;
}

function validPass1Minusc(pass1) {
  var minusc = /[a-z]/;
  if (!minusc.test(pass1)) {
    return false;
  }
  return true;
}

function validPass1Nums(pass1) {
  var nums = /[0-9]/;
  if (!nums.test(pass1)) {
    return false;
  }
  return true;
}
