document.getElementById('usuarioForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;

    fetch('datos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, email })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        alert(data.message);
    })
    .catch(error => console.error('Error:', error));
});
