var express = require('express');
var router = express.Router();
var persona = require('../controller/personaController');
var Persona = new persona();
var factura = require('../controller/facturaController');
var Factura = new factura();
/* GET home page. */
//router.get('/', function (req, res, next) {
//    res.render('index', {title: 'Facturación'});
//});

router.get('/', function (req, res, next) {
    res.render('index', {title: 'Facturación', fragmento: 'fragmentos/principal'});
});

router.get('/clientes', function (req, res, next) {
    res.render('index', {title: 'Facturación', fragmento: 'fragmentos/frmRegistro'});
});

router.get('/facturas', function (req, res, next) {
    res.render('index', {title: 'Facturación', fragmento: 'fragmentos/frmRegistroFacturas'});
});
//Persona
router.get('/registro/persona', Persona.verRegistro);
router.post('/registro/persona/guardar', Persona.guardar);

//Factura
router.get('/registro/facturas', Factura.verRegistro);
router.post('/registro/facturas/guardar', Factura.guardar);


module.exports = router;
