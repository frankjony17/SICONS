
Ext.define('SCS.controller.proyecto.ViewportEquipoTrabajoController', {
    extend: 'Ext.app.Controller',

    control: {
        '#viewport-menu-tarea-proyeccion': { click: "tareaProyeccionClick" },
    },
    tareaProyeccionClick: function () {
        this.addComponent(Ext.create('SCS.view.equipotrabajo.tareaproyeccion.TareaProyeccionGrid'), 'viewport-menu-tarea-proyeccion');
    },
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