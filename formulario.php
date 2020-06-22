<?php

use Zend\Mvc\Application;
use Zend\Stdlib\ArrayUtils;

?>
<center>
  <div class="formulario">
  <h2>FORMULARIO</h2>
  <link rel="stylesheet" href="estilos.CSS">

    <div class="datos">
      <input class="datos" type="text" name="matricula" placeholder="Matricula" required>
      <input class="datos" type="text" class="form-control" placeholder="Nombre" required>
      <input class="datos" type="text" class="form-control" placeholder="Apellido Paterno" required>
      <input class="datos" type="text" class="form-control" placeholder="Apellido Materno" required>
    </div>

    <div class= "edad" >  
    <input class="datos" class= "edad" type="number" name="edad"  class="form-control" placeholder="Edad" required>
    </div>


    <div class="fdn">
    <input class="datos" class="fdn" type="date" id="date" name="date" placeholder="04/04/200" required/>
    </div>


    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
      <label class="custom-control-label" for="customRadio1">Masculino</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
      <label class="custom-control-label" for="customRadio2">Femenino</label>
    </div>

    <div class="estado">
    <select class="estado" class="custom-select">
    <option selected>SELECCIONA</option>
    <option value="1">Aguascalientes</option>
    <option value="2">Baja California</option>
    <option value="3">Baja California Sur</option>
    <option value="4">Campeche</option>
    <option value="5">Chiapas</option>
    <option value="6">Chihuahua</option>
    <option value="7">Coahuila de Zaragoza</option>
    <option value="8">Colima</option>
    <option value="9">Durango</option>
    <option value="10">Estado de México</option>
    <option value="11">Guanajuato</option>
    <option value="12">Guerrero</option>
    <option value="13">Hidalgo</option>
    <option value="14">Jalisco</option>
    <option value="15">Michoacán de Ocampo</option>
    <option value="16">Morelos</option>
    <option value="17">Nayarit</option>
    <option value="18">Nuevo León</option>
    <option value="19">Oaxaca</option>
    <option value="20">Puebla</option>
    <option value="21">Querétaro</option>
    <option value="22">Quintana Roo</option>
    <option value="23">San Luis Potosí</option>
    <option value="24">Sinaloa</option>
    <option value="25">Sonora</option>
    <option value="26">Tabasco</option>
    <option value="27">Tamaulipas</option>
    <option value="28">Tlaxcala</option>
    <option value="29"> de Ignacio de la Llave</option>
    <option value="30">Yucatán</option>
    <option value="31">Zacatecas</option>
    </select>
    </div>

    <input type="submit" class="btn-submit" value="ENVIAR">

      </div>
      </center>