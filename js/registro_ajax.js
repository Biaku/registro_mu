$("form").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "registrar.php",
        method: "post",
        data: $("form").serialize(),
        success: function (data) {
            var dato = JSON.parse(data);
            if (!dato[0]) {
                swal(
                    '¡Ops!',
                    dato[1],
                    'error'
                );
            } else if (dato[0]) {
                swal({
                    title: '¡Exito!',
                    text: dato[1],
                    type: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                }).then(function () {
                    location.reload();
                });
            }
        }
    });
});