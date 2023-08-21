    $('#caixa1').load('pesqalu_geral2.php');
    $('#form1').submit(function(e){
        
        e.preventDefault();

        var u_txtMatricula = $('#txtMatricula').val();
        var u_txtNome= $('#txtNome').val();
        var u_txtEndereco = $('#txtEndereco').val();
        var u_txtCidade = $('#txtCidade').val();
        var u_txtCodcurso = $('#txtCodcurso').val();

        $.ajax({

            url: 'pesqalu_geral2.php',
            method: 'POST',
            data: {matricula:u_txtMatricula, nome:u_txtNome, end:u_txtEndereco, cidade:u_txtCidade, codcurso:u_txtCodcurso},
            dataType: 'json'
    
        }).done(function(result){

            $('#txtMatricula').val('');
            $('#txtNome').val('');
            $('#txtEndereco').val('');
            $('#txtCidade').val('');
            $('#txtCodcurso').val('');

            $('#caixa1').load('pesalu_geral2.php');

        });

});