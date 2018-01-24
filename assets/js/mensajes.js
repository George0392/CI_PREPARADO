$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Boton que activara el modal para mensajes
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Nuevo Mensaje para ' + recipient)
  modal.find('.modal-body input').val(recipient)
})