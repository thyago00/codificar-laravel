$('.deletar').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Você tem certeza?',
        text: 'Este orçamento será deletado!',
        icon: 'warning',
        buttons: ["Cancelar", "Ok!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});