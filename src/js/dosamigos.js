// document.getElementById("pop").on("click", function(e) {   e.preventDefault();   document.getElementById("the-modal").modal('toggle');});


// $("#pop").on("click", function(e) {
//     e.preventDefault();
//     $('#the-modal').modal('toggle');
// });

jQuery('#exampleModal').on('show.bs.modal', function (event) {
    var button = jQuery(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('image') // Extract info from data-* attributes
    var title = button.data('title') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = jQuery(this)
    // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-title').text(title)
    modal.find('.modal-body input').val(recipient)
    modal.find('.modal-body img').attr('src', recipient)
  })

//   document.getElementById("exampleModal").on('show.bs.modal', function (event) {    let button = $(event.relatedTarget)     let recipient = button.data('image')             let modal = this    modal.find('.modal-title').innerText = 'New message to ' + recipient    modal.find('.modal-body input').value = recipient  })