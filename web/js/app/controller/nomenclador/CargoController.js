
Ext.define('SCS.controller.nomenclador.CargoController', {
    extend: 'Ext.app.Controller',

    control: {
        /* Grid */
        'grid-cargo': {
            afterrender: "afterRenderGrid",
            celldblclick: "dblclick",
            resize: "resize"
        },
        'grid-cargo [text=Adicionar]': {
            click: "showWindows"
        },
        'grid-cargo [text=Eliminar]': {
            click: "confirmRemove"
        },
        /* Form */
        'form-cargo': {
            afterrender: "afterRenderForm"
        },
        'form-cargo [text=Salvar]': {
            click: "isValid"
        },
        'form-cargo [text=Editar]': {
            click: "isValid"
        }
    },
    /*  */
    resize: function (grid){
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight());
    },
    /*  */
    afterRenderGrid: function (grid) {
        this.grid = grid;
        this.store = grid.getStore();
    },
    /*  */
    afterRenderForm: function (win) {
        this.win = win;
        this.form = win.down('form');
    },
    /* Used in Add and Update > Is valid form? */
    isValid: function () {
        if (this.form.getForm().isValid()) {
            this.submitClick();
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    /*  */
    showWindows: function () {
        Ext.create('SCS.view.nomenclador.cargo.CargoForm', { autoShow: true, btnText: 'Salvar', title: 'Adicionar Cargo' });
    },
    /*  */
    dblclick: function (view, td, cellIndex, record, tr, rowIndex) {

        var win = Ext.create('SCS.view.nomenclador.cargo.CargoForm',{ btnText: 'Editar', title: 'Editar Cargo' }),

            form = win.down('form');

        form.loadRecord(record);

        win.show();
    },
    /*  */
    submitClick: function () {

        var me = this;

        this.form.submit({
            success: function() {
                me.success();
            },
            failure: function(form, action) {
                me.message('Error?', action.response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
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
    /*  */
    remove: function () {
        var me = this, ids = [];

        Ext.Array.each(this.grid.selModel.getSelection(), function (row) {
            ids.push(row.get('id'));
        });
        Ext.Ajax.request({
            url: '../nomenclador/cargo/remove',
            params: { ids:  Ext.encode(ids) },
            success: function(response) {
                if (response.responseText === '') {
                    me.store.load();
                } else {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    success: function () {

        this.store.reload();

        if (this.form.btnText === 'Adicionar') {
            this.form.reset();
            Ext.toast('Operación realizada exitosamente.', 'Creación OK');
        } else {
            this.win.close();
            Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
        }
    },
    /*  */
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    },
});