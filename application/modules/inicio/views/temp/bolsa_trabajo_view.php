<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>">Inicio</a></li>  
                    <li class="active">Oportunidades Laborales  </li>
                </ol>
            </div>
            <!-- end col-12 --> 
        </div>
    <!-- end row --> 
    </div>
    <!-- end container --> 
</section>

<!-- end internal-header -->
<section class="career">
    <div class="container" >
        <div class="row">
            <div class="col-xs-12">
                <div class="titles">
                    <h2>OPORTUNIDADES LABORALES</h2>
                </div>
                <!-- end title --> 
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12" >
                <form class="career-form" action="<?php echo base_url() ?>postular" method="post" id="oportunidad">
            	   <div class="form-group campos_form">
                	   <label>Nombres <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="text" name="nombre" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                	   <label>Apellido Paterno <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="text" name="appaterno">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                	   <label>Apellido Materno <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="text" name="apmaterno">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                	   <label>Sexo <div style="display: inline-block;color: red;">(*)</div></label>
                        <select name="sexo" style="width:80%">
                            <option value="">SELECCIONE</option>
                            <option value="masculino">MASCULINO</option>
                            <option value="femenino">FEMENINO</option>
                        </select>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                	   <label>Fecha Nacimiento <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="text" name="fnacimiento" class="datepicker">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Nacionalidad <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="text" name="nacionalidad">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Tipo de Documento <div style="display: inline-block;color: red;">(*)</div></label>
                        <!-- <input type="text" name="tipoDoc"> -->
                        <select name="tipoDoc" style="width:80%">
                            <option value="">SELECCIONE</option>
                            <option value="DNI">DNI</option>
                            <option value="CNT. EXT.">CNT. EXT.</option>
                            option
                        </select>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Nº de Documento <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="number" name="documento">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Estado Civil <div style="display: inline-block;color: red;">(*)</div> </label>
                        <!-- <input type="text" name="ecivil"> -->
                        <select name="ecivil" style="width:80%">
                            <option value="">SELECCIONE</option>
                            <option value="soltero">SOLTERO</option>
                            <option value="casado">CASADO</option>
                            <option value="viudo">VIUDO</option>
                            <option value="divorciado">DIVORCIADO</option>
                            <option value="convivencia">CONVIVENCIA</option>
                        </select>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Numero de hijos <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="number" name="nhijos">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>E-mail <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="email" name="email">
                    </div>

                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Teléfono <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="number" name="telefono">
                    </div>

                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Teléfono familiar cercano <div style="display: inline-block;color: red;">(*)</div></label>
                        <input type="number" name="tfamiliarcercano">
                    </div>

                    <!-- end form-group -->
                    <div class="form-group campos_form">
                       <label>Celular</label>
                        <input type="number" name="celular">
                    </div>

                    <div style="margin-top: 50px">
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Departamento <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="departamento"> -->
                            <select name="departamento" id="dep" style="width:80%"></select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Provincia <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="provincia"> -->
                            <select name="provincia" id="prov" style="width:80%"></select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Distrito <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="distrito"> -->
                            <select name="distrito" id="dist" style="width:80%"></select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Dirección <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="direccion">
                        </div>
                    </div>


                    <div style="margin-top: 50px">
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Nivel de estudio <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="nestudio"> -->
                            <select name="nestudio" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Primaria Incompleta">Primaria Incompleta</option>
                                <option value="Primaria Completa">Primaria Completa</option>
                                <option value="Secundaria Incompleta">Secundaria Incompleta</option>
                                <option value="Secundaria Completa">Secundaria Completa</option>
                                <option value="Técnico Incompleto">Técnico Incompleto</option>
                                <option value="Técnico Completo">Técnico Completo</option>
                                <option value="Univeristario Incompleto">Univeristario Incompleto</option>
                                <option value="Univeristario Completo">Univeristario Completo</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Profesión</label>
                            <!-- <input type="text" name="profesion"> -->
                            <select name="profesion" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="ABOGADO">ABOGADO</option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                <option value="AGROPECUARIA">AGROPECUARIA</option>
                                <option value="ALBAÑIL">ALBAÑIL</option>
                                <option value="ASIST.G. ADMINISTRAT">ASIST.G. ADMINISTRAT</option>
                                <option value="ASIST.G.COMERCIAL">ASIST.G.COMERCIAL</option>
                                <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL</option>
                                <option value="ASISTENTE DE ALMACEN">ASISTENTE DE ALMACEN</option>
                                <option value="AUTOMOTRIZ">AUTOMOTRIZ</option>
                                <option value="AYUDANTE">AYUDANTE</option>
                                <option value="AYUDANTE PERFORISTA">AYUDANTE PERFORISTA</option>
                                <option value="BODEGUERO">BODEGUERO</option>
                                <option value="CHOFER">CHOFER</option>
                                <option value="CHOFER DE VOLQUETE">CHOFER DE VOLQUETE</option>
                                <option value="COMPUTACIÓN">COMPUTACIÓN</option>
                                <option value="COMUNICACIÓN">COMUNICACIÓN</option>
                                <option value="CONTADOR">CONTADOR</option>
                                <option value="DENTISTA">DENTISTA</option>
                                <option value="ECONOMISTA">ECONOMISTA</option>
                                <option value="ELECTRICISTA">ELECTRICISTA</option>
                                <option value="ENFERMERA">ENFERMERA</option>
                                <option value="ENMADERADOR">ENMADERADOR</option>
                                <option value="ING. ADMINISTRATIVO">ING. ADMINISTRATIVO</option>
                                <option value="ING. AMBIENTAL">ING. AMBIENTAL</option>
                                <option value="ING. GEOGRAFO E ECOL">ING. GEOGRAFO E ECOL</option>
                                <option value="ING. HIGIENE Y S.IND">ING. HIGIENE Y S.IND</option>
                                <option value="ING. MECANICO - ELEC">ING. MECANICO - ELEC</option>
                                <option value="ING. MEDIO AMBIENTE">ING. MEDIO AMBIENTE</option>
                                <option value="ING. METALURGISTA">ING. METALURGISTA</option>
                                <option value="ING. SEGURIDAD E HIGIENE">ING. SEGURIDAD E HIGIENE</option>
                                <option value="ING. SISTEMAS">ING. SISTEMAS</option>
                                <option value="ING. CIVIL">ING. CIVIL</option>
                                <option value="ING. DE MINAS">ING. DE MINAS</option>
                                <option value="ING. ECONÓMICO">ING. ECONÓMICO</option>
                                <option value="ING. ECONOMISTA">ING. ECONOMISTA</option>
                                <option value="ING. ELECTRONICO">ING. ELECTRONICO</option>
                                <option value="ING. GEOGRAFO">ING. GEOGRAFO</option>
                                <option value="ING. GEOLOGO">ING. GEOLOGO</option>
                                <option value="ING. INDUSTRIAL">ING. INDUSTRIAL</option>
                                <option value="ING. MECANICO">ING. MECANICO</option>
                                <option value="INGENIERO">INGENIERO</option>
                                <option value="INSPECTOR">INSPECTOR</option>
                                <option value="INSTRUCTOR">INSTRUCTOR</option>
                                <option value="MAESTRO">MAESTRO</option>
                                <option value="MANT.EQUIPO PESADO">MANT.EQUIPO PESADO</option>
                                <option value="MECANICO">MECANICO</option>
                                <option value="MEDICO">MEDICO</option>
                                <option value="METALURGIA">METALURGIA</option>
                                <option value="OBRERO">OBRERO</option>
                                <option value="OPERADOR">OPERADOR</option>
                                <option value="OPERARIO">OPERARIO</option>
                                <option value="PERFORISTA">PERFORISTA</option>
                                <option value="PICADOR">PICADOR</option>
                                <option value="PSICOLOGIA">PSICOLOGIA</option>
                                <option value="RELAC. INDUSTRIAL">RELAC. INDUSTRIAL</option>
                                <option value="SECRETARIA">SECRETARIA</option>
                                <option value="SUPERVISOR">SUPERVISOR</option>
                                <option value="TÉC. NEG. COMERCIO">TÉC. NEG. COMERCIO</option>
                                <option value="TÉCNICO">TÉCNICO</option>
                                <option value="TÉCNICO CONTABLE">TÉCNICO CONTABLE</option>
                                <option value="TÉCNICO EN COMPUTACIÓN">TÉCNICO EN COMPUTACIÓN</option>
                                <option value="TÉCNICO MANTENIMIENTO">TÉCNICO MANTENIMIENTO</option>
                                <option value="TOPÓGRAFO">TOPÓGRAFO</option>
                                <option value="TRABAJ.SOCIAL">TRABAJ.SOCIAL</option>
                                <option value="OTROS">OTROS</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Post Grado</label>
                            <!-- <input type="text" name="postgrado"> -->
                            <select name="postgrado" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Especializacion">Especializacion</option>
                                <option value="Maestria">Maestria</option>
                                <option value="Doctorado">Doctorado</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Expectativa salarial (soles) <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="number" name="espectativa_salarial">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Años de Experiencia</label>
                            <input type="number" name="aexperiencia">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Puesto a postular <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="puesto_postular"> -->
                            <select name="puesto_postular" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="ABOGADO JUNIOR">ABOGADO JUNIOR</option>
                                <option value="ADMINISTRADOR DE BASE DE DATOS">ADMINISTRADOR DE BASE DE DATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE CONTRATOS">ADMINISTRADOR DE CONTRATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE OBRA">ADMINISTRADOR DE OBRA</option>
                                
                                
                                <option value="ADMINISTRADOR MAESTRO DE ARTICULOS">ADMINISTRADOR MAESTRO DE ARTICULOS</option>
                                
                                
                                <option value="AFILADOR DE BROCAS">AFILADOR DE BROCAS</option>
                                
                                
                                <option value="ALMACENERO - POLVORIN">ALMACENERO - POLVORIN</option>
                                
                                
                                <option value="ANALISTA CONTABLE">ANALISTA CONTABLE</option>
                                
                                
                                <option value="ANALISTA DE ACTIVOS FIJOS">ANALISTA DE ACTIVOS FIJOS</option>
                                
                                
                                <option value="ANALISTA DE OFICINA TECNICA">ANALISTA DE OFICINA TECNICA</option>
                                
                                
                                <option value="ANALISTA DE PLANEAMIENTO">ANALISTA DE PLANEAMIENTO</option>
                                
                                
                                <option value="ANALISTA DE PRESUPUESTOS">ANALISTA DE PRESUPUESTOS</option>
                                
                                
                                <option value="ANALISTA DE SELECCION Y DESARROLLO">ANALISTA DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ANALISTA DE TESORERIA">ANALISTA DE TESORERIA</option>
                                
                                
                                <option value="ANALISTA DEL RESULTADO OPERATIVO">ANALISTA DEL RESULTADO OPERATIVO</option>
                                
                                
                                <option value="ANALISTA ORGANIZACION Y METODOS">ANALISTA ORGANIZACION Y METODOS</option>
                                
                                
                                <option value="ANALISTA PROGRAMADOR">ANALISTA PROGRAMADOR</option>
                                
                                
                                <option value="ARMADOR-METAL MECANICA">ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL</option>
                                
                                
                                <option value="ASISTENTE  DE  PERSONAL">ASISTENTE  DE  PERSONAL</option>
                                
                                
                                <option value="ASISTENTE  DE RECURSOS HUMANOS">ASISTENTE  DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE ADMINISTRATIVA">ASISTENTE ADMINISTRATIVA</option>
                                
                                
                                <option value="ASISTENTE CONTABLE">ASISTENTE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE ADMINISTRACION">ASISTENTE DE ADMINISTRACION</option>
                                
                                
                                <option value="ASISTENTE DE ALMACEN">ASISTENTE DE ALMACEN</option>
                                
                                
                                <option value="ASISTENTE DE ARCHIVO">ASISTENTE DE ARCHIVO</option>
                                
                                
                                <option value="ASISTENTE DE CALIDAD">ASISTENTE DE CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE COMPENSACIÓN Y BENEFICIOS">ASISTENTE DE COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="ASISTENTE DE COMUNICACIONES">ASISTENTE DE COMUNICACIONES</option>
                                
                                
                                <option value="ASISTENTE DE CONTABLE">ASISTENTE DE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE CONTROL DE PROYECTOS">ASISTENTE DE CONTROL DE PROYECTOS</option>
                                
                                
                                <option value="ASISTENTE DE ENTRENAMIENTO">ASISTENTE DE ENTRENAMIENTO</option>
                                
                                
                                <option value="ASISTENTE DE GESTION DE LA CALIDAD">ASISTENTE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE LABORATORIO">ASISTENTE DE LABORATORIO</option>
                                
                                
                                <option value="ASISTENTE DE MANTENIMIENTO PREVENTIVO">ASISTENTE DE MANTENIMIENTO PREVENTIVO</option>
                                
                                
                                <option value="ASISTENTE DE MEDIO AMBIENTE">ASISTENTE DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="ASISTENTE DE PAVIMENTOS">ASISTENTE DE PAVIMENTOS</option>
                                
                                
                                <option value="ASISTENTE DE PERSONAL">ASISTENTE DE PERSONAL</option>
                                
                                
                                <option value="ASISTENTE DE PLANILLAS">ASISTENTE DE PLANILLAS</option>
                                
                                
                                <option value="ASISTENTE DE PRESUPUESTO">ASISTENTE DE PRESUPUESTO</option>
                                
                                
                                <option value="ASISTENTE DE RECURSOS HUMANOS">ASISTENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE DE REMUNERACIONES">ASISTENTE DE REMUNERACIONES</option>
                                
                                
                                <option value="ASISTENTE DE SEGURIDAD">ASISTENTE DE SEGURIDAD</option>
                                
                                
                                <option value="ASISTENTE DE SELECCION Y DESARROLLO">ASISTENTE DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO HARDWARE">ASISTENTE DE SOPORTE TECNICO HARDWARE</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO SOFTWARE">ASISTENTE DE SOPORTE TECNICO SOFTWARE</option>
                                
                                
                                <option value="ASISTENTE DE TESORERIA">ASISTENTE DE TESORERIA</option>
                                
                                
                                <option value="ASISTENTE DE TOPOGRAFIA">ASISTENTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="ASISTENTE EJECUTIVA">ASISTENTE EJECUTIVA</option>
                                
                                
                                <option value="ASISTENTE LEGAL">ASISTENTE LEGAL</option>
                                
                                
                                <option value="ASISTENTE SOCIAL JUNIOR">ASISTENTE SOCIAL JUNIOR</option>
                                
                                
                                <option value="ASISTENTE TECNICO">ASISTENTE TECNICO</option>
                                
                                
                                <option value="AUXILIAR">AUXILIAR</option>
                                
                                
                                <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                                
                                
                                <option value="AUXILIAR DE  CAMPO">AUXILIAR DE  CAMPO</option>
                                
                                
                                <option value="AUXILIAR DE ADMINISTRACION">AUXILIAR DE ADMINISTRACION</option>
                                
                                
                                <option value="AUXILIAR DE ALMACEN">AUXILIAR DE ALMACEN</option>
                                
                                
                                <option value="AUXILIAR DE CAMPO -A">AUXILIAR DE CAMPO -A</option>
                                
                                
                                <option value="AUXILIAR DE CONTABILIDAD">AUXILIAR DE CONTABILIDAD</option>
                                <option value="AUXILIAR DE EQUIPOS">AUXILIAR DE EQUIPOS</option>
                                
                                
                                <option value="AUXILIAR DE LABORATORIO">AUXILIAR DE LABORATORIO</option>
                                
                                
                                <option value="AUXILIAR DE LIMPIEZA">AUXILIAR DE LIMPIEZA</option>
                                
                                
                                <option value="AUXILIAR DE OPERACIONES">AUXILIAR DE OPERACIONES</option>
                                
                                
                                <option value="AUXILIAR DE SEGURIDAD">AUXILIAR DE SEGURIDAD</option>
                                
                                
                                <option value="AUXILIAR DE TOPOGRAFIA">AUXILIAR DE TOPOGRAFIA</option>
                                
                                
                                <option value="AUXILIAR METRADOS Y VALORIZACIONES">AUXILIAR METRADOS Y VALORIZACIONES</option>
                                
                                
                                <option value="AYUDANTE">AYUDANTE</option>
                                
                                
                                <option value="AYUDANTE - ELECTRICISTA">AYUDANTE - ELECTRICISTA</option>
                                
                                
                                <option value="AYUDANTE - LUBRICADOR">AYUDANTE - LUBRICADOR</option>
                                
                                
                                <option value="AYUDANTE - MECANICO">AYUDANTE - MECANICO</option>
                                
                                
                                <option value="AYUDANTE - PINTOR">AYUDANTE - PINTOR</option>
                                
                                
                                <option value="AYUDANTE - SOLDADOR">AYUDANTE - SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE - TECNICO DE LLANTAS">AYUDANTE - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="AYUDANTE DE ALMACEN">AYUDANTE DE ALMACEN</option>
                                
                                
                                <option value="AYUDANTE DE CAMPO">AYUDANTE DE CAMPO</option>
                                
                                
                                <option value="AYUDANTE DE CHANCADORA">AYUDANTE DE CHANCADORA</option>
                                
                                
                                <option value="AYUDANTE DE DIAMANTINA">AYUDANTE DE DIAMANTINA</option>
                                
                                
                                <option value="AYUDANTE DE MAQUINARIA ALIVA">AYUDANTE DE MAQUINARIA ALIVA</option>
                                
                                
                                <option value="AYUDANTE DE MECANICO -A">AYUDANTE DE MECANICO -A</option>
                                
                                
                                <option value="AYUDANTE DE TOPOGRAFIA">AYUDANTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="AYUDANTE DE VOLADURA">AYUDANTE DE VOLADURA</option>
                                
                                
                                <option value="AYUDANTE GEOLOGO">AYUDANTE GEOLOGO</option>
                                
                                
                                <option value="AYUDANTE -III3">AYUDANTE -III3</option>
                                
                                
                                <option value="AYUDANTE MECANICO -B">AYUDANTE MECANICO -B</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA">AYUDANTE PERFORISTA</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA -B">AYUDANTE PERFORISTA -B</option>
                                
                                
                                <option value="AYUDANTE SOLDADOR">AYUDANTE SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE-METAL MECANICA">AYUDANTE-METAL MECANICA</option>
                                
                                
                                <option value="BODEGUERO">BODEGUERO</option>
                                
                                
                                <option value="CADISTA">CADISTA</option>
                                
                                
                                <option value="CAJERO CENTRAL">CAJERO CENTRAL</option>
                                
                                
                                <option value="CAPATAZ  DE  VOLADURA">CAPATAZ  DE  VOLADURA</option>
                                
                                
                                <option value="CAPATAZ  DE CAMPO">CAPATAZ  DE CAMPO</option>
                                
                                
                                <option value="CAPATAZ  DE OBRA">CAPATAZ  DE OBRA</option>
                                
                                
                                <option value="CAPATAZ DE CAMPO-METAL MECANICA">CAPATAZ DE CAMPO-METAL MECANICA</option>
                                
                                
                                <option value="CAPATAZ DE CHANCADORA">CAPATAZ DE CHANCADORA</option>
                                
                                
                                <option value="CAPATAZ DE EXCAVACIONES">CAPATAZ DE EXCAVACIONES</option>
                                
                                
                                <option value="CAPATAZ DE PLANTA">CAPATAZ DE PLANTA</option>
                                
                                
                                <option value="CAPATAZ OBRA DE ARTE">CAPATAZ OBRA DE ARTE</option>
                                
                                
                                <option value="CARPINTERO">CARPINTERO</option>
                                
                                
                                <option value="CARRERO">CARRERO</option>
                                
                                
                                <option value="CARRETERO">CARRETERO</option>
                                
                                
                                <option value="CHOFER">CHOFER</option>
                                
                                
                                <option value="CHOFER - CAMIONETA">CHOFER - CAMIONETA</option>
                                
                                
                                <option value="CHOFER - COMPRADOR">CHOFER - COMPRADOR</option>
                                
                                
                                <option value="CHOFER -A">CHOFER -A</option>
                                
                                
                                <option value="CHOFER -B">CHOFER -B</option>
                                
                                
                                <option value="CHOFER C">CHOFER C</option>
                                
                                
                                <option value="CHOFER CAMION FABRICA">CHOFER CAMION FABRICA</option>
                                
                                
                                <option value="CHOFER DE  SEMI TRAYLER">CHOFER DE  SEMI TRAYLER</option>
                                
                                
                                <option value="CHOFER DE  VOLQUETE">CHOFER DE  VOLQUETE</option>
                                
                                
                                <option value="CHOFER DE CAMION">CHOFER DE CAMION</option>
                                
                                
                                <option value="CHOFER DE CAMION HIAB">CHOFER DE CAMION HIAB</option>
                                
                                
                                <option value="CHOFER DE VOLQUETE FM12">CHOFER DE VOLQUETE FM12</option>
                                
                                
                                <option value="CHOFER UNIMOQTV-12-METAL MECANICA">CHOFER UNIMOQTV-12-METAL MECANICA</option>
                                
                                
                                <option value="CHOFER-CAMION WABCO 35TM">CHOFER-CAMION WABCO 35TM</option>
                                
                                
                                <option value="CHOFER-CAMIONETA">CHOFER-CAMIONETA</option>
                                
                                
                                <option value="CHOFER-CISTERNA">CHOFER-CISTERNA</option>
                                
                                
                                <option value="CHOFER-VOLQUETE L-12 20 TM">CHOFER-VOLQUETE L-12 20 TM</option>
                                
                                
                                <option value="CONSULTOR CORPORATIVO">CONSULTOR CORPORATIVO</option>
                                
                                
                                <option value="CONTADOR DE CONTROL INTERNO">CONTADOR DE CONTROL INTERNO</option>
                                
                                
                                <option value="CONTRALOR CONTABLE Y TRIBUTARIO">CONTRALOR CONTABLE Y TRIBUTARIO</option>
                                
                                
                                <option value="CONTROL DE CALIDAD-SISTEMA DE TRITURACION">CONTROL DE CALIDAD-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="CONTROLADOR">CONTROLADOR</option>
                                
                                
                                <option value="CONTROLADOR DE EQUIPOS">CONTROLADOR DE EQUIPOS</option>
                                
                                
                                <option value="COORDINADOR COMPENSACIÓN Y BENEFICIOS">COORDINADOR COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="COORDINADOR DE ADMINISTRACION DE OBRA">COORDINADOR DE ADMINISTRACION DE OBRA</option>
                                
                                
                                <option value="COORDINADOR DE EQUIPOS EN OBRA">COORDINADOR DE EQUIPOS EN OBRA</option>
                                
                                
                                <option value="COORDINADOR DE RELACIONES LABORALES">COORDINADOR DE RELACIONES LABORALES</option>
                                
                                
                                <option value="COORDINADOR DE TOPOGRAFIA">COORDINADOR DE TOPOGRAFIA</option>
                                
                                
                                <option value="COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO">COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO</option>
                                
                                
                                <option value="COORDINADORA ADMINISTRACIÓN DE PERSONAL">COORDINADORA ADMINISTRACIÓN DE PERSONAL</option>
                                
                                
                                <option value="DIBUJANTE">DIBUJANTE</option>
                                
                                
                                <option value="DIRECTOR">DIRECTOR</option>
                                
                                
                                <option value="ENCARGADO DE CONTROL DE COSTOS">ENCARGADO DE CONTROL DE COSTOS</option>
                                
                                
                                <option value="GERENTE">GERENTE</option>
                                
                                
                                <option value="GERENTE COMERCIAL">GERENTE COMERCIAL</option>
                                
                                
                                <option value="GERENTE DE ADM. Y FINANZAS">GERENTE DE ADM. Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE ADMINISTRACION Y FINANZAS">GERENTE DE ADMINISTRACION Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE IMAGEN INSTITUCIONAL">GERENTE DE IMAGEN INSTITUCIONAL</option>
                                
                                
                                <option value="GERENTE DE OPERACIONES">GERENTE DE OPERACIONES</option>
                                
                                
                                <option value="GERENTE DE PROYECTO">GERENTE DE PROYECTO</option>
                                
                                
                                <option value="GERENTE DE PROYECTOS DE OBRAS CIVILES">GERENTE DE PROYECTOS DE OBRAS CIVILES</option>
                                
                                
                                <option value="GERENTE DE RECURSOS HUMANOS">GERENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="GERENTE DE UNIDAD DE NEGOCIOS">GERENTE DE UNIDAD DE NEGOCIOS</option>
                                
                                
                                <option value="GERENTE DEL AREA DE EQUIPOS">GERENTE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="GERENTE GENERAL">GERENTE GENERAL</option>
                                
                                
                                <option value="GERENTE TECNICO">GERENTE TECNICO</option>
                                
                                
                                <option value="GUARDIAN">GUARDIAN</option>
                                
                                
                                <option value="ING. AMBIENTAL">ING. AMBIENTAL</option>
                                
                                
                                <option value="ING. CIVIL">ING. CIVIL</option>
                                
                                
                                <option value="ING. CIVIL JUNIOR">ING. CIVIL JUNIOR</option>
                                
                                
                                <option value="ING. CONSULTOR DE SIST. INFORMATICOS">ING. CONSULTOR DE SIST. INFORMATICOS</option>
                                
                                
                                <option value="ING. DE MINAS JUNIOR">ING. DE MINAS JUNIOR</option>
                                
                                
                                <option value="ING. DE OBRAS DE ARTE">ING. DE OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. DE SISTEMAS JUNIOR">ING. DE SISTEMAS JUNIOR</option>
                                
                                
                                <option value="ING. GEOGRAFO JUNIOR">ING. GEOGRAFO JUNIOR</option>
                                
                                
                                <option value="ING. GEOLOGO JUNIOR">ING. GEOLOGO JUNIOR</option>
                                
                                
                                <option value="ING. MECANICO JUNIOR">ING. MECANICO JUNIOR</option>
                                
                                
                                <option value="ING. MECATRONICO JUNIOR">ING. MECATRONICO JUNIOR</option>
                                
                                
                                <option value="ING. MINAS JUNIOR - SEGURIDAD">ING. MINAS JUNIOR - SEGURIDAD</option>
                                
                                
                                <option value="ING. OBRAS DE ARTE">ING. OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. PROGRAMACION Y COSTOS">ING. PROGRAMACION Y COSTOS</option>
                                
                                
                                <option value="ING. SUPERINTENDENTE">ING. SUPERINTENDENTE</option>
                                
                                
                                <option value="INGENIERO ASISTENTE">INGENIERO ASISTENTE</option>
                                
                                
                                <option value="INGENIERO DE PLANEAMIENTO">INGENIERO DE PLANEAMIENTO</option>
                                
                                
                                <option value="INGENIERO DE PRODUCTIVIDAD">INGENIERO DE PRODUCTIVIDAD</option>
                                
                                
                                <option value="INSPECTOR DE CALIDAD">INSPECTOR DE CALIDAD</option>
                                
                                
                                <option value="INSTRUCTOR">INSTRUCTOR</option>
                                
                                
                                <option value="INSTRUCTOR DE EQUIPO PESADO">INSTRUCTOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD">JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD</option>
                                
                                
                                <option value="JEFE DE ALMACEN">JEFE DE ALMACEN</option>
                                
                                
                                <option value="JEFE DE BIENESTAR SOCIAL">JEFE DE BIENESTAR SOCIAL</option>
                                
                                
                                <option value="JEFE DE CAMPO">JEFE DE CAMPO</option>
                                
                                
                                <option value="JEFE DE CARGUIO Y TRANSPORTE">JEFE DE CARGUIO Y TRANSPORTE</option>
                                
                                
                                <option value="JEFE DE CONTROL DE PROYECTO">JEFE DE CONTROL DE PROYECTO</option>
                                
                                
                                <option value="JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA">JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA</option>
                                
                                
                                <option value="JEFE DE EQUIPOS">JEFE DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DE EQUIPOS DE OBRA">JEFE DE EQUIPOS DE OBRA</option>
                                
                                
                                <option value="JEFE DE EXPLORACIONES">JEFE DE EXPLORACIONES</option>
                                
                                
                                <option value="JEFE DE FINANZAS">JEFE DE FINANZAS</option>
                                
                                
                                <option value="JEFE DE GESTION DE LA CALIDAD">JEFE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="JEFE DE GRUPO DE CHANCADO">JEFE DE GRUPO DE CHANCADO</option>
                                
                                
                                <option value="JEFE DE GRUPO DE ZARANDEO">JEFE DE GRUPO DE ZARANDEO</option>
                                
                                
                                <option value="JEFE DE GUARDIA">JEFE DE GUARDIA</option>
                                
                                
                                <option value="JEFE DE LA ESCUELA DE ENTRENAMIENTO">JEFE DE LA ESCUELA DE ENTRENAMIENTO</option>
                                
                                
                                <option value="JEFE DE MANTENIMIENTO">JEFE DE MANTENIMIENTO</option>
                                
                                
                                <option value="JEFE DE MINA">JEFE DE MINA</option>
                                
                                
                                <option value="JEFE DE OBRA">JEFE DE OBRA</option>
                                
                                
                                <option value="JEFE DE OBRA - CIVIL">JEFE DE OBRA - CIVIL</option>
                                
                                
                                <option value="JEFE DE OBRA - MINA">JEFE DE OBRA - MINA</option>
                                
                                
                                <option value="JEFE DE OBRAS VIALES">JEFE DE OBRAS VIALES</option>
                                
                                
                                <option value="JEFE DE OFICINA TECNICA">JEFE DE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE DE PRESUPUESTOS">JEFE DE PRESUPUESTOS</option>
                                
                                
                                <option value="JEFE DE RECURSOS HUMANOS">JEFE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="JEFE DE RELLENOS Y PAVIMENTOS">JEFE DE RELLENOS Y PAVIMENTOS</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD DE OBRA">JEFE DE SEGURIDAD DE OBRA</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE">JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE</option>
                                
                                
                                <option value="JEFE DE SISTEMAS">JEFE DE SISTEMAS</option>
                                
                                
                                <option value="JEFE DE TOPOGRAFIA">JEFE DE TOPOGRAFIA</option>
                                
                                
                                <option value="JEFE DE TRABAJOS AUXILIARES">JEFE DE TRABAJOS AUXILIARES</option>
                                
                                
                                <option value="JEFE DE TUNEL">JEFE DE TUNEL</option>
                                
                                
                                <option value="JEFE DE VALORIZACIONES">JEFE DE VALORIZACIONES</option>
                                
                                
                                <option value="JEFE DE VENTAS">JEFE DE VENTAS</option>
                                
                                
                                <option value="JEFE DEL AREA DE EQUIPOS">JEFE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DEL AREA LEGAL">JEFE DEL AREA LEGAL</option>
                                
                                
                                <option value="JEFE DEL TALLER">JEFE DEL TALLER</option>
                                
                                
                                <option value="JEFE MANTENIMIENTO EN CAMPO">JEFE MANTENIMIENTO EN CAMPO</option>
                                
                                
                                <option value="JEFE OFICINA TECNICA">JEFE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE PLANTAS DE AGREGADOS">JEFE PLANTAS DE AGREGADOS</option>
                                
                                
                                <option value="JEFE PROYECTOS CIVILES">JEFE PROYECTOS CIVILES</option>
                                
                                
                                <option value="JEFE SOPORTE TECNICO Y COMUNICACIONES">JEFE SOPORTE TECNICO Y COMUNICACIONES</option>
                                
                                
                                <option value="LABORATORISTA">LABORATORISTA</option>
                                
                                
                                <option value="LLANTERO -A">LLANTERO -A</option>
                                
                                
                                <option value="MAESTRO">MAESTRO</option>
                                
                                
                                <option value="MAESTRO - ELECTRICISTA">MAESTRO - ELECTRICISTA</option>
                                
                                
                                <option value="MAESTRO - LUBRICADOR">MAESTRO - LUBRICADOR</option>
                                
                                
                                <option value="MAESTRO - MECANICO">MAESTRO - MECANICO</option>
                                
                                
                                <option value="MAESTRO - SOLDADOR">MAESTRO - SOLDADOR</option>
                                
                                
                                <option value="MAESTRO - TECNICO DE LLANTAS">MAESTRO - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="MAESTRO MINERO">MAESTRO MINERO</option>
                                
                                
                                <option value="MEDICO">MEDICO</option>
                                
                                
                                <option value="MUESTRERO">MUESTRERO</option>
                                
                                
                                <option value="NIVELADOR">NIVELADOR</option>
                                
                                
                                <option value="NIVELADOR DE MOVIMIENTO DE TIERRAS">NIVELADOR DE MOVIMIENTO DE TIERRAS</option>
                                
                                
                                <option value="OFICIAL ARMADOR-METAL MECANICA">OFICIAL ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="OFICIAL DE CAMPO">OFICIAL DE CAMPO</option>
                                
                                
                                <option value="OFICIAL DE MEDIO AMBIENTE">OFICIAL DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="OFICIAL DE RELACIONES COMUNITARIAS">OFICIAL DE RELACIONES COMUNITARIAS</option>
                                
                                
                                <option value="OFICIAL ELECTRICISTA-METAL MECANICA">OFICIAL ELECTRICISTA-METAL MECANICA</option>
                                
                                
                                <option value="OPERADOR  DE PERFORADORA IR 320">OPERADOR  DE PERFORADORA IR 320</option>
                                
                                
                                <option value="OPERADOR - RODILLO">OPERADOR - RODILLO</option>
                                
                                
                                <option value="OPERADOR CAMIÓN FABRICA">OPERADOR CAMIÓN FABRICA</option>
                                
                                
                                <option value="OPERADOR CAMIÓN GRUA">OPERADOR CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR CARGADOR CAT 966 F">OPERADOR CARGADOR CAT 966 F</option>
                                
                                
                                <option value="OPERADOR CARGADOR FRONTAL 992 G">OPERADOR CARGADOR FRONTAL 992 G</option>
                                
                                
                                <option value="OPERADOR CAT 775 F">OPERADOR CAT 775 F</option>
                                
                                
                                <option value="OPERADOR CAT 775E">OPERADOR CAT 775E</option>
                                
                                
                                <option value="OPERADOR CAT 777">OPERADOR CAT 777</option>
                                
                                
                                <option value="OPERADOR CAT 777D">OPERADOR CAT 777D</option>
                                
                                
                                <option value="OPERADOR CAT 785 B">OPERADOR CAT 785 B</option>
                                
                                
                                <option value="OPERADOR CAT 785C">OPERADOR CAT 785C</option>
                                
                                
                                <option value="OPERADOR DE  TOPOGRAFIA.">OPERADOR DE  TOPOGRAFIA.</option>
                                
                                
                                <option value="OPERADOR DE CAMION CAT 785 C">OPERADOR DE CAMION CAT 785 C</option>
                                
                                
                                <option value="OPERADOR DE CAMIÓN GRUA">OPERADOR DE CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 988H">OPERADOR DE CARGADOR FRONTAL 988H</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 994F">OPERADOR DE CARGADOR FRONTAL 994F</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L120">OPERADOR DE CARGADOR L120</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L150">OPERADOR DE CARGADOR L150</option>
                                
                                
                                <option value="OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION">OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO  -B">OPERADOR DE EQUIPO  -B</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO -C">OPERADOR DE EQUIPO -C</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO">OPERADOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO ESTANDAR">OPERADOR DE EQUIPO PESADO ESTANDAR</option>
                                
                                
                                <option value="OPERADOR DE MOTONIVELADORA">OPERADOR DE MOTONIVELADORA</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA D75S">OPERADOR DE PERFORADORA D75S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA DM45">OPERADOR DE PERFORADORA DM45</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA IR DM 45S">OPERADOR DE PERFORADORA IR DM 45S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA PANTERA 1500">OPERADOR DE PERFORADORA PANTERA 1500</option>
                                
                                
                                <option value="OPERADOR DE RODILLO">OPERADOR DE RODILLO</option>
                                
                                
                                <option value="OPERADOR DE TRACTOR D9T">OPERADOR DE TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR DE VOLADURA">OPERADOR DE VOLADURA</option>
                                
                                
                                <option value="OPERADOR DE ZARANDA">OPERADOR DE ZARANDA</option>
                                
                                
                                <option value="OPERADOR O&amp;K">OPERADOR O&amp;K</option>
                                
                                
                                <option value="OPERADOR RANGER 700">OPERADOR RANGER 700</option>
                                
                                
                                <option value="OPERADOR RETROEXCAVADORA">OPERADOR RETROEXCAVADORA</option>
                                
                                
                                <option value="OPERADOR TEREX TR100">OPERADOR TEREX TR100</option>
                                
                                
                                <option value="OPERADOR TRACTOR AGRICOLA">OPERADOR TRACTOR AGRICOLA</option>
                                
                                
                                <option value="OPERADOR TRACTOR D9T">OPERADOR TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 966F">OPERADOR-CARGADOR FRONTAL 966F</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 980G">OPERADOR-CARGADOR FRONTAL 980G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 988G">OPERADOR-CARGADOR FRONTAL 988G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 992">OPERADOR-CARGADOR FRONTAL 992</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330D">OPERADOR-CARGADOR FRONTAL L 330D</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330E">OPERADOR-CARGADOR FRONTAL L 330E</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA 320LC">OPERADOR-EXCAVADORA 320LC</option>
                                
                                
                                <option value="OPERADOR-HAULLPACK 210">OPERADOR-HAULLPACK 210</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-MOTONIVELADORA GD623A">OPERADOR-MOTONIVELADORA GD623A</option>
                                <option value="OPERADOR-TRACTOR">OPERADOR-TRACTOR</option>
                                <option value="OPERADOR-TRACTOR D6">OPERADOR-TRACTOR D6</option>
                                <option value="OPERADOR-TRACTOR D8R">OPERADOR-TRACTOR D8R</option>
                                <option value="OPERARIO">OPERARIO</option>
                                <option value="OPERARIO -A">OPERARIO -A</option>
                                <option value="OPERARIO -B">OPERARIO -B</option>
                                <option value="OPERARIO-METAL MECANICA">OPERARIO-METAL MECANICA</option>
                                <option value="OPERARIO-SERV.GRALES">OPERARIO-SERV.GRALES</option>
                                <option value="OPERARIO-SISTEMA DE TRITURACION">OPERARIO-SISTEMA DE TRITURACION</option>
                                <option value="PERFORISTA">PERFORISTA</option>
                                <option value="PERFORISTA  DE DIAMANTINA">PERFORISTA  DE DIAMANTINA</option>
                                <option value="PERFORISTA  DM45E">PERFORISTA  DM45E</option>
                                <option value="PERFORISTA -A">PERFORISTA -A</option>
                                <option value="PERFORISTA -B">PERFORISTA -B</option>
                                <option value="PERFORISTA-COMPRESORA IR P750AWD">PERFORISTA-COMPRESORA IR P750AWD</option>
                                <option value="PERFORISTA-COMPRESORA IR P900AWD">PERFORISTA-COMPRESORA IR P900AWD</option>
                                <option value="PERFORISTA-TRACKDRILL">PERFORISTA-TRACKDRILL</option>
                                <option value="PINTOR">PINTOR</option>
                                <option value="PRACTICANTE">PRACTICANTE</option>
                                <option value="PROYECTISTA">PROYECTISTA</option>
                                <option value="PUNTERO">PUNTERO</option>
                                <option value="RECEPCIONISTA">RECEPCIONISTA</option>
                                <option value="SOLDADOR-METAL MECANICA">SOLDADOR-METAL MECANICA</option>
                                <option value="SUB - CONTADOR">SUB - CONTADOR</option>
                                <option value="SUPERINTENDENTE DE EQUIPOS">SUPERINTENDENTE DE EQUIPOS</option>
                                <option value="SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO">SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO</option>
                                <option value="SUPERVISOR DE CALIDAD">SUPERVISOR DE CALIDAD</option>
                                <option value="SUPERVISOR DE CAMPAMENTOS">SUPERVISOR DE CAMPAMENTOS</option>
                                <option value="SUPERVISOR DE CARGUIO Y ACARREO">SUPERVISOR DE CARGUIO Y ACARREO</option>
                                <option value="SUPERVISOR DE CHANCADORA">SUPERVISOR DE CHANCADORA</option>
                                <option value="SUPERVISOR DE EXCAVACIONES">SUPERVISOR DE EXCAVACIONES</option>
                                <option value="SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO">SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO</option>
                                <option value="SUPERVISOR DE FIERRO Y ALCANTARILLAS">SUPERVISOR DE FIERRO Y ALCANTARILLAS</option>
                                <option value="SUPERVISOR DE FLOTA">SUPERVISOR DE FLOTA</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO CAMPO">SUPERVISOR DE MANTENIMIENTO CAMPO</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO TALLER">SUPERVISOR DE MANTENIMIENTO TALLER</option>
                                <option value="SUPERVISOR DE OBRA">SUPERVISOR DE OBRA</option>
                                <option value="SUPERVISOR DE OBRAS DE ARTE">SUPERVISOR DE OBRAS DE ARTE</option>
                                <option value="SUPERVISOR DE OPERACIONES">SUPERVISOR DE OPERACIONES</option>
                                <option value="SUPERVISOR DE PERFORACION Y VOLADURA">SUPERVISOR DE PERFORACION Y VOLADURA</option>
                                <option value="SUPERVISOR DE PLANTA">SUPERVISOR DE PLANTA</option>
                                <option value="SUPERVISOR DE RELLENOS Y PAVIMENTOS">SUPERVISOR DE RELLENOS Y PAVIMENTOS</option>
                                <option value="SUPERVISOR DE SEGURIDAD">SUPERVISOR DE SEGURIDAD</option>
                                <option value="SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE">SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE</option>
                                <option value="SUPERVISOR DE VOLADURA">SUPERVISOR DE VOLADURA</option>
                                <option value="SUPERVISOR MANTENIMIENTO">SUPERVISOR MANTENIMIENTO</option>
                                <option value="SUPERVISOR MOVIMIENTO DE TIERRAS">SUPERVISOR MOVIMIENTO DE TIERRAS</option>
                                <option value="SUPERVISOR PARA CONTROL DE NEUMATICOS">SUPERVISOR PARA CONTROL DE NEUMATICOS</option>
                                <option value="SUPERVISOR PLANEAMIENTO">SUPERVISOR PLANEAMIENTO</option>
                                <option value="TECNICO DE  LLANTAS">TECNICO DE  LLANTAS.</option>
                                <option value="TECNICO DE CONTROL DE CALIDAD">TECNICO DE CONTROL DE CALIDAD</option>
                                <option value="TECNICO DE CONTROL DE EQUIPOS">TECNICO DE CONTROL DE EQUIPOS</option>
                                <option value="TECNICO DE SUELOS">TECNICO DE SUELOS</option>
                                <option value="TECNICO ELECTRONICO">TECNICO ELECTRONICO</option>
                                <option value="TECNICO EN NEUMÁTICOS">TECNICO EN NEUMÁTICOS</option>
                                <option value="TECNICO LUBRICADOR">TECNICO LUBRICADOR</option>
                                <option value="TECSUP JUNIOR">TECSUP JUNIOR</option>
                                <option value="TESORERO">TESORERO</option>
                                <option value="TITULAR - ELECTRICISTA">TITULAR - ELECTRICISTA</option>
                                <option value="TITULAR - LUBRICADOR">TITULAR - LUBRICADOR</option>
                                <option value="TITULAR - MECANICO">TITULAR - MECANICO</option>
                                <option value="TITULAR - PINTOR">TITULAR - PINTOR</option>
                                <option value="TITULAR - SOLDADOR">TITULAR - SOLDADOR</option>
                                <option value="TITULAR - TECNICO DE LLANTAS">TITULAR - TECNICO DE LLANTAS</option>
                                <option value="TOPOGRAFO">TOPOGRAFO</option>
                                <option value="TORNERO">TORNERO</option>
                                <option value="VICEPRESIDENTE DE OPERACIONES">VICEPRESIDENTE DE OPERACIONES</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-top: 50px">
                        <p><strong>Indique las 2 últimas experiencias laborales empezando por la más reciente:</strong></p>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Empresa 1:</label>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Empresa 2:</label>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Fecha de Ingreso: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="fingreso1" class="datepicker">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Fecha de Ingreso: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="fingreso2" class="datepicker">
                        </div>

                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Fecha de Cese: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="fcese1" class="datepicker">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Fecha de Cese: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="fcese2" class="datepicker">
                        </div>

                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Empresa donde Laboro <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="empresaLaboro1">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Empresa donde Laboro <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="text" name="empresaLaboro2">
                        </div>

                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Puesto que Ocupo <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="pocupo1"> -->
                            <select name="pocupo1" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="ABOGADO JUNIOR">ABOGADO JUNIOR</option>
                                <option value="ADMINISTRADOR DE BASE DE DATOS">ADMINISTRADOR DE BASE DE DATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE CONTRATOS">ADMINISTRADOR DE CONTRATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE OBRA">ADMINISTRADOR DE OBRA</option>
                                
                                
                                <option value="ADMINISTRADOR MAESTRO DE ARTICULOS">ADMINISTRADOR MAESTRO DE ARTICULOS</option>
                                
                                
                                <option value="AFILADOR DE BROCAS">AFILADOR DE BROCAS</option>
                                
                                
                                <option value="ALMACENERO - POLVORIN">ALMACENERO - POLVORIN</option>
                                
                                
                                <option value="ANALISTA CONTABLE">ANALISTA CONTABLE</option>
                                
                                
                                <option value="ANALISTA DE ACTIVOS FIJOS">ANALISTA DE ACTIVOS FIJOS</option>
                                
                                
                                <option value="ANALISTA DE OFICINA TECNICA">ANALISTA DE OFICINA TECNICA</option>
                                
                                
                                <option value="ANALISTA DE PLANEAMIENTO">ANALISTA DE PLANEAMIENTO</option>
                                
                                
                                <option value="ANALISTA DE PRESUPUESTOS">ANALISTA DE PRESUPUESTOS</option>
                                
                                
                                <option value="ANALISTA DE SELECCION Y DESARROLLO">ANALISTA DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ANALISTA DE TESORERIA">ANALISTA DE TESORERIA</option>
                                
                                
                                <option value="ANALISTA DEL RESULTADO OPERATIVO">ANALISTA DEL RESULTADO OPERATIVO</option>
                                
                                
                                <option value="ANALISTA ORGANIZACION Y METODOS">ANALISTA ORGANIZACION Y METODOS</option>
                                
                                
                                <option value="ANALISTA PROGRAMADOR">ANALISTA PROGRAMADOR</option>
                                
                                
                                <option value="ARMADOR-METAL MECANICA">ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL</option>
                                
                                
                                <option value="ASISTENTE  DE  PERSONAL">ASISTENTE  DE  PERSONAL</option>
                                
                                
                                <option value="ASISTENTE  DE RECURSOS HUMANOS">ASISTENTE  DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE ADMINISTRATIVA">ASISTENTE ADMINISTRATIVA</option>
                                
                                
                                <option value="ASISTENTE CONTABLE">ASISTENTE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE ADMINISTRACION">ASISTENTE DE ADMINISTRACION</option>
                                
                                
                                <option value="ASISTENTE DE ALMACEN">ASISTENTE DE ALMACEN</option>
                                
                                
                                <option value="ASISTENTE DE ARCHIVO">ASISTENTE DE ARCHIVO</option>
                                
                                
                                <option value="ASISTENTE DE CALIDAD">ASISTENTE DE CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE COMPENSACIÓN Y BENEFICIOS">ASISTENTE DE COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="ASISTENTE DE COMUNICACIONES">ASISTENTE DE COMUNICACIONES</option>
                                
                                
                                <option value="ASISTENTE DE CONTABLE">ASISTENTE DE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE CONTROL DE PROYECTOS">ASISTENTE DE CONTROL DE PROYECTOS</option>
                                
                                
                                <option value="ASISTENTE DE ENTRENAMIENTO">ASISTENTE DE ENTRENAMIENTO</option>
                                
                                
                                <option value="ASISTENTE DE GESTION DE LA CALIDAD">ASISTENTE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE LABORATORIO">ASISTENTE DE LABORATORIO</option>
                                
                                
                                <option value="ASISTENTE DE MANTENIMIENTO PREVENTIVO">ASISTENTE DE MANTENIMIENTO PREVENTIVO</option>
                                
                                
                                <option value="ASISTENTE DE MEDIO AMBIENTE">ASISTENTE DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="ASISTENTE DE PAVIMENTOS">ASISTENTE DE PAVIMENTOS</option>
                                
                                
                                <option value="ASISTENTE DE PERSONAL">ASISTENTE DE PERSONAL</option>
                                
                                
                                <option value="ASISTENTE DE PLANILLAS">ASISTENTE DE PLANILLAS</option>
                                
                                
                                <option value="ASISTENTE DE PRESUPUESTO">ASISTENTE DE PRESUPUESTO</option>
                                
                                
                                <option value="ASISTENTE DE RECURSOS HUMANOS">ASISTENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE DE REMUNERACIONES">ASISTENTE DE REMUNERACIONES</option>
                                
                                
                                <option value="ASISTENTE DE SEGURIDAD">ASISTENTE DE SEGURIDAD</option>
                                
                                
                                <option value="ASISTENTE DE SELECCION Y DESARROLLO">ASISTENTE DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO HARDWARE">ASISTENTE DE SOPORTE TECNICO HARDWARE</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO SOFTWARE">ASISTENTE DE SOPORTE TECNICO SOFTWARE</option>
                                
                                
                                <option value="ASISTENTE DE TESORERIA">ASISTENTE DE TESORERIA</option>
                                
                                
                                <option value="ASISTENTE DE TOPOGRAFIA">ASISTENTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="ASISTENTE EJECUTIVA">ASISTENTE EJECUTIVA</option>
                                
                                
                                <option value="ASISTENTE LEGAL">ASISTENTE LEGAL</option>
                                
                                
                                <option value="ASISTENTE SOCIAL JUNIOR">ASISTENTE SOCIAL JUNIOR</option>
                                
                                
                                <option value="ASISTENTE TECNICO">ASISTENTE TECNICO</option>
                                
                                
                                <option value="AUXILIAR">AUXILIAR</option>
                                
                                
                                <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                                
                                
                                <option value="AUXILIAR DE  CAMPO">AUXILIAR DE  CAMPO</option>
                                
                                
                                <option value="AUXILIAR DE ADMINISTRACION">AUXILIAR DE ADMINISTRACION</option>
                                
                                
                                <option value="AUXILIAR DE ALMACEN">AUXILIAR DE ALMACEN</option>
                                
                                
                                <option value="AUXILIAR DE CAMPO -A">AUXILIAR DE CAMPO -A</option>
                                
                                
                                <option value="AUXILIAR DE CONTABILIDAD">AUXILIAR DE CONTABILIDAD</option>
                                <option value="AUXILIAR DE EQUIPOS">AUXILIAR DE EQUIPOS</option>
                                
                                
                                <option value="AUXILIAR DE LABORATORIO">AUXILIAR DE LABORATORIO</option>
                                
                                
                                <option value="AUXILIAR DE LIMPIEZA">AUXILIAR DE LIMPIEZA</option>
                                
                                
                                <option value="AUXILIAR DE OPERACIONES">AUXILIAR DE OPERACIONES</option>
                                
                                
                                <option value="AUXILIAR DE SEGURIDAD">AUXILIAR DE SEGURIDAD</option>
                                
                                
                                <option value="AUXILIAR DE TOPOGRAFIA">AUXILIAR DE TOPOGRAFIA</option>
                                
                                
                                <option value="AUXILIAR METRADOS Y VALORIZACIONES">AUXILIAR METRADOS Y VALORIZACIONES</option>
                                
                                
                                <option value="AYUDANTE">AYUDANTE</option>
                                
                                
                                <option value="AYUDANTE - ELECTRICISTA">AYUDANTE - ELECTRICISTA</option>
                                
                                
                                <option value="AYUDANTE - LUBRICADOR">AYUDANTE - LUBRICADOR</option>
                                
                                
                                <option value="AYUDANTE - MECANICO">AYUDANTE - MECANICO</option>
                                
                                
                                <option value="AYUDANTE - PINTOR">AYUDANTE - PINTOR</option>
                                
                                
                                <option value="AYUDANTE - SOLDADOR">AYUDANTE - SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE - TECNICO DE LLANTAS">AYUDANTE - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="AYUDANTE DE ALMACEN">AYUDANTE DE ALMACEN</option>
                                
                                
                                <option value="AYUDANTE DE CAMPO">AYUDANTE DE CAMPO</option>
                                
                                
                                <option value="AYUDANTE DE CHANCADORA">AYUDANTE DE CHANCADORA</option>
                                
                                
                                <option value="AYUDANTE DE DIAMANTINA">AYUDANTE DE DIAMANTINA</option>
                                
                                
                                <option value="AYUDANTE DE MAQUINARIA ALIVA">AYUDANTE DE MAQUINARIA ALIVA</option>
                                
                                
                                <option value="AYUDANTE DE MECANICO -A">AYUDANTE DE MECANICO -A</option>
                                
                                
                                <option value="AYUDANTE DE TOPOGRAFIA">AYUDANTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="AYUDANTE DE VOLADURA">AYUDANTE DE VOLADURA</option>
                                
                                
                                <option value="AYUDANTE GEOLOGO">AYUDANTE GEOLOGO</option>
                                
                                
                                <option value="AYUDANTE -III3">AYUDANTE -III3</option>
                                
                                
                                <option value="AYUDANTE MECANICO -B">AYUDANTE MECANICO -B</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA">AYUDANTE PERFORISTA</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA -B">AYUDANTE PERFORISTA -B</option>
                                
                                
                                <option value="AYUDANTE SOLDADOR">AYUDANTE SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE-METAL MECANICA">AYUDANTE-METAL MECANICA</option>
                                
                                
                                <option value="BODEGUERO">BODEGUERO</option>
                                
                                
                                <option value="CADISTA">CADISTA</option>
                                
                                
                                <option value="CAJERO CENTRAL">CAJERO CENTRAL</option>
                                
                                
                                <option value="CAPATAZ  DE  VOLADURA">CAPATAZ  DE  VOLADURA</option>
                                
                                
                                <option value="CAPATAZ  DE CAMPO">CAPATAZ  DE CAMPO</option>
                                
                                
                                <option value="CAPATAZ  DE OBRA">CAPATAZ  DE OBRA</option>
                                
                                
                                <option value="CAPATAZ DE CAMPO-METAL MECANICA">CAPATAZ DE CAMPO-METAL MECANICA</option>
                                
                                
                                <option value="CAPATAZ DE CHANCADORA">CAPATAZ DE CHANCADORA</option>
                                
                                
                                <option value="CAPATAZ DE EXCAVACIONES">CAPATAZ DE EXCAVACIONES</option>
                                
                                
                                <option value="CAPATAZ DE PLANTA">CAPATAZ DE PLANTA</option>
                                
                                
                                <option value="CAPATAZ OBRA DE ARTE">CAPATAZ OBRA DE ARTE</option>
                                
                                
                                <option value="CARPINTERO">CARPINTERO</option>
                                
                                
                                <option value="CARRERO">CARRERO</option>
                                
                                
                                <option value="CARRETERO">CARRETERO</option>
                                
                                
                                <option value="CHOFER">CHOFER</option>
                                
                                
                                <option value="CHOFER - CAMIONETA">CHOFER - CAMIONETA</option>
                                
                                
                                <option value="CHOFER - COMPRADOR">CHOFER - COMPRADOR</option>
                                
                                
                                <option value="CHOFER -A">CHOFER -A</option>
                                
                                
                                <option value="CHOFER -B">CHOFER -B</option>
                                
                                
                                <option value="CHOFER C">CHOFER C</option>
                                
                                
                                <option value="CHOFER CAMION FABRICA">CHOFER CAMION FABRICA</option>
                                
                                
                                <option value="CHOFER DE  SEMI TRAYLER">CHOFER DE  SEMI TRAYLER</option>
                                
                                
                                <option value="CHOFER DE  VOLQUETE">CHOFER DE  VOLQUETE</option>
                                
                                
                                <option value="CHOFER DE CAMION">CHOFER DE CAMION</option>
                                
                                
                                <option value="CHOFER DE CAMION HIAB">CHOFER DE CAMION HIAB</option>
                                
                                
                                <option value="CHOFER DE VOLQUETE FM12">CHOFER DE VOLQUETE FM12</option>
                                
                                
                                <option value="CHOFER UNIMOQTV-12-METAL MECANICA">CHOFER UNIMOQTV-12-METAL MECANICA</option>
                                
                                
                                <option value="CHOFER-CAMION WABCO 35TM">CHOFER-CAMION WABCO 35TM</option>
                                
                                
                                <option value="CHOFER-CAMIONETA">CHOFER-CAMIONETA</option>
                                
                                
                                <option value="CHOFER-CISTERNA">CHOFER-CISTERNA</option>
                                
                                
                                <option value="CHOFER-VOLQUETE L-12 20 TM">CHOFER-VOLQUETE L-12 20 TM</option>
                                
                                
                                <option value="CONSULTOR CORPORATIVO">CONSULTOR CORPORATIVO</option>
                                
                                
                                <option value="CONTADOR DE CONTROL INTERNO">CONTADOR DE CONTROL INTERNO</option>
                                
                                
                                <option value="CONTRALOR CONTABLE Y TRIBUTARIO">CONTRALOR CONTABLE Y TRIBUTARIO</option>
                                
                                
                                <option value="CONTROL DE CALIDAD-SISTEMA DE TRITURACION">CONTROL DE CALIDAD-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="CONTROLADOR">CONTROLADOR</option>
                                
                                
                                <option value="CONTROLADOR DE EQUIPOS">CONTROLADOR DE EQUIPOS</option>
                                
                                
                                <option value="COORDINADOR COMPENSACIÓN Y BENEFICIOS">COORDINADOR COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="COORDINADOR DE ADMINISTRACION DE OBRA">COORDINADOR DE ADMINISTRACION DE OBRA</option>
                                
                                
                                <option value="COORDINADOR DE EQUIPOS EN OBRA">COORDINADOR DE EQUIPOS EN OBRA</option>
                                
                                
                                <option value="COORDINADOR DE RELACIONES LABORALES">COORDINADOR DE RELACIONES LABORALES</option>
                                
                                
                                <option value="COORDINADOR DE TOPOGRAFIA">COORDINADOR DE TOPOGRAFIA</option>
                                
                                
                                <option value="COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO">COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO</option>
                                
                                
                                <option value="COORDINADORA ADMINISTRACIÓN DE PERSONAL">COORDINADORA ADMINISTRACIÓN DE PERSONAL</option>
                                
                                
                                <option value="DIBUJANTE">DIBUJANTE</option>
                                
                                
                                <option value="DIRECTOR">DIRECTOR</option>
                                
                                
                                <option value="ENCARGADO DE CONTROL DE COSTOS">ENCARGADO DE CONTROL DE COSTOS</option>
                                
                                
                                <option value="GERENTE">GERENTE</option>
                                
                                
                                <option value="GERENTE COMERCIAL">GERENTE COMERCIAL</option>
                                
                                
                                <option value="GERENTE DE ADM. Y FINANZAS">GERENTE DE ADM. Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE ADMINISTRACION Y FINANZAS">GERENTE DE ADMINISTRACION Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE IMAGEN INSTITUCIONAL">GERENTE DE IMAGEN INSTITUCIONAL</option>
                                
                                
                                <option value="GERENTE DE OPERACIONES">GERENTE DE OPERACIONES</option>
                                
                                
                                <option value="GERENTE DE PROYECTO">GERENTE DE PROYECTO</option>
                                
                                
                                <option value="GERENTE DE PROYECTOS DE OBRAS CIVILES">GERENTE DE PROYECTOS DE OBRAS CIVILES</option>
                                
                                
                                <option value="GERENTE DE RECURSOS HUMANOS">GERENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="GERENTE DE UNIDAD DE NEGOCIOS">GERENTE DE UNIDAD DE NEGOCIOS</option>
                                
                                
                                <option value="GERENTE DEL AREA DE EQUIPOS">GERENTE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="GERENTE GENERAL">GERENTE GENERAL</option>
                                
                                
                                <option value="GERENTE TECNICO">GERENTE TECNICO</option>
                                
                                
                                <option value="GUARDIAN">GUARDIAN</option>
                                
                                
                                <option value="ING. AMBIENTAL">ING. AMBIENTAL</option>
                                
                                
                                <option value="ING. CIVIL">ING. CIVIL</option>
                                
                                
                                <option value="ING. CIVIL JUNIOR">ING. CIVIL JUNIOR</option>
                                
                                
                                <option value="ING. CONSULTOR DE SIST. INFORMATICOS">ING. CONSULTOR DE SIST. INFORMATICOS</option>
                                
                                
                                <option value="ING. DE MINAS JUNIOR">ING. DE MINAS JUNIOR</option>
                                
                                
                                <option value="ING. DE OBRAS DE ARTE">ING. DE OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. DE SISTEMAS JUNIOR">ING. DE SISTEMAS JUNIOR</option>
                                
                                
                                <option value="ING. GEOGRAFO JUNIOR">ING. GEOGRAFO JUNIOR</option>
                                
                                
                                <option value="ING. GEOLOGO JUNIOR">ING. GEOLOGO JUNIOR</option>
                                
                                
                                <option value="ING. MECANICO JUNIOR">ING. MECANICO JUNIOR</option>
                                
                                
                                <option value="ING. MECATRONICO JUNIOR">ING. MECATRONICO JUNIOR</option>
                                
                                
                                <option value="ING. MINAS JUNIOR - SEGURIDAD">ING. MINAS JUNIOR - SEGURIDAD</option>
                                
                                
                                <option value="ING. OBRAS DE ARTE">ING. OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. PROGRAMACION Y COSTOS">ING. PROGRAMACION Y COSTOS</option>
                                
                                
                                <option value="ING. SUPERINTENDENTE">ING. SUPERINTENDENTE</option>
                                
                                
                                <option value="INGENIERO ASISTENTE">INGENIERO ASISTENTE</option>
                                
                                
                                <option value="INGENIERO DE PLANEAMIENTO">INGENIERO DE PLANEAMIENTO</option>
                                
                                
                                <option value="INGENIERO DE PRODUCTIVIDAD">INGENIERO DE PRODUCTIVIDAD</option>
                                
                                
                                <option value="INSPECTOR DE CALIDAD">INSPECTOR DE CALIDAD</option>
                                
                                
                                <option value="INSTRUCTOR">INSTRUCTOR</option>
                                
                                
                                <option value="INSTRUCTOR DE EQUIPO PESADO">INSTRUCTOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD">JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD</option>
                                
                                
                                <option value="JEFE DE ALMACEN">JEFE DE ALMACEN</option>
                                
                                
                                <option value="JEFE DE BIENESTAR SOCIAL">JEFE DE BIENESTAR SOCIAL</option>
                                
                                
                                <option value="JEFE DE CAMPO">JEFE DE CAMPO</option>
                                
                                
                                <option value="JEFE DE CARGUIO Y TRANSPORTE">JEFE DE CARGUIO Y TRANSPORTE</option>
                                
                                
                                <option value="JEFE DE CONTROL DE PROYECTO">JEFE DE CONTROL DE PROYECTO</option>
                                
                                
                                <option value="JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA">JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA</option>
                                
                                
                                <option value="JEFE DE EQUIPOS">JEFE DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DE EQUIPOS DE OBRA">JEFE DE EQUIPOS DE OBRA</option>
                                
                                
                                <option value="JEFE DE EXPLORACIONES">JEFE DE EXPLORACIONES</option>
                                
                                
                                <option value="JEFE DE FINANZAS">JEFE DE FINANZAS</option>
                                
                                
                                <option value="JEFE DE GESTION DE LA CALIDAD">JEFE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="JEFE DE GRUPO DE CHANCADO">JEFE DE GRUPO DE CHANCADO</option>
                                
                                
                                <option value="JEFE DE GRUPO DE ZARANDEO">JEFE DE GRUPO DE ZARANDEO</option>
                                
                                
                                <option value="JEFE DE GUARDIA">JEFE DE GUARDIA</option>
                                
                                
                                <option value="JEFE DE LA ESCUELA DE ENTRENAMIENTO">JEFE DE LA ESCUELA DE ENTRENAMIENTO</option>
                                
                                
                                <option value="JEFE DE MANTENIMIENTO">JEFE DE MANTENIMIENTO</option>
                                
                                
                                <option value="JEFE DE MINA">JEFE DE MINA</option>
                                
                                
                                <option value="JEFE DE OBRA">JEFE DE OBRA</option>
                                
                                
                                <option value="JEFE DE OBRA - CIVIL">JEFE DE OBRA - CIVIL</option>
                                
                                
                                <option value="JEFE DE OBRA - MINA">JEFE DE OBRA - MINA</option>
                                
                                
                                <option value="JEFE DE OBRAS VIALES">JEFE DE OBRAS VIALES</option>
                                
                                
                                <option value="JEFE DE OFICINA TECNICA">JEFE DE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE DE PRESUPUESTOS">JEFE DE PRESUPUESTOS</option>
                                
                                
                                <option value="JEFE DE RECURSOS HUMANOS">JEFE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="JEFE DE RELLENOS Y PAVIMENTOS">JEFE DE RELLENOS Y PAVIMENTOS</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD DE OBRA">JEFE DE SEGURIDAD DE OBRA</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE">JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE</option>
                                
                                
                                <option value="JEFE DE SISTEMAS">JEFE DE SISTEMAS</option>
                                
                                
                                <option value="JEFE DE TOPOGRAFIA">JEFE DE TOPOGRAFIA</option>
                                
                                
                                <option value="JEFE DE TRABAJOS AUXILIARES">JEFE DE TRABAJOS AUXILIARES</option>
                                
                                
                                <option value="JEFE DE TUNEL">JEFE DE TUNEL</option>
                                
                                
                                <option value="JEFE DE VALORIZACIONES">JEFE DE VALORIZACIONES</option>
                                
                                
                                <option value="JEFE DE VENTAS">JEFE DE VENTAS</option>
                                
                                
                                <option value="JEFE DEL AREA DE EQUIPOS">JEFE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DEL AREA LEGAL">JEFE DEL AREA LEGAL</option>
                                
                                
                                <option value="JEFE DEL TALLER">JEFE DEL TALLER</option>
                                
                                
                                <option value="JEFE MANTENIMIENTO EN CAMPO">JEFE MANTENIMIENTO EN CAMPO</option>
                                
                                
                                <option value="JEFE OFICINA TECNICA">JEFE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE PLANTAS DE AGREGADOS">JEFE PLANTAS DE AGREGADOS</option>
                                
                                
                                <option value="JEFE PROYECTOS CIVILES">JEFE PROYECTOS CIVILES</option>
                                
                                
                                <option value="JEFE SOPORTE TECNICO Y COMUNICACIONES">JEFE SOPORTE TECNICO Y COMUNICACIONES</option>
                                
                                
                                <option value="LABORATORISTA">LABORATORISTA</option>
                                
                                
                                <option value="LLANTERO -A">LLANTERO -A</option>
                                
                                
                                <option value="MAESTRO">MAESTRO</option>
                                
                                
                                <option value="MAESTRO - ELECTRICISTA">MAESTRO - ELECTRICISTA</option>
                                
                                
                                <option value="MAESTRO - LUBRICADOR">MAESTRO - LUBRICADOR</option>
                                
                                
                                <option value="MAESTRO - MECANICO">MAESTRO - MECANICO</option>
                                
                                
                                <option value="MAESTRO - SOLDADOR">MAESTRO - SOLDADOR</option>
                                
                                
                                <option value="MAESTRO - TECNICO DE LLANTAS">MAESTRO - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="MAESTRO MINERO">MAESTRO MINERO</option>
                                
                                
                                <option value="MEDICO">MEDICO</option>
                                
                                
                                <option value="MUESTRERO">MUESTRERO</option>
                                
                                
                                <option value="NIVELADOR">NIVELADOR</option>
                                
                                
                                <option value="NIVELADOR DE MOVIMIENTO DE TIERRAS">NIVELADOR DE MOVIMIENTO DE TIERRAS</option>
                                
                                
                                <option value="OFICIAL ARMADOR-METAL MECANICA">OFICIAL ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="OFICIAL DE CAMPO">OFICIAL DE CAMPO</option>
                                
                                
                                <option value="OFICIAL DE MEDIO AMBIENTE">OFICIAL DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="OFICIAL DE RELACIONES COMUNITARIAS">OFICIAL DE RELACIONES COMUNITARIAS</option>
                                
                                
                                <option value="OFICIAL ELECTRICISTA-METAL MECANICA">OFICIAL ELECTRICISTA-METAL MECANICA</option>
                                
                                
                                <option value="OPERADOR  DE PERFORADORA IR 320">OPERADOR  DE PERFORADORA IR 320</option>
                                
                                
                                <option value="OPERADOR - RODILLO">OPERADOR - RODILLO</option>
                                
                                
                                <option value="OPERADOR CAMIÓN FABRICA">OPERADOR CAMIÓN FABRICA</option>
                                
                                
                                <option value="OPERADOR CAMIÓN GRUA">OPERADOR CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR CARGADOR CAT 966 F">OPERADOR CARGADOR CAT 966 F</option>
                                
                                
                                <option value="OPERADOR CARGADOR FRONTAL 992 G">OPERADOR CARGADOR FRONTAL 992 G</option>
                                
                                
                                <option value="OPERADOR CAT 775 F">OPERADOR CAT 775 F</option>
                                
                                
                                <option value="OPERADOR CAT 775E">OPERADOR CAT 775E</option>
                                
                                
                                <option value="OPERADOR CAT 777">OPERADOR CAT 777</option>
                                
                                
                                <option value="OPERADOR CAT 777D">OPERADOR CAT 777D</option>
                                
                                
                                <option value="OPERADOR CAT 785 B">OPERADOR CAT 785 B</option>
                                
                                
                                <option value="OPERADOR CAT 785C">OPERADOR CAT 785C</option>
                                
                                
                                <option value="OPERADOR DE  TOPOGRAFIA.">OPERADOR DE  TOPOGRAFIA.</option>
                                
                                
                                <option value="OPERADOR DE CAMION CAT 785 C">OPERADOR DE CAMION CAT 785 C</option>
                                
                                
                                <option value="OPERADOR DE CAMIÓN GRUA">OPERADOR DE CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 988H">OPERADOR DE CARGADOR FRONTAL 988H</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 994F">OPERADOR DE CARGADOR FRONTAL 994F</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L120">OPERADOR DE CARGADOR L120</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L150">OPERADOR DE CARGADOR L150</option>
                                
                                
                                <option value="OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION">OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO  -B">OPERADOR DE EQUIPO  -B</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO -C">OPERADOR DE EQUIPO -C</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO">OPERADOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO ESTANDAR">OPERADOR DE EQUIPO PESADO ESTANDAR</option>
                                
                                
                                <option value="OPERADOR DE MOTONIVELADORA">OPERADOR DE MOTONIVELADORA</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA D75S">OPERADOR DE PERFORADORA D75S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA DM45">OPERADOR DE PERFORADORA DM45</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA IR DM 45S">OPERADOR DE PERFORADORA IR DM 45S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA PANTERA 1500">OPERADOR DE PERFORADORA PANTERA 1500</option>
                                
                                
                                <option value="OPERADOR DE RODILLO">OPERADOR DE RODILLO</option>
                                
                                
                                <option value="OPERADOR DE TRACTOR D9T">OPERADOR DE TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR DE VOLADURA">OPERADOR DE VOLADURA</option>
                                
                                
                                <option value="OPERADOR DE ZARANDA">OPERADOR DE ZARANDA</option>
                                
                                
                                <option value="OPERADOR O&amp;K">OPERADOR O&amp;K</option>
                                
                                
                                <option value="OPERADOR RANGER 700">OPERADOR RANGER 700</option>
                                
                                
                                <option value="OPERADOR RETROEXCAVADORA">OPERADOR RETROEXCAVADORA</option>
                                
                                
                                <option value="OPERADOR TEREX TR100">OPERADOR TEREX TR100</option>
                                
                                
                                <option value="OPERADOR TRACTOR AGRICOLA">OPERADOR TRACTOR AGRICOLA</option>
                                
                                
                                <option value="OPERADOR TRACTOR D9T">OPERADOR TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 966F">OPERADOR-CARGADOR FRONTAL 966F</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 980G">OPERADOR-CARGADOR FRONTAL 980G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 988G">OPERADOR-CARGADOR FRONTAL 988G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 992">OPERADOR-CARGADOR FRONTAL 992</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330D">OPERADOR-CARGADOR FRONTAL L 330D</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330E">OPERADOR-CARGADOR FRONTAL L 330E</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA 320LC">OPERADOR-EXCAVADORA 320LC</option>
                                
                                
                                <option value="OPERADOR-HAULLPACK 210">OPERADOR-HAULLPACK 210</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-MOTONIVELADORA GD623A">OPERADOR-MOTONIVELADORA GD623A</option>
                                <option value="OPERADOR-TRACTOR">OPERADOR-TRACTOR</option>
                                <option value="OPERADOR-TRACTOR D6">OPERADOR-TRACTOR D6</option>
                                <option value="OPERADOR-TRACTOR D8R">OPERADOR-TRACTOR D8R</option>
                                <option value="OPERARIO">OPERARIO</option>
                                <option value="OPERARIO -A">OPERARIO -A</option>
                                <option value="OPERARIO -B">OPERARIO -B</option>
                                <option value="OPERARIO-METAL MECANICA">OPERARIO-METAL MECANICA</option>
                                <option value="OPERARIO-SERV.GRALES">OPERARIO-SERV.GRALES</option>
                                <option value="OPERARIO-SISTEMA DE TRITURACION">OPERARIO-SISTEMA DE TRITURACION</option>
                                <option value="PERFORISTA">PERFORISTA</option>
                                <option value="PERFORISTA  DE DIAMANTINA">PERFORISTA  DE DIAMANTINA</option>
                                <option value="PERFORISTA  DM45E">PERFORISTA  DM45E</option>
                                <option value="PERFORISTA -A">PERFORISTA -A</option>
                                <option value="PERFORISTA -B">PERFORISTA -B</option>
                                <option value="PERFORISTA-COMPRESORA IR P750AWD">PERFORISTA-COMPRESORA IR P750AWD</option>
                                <option value="PERFORISTA-COMPRESORA IR P900AWD">PERFORISTA-COMPRESORA IR P900AWD</option>
                                <option value="PERFORISTA-TRACKDRILL">PERFORISTA-TRACKDRILL</option>
                                <option value="PINTOR">PINTOR</option>
                                <option value="PRACTICANTE">PRACTICANTE</option>
                                <option value="PROYECTISTA">PROYECTISTA</option>
                                <option value="PUNTERO">PUNTERO</option>
                                <option value="RECEPCIONISTA">RECEPCIONISTA</option>
                                <option value="SOLDADOR-METAL MECANICA">SOLDADOR-METAL MECANICA</option>
                                <option value="SUB - CONTADOR">SUB - CONTADOR</option>
                                <option value="SUPERINTENDENTE DE EQUIPOS">SUPERINTENDENTE DE EQUIPOS</option>
                                <option value="SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO">SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO</option>
                                <option value="SUPERVISOR DE CALIDAD">SUPERVISOR DE CALIDAD</option>
                                <option value="SUPERVISOR DE CAMPAMENTOS">SUPERVISOR DE CAMPAMENTOS</option>
                                <option value="SUPERVISOR DE CARGUIO Y ACARREO">SUPERVISOR DE CARGUIO Y ACARREO</option>
                                <option value="SUPERVISOR DE CHANCADORA">SUPERVISOR DE CHANCADORA</option>
                                <option value="SUPERVISOR DE EXCAVACIONES">SUPERVISOR DE EXCAVACIONES</option>
                                <option value="SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO">SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO</option>
                                <option value="SUPERVISOR DE FIERRO Y ALCANTARILLAS">SUPERVISOR DE FIERRO Y ALCANTARILLAS</option>
                                <option value="SUPERVISOR DE FLOTA">SUPERVISOR DE FLOTA</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO CAMPO">SUPERVISOR DE MANTENIMIENTO CAMPO</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO TALLER">SUPERVISOR DE MANTENIMIENTO TALLER</option>
                                <option value="SUPERVISOR DE OBRA">SUPERVISOR DE OBRA</option>
                                <option value="SUPERVISOR DE OBRAS DE ARTE">SUPERVISOR DE OBRAS DE ARTE</option>
                                <option value="SUPERVISOR DE OPERACIONES">SUPERVISOR DE OPERACIONES</option>
                                <option value="SUPERVISOR DE PERFORACION Y VOLADURA">SUPERVISOR DE PERFORACION Y VOLADURA</option>
                                <option value="SUPERVISOR DE PLANTA">SUPERVISOR DE PLANTA</option>
                                <option value="SUPERVISOR DE RELLENOS Y PAVIMENTOS">SUPERVISOR DE RELLENOS Y PAVIMENTOS</option>
                                <option value="SUPERVISOR DE SEGURIDAD">SUPERVISOR DE SEGURIDAD</option>
                                <option value="SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE">SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE</option>
                                <option value="SUPERVISOR DE VOLADURA">SUPERVISOR DE VOLADURA</option>
                                <option value="SUPERVISOR MANTENIMIENTO">SUPERVISOR MANTENIMIENTO</option>
                                <option value="SUPERVISOR MOVIMIENTO DE TIERRAS">SUPERVISOR MOVIMIENTO DE TIERRAS</option>
                                <option value="SUPERVISOR PARA CONTROL DE NEUMATICOS">SUPERVISOR PARA CONTROL DE NEUMATICOS</option>
                                <option value="SUPERVISOR PLANEAMIENTO">SUPERVISOR PLANEAMIENTO</option>
                                <option value="TECNICO DE  LLANTAS">TECNICO DE  LLANTAS.</option>
                                <option value="TECNICO DE CONTROL DE CALIDAD">TECNICO DE CONTROL DE CALIDAD</option>
                                <option value="TECNICO DE CONTROL DE EQUIPOS">TECNICO DE CONTROL DE EQUIPOS</option>
                                <option value="TECNICO DE SUELOS">TECNICO DE SUELOS</option>
                                <option value="TECNICO ELECTRONICO">TECNICO ELECTRONICO</option>
                                <option value="TECNICO EN NEUMÁTICOS">TECNICO EN NEUMÁTICOS</option>
                                <option value="TECNICO LUBRICADOR">TECNICO LUBRICADOR</option>
                                <option value="TECSUP JUNIOR">TECSUP JUNIOR</option>
                                <option value="TESORERO">TESORERO</option>
                                <option value="TITULAR - ELECTRICISTA">TITULAR - ELECTRICISTA</option>
                                <option value="TITULAR - LUBRICADOR">TITULAR - LUBRICADOR</option>
                                <option value="TITULAR - MECANICO">TITULAR - MECANICO</option>
                                <option value="TITULAR - PINTOR">TITULAR - PINTOR</option>
                                <option value="TITULAR - SOLDADOR">TITULAR - SOLDADOR</option>
                                <option value="TITULAR - TECNICO DE LLANTAS">TITULAR - TECNICO DE LLANTAS</option>
                                <option value="TOPOGRAFO">TOPOGRAFO</option>
                                <option value="TORNERO">TORNERO</option>
                                <option value="VICEPRESIDENTE DE OPERACIONES">VICEPRESIDENTE DE OPERACIONES</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                            <label>Puesto que Ocupo <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="pocupo2"> -->
                            <select name="pocupo2" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="ABOGADO JUNIOR">ABOGADO JUNIOR</option>
                                <option value="ADMINISTRADOR DE BASE DE DATOS">ADMINISTRADOR DE BASE DE DATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE CONTRATOS">ADMINISTRADOR DE CONTRATOS</option>
                                
                                
                                <option value="ADMINISTRADOR DE OBRA">ADMINISTRADOR DE OBRA</option>
                                
                                
                                <option value="ADMINISTRADOR MAESTRO DE ARTICULOS">ADMINISTRADOR MAESTRO DE ARTICULOS</option>
                                
                                
                                <option value="AFILADOR DE BROCAS">AFILADOR DE BROCAS</option>
                                
                                
                                <option value="ALMACENERO - POLVORIN">ALMACENERO - POLVORIN</option>
                                
                                
                                <option value="ANALISTA CONTABLE">ANALISTA CONTABLE</option>
                                
                                
                                <option value="ANALISTA DE ACTIVOS FIJOS">ANALISTA DE ACTIVOS FIJOS</option>
                                
                                
                                <option value="ANALISTA DE OFICINA TECNICA">ANALISTA DE OFICINA TECNICA</option>
                                
                                
                                <option value="ANALISTA DE PLANEAMIENTO">ANALISTA DE PLANEAMIENTO</option>
                                
                                
                                <option value="ANALISTA DE PRESUPUESTOS">ANALISTA DE PRESUPUESTOS</option>
                                
                                
                                <option value="ANALISTA DE SELECCION Y DESARROLLO">ANALISTA DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ANALISTA DE TESORERIA">ANALISTA DE TESORERIA</option>
                                
                                
                                <option value="ANALISTA DEL RESULTADO OPERATIVO">ANALISTA DEL RESULTADO OPERATIVO</option>
                                
                                
                                <option value="ANALISTA ORGANIZACION Y METODOS">ANALISTA ORGANIZACION Y METODOS</option>
                                
                                
                                <option value="ANALISTA PROGRAMADOR">ANALISTA PROGRAMADOR</option>
                                
                                
                                <option value="ARMADOR-METAL MECANICA">ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL</option>
                                
                                
                                <option value="ASISTENTE  DE  PERSONAL">ASISTENTE  DE  PERSONAL</option>
                                
                                
                                <option value="ASISTENTE  DE RECURSOS HUMANOS">ASISTENTE  DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE ADMINISTRATIVA">ASISTENTE ADMINISTRATIVA</option>
                                
                                
                                <option value="ASISTENTE CONTABLE">ASISTENTE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE ADMINISTRACION">ASISTENTE DE ADMINISTRACION</option>
                                
                                
                                <option value="ASISTENTE DE ALMACEN">ASISTENTE DE ALMACEN</option>
                                
                                
                                <option value="ASISTENTE DE ARCHIVO">ASISTENTE DE ARCHIVO</option>
                                
                                
                                <option value="ASISTENTE DE CALIDAD">ASISTENTE DE CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE COMPENSACIÓN Y BENEFICIOS">ASISTENTE DE COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="ASISTENTE DE COMUNICACIONES">ASISTENTE DE COMUNICACIONES</option>
                                
                                
                                <option value="ASISTENTE DE CONTABLE">ASISTENTE DE CONTABLE</option>
                                
                                
                                <option value="ASISTENTE DE CONTROL DE PROYECTOS">ASISTENTE DE CONTROL DE PROYECTOS</option>
                                
                                
                                <option value="ASISTENTE DE ENTRENAMIENTO">ASISTENTE DE ENTRENAMIENTO</option>
                                
                                
                                <option value="ASISTENTE DE GESTION DE LA CALIDAD">ASISTENTE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="ASISTENTE DE LABORATORIO">ASISTENTE DE LABORATORIO</option>
                                
                                
                                <option value="ASISTENTE DE MANTENIMIENTO PREVENTIVO">ASISTENTE DE MANTENIMIENTO PREVENTIVO</option>
                                
                                
                                <option value="ASISTENTE DE MEDIO AMBIENTE">ASISTENTE DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="ASISTENTE DE PAVIMENTOS">ASISTENTE DE PAVIMENTOS</option>
                                
                                
                                <option value="ASISTENTE DE PERSONAL">ASISTENTE DE PERSONAL</option>
                                
                                
                                <option value="ASISTENTE DE PLANILLAS">ASISTENTE DE PLANILLAS</option>
                                
                                
                                <option value="ASISTENTE DE PRESUPUESTO">ASISTENTE DE PRESUPUESTO</option>
                                
                                
                                <option value="ASISTENTE DE RECURSOS HUMANOS">ASISTENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="ASISTENTE DE REMUNERACIONES">ASISTENTE DE REMUNERACIONES</option>
                                
                                
                                <option value="ASISTENTE DE SEGURIDAD">ASISTENTE DE SEGURIDAD</option>
                                
                                
                                <option value="ASISTENTE DE SELECCION Y DESARROLLO">ASISTENTE DE SELECCION Y DESARROLLO</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO HARDWARE">ASISTENTE DE SOPORTE TECNICO HARDWARE</option>
                                
                                
                                <option value="ASISTENTE DE SOPORTE TECNICO SOFTWARE">ASISTENTE DE SOPORTE TECNICO SOFTWARE</option>
                                
                                
                                <option value="ASISTENTE DE TESORERIA">ASISTENTE DE TESORERIA</option>
                                
                                
                                <option value="ASISTENTE DE TOPOGRAFIA">ASISTENTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="ASISTENTE EJECUTIVA">ASISTENTE EJECUTIVA</option>
                                
                                
                                <option value="ASISTENTE LEGAL">ASISTENTE LEGAL</option>
                                
                                
                                <option value="ASISTENTE SOCIAL JUNIOR">ASISTENTE SOCIAL JUNIOR</option>
                                
                                
                                <option value="ASISTENTE TECNICO">ASISTENTE TECNICO</option>
                                
                                
                                <option value="AUXILIAR">AUXILIAR</option>
                                
                                
                                <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                                
                                
                                <option value="AUXILIAR DE  CAMPO">AUXILIAR DE  CAMPO</option>
                                
                                
                                <option value="AUXILIAR DE ADMINISTRACION">AUXILIAR DE ADMINISTRACION</option>
                                
                                
                                <option value="AUXILIAR DE ALMACEN">AUXILIAR DE ALMACEN</option>
                                
                                
                                <option value="AUXILIAR DE CAMPO -A">AUXILIAR DE CAMPO -A</option>
                                
                                
                                <option value="AUXILIAR DE CONTABILIDAD">AUXILIAR DE CONTABILIDAD</option>
                                <option value="AUXILIAR DE EQUIPOS">AUXILIAR DE EQUIPOS</option>
                                
                                
                                <option value="AUXILIAR DE LABORATORIO">AUXILIAR DE LABORATORIO</option>
                                
                                
                                <option value="AUXILIAR DE LIMPIEZA">AUXILIAR DE LIMPIEZA</option>
                                
                                
                                <option value="AUXILIAR DE OPERACIONES">AUXILIAR DE OPERACIONES</option>
                                
                                
                                <option value="AUXILIAR DE SEGURIDAD">AUXILIAR DE SEGURIDAD</option>
                                
                                
                                <option value="AUXILIAR DE TOPOGRAFIA">AUXILIAR DE TOPOGRAFIA</option>
                                
                                
                                <option value="AUXILIAR METRADOS Y VALORIZACIONES">AUXILIAR METRADOS Y VALORIZACIONES</option>
                                
                                
                                <option value="AYUDANTE">AYUDANTE</option>
                                
                                
                                <option value="AYUDANTE - ELECTRICISTA">AYUDANTE - ELECTRICISTA</option>
                                
                                
                                <option value="AYUDANTE - LUBRICADOR">AYUDANTE - LUBRICADOR</option>
                                
                                
                                <option value="AYUDANTE - MECANICO">AYUDANTE - MECANICO</option>
                                
                                
                                <option value="AYUDANTE - PINTOR">AYUDANTE - PINTOR</option>
                                
                                
                                <option value="AYUDANTE - SOLDADOR">AYUDANTE - SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE - TECNICO DE LLANTAS">AYUDANTE - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="AYUDANTE DE ALMACEN">AYUDANTE DE ALMACEN</option>
                                
                                
                                <option value="AYUDANTE DE CAMPO">AYUDANTE DE CAMPO</option>
                                
                                
                                <option value="AYUDANTE DE CHANCADORA">AYUDANTE DE CHANCADORA</option>
                                
                                
                                <option value="AYUDANTE DE DIAMANTINA">AYUDANTE DE DIAMANTINA</option>
                                
                                
                                <option value="AYUDANTE DE MAQUINARIA ALIVA">AYUDANTE DE MAQUINARIA ALIVA</option>
                                
                                
                                <option value="AYUDANTE DE MECANICO -A">AYUDANTE DE MECANICO -A</option>
                                
                                
                                <option value="AYUDANTE DE TOPOGRAFIA">AYUDANTE DE TOPOGRAFIA</option>
                                
                                
                                <option value="AYUDANTE DE VOLADURA">AYUDANTE DE VOLADURA</option>
                                
                                
                                <option value="AYUDANTE GEOLOGO">AYUDANTE GEOLOGO</option>
                                
                                
                                <option value="AYUDANTE -III3">AYUDANTE -III3</option>
                                
                                
                                <option value="AYUDANTE MECANICO -B">AYUDANTE MECANICO -B</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA">AYUDANTE PERFORISTA</option>
                                
                                
                                <option value="AYUDANTE PERFORISTA -B">AYUDANTE PERFORISTA -B</option>
                                
                                
                                <option value="AYUDANTE SOLDADOR">AYUDANTE SOLDADOR</option>
                                
                                
                                <option value="AYUDANTE-METAL MECANICA">AYUDANTE-METAL MECANICA</option>
                                
                                
                                <option value="BODEGUERO">BODEGUERO</option>
                                
                                
                                <option value="CADISTA">CADISTA</option>
                                
                                
                                <option value="CAJERO CENTRAL">CAJERO CENTRAL</option>
                                
                                
                                <option value="CAPATAZ  DE  VOLADURA">CAPATAZ  DE  VOLADURA</option>
                                
                                
                                <option value="CAPATAZ  DE CAMPO">CAPATAZ  DE CAMPO</option>
                                
                                
                                <option value="CAPATAZ  DE OBRA">CAPATAZ  DE OBRA</option>
                                
                                
                                <option value="CAPATAZ DE CAMPO-METAL MECANICA">CAPATAZ DE CAMPO-METAL MECANICA</option>
                                
                                
                                <option value="CAPATAZ DE CHANCADORA">CAPATAZ DE CHANCADORA</option>
                                
                                
                                <option value="CAPATAZ DE EXCAVACIONES">CAPATAZ DE EXCAVACIONES</option>
                                
                                
                                <option value="CAPATAZ DE PLANTA">CAPATAZ DE PLANTA</option>
                                
                                
                                <option value="CAPATAZ OBRA DE ARTE">CAPATAZ OBRA DE ARTE</option>
                                
                                
                                <option value="CARPINTERO">CARPINTERO</option>
                                
                                
                                <option value="CARRERO">CARRERO</option>
                                
                                
                                <option value="CARRETERO">CARRETERO</option>
                                
                                
                                <option value="CHOFER">CHOFER</option>
                                
                                
                                <option value="CHOFER - CAMIONETA">CHOFER - CAMIONETA</option>
                                
                                
                                <option value="CHOFER - COMPRADOR">CHOFER - COMPRADOR</option>
                                
                                
                                <option value="CHOFER -A">CHOFER -A</option>
                                
                                
                                <option value="CHOFER -B">CHOFER -B</option>
                                
                                
                                <option value="CHOFER C">CHOFER C</option>
                                
                                
                                <option value="CHOFER CAMION FABRICA">CHOFER CAMION FABRICA</option>
                                
                                
                                <option value="CHOFER DE  SEMI TRAYLER">CHOFER DE  SEMI TRAYLER</option>
                                
                                
                                <option value="CHOFER DE  VOLQUETE">CHOFER DE  VOLQUETE</option>
                                
                                
                                <option value="CHOFER DE CAMION">CHOFER DE CAMION</option>
                                
                                
                                <option value="CHOFER DE CAMION HIAB">CHOFER DE CAMION HIAB</option>
                                
                                
                                <option value="CHOFER DE VOLQUETE FM12">CHOFER DE VOLQUETE FM12</option>
                                
                                
                                <option value="CHOFER UNIMOQTV-12-METAL MECANICA">CHOFER UNIMOQTV-12-METAL MECANICA</option>
                                
                                
                                <option value="CHOFER-CAMION WABCO 35TM">CHOFER-CAMION WABCO 35TM</option>
                                
                                
                                <option value="CHOFER-CAMIONETA">CHOFER-CAMIONETA</option>
                                
                                
                                <option value="CHOFER-CISTERNA">CHOFER-CISTERNA</option>
                                
                                
                                <option value="CHOFER-VOLQUETE L-12 20 TM">CHOFER-VOLQUETE L-12 20 TM</option>
                                
                                
                                <option value="CONSULTOR CORPORATIVO">CONSULTOR CORPORATIVO</option>
                                
                                
                                <option value="CONTADOR DE CONTROL INTERNO">CONTADOR DE CONTROL INTERNO</option>
                                
                                
                                <option value="CONTRALOR CONTABLE Y TRIBUTARIO">CONTRALOR CONTABLE Y TRIBUTARIO</option>
                                
                                
                                <option value="CONTROL DE CALIDAD-SISTEMA DE TRITURACION">CONTROL DE CALIDAD-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="CONTROLADOR">CONTROLADOR</option>
                                
                                
                                <option value="CONTROLADOR DE EQUIPOS">CONTROLADOR DE EQUIPOS</option>
                                
                                
                                <option value="COORDINADOR COMPENSACIÓN Y BENEFICIOS">COORDINADOR COMPENSACIÓN Y BENEFICIOS</option>
                                
                                
                                <option value="COORDINADOR DE ADMINISTRACION DE OBRA">COORDINADOR DE ADMINISTRACION DE OBRA</option>
                                
                                
                                <option value="COORDINADOR DE EQUIPOS EN OBRA">COORDINADOR DE EQUIPOS EN OBRA</option>
                                
                                
                                <option value="COORDINADOR DE RELACIONES LABORALES">COORDINADOR DE RELACIONES LABORALES</option>
                                
                                
                                <option value="COORDINADOR DE TOPOGRAFIA">COORDINADOR DE TOPOGRAFIA</option>
                                
                                
                                <option value="COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO">COORDINADOR DE VALORIZACIONES Y PLANEAMIENTO</option>
                                
                                
                                <option value="COORDINADORA ADMINISTRACIÓN DE PERSONAL">COORDINADORA ADMINISTRACIÓN DE PERSONAL</option>
                                
                                
                                <option value="DIBUJANTE">DIBUJANTE</option>
                                
                                
                                <option value="DIRECTOR">DIRECTOR</option>
                                
                                
                                <option value="ENCARGADO DE CONTROL DE COSTOS">ENCARGADO DE CONTROL DE COSTOS</option>
                                
                                
                                <option value="GERENTE">GERENTE</option>
                                
                                
                                <option value="GERENTE COMERCIAL">GERENTE COMERCIAL</option>
                                
                                
                                <option value="GERENTE DE ADM. Y FINANZAS">GERENTE DE ADM. Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE ADMINISTRACION Y FINANZAS">GERENTE DE ADMINISTRACION Y FINANZAS</option>
                                
                                
                                <option value="GERENTE DE IMAGEN INSTITUCIONAL">GERENTE DE IMAGEN INSTITUCIONAL</option>
                                
                                
                                <option value="GERENTE DE OPERACIONES">GERENTE DE OPERACIONES</option>
                                
                                
                                <option value="GERENTE DE PROYECTO">GERENTE DE PROYECTO</option>
                                
                                
                                <option value="GERENTE DE PROYECTOS DE OBRAS CIVILES">GERENTE DE PROYECTOS DE OBRAS CIVILES</option>
                                
                                
                                <option value="GERENTE DE RECURSOS HUMANOS">GERENTE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="GERENTE DE UNIDAD DE NEGOCIOS">GERENTE DE UNIDAD DE NEGOCIOS</option>
                                
                                
                                <option value="GERENTE DEL AREA DE EQUIPOS">GERENTE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="GERENTE GENERAL">GERENTE GENERAL</option>
                                
                                
                                <option value="GERENTE TECNICO">GERENTE TECNICO</option>
                                
                                
                                <option value="GUARDIAN">GUARDIAN</option>
                                
                                
                                <option value="ING. AMBIENTAL">ING. AMBIENTAL</option>
                                
                                
                                <option value="ING. CIVIL">ING. CIVIL</option>
                                
                                
                                <option value="ING. CIVIL JUNIOR">ING. CIVIL JUNIOR</option>
                                
                                
                                <option value="ING. CONSULTOR DE SIST. INFORMATICOS">ING. CONSULTOR DE SIST. INFORMATICOS</option>
                                
                                
                                <option value="ING. DE MINAS JUNIOR">ING. DE MINAS JUNIOR</option>
                                
                                
                                <option value="ING. DE OBRAS DE ARTE">ING. DE OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. DE SISTEMAS JUNIOR">ING. DE SISTEMAS JUNIOR</option>
                                
                                
                                <option value="ING. GEOGRAFO JUNIOR">ING. GEOGRAFO JUNIOR</option>
                                
                                
                                <option value="ING. GEOLOGO JUNIOR">ING. GEOLOGO JUNIOR</option>
                                
                                
                                <option value="ING. MECANICO JUNIOR">ING. MECANICO JUNIOR</option>
                                
                                
                                <option value="ING. MECATRONICO JUNIOR">ING. MECATRONICO JUNIOR</option>
                                
                                
                                <option value="ING. MINAS JUNIOR - SEGURIDAD">ING. MINAS JUNIOR - SEGURIDAD</option>
                                
                                
                                <option value="ING. OBRAS DE ARTE">ING. OBRAS DE ARTE</option>
                                
                                
                                <option value="ING. PROGRAMACION Y COSTOS">ING. PROGRAMACION Y COSTOS</option>
                                
                                
                                <option value="ING. SUPERINTENDENTE">ING. SUPERINTENDENTE</option>
                                
                                
                                <option value="INGENIERO ASISTENTE">INGENIERO ASISTENTE</option>
                                
                                
                                <option value="INGENIERO DE PLANEAMIENTO">INGENIERO DE PLANEAMIENTO</option>
                                
                                
                                <option value="INGENIERO DE PRODUCTIVIDAD">INGENIERO DE PRODUCTIVIDAD</option>
                                
                                
                                <option value="INSPECTOR DE CALIDAD">INSPECTOR DE CALIDAD</option>
                                
                                
                                <option value="INSTRUCTOR">INSTRUCTOR</option>
                                
                                
                                <option value="INSTRUCTOR DE EQUIPO PESADO">INSTRUCTOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD">JEFE CONTROL Y ASEGURAMIENTO DE CALIDAD</option>
                                
                                
                                <option value="JEFE DE ALMACEN">JEFE DE ALMACEN</option>
                                
                                
                                <option value="JEFE DE BIENESTAR SOCIAL">JEFE DE BIENESTAR SOCIAL</option>
                                
                                
                                <option value="JEFE DE CAMPO">JEFE DE CAMPO</option>
                                
                                
                                <option value="JEFE DE CARGUIO Y TRANSPORTE">JEFE DE CARGUIO Y TRANSPORTE</option>
                                
                                
                                <option value="JEFE DE CONTROL DE PROYECTO">JEFE DE CONTROL DE PROYECTO</option>
                                
                                
                                <option value="JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA">JEFE DE CONTROL DE R.O. Y FLUJO DE CAJA</option>
                                
                                
                                <option value="JEFE DE EQUIPOS">JEFE DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DE EQUIPOS DE OBRA">JEFE DE EQUIPOS DE OBRA</option>
                                
                                
                                <option value="JEFE DE EXPLORACIONES">JEFE DE EXPLORACIONES</option>
                                
                                
                                <option value="JEFE DE FINANZAS">JEFE DE FINANZAS</option>
                                
                                
                                <option value="JEFE DE GESTION DE LA CALIDAD">JEFE DE GESTION DE LA CALIDAD</option>
                                
                                
                                <option value="JEFE DE GRUPO DE CHANCADO">JEFE DE GRUPO DE CHANCADO</option>
                                
                                
                                <option value="JEFE DE GRUPO DE ZARANDEO">JEFE DE GRUPO DE ZARANDEO</option>
                                
                                
                                <option value="JEFE DE GUARDIA">JEFE DE GUARDIA</option>
                                
                                
                                <option value="JEFE DE LA ESCUELA DE ENTRENAMIENTO">JEFE DE LA ESCUELA DE ENTRENAMIENTO</option>
                                
                                
                                <option value="JEFE DE MANTENIMIENTO">JEFE DE MANTENIMIENTO</option>
                                
                                
                                <option value="JEFE DE MINA">JEFE DE MINA</option>
                                
                                
                                <option value="JEFE DE OBRA">JEFE DE OBRA</option>
                                
                                
                                <option value="JEFE DE OBRA - CIVIL">JEFE DE OBRA - CIVIL</option>
                                
                                
                                <option value="JEFE DE OBRA - MINA">JEFE DE OBRA - MINA</option>
                                
                                
                                <option value="JEFE DE OBRAS VIALES">JEFE DE OBRAS VIALES</option>
                                
                                
                                <option value="JEFE DE OFICINA TECNICA">JEFE DE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE DE PRESUPUESTOS">JEFE DE PRESUPUESTOS</option>
                                
                                
                                <option value="JEFE DE RECURSOS HUMANOS">JEFE DE RECURSOS HUMANOS</option>
                                
                                
                                <option value="JEFE DE RELLENOS Y PAVIMENTOS">JEFE DE RELLENOS Y PAVIMENTOS</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD DE OBRA">JEFE DE SEGURIDAD DE OBRA</option>
                                
                                
                                <option value="JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE">JEFE DE SEGURIDAD,SALUD Y MEDIO AMBIENTE</option>
                                
                                
                                <option value="JEFE DE SISTEMAS">JEFE DE SISTEMAS</option>
                                
                                
                                <option value="JEFE DE TOPOGRAFIA">JEFE DE TOPOGRAFIA</option>
                                
                                
                                <option value="JEFE DE TRABAJOS AUXILIARES">JEFE DE TRABAJOS AUXILIARES</option>
                                
                                
                                <option value="JEFE DE TUNEL">JEFE DE TUNEL</option>
                                
                                
                                <option value="JEFE DE VALORIZACIONES">JEFE DE VALORIZACIONES</option>
                                
                                
                                <option value="JEFE DE VENTAS">JEFE DE VENTAS</option>
                                
                                
                                <option value="JEFE DEL AREA DE EQUIPOS">JEFE DEL AREA DE EQUIPOS</option>
                                
                                
                                <option value="JEFE DEL AREA LEGAL">JEFE DEL AREA LEGAL</option>
                                
                                
                                <option value="JEFE DEL TALLER">JEFE DEL TALLER</option>
                                
                                
                                <option value="JEFE MANTENIMIENTO EN CAMPO">JEFE MANTENIMIENTO EN CAMPO</option>
                                
                                
                                <option value="JEFE OFICINA TECNICA">JEFE OFICINA TECNICA</option>
                                
                                
                                <option value="JEFE PLANTAS DE AGREGADOS">JEFE PLANTAS DE AGREGADOS</option>
                                
                                
                                <option value="JEFE PROYECTOS CIVILES">JEFE PROYECTOS CIVILES</option>
                                
                                
                                <option value="JEFE SOPORTE TECNICO Y COMUNICACIONES">JEFE SOPORTE TECNICO Y COMUNICACIONES</option>
                                
                                
                                <option value="LABORATORISTA">LABORATORISTA</option>
                                
                                
                                <option value="LLANTERO -A">LLANTERO -A</option>
                                
                                
                                <option value="MAESTRO">MAESTRO</option>
                                
                                
                                <option value="MAESTRO - ELECTRICISTA">MAESTRO - ELECTRICISTA</option>
                                
                                
                                <option value="MAESTRO - LUBRICADOR">MAESTRO - LUBRICADOR</option>
                                
                                
                                <option value="MAESTRO - MECANICO">MAESTRO - MECANICO</option>
                                
                                
                                <option value="MAESTRO - SOLDADOR">MAESTRO - SOLDADOR</option>
                                
                                
                                <option value="MAESTRO - TECNICO DE LLANTAS">MAESTRO - TECNICO DE LLANTAS</option>
                                
                                
                                <option value="MAESTRO MINERO">MAESTRO MINERO</option>
                                
                                
                                <option value="MEDICO">MEDICO</option>
                                
                                
                                <option value="MUESTRERO">MUESTRERO</option>
                                
                                
                                <option value="NIVELADOR">NIVELADOR</option>
                                
                                
                                <option value="NIVELADOR DE MOVIMIENTO DE TIERRAS">NIVELADOR DE MOVIMIENTO DE TIERRAS</option>
                                
                                
                                <option value="OFICIAL ARMADOR-METAL MECANICA">OFICIAL ARMADOR-METAL MECANICA</option>
                                
                                
                                <option value="OFICIAL DE CAMPO">OFICIAL DE CAMPO</option>
                                
                                
                                <option value="OFICIAL DE MEDIO AMBIENTE">OFICIAL DE MEDIO AMBIENTE</option>
                                
                                
                                <option value="OFICIAL DE RELACIONES COMUNITARIAS">OFICIAL DE RELACIONES COMUNITARIAS</option>
                                
                                
                                <option value="OFICIAL ELECTRICISTA-METAL MECANICA">OFICIAL ELECTRICISTA-METAL MECANICA</option>
                                
                                
                                <option value="OPERADOR  DE PERFORADORA IR 320">OPERADOR  DE PERFORADORA IR 320</option>
                                
                                
                                <option value="OPERADOR - RODILLO">OPERADOR - RODILLO</option>
                                
                                
                                <option value="OPERADOR CAMIÓN FABRICA">OPERADOR CAMIÓN FABRICA</option>
                                
                                
                                <option value="OPERADOR CAMIÓN GRUA">OPERADOR CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR CARGADOR CAT 966 F">OPERADOR CARGADOR CAT 966 F</option>
                                
                                
                                <option value="OPERADOR CARGADOR FRONTAL 992 G">OPERADOR CARGADOR FRONTAL 992 G</option>
                                
                                
                                <option value="OPERADOR CAT 775 F">OPERADOR CAT 775 F</option>
                                
                                
                                <option value="OPERADOR CAT 775E">OPERADOR CAT 775E</option>
                                
                                
                                <option value="OPERADOR CAT 777">OPERADOR CAT 777</option>
                                
                                
                                <option value="OPERADOR CAT 777D">OPERADOR CAT 777D</option>
                                
                                
                                <option value="OPERADOR CAT 785 B">OPERADOR CAT 785 B</option>
                                
                                
                                <option value="OPERADOR CAT 785C">OPERADOR CAT 785C</option>
                                
                                
                                <option value="OPERADOR DE  TOPOGRAFIA.">OPERADOR DE  TOPOGRAFIA.</option>
                                
                                
                                <option value="OPERADOR DE CAMION CAT 785 C">OPERADOR DE CAMION CAT 785 C</option>
                                
                                
                                <option value="OPERADOR DE CAMIÓN GRUA">OPERADOR DE CAMIÓN GRUA</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 988H">OPERADOR DE CARGADOR FRONTAL 988H</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR FRONTAL 994F">OPERADOR DE CARGADOR FRONTAL 994F</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L120">OPERADOR DE CARGADOR L120</option>
                                
                                
                                <option value="OPERADOR DE CARGADOR L150">OPERADOR DE CARGADOR L150</option>
                                
                                
                                <option value="OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION">OPERADOR DE CHANCADORA-SISTEMA DE TRITURACION</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO  -B">OPERADOR DE EQUIPO  -B</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO -C">OPERADOR DE EQUIPO -C</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO">OPERADOR DE EQUIPO PESADO</option>
                                
                                
                                <option value="OPERADOR DE EQUIPO PESADO ESTANDAR">OPERADOR DE EQUIPO PESADO ESTANDAR</option>
                                
                                
                                <option value="OPERADOR DE MOTONIVELADORA">OPERADOR DE MOTONIVELADORA</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA D75S">OPERADOR DE PERFORADORA D75S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA DM45">OPERADOR DE PERFORADORA DM45</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA IR DM 45S">OPERADOR DE PERFORADORA IR DM 45S</option>
                                
                                
                                <option value="OPERADOR DE PERFORADORA PANTERA 1500">OPERADOR DE PERFORADORA PANTERA 1500</option>
                                
                                
                                <option value="OPERADOR DE RODILLO">OPERADOR DE RODILLO</option>
                                
                                
                                <option value="OPERADOR DE TRACTOR D9T">OPERADOR DE TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR DE VOLADURA">OPERADOR DE VOLADURA</option>
                                
                                
                                <option value="OPERADOR DE ZARANDA">OPERADOR DE ZARANDA</option>
                                
                                
                                <option value="OPERADOR O&amp;K">OPERADOR O&amp;K</option>
                                
                                
                                <option value="OPERADOR RANGER 700">OPERADOR RANGER 700</option>
                                
                                
                                <option value="OPERADOR RETROEXCAVADORA">OPERADOR RETROEXCAVADORA</option>
                                
                                
                                <option value="OPERADOR TEREX TR100">OPERADOR TEREX TR100</option>
                                
                                
                                <option value="OPERADOR TRACTOR AGRICOLA">OPERADOR TRACTOR AGRICOLA</option>
                                
                                
                                <option value="OPERADOR TRACTOR D9T">OPERADOR TRACTOR D9T</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 966F">OPERADOR-CARGADOR FRONTAL 966F</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 980G">OPERADOR-CARGADOR FRONTAL 980G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 988G">OPERADOR-CARGADOR FRONTAL 988G</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL 992">OPERADOR-CARGADOR FRONTAL 992</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330D">OPERADOR-CARGADOR FRONTAL L 330D</option>
                                
                                
                                <option value="OPERADOR-CARGADOR FRONTAL L 330E">OPERADOR-CARGADOR FRONTAL L 330E</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA">OPERADOR-EXCAVADORA</option>
                                
                                
                                <option value="OPERADOR-EXCAVADORA 320LC">OPERADOR-EXCAVADORA 320LC</option>
                                
                                
                                <option value="OPERADOR-HAULLPACK 210">OPERADOR-HAULLPACK 210</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-HAULPACK 330M">OPERADOR-HAULPACK 330M</option>
                                <option value="OPERADOR-MOTONIVELADORA GD623A">OPERADOR-MOTONIVELADORA GD623A</option>
                                <option value="OPERADOR-TRACTOR">OPERADOR-TRACTOR</option>
                                <option value="OPERADOR-TRACTOR D6">OPERADOR-TRACTOR D6</option>
                                <option value="OPERADOR-TRACTOR D8R">OPERADOR-TRACTOR D8R</option>
                                <option value="OPERARIO">OPERARIO</option>
                                <option value="OPERARIO -A">OPERARIO -A</option>
                                <option value="OPERARIO -B">OPERARIO -B</option>
                                <option value="OPERARIO-METAL MECANICA">OPERARIO-METAL MECANICA</option>
                                <option value="OPERARIO-SERV.GRALES">OPERARIO-SERV.GRALES</option>
                                <option value="OPERARIO-SISTEMA DE TRITURACION">OPERARIO-SISTEMA DE TRITURACION</option>
                                <option value="PERFORISTA">PERFORISTA</option>
                                <option value="PERFORISTA  DE DIAMANTINA">PERFORISTA  DE DIAMANTINA</option>
                                <option value="PERFORISTA  DM45E">PERFORISTA  DM45E</option>
                                <option value="PERFORISTA -A">PERFORISTA -A</option>
                                <option value="PERFORISTA -B">PERFORISTA -B</option>
                                <option value="PERFORISTA-COMPRESORA IR P750AWD">PERFORISTA-COMPRESORA IR P750AWD</option>
                                <option value="PERFORISTA-COMPRESORA IR P900AWD">PERFORISTA-COMPRESORA IR P900AWD</option>
                                <option value="PERFORISTA-TRACKDRILL">PERFORISTA-TRACKDRILL</option>
                                <option value="PINTOR">PINTOR</option>
                                <option value="PRACTICANTE">PRACTICANTE</option>
                                <option value="PROYECTISTA">PROYECTISTA</option>
                                <option value="PUNTERO">PUNTERO</option>
                                <option value="RECEPCIONISTA">RECEPCIONISTA</option>
                                <option value="SOLDADOR-METAL MECANICA">SOLDADOR-METAL MECANICA</option>
                                <option value="SUB - CONTADOR">SUB - CONTADOR</option>
                                <option value="SUPERINTENDENTE DE EQUIPOS">SUPERINTENDENTE DE EQUIPOS</option>
                                <option value="SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO">SUPERVISOR ACTIVO FIJO Y ESCUELA DE ENTRENAMIENTO</option>
                                <option value="SUPERVISOR DE CALIDAD">SUPERVISOR DE CALIDAD</option>
                                <option value="SUPERVISOR DE CAMPAMENTOS">SUPERVISOR DE CAMPAMENTOS</option>
                                <option value="SUPERVISOR DE CARGUIO Y ACARREO">SUPERVISOR DE CARGUIO Y ACARREO</option>
                                <option value="SUPERVISOR DE CHANCADORA">SUPERVISOR DE CHANCADORA</option>
                                <option value="SUPERVISOR DE EXCAVACIONES">SUPERVISOR DE EXCAVACIONES</option>
                                <option value="SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO">SUPERVISOR DE EXPLOTACION DE CANTERAS Y CHANCADO</option>
                                <option value="SUPERVISOR DE FIERRO Y ALCANTARILLAS">SUPERVISOR DE FIERRO Y ALCANTARILLAS</option>
                                <option value="SUPERVISOR DE FLOTA">SUPERVISOR DE FLOTA</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO CAMPO">SUPERVISOR DE MANTENIMIENTO CAMPO</option>
                                <option value="SUPERVISOR DE MANTENIMIENTO TALLER">SUPERVISOR DE MANTENIMIENTO TALLER</option>
                                <option value="SUPERVISOR DE OBRA">SUPERVISOR DE OBRA</option>
                                <option value="SUPERVISOR DE OBRAS DE ARTE">SUPERVISOR DE OBRAS DE ARTE</option>
                                <option value="SUPERVISOR DE OPERACIONES">SUPERVISOR DE OPERACIONES</option>
                                <option value="SUPERVISOR DE PERFORACION Y VOLADURA">SUPERVISOR DE PERFORACION Y VOLADURA</option>
                                <option value="SUPERVISOR DE PLANTA">SUPERVISOR DE PLANTA</option>
                                <option value="SUPERVISOR DE RELLENOS Y PAVIMENTOS">SUPERVISOR DE RELLENOS Y PAVIMENTOS</option>
                                <option value="SUPERVISOR DE SEGURIDAD">SUPERVISOR DE SEGURIDAD</option>
                                <option value="SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE">SUPERVISOR DE SEGURIDAD Y MEDIO AMBIENTE</option>
                                <option value="SUPERVISOR DE VOLADURA">SUPERVISOR DE VOLADURA</option>
                                <option value="SUPERVISOR MANTENIMIENTO">SUPERVISOR MANTENIMIENTO</option>
                                <option value="SUPERVISOR MOVIMIENTO DE TIERRAS">SUPERVISOR MOVIMIENTO DE TIERRAS</option>
                                <option value="SUPERVISOR PARA CONTROL DE NEUMATICOS">SUPERVISOR PARA CONTROL DE NEUMATICOS</option>
                                <option value="SUPERVISOR PLANEAMIENTO">SUPERVISOR PLANEAMIENTO</option>
                                <option value="TECNICO DE  LLANTAS">TECNICO DE  LLANTAS.</option>
                                <option value="TECNICO DE CONTROL DE CALIDAD">TECNICO DE CONTROL DE CALIDAD</option>
                                <option value="TECNICO DE CONTROL DE EQUIPOS">TECNICO DE CONTROL DE EQUIPOS</option>
                                <option value="TECNICO DE SUELOS">TECNICO DE SUELOS</option>
                                <option value="TECNICO ELECTRONICO">TECNICO ELECTRONICO</option>
                                <option value="TECNICO EN NEUMÁTICOS">TECNICO EN NEUMÁTICOS</option>
                                <option value="TECNICO LUBRICADOR">TECNICO LUBRICADOR</option>
                                <option value="TECSUP JUNIOR">TECSUP JUNIOR</option>
                                <option value="TESORERO">TESORERO</option>
                                <option value="TITULAR - ELECTRICISTA">TITULAR - ELECTRICISTA</option>
                                <option value="TITULAR - LUBRICADOR">TITULAR - LUBRICADOR</option>
                                <option value="TITULAR - MECANICO">TITULAR - MECANICO</option>
                                <option value="TITULAR - PINTOR">TITULAR - PINTOR</option>
                                <option value="TITULAR - SOLDADOR">TITULAR - SOLDADOR</option>
                                <option value="TITULAR - TECNICO DE LLANTAS">TITULAR - TECNICO DE LLANTAS</option>
                                <option value="TOPOGRAFO">TOPOGRAFO</option>
                                <option value="TORNERO">TORNERO</option>
                                <option value="VICEPRESIDENTE DE OPERACIONES">VICEPRESIDENTE DE OPERACIONES</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <p> <div style="display: inline-block;color: red;">(*)</div> 
                        Recuerde que esta información es indispensable para nuestra empresa, 
                        Por favor indique de forma detallada su experiencia laboral
                    </p>


                    <div style="margin-top: 50px">
                        <p><strong>Indique los idiomas que habla y su nivel de conocimiento de cada uno de ellos:</strong></p>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Idioma 1:</label>
                            <!-- <input type="text" name="idioma1"> -->
                            <select name="idioma1" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Chino">Chino</option>
                                <option value="Español">Español</option>
                                <option value="Frances">Frances</option>
                                <option value="Ingles">Ingles</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Nivel:</label>
                            <!-- <input type="text" name="nivel1"> -->
                            <select name="nivel1" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Basico">Basico</option>
                                <option value="Intermedio">Intermedio</option>
                                <option value="Avanzado">Avanzado</option>
                                <option value="Conversacional">Conversacional</option>
                            </select>
                        </div>

                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Idioma 2: </label>
                            <!-- <input type="text" name="idioma2"> -->
                            <select name="idioma2" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Chino">Chino</option>
                                <option value="Español">Español</option>
                                <option value="Frances">Frances</option>
                                <option value="Ingles">Ingles</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Nivel: </label>
                            <!-- <input type="text" name="nivel2"> -->
                            <select name="nivel2" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="Basico">Basico</option>
                                <option value="Intermedio">Intermedio</option>
                                <option value="Avanzado">Avanzado</option>
                                <option value="Conversacional">Conversacional</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-top: 50px">
                        <p>Disponibilidad para trabajar</p>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>a nivel nacional: <div style="display: inline-block;color: red;">(*)</div></label>
                            <!-- <input type="text" name="anacional"> -->
                            <select name="anacional" style="width:80%;">
                                <option value="">SELECCIONE</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Adjuntar currículum: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="file" name="cv">
                        </div>

                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Cree su Password: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="password" name="password" id="password" style="max-width:80%">
                        </div>
                        <!-- end form-group -->
                        <div class="form-group campos_form">
                           <label>Confirme su Password: <div style="display: inline-block;color: red;">(*)</div></label>
                            <input type="password" name="cpassword" style="max-width:80%">
                        </div>
                    </div>

                    <!-- end form-group -->
                    <div class="form-group full-width">
                	   <button type="submit">ENVIAR</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>


        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>

<!-- end gallery -->

<?php echo $this->load->view('layout/suscribe_view') ?>