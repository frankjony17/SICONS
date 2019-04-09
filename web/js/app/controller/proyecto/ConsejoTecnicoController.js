
Ext.define('SCS.controller.proyecto.ConsejoTecnicoController', {
    extend: 'Ext.app.Controller',

    control: {
        'consejo-tecnico-panel': {
            resize: "resize",
            afterrender: "afterrender"
        },
        'consejo-tecnico-intervenciones-grid': {
            edit: "editIntervencion",
            afterrender: "afterrenderIntervencionesGrid",
            actioncolumnClick: "removeIntervencion"
        },
        'consejo-tecnico-acuerdos-grid': {
            edit: "editAcuerdo",
            afterrender: "afterrenderAcuerdoGrid",
            actioncolumnClick: "removeAcuerdo"
        },
        'consejo-tecnico-participantes-grid': {
            afterrender: "afterrenderParticipanteGrid",
            actioncolumnClick: "removeParticipante"
        },
        '#toolbar-combobox-consejo-tecnico': {
            select: "consejoTecnico"
        },
        '#button-salvar-consejo-tecnico': {
            click: "isValidFormConsejoTecnico"
        },
        '#button-remove-consejo-tecnico': {
            click: "confirmRemove"
        },
        '#button-cancelar-consejo-tecnico': {
            click: "cleanComponents"
        },
        '#toolbar-combobox-consejo-tecnico-proyecto': {
            select: "proyectoCombo"
        },
        '#combobox-persona-intervencion-form': {
            select: "addIntervencion"
        },
        '#combobox-persona-participante-form': {
            select: "addParticipante"
        },
        '#button-salvar-acuerdo': {
            click: "isValidFormAcuerdo"
        }
    },
    resize: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight());
    },
    afterrender: function (panel) {
        this.panel = panel;
    },
    afterrenderAcuerdoGrid: function (grid) {
        this.storeAcuerdo = grid.store;
        this.acuerdoField = Ext.getCmp('field-acuerdo-grid');
    },
    afterrenderParticipanteGrid: function (grid) {
        this.storeParticipante = grid.store;
    },
    afterrenderIntervencionesGrid: function (grid) {
        this.storeIntervenciones = grid.store;
    },
    /* CONSEJO-TECNICO */
    proyectoCombo: function (combo) {
        this.proyectoId = combo.getValue();
        this.cleanComboBox();
        this.cleanFormConsejoTecnico();
        Ext.getCmp('button-salvar-consejo-tecnico').setDisabled(true);
        Ext.getCmp('button-remove-consejo-tecnico').setDisabled(true);
    },
    consejoTecnico: function (combo) {
        var me = this;
        me.consejoTecnicoId = combo.getValue();
        Ext.getCmp('button-salvar-consejo-tecnico').setDisabled(false);
        Ext.getCmp('button-remove-consejo-tecnico').setDisabled(false);
        Ext.Ajax.request({
            url: '../consejo/tecnico/get-data',
            params: {
                proyectoId: me.proyectoId,
                consejoTecnicoId: me.consejoTecnicoId
            },
            success: function (response) {
                if (response.responseText !== 'FALSE') {
                    var form = Ext.getCmp('form-consejo-tecnico'), data = Ext.decode(response.responseText);
                    form.down('[name=id]').setValue(data.id);
                    form.down('[name=local]').setValue(data.local);
                    form.down('[name=observacion]').setValue(data.observacion);
                    me.proyectoConsejoTecnicoId = data.id;
                    me.storeIntervenciones.load({ params:{ id: me.proyectoConsejoTecnicoId }});
                    me.storeAcuerdo.load({ params:{ id: me.proyectoConsejoTecnicoId }});
                    me.storeParticipante.load({ params:{ id: me.proyectoConsejoTecnicoId }});
                    Ext.getCmp('combobox-persona-intervencion-form').setDisabled(false);
                    Ext.getCmp('combobox-persona-participante-form').setDisabled(false);
                    Ext.getCmp('button-salvar-acuerdo').setDisabled(false);
                } else {
                    me.cleanFormConsejoTecnico();
                    me.cleanFormIntervencion();
                    me.cleanFormAcuerdo();
                    me.cleanFormParticipante();
                }
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    isValidFormConsejoTecnico: function (btn) {
        var form = btn.up('form');
        if (form.getForm().isValid() && Ext.getCmp('toolbar-combobox-consejo-tecnico').getValue()) {
            this.addConsejoTecnico(form, form.getForm().getValues());
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo.</span></b><br><br>O compruebe que ha SELECCIONADO un Consejo Técnico.', Ext.Msg.QUESTION);
        }
    },
    addConsejoTecnico: function (form, record) {
        var me = this;
        Ext.Ajax.request({
            url: '../consejo/tecnico/add',
            params: {
                id: record.id,
                local: record.local,
                observacion: record.observacion,
                proyectoId: me.proyectoId,
                consejoTecnicoId: me.consejoTecnicoId
            },
            success: function (response) {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                form.down('[name=id]').setValue(response.responseText);
                Ext.getCmp('button-remove-consejo-tecnico').setDisabled(false);
                me.proyectoConsejoTecnicoId = response.responseText;
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    confirmRemove: function (btn) {
        var form = btn.up('form');
        var me = this;
        if (form.down('[name=local]').getValue()) {
            Ext.MessageBox.confirm('Confirmación', 'Desea eliminar este Consejo Técnico?', confirm, this);
            function confirm(btn) {
                if (btn === 'yes') {
                    me.removeProyectoConsejoTecnico();
                }
            }
        } else {
            this.message('Atención?', '<b><span style="color:#4275b1;">No existe un Consejo Técnico para eliminar</span></b>.', Ext.Msg.QUESTION);
        }
    },
    removeProyectoConsejoTecnico: function () {
        var me = this;
        Ext.Ajax.request({
            url: '../consejo/tecnico/remove',
            params: { id: me.proyectoConsejoTecnicoId },
            success: function() {
                me.cleanFormConsejoTecnico();
                Ext.getCmp('button-remove-consejo-tecnico').setDisabled(true);
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* INTERVENCION */
    addIntervencion: function (combo) {
        var grid = combo.up('grid');
        var me = this;
        Ext.Ajax.request({
            url: '../consejo/tecnico/intervencion/add',
            params: {
                personaId: combo.getValue(),
                proyectoConsejoTecnicoId: me.proyectoConsejoTecnicoId
            },
            success: function () {
                grid.store.load({ params:{ id: me.proyectoConsejoTecnicoId }});
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    editIntervencion: function (editor, context, eOpts) {
        var me = this, record = context.record;
        Ext.Ajax.request({
            url: '../consejo/tecnico/intervencion/edit',
            params: {
                id: record.get('id'),
                planteamiento: record.get('planteamiento')
            },
            success: function () {
                context.grid.store.load({ params:{ id: me.proyectoConsejoTecnicoId }});
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeIntervencion: function (value) {
        var me = this, grid = value[0], rec = grid.getStore().getAt(value[1]);
        Ext.Ajax.request({
            url: '../consejo/tecnico/intervencion/remove',
            params: { id:  rec.data.id },
            success: function() {
                me.storeIntervenciones.reload();
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* ACUERDO */
    isValidFormAcuerdo: function (btn) {
        if (this.acuerdoField.getValue()) {
            this.addAcuerdo();
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    addAcuerdo: function () {
        var me = this;
        Ext.Ajax.request({
            url: '../consejo/tecnico/acuerdo/add',
            params: {
                acuerdo: me.acuerdoField.getValue(),
                proyectoConsejoTecnicoId: me.proyectoConsejoTecnicoId
            },
            success: function () {
                me.acuerdoField.setValue();
                me.storeAcuerdo.load({ params:{ id: me.proyectoConsejoTecnicoId }});
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    editAcuerdo: function (editor, context, eOpts) {
        var me = this, record = context.record;
        Ext.Ajax.request({
            url: '../consejo/tecnico/acuerdo/edit',
            params: {
                id: record.get('id'),
                acuerdo: record.get('acuerdo')
            },
            success: function () {
                context.grid.store.load({ params:{ id: me.proyectoConsejoTecnicoId }});
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeAcuerdo: function (value) {
        var me = this, grid = value[0], rec = grid.getStore().getAt(value[1]);
        Ext.Ajax.request({
            url: '../consejo/tecnico/acuerdo/remove',
            params: { id:  rec.data.id },
            success: function() {
                me.storeAcuerdo.reload();
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* PARTICIPANTES */
    addParticipante: function (combo) {
        var me = this, grid = combo.up('grid');
        Ext.Ajax.request({
            url: '../consejo/tecnico/participantes/add',
            params: {
                personaId: combo.getValue(),
                proyectoConsejoTecnicoId: me.proyectoConsejoTecnicoId
            },
            success: function () {
                grid.store.load({ params:{ id: me.proyectoConsejoTecnicoId }});
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeParticipante: function (value) {
        var me = this, grid = value[0], rec = grid.getStore().getAt(value[1]);
        Ext.Ajax.request({
            url: '../consejo/tecnico/participantes/remove',
            params: {
                persona_id:  rec.data.persona_id,
                proyecto_consejo_tecnico_id:  rec.data.proyecto_consejo_tecnico_id
            },
            success: function() {
                me.storeParticipante.reload();
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* LIMPIAR-TODOS-LOS-COMPONENTES-DEL-PANEL */
    cleanComponents: function () {
        this.cleanComboBox();
        /* Form */
        this.cleanFormConsejoTecnico();
    },
    cleanComboBox: function () {
        Ext.getCmp('toolbar-combobox-consejo-tecnico').setValue();
        Ext.getCmp('toolbar-combobox-consejo-tecnico').setDisabled(false);
        this.cleanFormIntervencion();
        this.cleanFormAcuerdo();
        this.cleanFormParticipante();
    },
    cleanFormConsejoTecnico: function () {
        var form = Ext.getCmp('form-consejo-tecnico');
        form.down('[name=id]').setValue();
        form.down('[name=local]').setValue();
        form.down('[name=observacion]').setValue();
    },
    cleanFormIntervencion: function () {
        Ext.getCmp('combobox-persona-intervencion-form').setDisabled(true);
        this.storeIntervenciones.load();
    },
    cleanFormAcuerdo: function () {
        Ext.getCmp('button-salvar-acuerdo').setDisabled(true);
        this.storeAcuerdo.load();
    },
    cleanFormParticipante: function () {
        Ext.getCmp('combobox-persona-participante-form').setDisabled(true);
        this.storeParticipante.load();
    },
    /* SHOW MESSAGE */
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    }
});