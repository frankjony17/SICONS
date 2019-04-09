
Ext.define('SCS.controller.proyecto.PlanCalidadController', {
    extend: 'Ext.app.Controller',

    control: {
        'plan-calidad-grid': {
            edit: "editPlanCalidad",
            resize: "resize",
            afterrender: "afterrender"
        },
        '#toolbar-combobox-proyecto-plan': {
            select: "loadStore"
        }
    },
    resize: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight());
    },
    afterrender: function (grid) {
        this.grid = grid;
        this.store = grid.getStore();
    },
    loadStore: function (combo) {
        this.store.load({ params:{ proyectoId: combo.getValue() }});
    },
    /* EDIT-PLAN-CALIDAD */
    editPlanCalidad: function (editor, context, eOpts) {
        var me = this, record = context.record;
        Ext.Ajax.request({
            url: '../plan/calidad/edit-plan-calidad',
            params: {
                id: record.get('id'),
                estado: record.get('estado'),
                observacion: record.get('observacion')
            },
            success: function () {
                me.store.reload();
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    }
});