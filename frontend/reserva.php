<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Reservar Bicicletas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../backend/guardaReserva.php" method="POST" enctype="multipart/form-data">
                    <!--fecha registro-->
                    <div class="mb-3">
                        <label for="fechaR" id="" class="form-label">Fecha Registro:</label>
                        <input type="date" name="rese" id="fechaR" class="form-control" requiered>
                    </div>
                    <!--fecha entrega-->
                    <div class="mb-3">
                        <label for="fechaR" id="" class="form-label">Fecha Entrega:</label>
                        <input type="date" name="entre" id="fechaE" class="form-control" requiered>
                    </div>
                    <!--dias contados-->
                    <div class="mb-3">
                        <label for="dias" id="" class="form-label">Días Totales:</label>
                        <input type="input" name="dias" id="diasDescon" class="form-control" requiered>
                    </div>
                    <!--Valor Cancelar-->
                    <div class="mb-3">
                        <label for="dias" id="" class="form-label">Total:</label>
                        <input type="input" name="total" value="" id="total" class="form-control" required>
                    </div>
                    <!--Selecccionar Bicicleta-->
                    <div class="mb-3">
                        <label for="dias" id="dias" class="form-label">Bicicletas:</label>
                        <select name="bicis" id="bici" class="form-select" requiered>
                            <?php while ($productos = $listaProductos->fetch_assoc()) { ?>
                            <option value="<?php echo $productos['id_producto']; ?>">
                                <?= $productos['modelo'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--Datos de estado -->
                    <div class="mb-3">
                        <label for="dias" id="dias" class="form-label">Estado:</label>
                        <select name="estado" id="estado" class="form-select" requiered>
                            <?php while ($listEstado = $estado->fetch_assoc()) { ?>
                            <option value="<?php echo $listEstado['id_estado']; ?>">
                            <?php echo $listEstado['descripcionestado']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <!--User-->
                    <div hidden class="mb-3">
                        <label for="dias" id="dias" class="form-label">User:</label>
                        <input type="input" value="<?php echo $_SESSION['id_usua']; ?>" name="usuario"
                            id="" class="form-control">
                    </div>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Reservar" class="btn btn-success">
                </form>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script>
    function calculardiasDiscount() {
        var timeStart = new Date(document.getElementById("fechaR").value);
        var timeEnd = new Date(document.getElementById("fechaE").value);
        var actualDate = new Date();
        if (timeEnd > timeStart) {
            var diff = timeEnd.getTime() - timeStart.getTime();
            document.getElementById("diasDescon").value = Math.round(diff / (1000 * 60 * 60 * 24));
        } else if (timeEnd != null && timeEnd < timeStart) {
            alert("La fecha de Entrega debe ser mayor a la fecha de Reserva");
            document.getElementById("diasDescon").value = 0;
        }
    }

</script>