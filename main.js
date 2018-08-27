$("#contact-form").on("submit", function(ev){
  ev.preventDefault()

  sendForm($(this))

  return false
})

function enviarForm($form){
  $.ajax({
    url: $form.attr("action"),
    method: "POST",
    data: $form.formObject(),
    dataType: "json"
  })
}
