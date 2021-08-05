const express = require('express');
const app = express();

const PORT = process.env.PORT || 5000;

app.use(express.static('page/kontak'));

app.get('/', (req, res)=>{
    // res.send('hello!')
    res.sendFile(__dirname + '/page/kontak/kontak_us.php')
})

app.listen(PORT, ()=>{
    console.log('Server running on port '+PORT)
})