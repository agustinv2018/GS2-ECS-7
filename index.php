<?php

header('Content-Type: application/json');

require_once 'modelo/datosoperacion.php';
require_once 'modelo/oportunidad.php';
require_once 'modelo/persona.php';
require_once 'modelo/respuestaoportunidad.php';

$per = new Persona();
$per->Nombres = 'pedro rodriguez';
$per->Sexo = 'F';
$per->Documento = '123123';
$per->Email = 'aaaa@aaaa.com.ar';
$per->Celular = '123456';
$per->TelefonoAlternativo = '123456';

$do = new DatosOperacion();
$do->MontoSolicitado = 500000;
$do->Linea = '504';
$do->CantidadCuotas = 12;
$do->TasaEfectivaMensual = 2.9589;
$do->CuotaPromedio = 53503.08;
$do->TasaNominalAnual = 36;
$do->CostoFinancieroTotal = 56.55;

$opo = new Oportunidad();
$opo->Persona = $per;
$opo->DatosOperacion = $do;
$opo->SmsConsultaId = '17654293-27258197726';
$opo->IdValidatorId = 893;
$opo->MotorSolaFirmaId = 8870;

$resop = new RespuestaOportunidad();
$resop->Oportunidad = $opo;
$resop->IsOk = true;

echo json_encode($resop);

