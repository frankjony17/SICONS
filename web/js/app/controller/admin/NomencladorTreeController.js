
Ext.define('SCS.controller.admin.NomencladorTreeController', {
    extend: 'Ext.app.Controller',

    control: {
        'nomencladorTreePanel': {
            itemclick: "addComponent"
        }
    },
    /* Add Component in to CenterPanel */
    addComponent: function (view, record){
        var centerpanel = Ext.getCmp('center-panel-id');
        /* Remove component from centerpanel */
        centerpanel.removeAll();
        /* Add component in to centerpanel */
        centerpanel.add(this.getComponent(record.data.iconCls));
    },
    /* Get Component */
    getComponent: function (iconCls) {
        var component = {};
        /* Config component for add to centerpanel */
        component.closable = true;
        /* Add item tu component */
        switch (iconCls) {
            case 'tree-entidad-nomenclador':
                component.title = "Gestionar Entidad";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.entidad.EntidadGrid');
                break;
            case 'tree-cargo-nomenclador':
                component.title = "Gestionar Cargo";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.cargo.CargoGrid');
                break;
            case 'tree-persona-tipo-nomenclador':
                component.title = "Gestionar Tipo";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.persona_tipo.PersonaTipoGrid');
                break;
            case 'tree-persona-nomenclador':
                component.title = "Gestionar Persona";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.persona.PersonaGrid');
                break;
            case 'tree-elemento-control-tipo-nomenclador':
                component.title = "Gestionar Tipo de Elementos de Control";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.elemento_control_tipo.ElementoControlTipoGrid');
                break;
            case 'tree-elemento-nomenclador':
                component.title = "Gestionar Elemento de Control";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.elemento_control.ElementoControlGrid');
                break;
            case 'tree-aspectos-revizar-nomenclador':
                component.title = "Gestionar Aspectos a Revizar";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.aspectos_revizar.AspectosRevizarGrid');
                break;
            case 'tree-consejo-tecnico-nomenclador':
                component.title = "Gestionar Consejos Técnicos";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.consejo_tecnico.ConsejoTecnicoGrid');
                break;
            case 'tree-control-calidad-tipo-nomenclador':
                component.title = "Gestionar Tipo de Control de Calidad";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.control_calidad_tipo.ControlCalidadTipoGrid');
                break;
            case 'tree-control-nomenclador':
                component.title = "Gestionar Control de Calidad";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.control_calidad.ControlCalidadGrid');
                break;
            case 'tree-aspectos-servicio-indicadores-nomenclador':
                component.title = "Gestionar Aspectos (Servicio-Indicadores)";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.aspectos_servicio_indicadores.AspectosServicioIndicadoresGrid');
                break;
            case 'tree-proyecto-tipo-nomenclador':
                component.title = "Gestionar Tipo de Proyecto";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.proyecto_tipo.ProyectoTipoGrid');
                break;
            case 'tree-objetos-nomenclador':
                component.title = "Gestionar Objetos";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.objetos.ObjetosGrid');
                break;
            case 'tree-especialidades-nomenclador':
                component.title = "Gestionar Especialidades";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.proyecto_especialidad.ProyectoEspecialidadGrid');
                break;
            case 'tree-escala-nomenclador':
                component.title = "Listar Escala";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.escalas.EscalasGrid');
                break;
            case 'tree-formato-nomenclador':
                component.title = "Gestionar Formato";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.formato.FormatoGrid');
                break;
            case 'tree-especialidad-eqt-nomenclador':
                component.title = "Gestionar Equipo de Trabajo Especialidad";
                component.iconCls = iconCls;
                component.items = Ext.create('SCS.view.nomenclador.equipo_trabajo_especialidad.EquipoTrabajoEspecialidadGrid');
                break;
        }
        return component;
    }
});