$("#contact-form").on("submit", function(ev){
  ev.preventDefault()

  enviarForm($(this))

  return false
})

function enviarForm($form){
  $.ajax({
    url: $form.attr("action"),
    method: "POST",
    data: $form.formObject(),
    dataType: "json",
    success: alert("Gracias por el mensaje! nos comunicaremos a la brevedad.")
  })
}
