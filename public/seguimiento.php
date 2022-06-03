<?php include 'inc/header.php'; ?>

    <div class="container_seguimiento">
        <div>
            <h1>SEGUIMIENTO</h1>
        </div>

        <div id="pedidos" class="padding-top-content">
            <h2>Pedidos en Revisión</h2>
            <div class="cards">
                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision" selected>Revisión</option>
                            <option value="enproceso">Proceso</option>
                            <option value="terminado">Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>


                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso">Proceso</option>
                            <option value="terminado">Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>
            </div>




            <h2>Pedidos en Producción</h2>
            <div class="cards">
                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso" selected>Proceso</option>
                            <option value="terminado">Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>

                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso" selected>Proceso</option>
                            <option value="terminado">Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>
            </div>




            <h2>Pedidos Terminados</h2>
            <div class="cards">
                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso">Proceso</option>
                            <option value="terminado" selected>Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>

                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso">Proceso</option>
                            <option value="terminado" selected>Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>

                <div class="card">
                    <div class="card_id">1</div>
                    <div class="card_name">Carlos</div>
                    <div class="card_tel">4442077125</div>
                    <div class="card_mail">carlos.conpe@hotmail.com</div>
                    <div class="card_fase">
                        <select title="dropdown_state" name="estado" class="estadolist">
                            <option value="enrevision">Revisión</option>
                            <option value="enproceso">Proceso</option>
                            <option value="terminado" selected>Hecho</option>
                        </select>
                    </div>
                    <div class="card_opciones">
                        <img src="img/cot.png" alt="cotización">
                        <img src="img/dis.png" alt="diseño">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="Modal_Pedido" class="modal">
        <div class="modal-content" id="modalPedido">
            <span class="close" onclick="closeModal()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Revisión</h3>
                <h4>ID: ${i}</h4>
                <div class="card">
                    <div class="card_info_basica">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Información Básica</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="card_info_basica_expanded"></div>
                    <div class="card_aspectos">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Aspectos Generales</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="card_aspectos_expanded"></div>
                    <div class="colores">
                        <img src="img/Icons/check-mark.png" alt="icon">
                        <h5>Colores</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="colores_expanded"></div>
                    <div class="equipos">
                        <img src="img/Icons/work-process.png" alt="icon">
                        <h5>Equipo</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="equipos_expanded"></div>
                    <div class="referencias">
                        <img src="img/Icons/delete-button.png" alt="icon">
                        <h5>Referencias</h5>
                        <img src="img/Icons/dropdown1.png" class="card_drop" alt="icon">
                    </div>
                    <div class="referencias_expanded"></div>
                </div>
            </form>
        </div>
    </div>


    <div id="Modal_Pedido_Proceso" class="modal">
        <div class="modal-content" id="modalPedidoProceso">
            <span class="close" onclick="closeModal1()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Proceso</h3>
                <h4>ID:</h4>
                <div class="card">
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/1.svg" alt="icon">
                        <h5>Pago Diseño</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/2.png" alt="icon">
                        <h5>Diseño Terminado</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/3.png" alt="icon">
                        <h5>Cotización</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/4.svg" alt="icon">
                        <h5>Pago Cotización</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/5.svg" alt="icon">
                        <h5>Fabricación</h5>
                    </div>
                    <div class="sub-card-process">
                        <img src="img/Icons_Process/6.svg" alt="icon">
                        <h5>Instalación</h5>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="Modal_Pedido_Proceso_Etapa" class="modal">
        <div class="modal-content" id="modalPedidoProcesoEtapa">
            <span class="close" onclick="closeModal2()">&times;</span>
            <form class="form_login_spaces">
                <h3>Pedido: Proceso</h3>
                <h4>ID: ${i}</h4>
                <div class="card">

                </div>
            </form>
        </div>
    </div>

    <?php include 'inc/modal_profile.php'; ?>

    <script src="../src/lib/js/dropdown_crm.js"></script>
    <script src="../src/lib/js/pedidos.js"></script>



</body>

</html>