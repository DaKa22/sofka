$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
const ruta ='http://daka.ga'
// const ruta ='http://127.0.0.1:8000'
function salir(id) {
    if (confirm('¿Estas seguro de Salir?')) {
        window.location.href = '/salir/' + id;

    } else {
        alert('Cancelacion Exitosa')
    }
}
function validar(respuestas_id, users_id) {
    $.ajax({
        // url: ruta+"/validar/"+respuestas_id+"/"+users_id,
        url: `${ruta}/validar/${respuestas_id}/${users_id}`,
        type: "POST",
        data: { respuestas_id, users_id },
        success:  (data) => {
            // success: function (data) {
            if (data.correcta == true) {
                $("#puntos").text('Score :' + data.puntos)
                $('#respuesta' + respuestas_id).removeClass('form-control')
                $('#respuesta' + respuestas_id).addClass('btn btn-success')
                data.respuestas.forEach(element => {
                    $('#respuesta' + element.id).addClass('disabled')
                });

                setTimeout(() => {
                    window.location.href = `${ruta}/siguienteronda/${users_id}/${respuestas_id}`
                }, 3000);

            }
            if (data.correcta != true) {

                $('#respuesta' + respuestas_id).removeClass('form-control')
                $('#respuesta' + respuestas_id).addClass('btn btn-danger')
                data.respuestas.forEach(element => {
                    $('#respuesta' + element.id).addClass('disabled')
                });
                setTimeout(() => {
                    window.location.href = `${ruta}/gameover`
                }, 3000);


            }
        }
    });
}
