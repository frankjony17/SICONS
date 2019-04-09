<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/consejo/tecnico')) {
            // proyecto_consejotecnico_listintervenciones
            if ($pathinfo === '/consejo/tecnico/intervenciones/list') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::listIntervencionesAction',  '_route' => 'proyecto_consejotecnico_listintervenciones',);
            }

            // proyecto_consejotecnico_listacuerdos
            if ($pathinfo === '/consejo/tecnico/acuerdo/list') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::listAcuerdosAction',  '_route' => 'proyecto_consejotecnico_listacuerdos',);
            }

            if (0 === strpos($pathinfo, '/consejo/tecnico/p')) {
                // proyecto_consejotecnico_listparticipantes
                if ($pathinfo === '/consejo/tecnico/participantes/list') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::listParticipantesAction',  '_route' => 'proyecto_consejotecnico_listparticipantes',);
                }

                // proyecto_consejotecnico_listconsejotecnicoproyecto
                if ($pathinfo === '/consejo/tecnico/proyecto/list') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::listConsejoTecnicoProyectoAction',  '_route' => 'proyecto_consejotecnico_listconsejotecnicoproyecto',);
                }

            }

            // proyecto_consejotecnico_listdataconsejotecnico
            if ($pathinfo === '/consejo/tecnico/get-data') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::listDataConsejoTecnicoAction',  '_route' => 'proyecto_consejotecnico_listdataconsejotecnico',);
            }

            // proyecto_consejotecnico_addconsejotecnico
            if ($pathinfo === '/consejo/tecnico/add') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::addConsejoTecnicoAction',  '_route' => 'proyecto_consejotecnico_addconsejotecnico',);
            }

            if (0 === strpos($pathinfo, '/consejo/tecnico/intervencion')) {
                // proyecto_consejotecnico_addintervencion
                if ($pathinfo === '/consejo/tecnico/intervencion/add') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::addIntervencionAction',  '_route' => 'proyecto_consejotecnico_addintervencion',);
                }

                // proyecto_consejotecnico_editintervencion
                if ($pathinfo === '/consejo/tecnico/intervencion/edit') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::editIntervencionAction',  '_route' => 'proyecto_consejotecnico_editintervencion',);
                }

                // proyecto_consejotecnico_removeintervencion
                if ($pathinfo === '/consejo/tecnico/intervencion/remove') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::removeIntervencionAction',  '_route' => 'proyecto_consejotecnico_removeintervencion',);
                }

            }

            if (0 === strpos($pathinfo, '/consejo/tecnico/acuerdo')) {
                // proyecto_consejotecnico_addacuerdo
                if ($pathinfo === '/consejo/tecnico/acuerdo/add') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::addAcuerdoAction',  '_route' => 'proyecto_consejotecnico_addacuerdo',);
                }

                // proyecto_consejotecnico_editacuerdo
                if ($pathinfo === '/consejo/tecnico/acuerdo/edit') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::editAcuerdoAction',  '_route' => 'proyecto_consejotecnico_editacuerdo',);
                }

                // proyecto_consejotecnico_removeacuerdo
                if ($pathinfo === '/consejo/tecnico/acuerdo/remove') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::removeAcuerdoAction',  '_route' => 'proyecto_consejotecnico_removeacuerdo',);
                }

            }

            if (0 === strpos($pathinfo, '/consejo/tecnico/participantes')) {
                // proyecto_consejotecnico_addparticipantes
                if ($pathinfo === '/consejo/tecnico/participantes/add') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::addParticipantesAction',  '_route' => 'proyecto_consejotecnico_addparticipantes',);
                }

                // proyecto_consejotecnico_removeparticipantes
                if ($pathinfo === '/consejo/tecnico/participantes/remove') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ConsejoTecnicoController::removeParticipantesAction',  '_route' => 'proyecto_consejotecnico_removeparticipantes',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/plan/calidad')) {
                // proyecto_plancalidad_list
                if ($pathinfo === '/plan/calidad/list') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\PlanCalidadController::listAction',  '_route' => 'proyecto_plancalidad_list',);
                }

                // proyecto_plancalidad_listplancalidadproyecto
                if ($pathinfo === '/plan/calidad/nomenclador/plan/list') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\PlanCalidadController::listPlanCalidadProyectoAction',  '_route' => 'proyecto_plancalidad_listplancalidadproyecto',);
                }

                // proyecto_plancalidad_editplancalidad
                if ($pathinfo === '/plan/calidad/edit-plan-calidad') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\PlanCalidadController::editPlanCalidadAction',  '_route' => 'proyecto_plancalidad_editplancalidad',);
                }

                // proyecto_plancalidad_addplancalidadproyecto
                if ($pathinfo === '/plan/calidad/add-plan-proyecto') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\PlanCalidadController::addPlanCalidadProyectoAction',  '_route' => 'proyecto_plancalidad_addplancalidadproyecto',);
                }

                // proyecto_plancalidad_removetareaasociacion
                if ($pathinfo === '/plan/calidad/remove-plan-asociacion') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\PlanCalidadController::removeTareaAsociacionAction',  '_route' => 'proyecto_plancalidad_removetareaasociacion',);
                }

            }

            if (0 === strpos($pathinfo, '/proyecto')) {
                if (0 === strpos($pathinfo, '/proyecto/list')) {
                    // proyecto_proyecto_list
                    if ($pathinfo === '/proyecto/list') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::listAction',  '_route' => 'proyecto_proyecto_list',);
                    }

                    // proyecto_proyecto_listequipotrabajo
                    if ($pathinfo === '/proyecto/list/equipo/trabajo') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::listEquipoTrabajoAction',  '_route' => 'proyecto_proyecto_listequipotrabajo',);
                    }

                    // proyecto_proyecto_listfile
                    if ($pathinfo === '/proyecto/list/file') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::listFileAction',  '_route' => 'proyecto_proyecto_listfile',);
                    }

                    // proyecto_proyecto_listobjeto
                    if (rtrim($pathinfo, '/') === '/proyecto/list/objetos') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'proyecto_proyecto_listobjeto');
                        }

                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::listObjetoAction',  '_route' => 'proyecto_proyecto_listobjeto',);
                    }

                    // proyecto_proyecto_listespecialidad
                    if (rtrim($pathinfo, '/') === '/proyecto/list/especialidad') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'proyecto_proyecto_listespecialidad');
                        }

                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::listEspecialidadAction',  '_route' => 'proyecto_proyecto_listespecialidad',);
                    }

                }

                // proyecto_proyecto_addedit
                if ($pathinfo === '/proyecto/add-edit') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addEditAction',  '_route' => 'proyecto_proyecto_addedit',);
                }

                // proyecto_proyecto_addeditestado
                if ($pathinfo === '/proyecto/edit-estado') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addEditEstadoAction',  '_route' => 'proyecto_proyecto_addeditestado',);
                }

                // proyecto_proyecto_tipo
                if ($pathinfo === '/proyecto/tipo') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::tipoAction',  '_route' => 'proyecto_proyecto_tipo',);
                }

                if (0 === strpos($pathinfo, '/proyecto/add')) {
                    // proyecto_proyecto_addequipotrabajo
                    if ($pathinfo === '/proyecto/add/equipo/trabajo') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addEquipoTrabajoAction',  '_route' => 'proyecto_proyecto_addequipotrabajo',);
                    }

                    // proyecto_proyecto_addeditequipotrabajo
                    if ($pathinfo === '/proyecto/add-edit/equipo/trabajo') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addEditEquipoTrabajoAction',  '_route' => 'proyecto_proyecto_addeditequipotrabajo',);
                    }

                }

                // proyecto_proyecto_uploadedfile
                if ($pathinfo === '/proyecto/uploaded/file') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::upLoadedFileAction',  '_route' => 'proyecto_proyecto_uploadedfile',);
                }

                if (0 === strpos($pathinfo, '/proyecto/add')) {
                    // proyecto_proyecto_addobjetos
                    if ($pathinfo === '/proyecto/add/objetos') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addObjetosAction',  '_route' => 'proyecto_proyecto_addobjetos',);
                    }

                    // proyecto_proyecto_addespecilidad
                    if ($pathinfo === '/proyecto/add/especialidad') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addEspecilidadAction',  '_route' => 'proyecto_proyecto_addespecilidad',);
                    }

                    // proyecto_proyecto_addseguimiento
                    if ($pathinfo === '/proyecto/add/seguimiento') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::addSeguimientoAction',  '_route' => 'proyecto_proyecto_addseguimiento',);
                    }

                }

                // proyecto_proyecto_seguimiento
                if ($pathinfo === '/proyecto/seguimiento') {
                    return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::seguimientoAction',  '_route' => 'proyecto_proyecto_seguimiento',);
                }

                if (0 === strpos($pathinfo, '/proyecto/remove')) {
                    // proyecto_proyecto_remove
                    if ($pathinfo === '/proyecto/remove/equipo/trabajo') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::removeAction',  '_route' => 'proyecto_proyecto_remove',);
                    }

                    // proyecto_proyecto_removefile
                    if ($pathinfo === '/proyecto/remove/file') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::removeFileAction',  '_route' => 'proyecto_proyecto_removefile',);
                    }

                    // proyecto_proyecto_removeobjeto
                    if ($pathinfo === '/proyecto/remove/objeto') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::removeObjetoAction',  '_route' => 'proyecto_proyecto_removeobjeto',);
                    }

                    // proyecto_proyecto_removeespecialidad
                    if ($pathinfo === '/proyecto/remove/especialidad') {
                        return array (  '_controller' => 'ProyectoBundle\\Controller\\ProyectoController::removeEspecialidadAction',  '_route' => 'proyecto_proyecto_removeespecialidad',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/revision/contrato')) {
            // proyecto_revisioncontrato_list
            if ($pathinfo === '/revision/contrato/list') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\RevisionContratoController::listAction',  '_route' => 'proyecto_revisioncontrato_list',);
            }

            // proyecto_revisioncontrato_editrevisioncontrato
            if ($pathinfo === '/revision/contrato/edit-revision-contrato') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\RevisionContratoController::editRevisionContratoAction',  '_route' => 'proyecto_revisioncontrato_editrevisioncontrato',);
            }

            // proyecto_revisioncontrato_removetareaasociacion
            if ($pathinfo === '/revision/contrato/remove-plan-asociacion') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\RevisionContratoController::removeTareaAsociacionAction',  '_route' => 'proyecto_revisioncontrato_removetareaasociacion',);
            }

        }

        if (0 === strpos($pathinfo, '/tarea/proyeccion')) {
            // proyecto_tareaproyeccion_list
            if ($pathinfo === '/tarea/proyeccion/list') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::listAction',  '_route' => 'proyecto_tareaproyeccion_list',);
            }

            // proyecto_tareaproyeccion_listtareaproyeccionproyecto
            if ($pathinfo === '/tarea/proyeccion/nomenclador/tarea/list') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::listTareaProyeccionProyectoAction',  '_route' => 'proyecto_tareaproyeccion_listtareaproyeccionproyecto',);
            }

            // proyecto_tareaproyeccion_edittareaproyeccion
            if ($pathinfo === '/tarea/proyeccion/edit-tarea-proyeccion') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::editTareaProyeccionAction',  '_route' => 'proyecto_tareaproyeccion_edittareaproyeccion',);
            }

            // proyecto_tareaproyeccion_addtareaproyeccionproyecto
            if ($pathinfo === '/tarea/proyeccion/add-tarea-proyecto') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::addTareaProyeccionProyectoAction',  '_route' => 'proyecto_tareaproyeccion_addtareaproyeccionproyecto',);
            }

            // proyecto_tareaproyeccion_removetareaasociacion
            if ($pathinfo === '/tarea/proyeccion/remove-tarea-asociacion') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::removeTareaAsociacionAction',  '_route' => 'proyecto_tareaproyeccion_removetareaasociacion',);
            }

        }

        if (0 === strpos($pathinfo, '/nomenclador')) {
            if (0 === strpos($pathinfo, '/nomenclador/aspectos_')) {
                if (0 === strpos($pathinfo, '/nomenclador/aspectos_revizar')) {
                    // nomenclador_aspectosrevizar_list
                    if ($pathinfo === '/nomenclador/aspectos_revizar/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosRevizarController::listAction',  '_route' => 'nomenclador_aspectosrevizar_list',);
                    }

                    // nomenclador_aspectosrevizar_addedit
                    if ($pathinfo === '/nomenclador/aspectos_revizar/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosRevizarController::addEditAction',  '_route' => 'nomenclador_aspectosrevizar_addedit',);
                    }

                    // nomenclador_aspectosrevizar_remove
                    if ($pathinfo === '/nomenclador/aspectos_revizar/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosRevizarController::removeAction',  '_route' => 'nomenclador_aspectosrevizar_remove',);
                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/aspectos_servicio_indicadores')) {
                    // nomenclador_aspectosservicioindicadores_list
                    if ($pathinfo === '/nomenclador/aspectos_servicio_indicadores/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosServicioIndicadoresController::listAction',  '_route' => 'nomenclador_aspectosservicioindicadores_list',);
                    }

                    // nomenclador_aspectosservicioindicadores_addedit
                    if ($pathinfo === '/nomenclador/aspectos_servicio_indicadores/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosServicioIndicadoresController::addEditAction',  '_route' => 'nomenclador_aspectosservicioindicadores_addedit',);
                    }

                    // nomenclador_aspectosservicioindicadores_remove
                    if ($pathinfo === '/nomenclador/aspectos_servicio_indicadores/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\AspectosServicioIndicadoresController::removeAction',  '_route' => 'nomenclador_aspectosservicioindicadores_remove',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/nomenclador/c')) {
                if (0 === strpos($pathinfo, '/nomenclador/cargo')) {
                    // nomenclador_cargo_list
                    if ($pathinfo === '/nomenclador/cargo/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\CargoController::listAction',  '_route' => 'nomenclador_cargo_list',);
                    }

                    // nomenclador_cargo_addedit
                    if ($pathinfo === '/nomenclador/cargo/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\CargoController::addEditAction',  '_route' => 'nomenclador_cargo_addedit',);
                    }

                    // nomenclador_cargo_remove
                    if ($pathinfo === '/nomenclador/cargo/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\CargoController::removeAction',  '_route' => 'nomenclador_cargo_remove',);
                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/con')) {
                    if (0 === strpos($pathinfo, '/nomenclador/consejo_tecnico')) {
                        // nomenclador_consejotecnico_list
                        if ($pathinfo === '/nomenclador/consejo_tecnico/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ConsejoTecnicoController::listAction',  '_route' => 'nomenclador_consejotecnico_list',);
                        }

                        // nomenclador_consejotecnico_addedit
                        if ($pathinfo === '/nomenclador/consejo_tecnico/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ConsejoTecnicoController::addEditAction',  '_route' => 'nomenclador_consejotecnico_addedit',);
                        }

                        // nomenclador_consejotecnico_remove
                        if ($pathinfo === '/nomenclador/consejo_tecnico/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ConsejoTecnicoController::removeAction',  '_route' => 'nomenclador_consejotecnico_remove',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/nomenclador/control_calidad')) {
                        // nomenclador_controlcalidad_list
                        if ($pathinfo === '/nomenclador/control_calidad/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadController::listAction',  '_route' => 'nomenclador_controlcalidad_list',);
                        }

                        // nomenclador_controlcalidad_addedit
                        if ($pathinfo === '/nomenclador/control_calidad/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadController::addEditAction',  '_route' => 'nomenclador_controlcalidad_addedit',);
                        }

                        // nomenclador_controlcalidad_remove
                        if ($pathinfo === '/nomenclador/control_calidad/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadController::removeAction',  '_route' => 'nomenclador_controlcalidad_remove',);
                        }

                        if (0 === strpos($pathinfo, '/nomenclador/control_calidad_tipo')) {
                            // nomenclador_controlcalidadtipo_list
                            if ($pathinfo === '/nomenclador/control_calidad_tipo/list') {
                                return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadTipoController::listAction',  '_route' => 'nomenclador_controlcalidadtipo_list',);
                            }

                            // nomenclador_controlcalidadtipo_addedit
                            if ($pathinfo === '/nomenclador/control_calidad_tipo/add-edit') {
                                return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadTipoController::addEditAction',  '_route' => 'nomenclador_controlcalidadtipo_addedit',);
                            }

                            // nomenclador_controlcalidadtipo_remove
                            if ($pathinfo === '/nomenclador/control_calidad_tipo/remove') {
                                return array (  '_controller' => 'NomencladorBundle\\Controller\\ControlCalidadTipoController::removeAction',  '_route' => 'nomenclador_controlcalidadtipo_remove',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/nomenclador/e')) {
                if (0 === strpos($pathinfo, '/nomenclador/elemento_control')) {
                    // nomenclador_elementocontrol_list
                    if ($pathinfo === '/nomenclador/elemento_control/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlController::listAction',  '_route' => 'nomenclador_elementocontrol_list',);
                    }

                    // nomenclador_elementocontrol_addedit
                    if ($pathinfo === '/nomenclador/elemento_control/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlController::addEditAction',  '_route' => 'nomenclador_elementocontrol_addedit',);
                    }

                    // nomenclador_elementocontrol_remove
                    if ($pathinfo === '/nomenclador/elemento_control/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlController::removeAction',  '_route' => 'nomenclador_elementocontrol_remove',);
                    }

                    if (0 === strpos($pathinfo, '/nomenclador/elemento_control_tipo')) {
                        // nomenclador_elementocontroltipo_list
                        if ($pathinfo === '/nomenclador/elemento_control_tipo/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlTipoController::listAction',  '_route' => 'nomenclador_elementocontroltipo_list',);
                        }

                        // nomenclador_elementocontroltipo_addedit
                        if ($pathinfo === '/nomenclador/elemento_control_tipo/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlTipoController::addEditAction',  '_route' => 'nomenclador_elementocontroltipo_addedit',);
                        }

                        // nomenclador_elementocontroltipo_remove
                        if ($pathinfo === '/nomenclador/elemento_control_tipo/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ElementoControlTipoController::removeAction',  '_route' => 'nomenclador_elementocontroltipo_remove',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/entidad')) {
                    // nomenclador_entidad_list
                    if ($pathinfo === '/nomenclador/entidad/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EntidadController::listAction',  '_route' => 'nomenclador_entidad_list',);
                    }

                    // nomenclador_entidad_addedit
                    if ($pathinfo === '/nomenclador/entidad/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EntidadController::addEditAction',  '_route' => 'nomenclador_entidad_addedit',);
                    }

                    // nomenclador_entidad_remove
                    if ($pathinfo === '/nomenclador/entidad/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EntidadController::removeAction',  '_route' => 'nomenclador_entidad_remove',);
                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/equipo_trabajo_especialidad')) {
                    if (0 === strpos($pathinfo, '/nomenclador/equipo_trabajo_especialidad/list')) {
                        // nomenclador_equipotrabajoespecialidad_list
                        if ($pathinfo === '/nomenclador/equipo_trabajo_especialidad/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\EquipoTrabajoEspecialidadController::listAction',  '_route' => 'nomenclador_equipotrabajoespecialidad_list',);
                        }

                        // nomenclador_equipotrabajoespecialidad_list2
                        if ($pathinfo === '/nomenclador/equipo_trabajo_especialidad/list2') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\EquipoTrabajoEspecialidadController::list2Action',  '_route' => 'nomenclador_equipotrabajoespecialidad_list2',);
                        }

                    }

                    // nomenclador_equipotrabajoespecialidad_addedit
                    if ($pathinfo === '/nomenclador/equipo_trabajo_especialidad/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EquipoTrabajoEspecialidadController::addEditAction',  '_route' => 'nomenclador_equipotrabajoespecialidad_addedit',);
                    }

                    // nomenclador_equipotrabajoespecialidad_remove
                    if ($pathinfo === '/nomenclador/equipo_trabajo_especialidad/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EquipoTrabajoEspecialidadController::removeAction',  '_route' => 'nomenclador_equipotrabajoespecialidad_remove',);
                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/escalas')) {
                    // nomenclador_escalas_list
                    if ($pathinfo === '/nomenclador/escalas/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EscalasController::listAction',  '_route' => 'nomenclador_escalas_list',);
                    }

                    // nomenclador_escalas_addedit
                    if ($pathinfo === '/nomenclador/escalas/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EscalasController::addEditAction',  '_route' => 'nomenclador_escalas_addedit',);
                    }

                    // nomenclador_escalas_remove
                    if ($pathinfo === '/nomenclador/escalas/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\EscalasController::removeAction',  '_route' => 'nomenclador_escalas_remove',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/nomenclador/formato')) {
                // nomenclador_formato_list
                if ($pathinfo === '/nomenclador/formato/list') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\FormatoController::listAction',  '_route' => 'nomenclador_formato_list',);
                }

                // nomenclador_formato_addedit
                if ($pathinfo === '/nomenclador/formato/add-edit') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\FormatoController::addEditAction',  '_route' => 'nomenclador_formato_addedit',);
                }

                // nomenclador_formato_remove
                if ($pathinfo === '/nomenclador/formato/remove') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\FormatoController::removeAction',  '_route' => 'nomenclador_formato_remove',);
                }

            }

            if (0 === strpos($pathinfo, '/nomenclador/objetos')) {
                // nomenclador_objetos_list
                if ($pathinfo === '/nomenclador/objetos/list') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\ObjetosController::listAction',  '_route' => 'nomenclador_objetos_list',);
                }

                // nomenclador_objetos_addedit
                if ($pathinfo === '/nomenclador/objetos/add-edit') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\ObjetosController::addEditAction',  '_route' => 'nomenclador_objetos_addedit',);
                }

                // nomenclador_objetos_remove
                if ($pathinfo === '/nomenclador/objetos/remove') {
                    return array (  '_controller' => 'NomencladorBundle\\Controller\\ObjetosController::removeAction',  '_route' => 'nomenclador_objetos_remove',);
                }

            }

            if (0 === strpos($pathinfo, '/nomenclador/p')) {
                if (0 === strpos($pathinfo, '/nomenclador/persona')) {
                    // nomenclador_persona_list
                    if ($pathinfo === '/nomenclador/persona/list') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaController::listAction',  '_route' => 'nomenclador_persona_list',);
                    }

                    // nomenclador_persona_addedit
                    if ($pathinfo === '/nomenclador/persona/add-edit') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaController::addEditAction',  '_route' => 'nomenclador_persona_addedit',);
                    }

                    // nomenclador_persona_remove
                    if ($pathinfo === '/nomenclador/persona/remove') {
                        return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaController::removeAction',  '_route' => 'nomenclador_persona_remove',);
                    }

                    if (0 === strpos($pathinfo, '/nomenclador/persona_tipo')) {
                        // nomenclador_personatipo_list
                        if ($pathinfo === '/nomenclador/persona_tipo/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaTipoController::listAction',  '_route' => 'nomenclador_personatipo_list',);
                        }

                        // nomenclador_personatipo_addedit
                        if ($pathinfo === '/nomenclador/persona_tipo/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaTipoController::addEditAction',  '_route' => 'nomenclador_personatipo_addedit',);
                        }

                        // nomenclador_personatipo_remove
                        if ($pathinfo === '/nomenclador/persona_tipo/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\PersonaTipoController::removeAction',  '_route' => 'nomenclador_personatipo_remove',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/nomenclador/proyecto_')) {
                    if (0 === strpos($pathinfo, '/nomenclador/proyecto_especialidad')) {
                        // nomenclador_proyectoespecialidad_list
                        if ($pathinfo === '/nomenclador/proyecto_especialidad/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoEspecialidadController::listAction',  '_route' => 'nomenclador_proyectoespecialidad_list',);
                        }

                        // nomenclador_proyectoespecialidad_addedit
                        if ($pathinfo === '/nomenclador/proyecto_especialidad/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoEspecialidadController::addEditAction',  '_route' => 'nomenclador_proyectoespecialidad_addedit',);
                        }

                        // nomenclador_proyectoespecialidad_remove
                        if ($pathinfo === '/nomenclador/proyecto_especialidad/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoEspecialidadController::removeAction',  '_route' => 'nomenclador_proyectoespecialidad_remove',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/nomenclador/proyecto_tipo')) {
                        // nomenclador_proyectotipo_list
                        if ($pathinfo === '/nomenclador/proyecto_tipo/list') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoTipoController::listAction',  '_route' => 'nomenclador_proyectotipo_list',);
                        }

                        // nomenclador_proyectotipo_addedit
                        if ($pathinfo === '/nomenclador/proyecto_tipo/add-edit') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoTipoController::addEditAction',  '_route' => 'nomenclador_proyectotipo_addedit',);
                        }

                        // nomenclador_proyectotipo_remove
                        if ($pathinfo === '/nomenclador/proyecto_tipo/remove') {
                            return array (  '_controller' => 'NomencladorBundle\\Controller\\ProyectoTipoController::removeAction',  '_route' => 'nomenclador_proyectotipo_remove',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_admin');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => '_admin',);
            }

            // admin_admin_listrole
            if ($pathinfo === '/admin/roles/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listRoleAction',  '_route' => 'admin_admin_listrole',);
            }

            // admin_admin_listusers
            if ($pathinfo === '/admin/users/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listUsersAction',  '_route' => 'admin_admin_listusers',);
            }

            // admin_admin_listroleusers
            if ($pathinfo === '/admin/roles/list_roles_users') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listRoleUsersAction',  '_route' => 'admin_admin_listroleusers',);
            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                if (0 === strpos($pathinfo, '/admin/users/a')) {
                    // admin_admin_loadnewusers
                    if ($pathinfo === '/admin/users/add') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::loadNewUsersAction',  '_route' => 'admin_admin_loadnewusers',);
                    }

                    // admin_admin_activeusers
                    if ($pathinfo === '/admin/users/active_users') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::activeUsersAction',  '_route' => 'admin_admin_activeusers',);
                    }

                }

                // admin_admin_editusers
                if ($pathinfo === '/admin/users/edit_users') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::editUsersAction',  '_route' => 'admin_admin_editusers',);
                }

                // admin_admin_addrolesusers
                if ($pathinfo === '/admin/users/add_roles_users') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addRolesUsersAction',  '_route' => 'admin_admin_addrolesusers',);
                }

            }

        }

        // admin_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        // admin_redirect_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_redirect_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\RedirectController::indexAction',  '_route' => 'admin_redirect_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // _login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
                }

                // _security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                }

            }

            // _logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/users')) {
            // admin_users_list
            if ($pathinfo === '/admin/users/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::listAction',  '_route' => 'admin_users_list',);
            }

            // admin_users_addedit
            if ($pathinfo === '/admin/users/add-edit') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::addEditAction',  '_route' => 'admin_users_addedit',);
            }

            // admin_users_remove
            if ($pathinfo === '/admin/users/remove') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::removeAction',  '_route' => 'admin_users_remove',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
