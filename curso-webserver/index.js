
const express = require('express');
const app = express();
app.get('/', (req, res) => {
    res.send('Hello World!');
});

app.get('/hora', (req, res) => {
    res.send (new Date()
        .toLocaleTimeString('es-ES', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        }),
    );
});
app.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
    console.log("Hola mundo!");
});