$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function salir(id) {
    if (confirm('¿Estas seguro de Salir?')) {
        window.location.href = '/salir/' + id;

    } else {
        alert('Cancelacion Exitosa')
    }
}
function validar(respuestas_id, users_id, respuestas) {
    $.ajax({
        url: "/validar/"+respuestas_id+"/"+users_id,
        type: "POST",
        data: { respuestas_id: respuestas_id, users_id: users_id, respuestas: respuestas },
        success: function (data) {
            if (data.correcta == true) {
                $("#puntos").text('Score :' + data.puntos)
                $('#respuesta' + respuestas_id).removeClass('form-control')
                $('#respuesta' + respuestas_id).addClass('btn btn-success')
                data.respuestas.forEach(element => {
                    $('#respuesta' + element.id).addClass('disabled')
                });
                setTimeout(window.location.href = '/siguienteronda/'+users_id+'/'+respuestas_id, 5000);


            }
            if (data.correcta != true) {

                $('#respuesta' + respuestas_id).removeClass('form-control')
                $('#respuesta' + respuestas_id).addClass('btn btn-danger')
                data.respuestas.forEach(element => {
                    $('#respuesta' + element.id).addClass('disabled')
                });
                setTimeout(window.location.href = '/gameover', 5000);

            }
        }
    });
}
