function exibeEspecialidade() {
	var espec = $('#espec').val();

    /* Configura a requisição AJAX */
    $.ajax({
        url: 'clinicaDemo/ajax/funcoes-ajax.php',
        type: 'POST',
        /* Tipo da requisição */
        data: 'especialidade_id=' + espec + '&funcao=selecionaProfissional',
        /* dado que será enviado */
        dataType: 'json',
        /* Tipo de transmissão */

        success: function(data) {
            $("#resultado").html(data.retorno);
        }
    });
}
