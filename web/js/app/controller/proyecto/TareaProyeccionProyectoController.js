
Ext.define('SCS.controller.proyecto.TareaProyeccionProyectoController', {
    extend: 'Ext.app.Controller',

    control: {
        'proyecto-tarea-proyeccion-grid': {
            resize: "resize",
            afterrender: "afterrender"
        },
        'proyecto-tarea-proyeccion-grid [action=add-tarea-proyeccion-proyecto]': {
            click: "showWindow"
        },
        'proyecto-tarea-proyeccion-grid [action=remove]': {
            click: "confirmRemove"
        },
        /* FORM-1Edit */
        '#combobox-pagingtoolbar-tarea-proyeccion': {
            select: "loadPage"
        },
        '#window-add-tarea-proyeccion': {
            click: "tareaProyeccion"
        },
    },
    resize: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight());
    },
    afterrender: function (grid) {
        this.grid = grid;
        this.store = grid.getStore();
        this.loadStore();

    },
    loadStore: function () {
        var me = this;
        me.store.load({ params:{ start: me.startNumber(), limit: 50 }});
    },
    startNumber: function () {
        var me = this, pagingtoolbar = me.grid.down('pagingtoolbar'), start = parseInt(me.store.pageSize * (pagingtoolbar.down('[itemId=inputItem]').getValue() - 1));
        return (start > 0) ? start : 0;
    },
    loadPage: function (cmb) {
        this.store.pageSize = cmb.getValue();
        this.store.loadPage(this.store.currentPage);
    },
    /* SHOW-WINDOW */
    showWindow: function () {
        var proyectoStore = Ext.create('SCS.store.ProyectoStore');
        proyectoStore.load({ params:{ start: 0, limit: 100 }});
        var win = Ext.create('Ext.window.Window', {
            title: 'Asignar Tarea de Proyección',
            width: 670,
            modal: true,
            resizable: false,
            items: Ext.create('SCS.view.jefedisenno.tareaproyeccion.ProyectoTareaProyeccionForm', {
                proyectoStore: proyectoStore
            }),
            buttons: [{
                text: 'Asignar',
                iconCls: 'fa fa-check',
                id: 'window-add-tarea-proyeccion'
            },{
                text: 'Cancelar',
                iconCls: 'fa fa-times',
                handler: function() {
                    win.close();
                }
            }]
        });
        win.show();
    },
    /* ADD-TAREA-PROYECCION */
    tareaProyeccion: function (btn) {
        var me = this, combo = Ext.getCmp('combobox-proyecto');
        if (typeof combo.getValue() === "number") {
            Ext.Ajax.request({
                url: '../tarea/proyeccion/add-tarea-proyecto',
                params: { id: combo.getValue() },
                success: function() {
                    me.loadStore();
                    btn.up('window').close();
                    Ext.toast('Operación realizada exitosamente.', 'Operación OK');
                },
                failure: function(response){
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            });
        }
    },
    /* REMOVE-TAREA-PROYECCION-ASOCIACION */
    confirmRemove: function () {
        if (this.grid.selModel.getCount() >= 1) {
            Ext.MessageBox.confirm('Confirmación', 'Desea eliminar los registro seleccionado?', confirm, this);
        } else {
            this.message('Atención', 'Seleccione el o los registro que desea eliminar.', Ext.Msg.QUESTION);
        }
        function confirm (btn) {
            if (btn === 'yes') {
                this.remove();
            }
        }
    },
    remove: function () {
        var me = this, ids = [];
        Ext.Array.each(this.grid.selModel.getSelection(), function (row) {
            ids.push(row.get('id'));
        });
        Ext.Ajax.request({
            url: '../tarea/proyeccion/remove-tarea-asociacion',
            params: { ids:  Ext.encode(ids) },
            success: function(response) {
                if (response.responseText === '') {
                    me.loadStore();
                } else {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /**//**//**/
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    }
});