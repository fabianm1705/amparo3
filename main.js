$("#contact-form").on("submit", function(ev){
  ev.preventDefault()

  enviarForm($(this))

  return false
})

function enviarForm($form){
  console.log($form.formObject())
  $.ajax({
    url: $form.attr("action"),
    method: "POST",
    data: $form.formObject(),
    dataType: "json"
  })
}
