<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // proyecto_tareaproyeccion_list
            if ($pathinfo === '/proyecto/tarea/proyeccionlist') {
                return array (  '_controller' => 'ProyectoBundle\\Controller\\TareaProyeccionController::listAction',  '_route' => 'proyecto_tareaproyeccion_list',);
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
