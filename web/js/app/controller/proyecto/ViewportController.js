
Ext.define('SCS.controller.proyecto.ViewportController', {
    extend: 'Ext.app.Controller',

    control: {
        '#new-proyecto-id': { click: "proyectoClick" },
        '#viewport-menu-proyecto': { click: "proyectoClick" },
        '#viewport-menu-tarea-proyeccion': { click: "tareaProyeccionClick" },
        '#viewport-menu-nomenclador-tarea-proyeccion': { click: "tareaProyeccionProyectoClick" },
        '#viewport-menu-nomenclador-plan-calidad': { click: "planCalidadProyectoClick" },
        '#viewport-menu-plan-calidad': { click: "planCalidadClick" },
        '#viewport-menu-consejo-tecnico': { click: "consejoTecnicoClick" },
        //'#queja-toolbar': { click: "quejaToolbarClick" }
    },
    proyectoClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.proyecto.ProyectoGrid'), 'proyecto');
    },
    tareaProyeccionClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.tareaproyeccion.TareaProyeccionGrid'), 'viewport-menu-tarea-proyeccion');
    },
    tareaProyeccionProyectoClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.tareaproyeccion.ProyectoTareaProyeccionGrid'), 'viewport-menu-nomenclador-tarea-proyeccion');
    },
    planCalidadProyectoClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.plancalidad.ProyectoPlanCalidadGrid'), 'viewport-menu-nomenclador-plan-calidad');
    },
    planCalidadClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.plancalidad.PlanCalidadGrid'), 'viewport-menu-plan-calidad');
    },
    consejoTecnicoClick: function () {
        this.addComponent(Ext.create('SCS.view.jefedisenno.consejotecnico.ConsejoTecnicoPanel'), 'viewport-menu-consejo-tecnico');
    },
    //entrevistaToolbarClick: function () {
    //    this.addComponent(Ext.create('VIV.view.nomenclador.trabajador_cargo.TrabajadorCargoGrid'), 'Cargo', 'fa fa-credit-card');
    //},
    //quejaToolbarClick: function () {
    //    this.addComponent(Ext.create('VIV.view.nomenclador.trabajador.TrabajadorGrid'), 'Trabajador', 'fa fa-map');
    //},
    addComponent: function (component, title, iconCls) {
        var center_panel = Ext.getCmp('center-panel-id');
        center_panel.removeAll();
        center_panel.add({
            border: true,
            iconCls: iconCls,
            items: component
        });
    }
});