function salta(enlace) {
    if (enlace != "")
        document.location = enlace;
}

function enviarForm($form){
  $.ajax({
    url: "https://formspree.io/amparoserviciossociales@gmail.com",
    method: "POST",
    data: {message: "hello!"},
    dataType: "json"
  })
}
