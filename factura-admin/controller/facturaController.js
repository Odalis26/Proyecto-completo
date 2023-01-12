'use strict';
var mongoose = require('mongoose');
const uuidv4 = require('uuid/v4');
//Para listar a los clientes
var Persona = require('../models/persona');
//Administrar facturas
var Factura = require('../models/factura');
//Recorrer listas
var forEach = require('sync-each');

class FacturaController {
    verRegistro(req, res) {
        Persona.find({}, (err, personas) => {
            if (personas) {
                var listaF = [];
                Factura.find({}, (error, facturas) => {
                    if (facturas) {
                        //No es necesario
                        /*res.render('index', {title: 'Registro de facturas',
                         fragmento: 'fragmentos/frmRegistroFacturas',
                         //lista de personas
                         lista: personas,
                         listaF: facturas
                         });*/
                        //Listar facturas
                        /*
                         each(array, iterator, callback);- Array, Function,(optional) Function
                         iterator(item, next)recibe el elemento actual y una devolución de llamada 
                         que marcará el elemento como hecho. nextLa devolución de llamada recibe error, 
                         transformedItemargumentos opcionales .
                         callback(error, transformedArray)Opcionalmente recibe primer error y resultado 
                         transformado Array.
                         */
                        forEach(facturas,
                                function (factura, next) {
                                    Persona.findOne({id: factura.persona}, (err, per) => {
                                        if (per) {
                                            factura.datosPersona = per.apellidos + " " + per.nombres;
                                            listaF.push(factura);
                                            next(err, listaF);
                                        }
                                    });
                                }, function (err, listaF) {
                            res.render('index', {title: 'Registro de facturas',
                                fragmento: 'fragmentos/frmRegistroFacturas',
                                lista: personas,
                                listaF: listaF
                            });
                        });


                    }
                });
            }
        });
    }

    guardar(req, res) {
        console.log(req.body.external);
        if (req.body.external == 0) {
            Factura.findOne({nroFactura: req.body.nro}, (error, factura) => {
                if (error) {
                    req.flash('info', 'Hubo un error', false);
                    res.redirect('/registro/facturas');
                } else if (factura) {
                    req.flash('info', 'Factura ya existe', false);
                    res.redirect('/registro/facturas');
                } else {
                    new Factura({
                        id: new mongoose.Types.ObjectId(),
                        fecha: req.body.fecha,
                        nroFactura: req.body.nro,
                        subtotal: req.body.subtotal,
                        iva: req.body.iva,
                        total: req.body.total,
                        descuento: req.body.descuento,
                        externalId: uuidv4(),
                        persona: req.body.clientes
                    }).save(function (err, newFactura) {
                        if (err) {
                            req.flash('info', 'Hubo un error en guardado', false);
                        } else if (newFactura) {
                            req.flash('info', 'Se ha registrado correctamente', false);
                        }
                        res.redirect('/registro/facturas');
                    });

                }

            });
        } else {
            //modifcar
            console.log("Modificar");
            Factura.update({externalId: req.body.external}, {$set: {
                    fecha: req.body.fecha,
                    nroFactura: req.body.nro,
                    subtotal: req.body.subtotal,
                    iva: req.body.iva,
                    total: req.body.total,
                    descuento: req.body.descuento,
                    persona: req.body.clientes
                }}, (err, factura) => {
                if (err) {
                    req.flash('info', 'Hubo un error en modificado', false);
                } else if (factura) {
                    req.flash('info', 'Se ha modificado correctamente', false);
                }
                res.redirect('/registro/facturas');
            });
        }
    }

}
module.exports = FacturaController;