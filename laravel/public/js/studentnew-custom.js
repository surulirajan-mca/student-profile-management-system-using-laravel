function ConfirmDelete(id) {
    $('#confirmationModal').modal('show');
    $('#confirmDeleteButton').on('click', function() {
        var url = '#redirecturl' + id;
        var redirectUrl = $(url).val();
        window.location.href = redirectUrl;
    });
}

function NoDelete() {
    $('#confirmationModal').modal('hide');
}

