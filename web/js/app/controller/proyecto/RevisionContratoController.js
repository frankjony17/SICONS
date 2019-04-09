
Ext.define('SCS.controller.proyecto.RevisionContratoController', {
    extend: 'Ext.app.Controller',

    control: {
        'revision-contrato-grid': {
            edit: "editRevisionContrato",
            resize: "resize",
            afterrender: "afterrender"
        },
        '#toolbar-combobox-revision-contrato': {
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
    editRevisionContrato: function (editor, context, eOpts) {
        var me = this, record = context.record, estado = false;

        if (record.get('estado_inicial_si') === true && record.get('estado_inicial_no') === true) {
            if (record.get('estado_final_si') === true) {
                estado = false;
            } else {
                estado = true;
            }
        }
        if (record.get('estado_final_si') === true && record.get('estado_final_no') === true) {
            if (record.get('estado_inicial_si') === true) {
                estado = true;
            } else {
                estado = false;
            }
        }
        Ext.Ajax.request({
            url: '../revision/contrato/edit-revision-contrato',
            params: {
                id: record.get('id'),
                estado: estado,
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