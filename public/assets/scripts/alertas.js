

function registrar() {

    Swal.fire('Registro Exitoso', '', 'success')
}

function solicitud() {

    Swal.fire('Solicitud Realizada', '', 'success')
}

function eliminar() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger',

        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Seguro deseas Eliminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
                'Eliminado!',
                'Registro Eliminado Correctamente',
                'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'Eliminacion Cancelada',
                'error'
            )
        }
    })
}

