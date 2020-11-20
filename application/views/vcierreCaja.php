<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcangel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/cierreCaja.css?v=<?php echo time(); ?>">
</head>

<body>


    <div class="container p-3 my-3 bg-primary text-white">
        <h1>ARCANGEL</h1>
        <p>Software de gestion administrativa de PUNTO VET CLINICA VETERINARIA</p>
    </div>


    <div class="container">
        <h2>CIERRE DE CAJA DIARIO</h2>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="fecha">Fecha a Liquidar:</label>
                <input type="date" class="form-control" id="fecha" placeholder="Fecha" name="fecha">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre de quien Liquida:</label>
                <select name="nombre" id="nombre" class="form-control">
                    <option value="CATALINA">Catalina Restrepo</option>
                    <option value="ESTEFANIA">Estefania Carvajal</option>
                    <option value="ELIZABETH">Elizabeth</option>
                    <option value="OTRO" selected>Otro</option>
                </select>

            </div>
            <div class="cuerpo">
                <div class="ingreso">
                    <h3>INGRESOS</h3>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="inicio" style="align-content: left;">Factura Inicial</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="inicial" placeholder="Fac. Inicial" name="inicial" style="margin-left: 40px;">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="final">Factura Final:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="final" placeholder="Fac. Final" name="final" style="margin-left: 40px;">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="ventas">Total Ventas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="ventas" name="ventas" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="efectivo">Efectivo Recibido:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="efectivo" name="efectivo" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="tarjetas">Tarjetas Liquidadas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="tarjetas" name="tarjetas" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="transferencias">Transferencias Recibidas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="transferencias" name="transferencias" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="anticipos">Anticipos Recibidos:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="anticipos" name="anticipos" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="notacreditorec">Notas Credito Recibidas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="notacreditogen" name="notacreditogen" style="margin-left: 40px;" value="0">
                        </div>
                    </div>

                </div>



                <div class="egresos">
                    <h3>EGRESOS</h3>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="facPagadas">Facturas Pagadas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="pagadas" name="pagadas" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="notacreditogen">Notas Credito Generadas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="ncgeneradas" name="ncgeneradas" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="devoluciones">Devoluciones Realizadas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="devoluciones" name="devoluciones" style="margin-left: 40px;" value="0">
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="cuentasporcobrar">Cuentas por Cobrar:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="cobrar" name="cobrar" style="margin-left: 40px;" value="0">
                        </div>
                    </div>

                </div>
                <div class="resultados">
                    <h3>RESULTADOS</h3>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totVentas">Total Ventas:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totVentas" name="totVentas" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totEfectivo">Total Efectivo:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totEfectivo" name="totEfectivo" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totBancos">Total Bancos:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totBancos" name="totBancos" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totAnticipos">Total Anticipos:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totAnticipos" name="totAnticipos" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totNc">Total Notas Creditos:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totNc" name="totNc" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totVentasCredito">Total Ventas a Credito:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totVentasCredito" name="totVentasCredito" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="totDevoluciones">Total Devoluciones:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="totDevoluciones" name="totDevoluciones" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>
                    <div class="datos">
                        <div id="etiqueta">
                            <label for="exedentes">Total Exedentes:</label>
                        </div>
                        <div id="valor">
                            <input type="number" id="exedentes" name="exedentes" style="margin-left: 40px;" value="0" readonly>
                        </div>
                    </div>

                </div>
                
            </div>

            <br>

            <span>
                <button type="submit" class="btn btn-primary">Nuevo</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Anterior</button>
                <button type="submit" class="btn btn-primary">Siguiente</button>
                <button type="submit" class="btn btn-primary">Salir</button>
            </span>
            <br>
            <br>


        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>