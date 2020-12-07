const express = require('express')
const app = express()
const list = require('../database/database.json')


app.get('/list', (req,res) => {
	res.status(200).send(list)
})

module.exports = app.listen(8080,() => {
	console.log('Serveur à l\'écoute sur port 8080')
})