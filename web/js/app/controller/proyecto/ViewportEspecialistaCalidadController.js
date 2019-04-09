
Ext.define('SCS.controller.proyecto.ViewportEspecialistaCalidadController', {
    extend: 'Ext.app.Controller',

    control: {
        '#viewport-menu-revision-contrato': { click: "revisionContratoClick" },
    },
    revisionContratoClick: function () {
        this.addComponent(Ext.create('SCS.view.especialistacalidad.revisioncontrato.RevisionContratoGrid'), 'viewport-menu-revision-contrato');
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