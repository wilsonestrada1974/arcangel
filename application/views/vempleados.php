<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcangel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/empleados.css?v=<?php echo time(); ?>">


</head>

<body>

    <div class="container p-3 my-3 bg-primary text-white">
        <h1>ARCANGEL</h1>
        <p>Software de gestion administrativa de PUNTO VET CLINICA VETERINARIA</p>
    </div>

    <div class="container">
        <h2>EMPLEADOS PUNTO VET CLINICA VETERINARIA</h3>

            <form>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre de quien Ingresa los Datos:</label>
                        <select name="nombre" id="nombre" class="form-control">
                            <option value="wilson" selected>Wilson Estrada</option>
                            <option value="lina">Lina Quintero</option>
                            <option value="gladys">Maria Gladys Acosta</option>
                            <option value="OTRO">Otro</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha">Fecha de ingreso:</label>
                        <input type="date" class="form-control" id="fecha" placeholder="Fecha" name="fecha">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nombre" style="margin-left: 25px;">Tipo de Empleado:</label><br>
                        <input type="radio" id="tipoEmpleado" name="tipoempleado" value="activo" style="margin-left: 25px;"> Activo
                        <input type="radio" id="tipoEmpleado" name="tipoempleado" value="inactivo" style="margin-left: 15px;"> Inactivo
                    </div>
                </div>
            </form>
            <h4>INFORMACION GENERAL
        </h2>

        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombres">Nombres:</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres">
                </div>
                <div class="form-group col-md-6">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese Apellidos">
                </div>

                <div class="form-group col-md-6">
                    <label for="tipoDocumento">Tipo de Documento</label>
                    <select class="form-control" id="tipoDoc" name="tipoDoc">
                        <option value="CedulaCiudadania" selected>Cedula de Ciudadania</option>
                        <option value="extrangeria">Cedula de Extrangeria</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="tarjeta">Tarjeta de Identidad</option>
                        <option value="nit">NIT</option>
                        <option value="Registro">Registro Civil</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="numeroCedula">Numero de Documento</label>
                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Numero de Documento">
                </div>

                <div class="form-group col-md-5">
                    <label for="dir1">Direccion 1:</label>
                    <input list="direcciones" class="form-control" id="dir1" name="dir1" placeholder="Tipo de Via">
                    <input type="number" class="form-control col-md-2" id="num1" name="num1">
                    <input type="text" class="form-control col-md-3" id="sufijo" name="sufijo" placeholder="Sufijo de la via">
                    Numero
                    <input type="text" class="form-control col.md-2" id="num2" name="num2">
                    <label for="tipoVivienda">Tipo de Vivienda</label>
                    <input list="tipoVivienda" class="form-control" id="tipovivienda" name="tipovivienda" placeholder="Tipo de Vivienda">
                    <label for="vivienda">Clase de Vivienda:</label>
                    <input list="vivienda" class="form-control" id="vivienda1" name="vivienda1" placeholder="Clase de Vivienda">
                </div>
                <div class="form-group col-md-3">
                    <label for="barrio1">Barrio:</label>
                    <input type="text" class="form-control" id="barrio1" name="barrio1" placeholder="Nombre del Barrio">
                </div>
                <div class="form-group col-md-2">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="Ciudad" placeholder="Ciudad">
                </div>
                <div class="form-group col-md-2">
                    <label for="depto">Departamento</label>
                    <input list="departamentos" id="depto" name="depto" class="form-control">

                </div>



                <div class="form-group col-md-5">
                    <label for="dir2">Direccion 2:</label>
                    <input list="direcciones" class="form-control" id="dir2" name="dir2" placeholder="Tipo de Via">
                    <input type="number" class="form-control col-md-2" id="num3" name="num3">
                    <input type="text" class="form-control col-md-3" id="sufijo2" name="sufijo2" placeholder="Sufijo de la via">
                    Numero
                    <input type="text" class="form-control col.md-2" id="num4" name="num4">
                    <label for="tipoVivienda">Tipo de Vivienda</label>
                    <input list="tipoVivienda" class="form-control" id="tipovivienda2" name="tipovivienda2" placeholder="Tipo de Vivienda">
                    <label for="vivienda">Clase de Vivienda:</label>
                    <input list="vivienda" class="form-control" id="vivienda2" name="vivienda2" placeholder="Clase de Vivienda">
                </div>
                <div class="form-group col-md-3">
                    <label for="barrio1">Barrio:</label>
                    <input type="text" class="form-control" id="barrio1" name="barrio1" placeholder="Nombre del Barrio">
                </div>
                <div class="form-group col-md-2">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="Ciudad" placeholder="Ciudad">
                </div>
                <div class="form-group col-md-2">
                    <label for="depto">Departamento</label>
                    <input list="departamentos" id="depto" name="depto" class="form-control">

                </div>

                <div class="form-group col-md-4">
                    <label for="telefono1">Telefono:</label>
                    <input type="tel" class="form-control" id="telefono1" name="telefono1" placeholder="Telefono">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefono2">Telefono:</label>
                    <input type="tel" class="form-control" id="telefono2" name="telefono2" placeholder="Telefono">
                </div>
                <div class="form-group col-md-4">
                    <label for="celular">Celular:</label>
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular">
                </div>
                <div class="form-group col-md-6">
                    <label for="correo">Correo Electronico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
                </div>


            </div>
            <h4>INFORMACION DETALLADA</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Fecha de Nacimiento">
                </div>
                <div class="form-group col-md-4">
                    <label for="genero">Genero:</label>
                    <input list="generos" class="form-control" id="genero" name="genero" placeholder="Genero">
                </div>
                <div class="form-group col-md-4">
                    <label for="estadoCivil">Estado Civil:</label>
                    <input list="estados" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Estado Civil">
                </div>
                <div class="form-group col-md-4">
                    <label for="sangre">Tipo de Sangre:</label>
                    <input list="sangres" class="form-control" id="sangre" name="sangre" placeholder="Tipo de Sangre">
                </div>
            </div>

            <h4>INFORMACION LABORAL</h4>
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fechaIngreso" placeholder="Fecha Ingreso" name="fechaIngreso">
            </div>
            <div class="form-group col-md-4">
                <label for="ingreso">Fecha de Egreso:</label>
                <input type="date" class="form-control" id="fechaEgreso" placeholder="Fecha Egreso" name="fechaEgreso">
            </div>
            <div class="form-group col-md-4">
                <label for="cargo">Cargo:</label>
                <input list="cargoList" class="form-control" id="cargo" placeholder="Cargo" name="cargo">
            </div>
            <div class="form-group col-md-4">
                <label for="salario">Salario Inicial:</label>
                <input type="number" class="form-control" id="salarioInicial" placeholder="Salario" name="salarioInicial">
            </div>
            <div class="form-group col-md-4">
                <label for="eps">EPS:</label>
                <input list="epsList" class="form-control" id="eps" placeholder="EPS" name="eps">
            </div>
            <div class="form-group col-md-4">
                <label for="arl">ARL:</label>
                <input list="arlList" class="form-control" id="arl" placeholder="ARL" name="arl">
            </div>
            <div class="form-group col-md-4">
                <label for="caja">Caja de Compensacion:</label>
                <input list="cajaList" class="form-control" id="cajaCompensacion" placeholder="Caja de Compensacion" name="cajaCompensacion">
            </div>
            <div class="form-group col-md-4">
                <label for="pensiones">Fondo de Pensiones:</label>
                <input list="pensionList" class="form-control" id="pensiones" placeholder="Fondo de Pensiones" name="pensiones">
            </div>
            <div class="form-group col-md-4">
                <label for="cesantias">Fondo de Cesantias:</label>
                <input list="cesantiasList" class="form-control" id="cesantias" placeholder="Fondo de Cesantias" name="cesantias">
            </div>
            
            </div>


            <br><br>
            <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
            <button type="submit" class="btn btn-primary" id="cancelar" name="cancelar" style="margin-left: 25px;">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="nuevo" name="nuevo" style="margin-left: 25px;">Nuevo</button>


        </form>

    </div>
    <datalist id="departamentos">
        <option value="">....</option>
        <option value="Amazonas"></option>
        <option value="Antioquia"></option>
        <option value="Arauca"></option>
        <option value="Atlántico"></option>
        <option value="Bolívar"></option>
        <option value="Boyacá"></option>
        <option value="Caldas"></option>
        <option value="Caquetá"></option>
        <option value="Casanare"></option>
        <option value="Cauca"></option>
        <option value="Cesar"></option>
        <option value="Chocó"></option>
        <option value="Córdoba"></option>
        <option value="Cundinamarca"></option>
        <option value="Guainía"></option>
        <option value="Guaviare"></option>
        <option value="Huila"></option>
        <option value="La Guajira"></option>
        <option value="Magdalena"></option>
        <option value="Meta"></option>
        <option value="Nariño"></option>
        <option value="Norte de Santander"></option>
        <option value="Putumayo"></option>
        <option value="Quindío"></option>
        <option value="Risaralda"></option>
        <option value="San Andrés y Providencia"></option>
        <option value="Santander"></option>
        <option value="Sucre"></option>
        <option value="Tolima"></option>
        <option value="Valle del Cauca"></option>
        <option value="Vaupés"></option>
        <option value="Vichada"></option>
        <option value="Otro"></option>
    </datalist>

    <datalist id="sangres">
        <option value="O Positivo"></option>
        <option value="O Negativo"></option>
        <option value="A Positivo"></option>
        <option value="A Negativo"></option>
        <option value="B Positivo"></option>
        <option value="B Negativo"></option>
        <option value="AB Positivo"></option>
        <option value="AB Negativo"></option>
    </datalist>

    <datalist id="generos">
        <option value="Femenino"></option>
        <option value="Masculino"></option>
        <option value="Otro"></option>
    </datalist>

    <datalist id="estados">
        <option value="Soltero(a)"></option>
        <option value="Casado(a)"></option>
        <option value="Union Libre"></option>
        <option value="Viudo(a)"></option>
        <option value="Divorciado(a)"></option>
        <option value="Otro"></option>
    </datalist>

    <datalist id="direcciones">
        <option value="Calle"></option>
        <option value="Carrera"></option>
        <option value="Transversal"></option>
        <option value="Avenida"></option>
        <option value="Circular"></option>
    </datalist>

    <datalist id="tipoVivienda">
        <option value="Casa"></option>
        <option value="Apartamento"></option>
        <option value="Apartaestudio"></option>
        <option value="Habitacion"></option>
        <option value="Finca"></option>
        <option value="Otro"></option>
    </datalist>

    <datalist id="vivienda">
        <option value="Propia"></option>
        <option value="Arrendada"></option>
        <option value="Familiar"></option>
        <option value="Otra"></option>
    </datalist>

    <datalist id="cargoList">
        <option value="Medico Veterinario"></option>
        <option value="Auxiliar Veterinario"></option>
        <option value="Auxiliar Administrativo"></option>
        <option value="Auxiliar de Farmacia"></option>
        <option value="Auxiliar Contable"></option>
        <option value="Auxiliar de Servicio al Cliente"></option>
        <option value="Auxiliar de servicios Generales"></option>
        <option value="Director Medico"></option>
        <option value="Gerente General"></option>
        <option value="Coordinador de Talento Humano"></option>
        <option value="Coordinador Administrativo"></option>
        <option value="Rotante Medicina Veterinaria"></option>
        <option value="Pasante de Medicina Veterinaria"></option>
        <option value="Practicante Tecnica"></option>
        <option value="Practicante Tecnologia"></option>
        <option value="Practicante Profesional"></option>
    </datalist>

    <datalist id="epsList">
        <option value="SURA EPS"></option>
        <option value="COOMEVA EPS"></option>
        <option value="NUEVA EPS"></option>
        <option value="MEDIMAS EPS"></option>
        <option value="SAVIA SALUD EPS"></option>
        <option value="CAFE SALUD EPS"></option>
        <option value="SALUD TOTAL EPS"></option>
        <option value="CRUZ BLANCA EPS"></option>
        <option value="COMFAMILIAR CAMACOL EPS"></option>
    </datalist>

    <datalist id="arlList">
        <option value="ARL SURA"></option>
        <option value="ARL POSITIVA"></option>
        <option value="ARL COLPATRIA"></option>
        <option value="ARL COMFENALCO"></option>
    </datalist>

    <datalist id="cajaList">
        <option value="COMFAMA"></option>
        <option value="COMFENALCO"></option>
        <option value="COMFAMILIAR CAMACOL"></option>
    </datalist>

    <datalist id="pensionList">
        <option value="PROTECCION"></option>
        <option value="PORVENIR"></option>
        <option value="COLFONDOS"></option>
        <option value="COLPENSIONES"></option>
        <option value="AXA COLPATRIA"></option>
    </datalist>

    <datalist id="cesantiasList">
        <option value="PROTECCION"></option>
        <option value="PORVENIR"></option>
        <option value="COLFONDOS"></option>
        <option value="AXA COLPATRIA"></option>
        <option value="FONDO NACIONAL DEL AHORRO"></option>
        <option value="COLMENA"></option>
    </datalist>





</body>


<footer>
    <div id="footer" style="text-align: center;">
        Wilson Estrada Loaiza &copy; 2020 CESDE Tel. 123456789
        <br>
        <a href="#inicio" style="text-align: end;">Ir Arriba</a>
    </div>
</footer>

</html>