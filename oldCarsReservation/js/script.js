
function buttonClicked(clicked_id){

  if(clicked_id == "btn_generalka"){
    console.log("mame generalku");
    document.getElementById("modal-title").innerHTML = "";
    document.getElementById("modal-title").innerHTML = "Rezervovať - Generalna oprava | Cena: 50€"
  } else if(clicked_id == "btn_calunenie"){
    console.log("mame calunenie");
    document.getElementById("modal-title").innerHTML = "";
    document.getElementById("modal-title").innerHTML = "Rezervovať - Čalúnenia | Cena: 40€"

  } else if(clicked_id == "btn_farbenie"){
    console.log("mame farbenie");
    document.getElementById("modal-title").innerHTML = "";
    document.getElementById("modal-title").innerHTML = "Rezervovať - Lakovanie, farbenie | Cena: 25€"

  } else if(clicked_id == "btn_konzultacie"){
    console.log("mame konzultacie");
    document.getElementById("modal-title").innerHTML = "";
    document.getElementById("modal-title").innerHTML = "Rezervovať - Osobné konzultacie | Cena: 15€"
  
  }
 
}


var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')

})