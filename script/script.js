
document.getElementById('enviar').addEventListener('click', function () {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var opc = document.getElementById('opc').value;
    if (nome === '' || email === '' || opc === '') {
        alert('Preencha todos os campos');
    } else {
        alert('Mensagem enviada com sucesso!');
    }
});