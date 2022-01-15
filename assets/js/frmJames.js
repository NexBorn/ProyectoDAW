//Expresiones Regulares

const expresiones = {
    names: /^[a-zA-Z ]{1,28}$/,
    surname: /^[a-zA-Z ]{1,28}$/,
    correo: /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z0-9-.]+$/i,
  };

  const inputValue = {
    nombre: false,
    apellido: false,
    email: false,
    vacuna: false
  };

  const formulario = document.getElementById("form");
  const inputs = document.querySelectorAll("#form input");



  /*Validación radio button */
  const validarRadio = ()=>{
  if(!document.querySelector('input[name="vacuna"]:checked')) {
    document.getElementById("form_question").classList.add("forms_field-incorrecto");
  /*document.getElementById("form_question").classList.remove("forms_field-correcto");*/
    document.querySelector("#form_question .form_input-error").classList.add("form_input-error-activo");
    vacuna = false;
  }else{
    document.getElementById("form_question").classList.remove("forms_field-incorrecto");
    /*document.getElementById("form_question").classList.add("forms_field-correcto");*/
    document.querySelector("#form_question .form_input-error").classList.remove("form_input-error-activo");
    
    vacuna = true;
  }
  
}


  const validarCampo=(expresion,input,campo)=>{
    if(expresion.test(input.value)){

      document.getElementById(`form_${campo}`).classList.remove("forms_field-incorrecto");
      document.getElementById(`form_${campo}`).classList.add("forms_field-correcto");
      document.querySelector(`#form_${campo} .form_input-error`).classList.remove("form_input-error-activo");
      inputValue[campo]=true;
    }else{  

      document.getElementById(`form_${campo}`).classList.add("forms_field-incorrecto");
      document.getElementById(`form_${campo}`).classList.remove("forms_field-correcto");
      document.querySelector(`#form_${campo} .form_input-error`).classList.add("form_input-error-activo");
      inputValue[campo]=false;
    }
  }

/*Validación de name,surname and email */

  const validarFormulario = (e) => {
    switch (e.target.name) {
      
      case "name":    
        validarCampo(expresiones.names, e.target, 'name');
         break;
      case "sur_name":   
       validarCampo(expresiones.surname, e.target, 'sur_name');  
        break;     

      case "email":
        validarCampo(expresiones.correo, e.target, 'email');
        break;
  
    }
  
  };

  inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
   
  });
  

  formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    const time_out=3000;
    /*validarRadio();*/

    const terminos = document.getElementById("terms");
     if (inputValue.email && terminos.checked && inputValue.nombre==false && inputValue.apellido==false && inputValue.vacuna==false) {

     document.getElementById('form_msj-exito').classList.add('form_msj-exito-activo');
     document.getElementById('form_msj').classList.remove('form_msj-activo');
     setTimeout(() => {
        document.getElementById('form_msj-exito').classList.remove('form_msj-exito-activo');
      }, time_out);

      formulario.reset();
     
     
    } else {
      document.getElementById('form_msj').classList.add('form_msj-activo'); 
    }
  });
  