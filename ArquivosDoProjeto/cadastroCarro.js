
var db_carros = {
    "carros": [
        {
            "id": 1,
            "imagem": "img/Cruze.jpg",
            "nomeCarro": "Cruze",
            "descricao": "Cruze 2020, 5 portas, flex, 1.8",
            "km": "15.0000",
            "flex": true,
            "lugares": 5,
            "motor": 1.8,
            "categoria": "Sedan",
            "condicao" : "usado",
            "ano": "2008",
            "cor": "cinza"
        },
        {
            "id": 2,
            "imagem": "img/car7.jpg",
            "nomeCarro": "COROLLA",
            "descricao": "COROLLA 2020, 4 portas, flex, 1.8",
            "km": "25.0000",
            "flex": true,
            "lugares": 4,
            "motor": 2.0,
            "categoria": "Sedan",
            "condicao" : "usado",
            "ano": "2020",
            "cor": "preto"
        },
    ]
};

var db = JSON.parse(localStorage.getItem('db_carros'));
if (!db) {
    localStorage.setItem('db_carros', JSON.stringify (db_carros));
    db = db_carros
};


function displayMessage(msg) {
    $('#msg').html('<div class="alert alert-warning">' + msg + '</div>');
}


