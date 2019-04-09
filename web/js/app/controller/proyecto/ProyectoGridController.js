
Ext.define('SCS.controller.proyecto.ProyectoGridController', {
    extend: 'Ext.app.Controller',

    control: {
        'grid-proyecto': {
            resize: "resize",
            afterrender: "afterrender",
            itemcontextmenu: "itemcontextmenu"
        },
        /* FORM-1Edit */
        '#combobox-pagingtoolbar': {
            select: "loadPage"
        },
        '#combobox-tipo-proyecto': {
            select: "tipoProyecto"
        },
        'form-proyecto-1Edit [text=Editar]': {
            click: "isValidProyectoForm"
        },
        '#combobox-proyecto-tipo-form-1Edit': {
            select: function (combo) { this.proyectoTipoId = combo.getValue(); }
        },
        /* FORM-2Edit */
        'form-proyecto-2Edit': {
            close: "cleanData",
            afterrender: "afterRenderForm",
            actioncolumnClick: "removeRowGridForm"
        },
        'form-proyecto-2Edit combobox[fieldLabel=Tipo de Persona]': {
            select: "filterStorePersona"
        },
        'form-proyecto-2Edit combobox[fieldLabel=Persona]': {
            select: "addPersonaGrid"
        },
        'form-proyecto-2Edit [xtype=grid]': {
            itemcontextmenu: "itemContextMenuForm2Grid"
        },
        'responsabilidad-formEdit [text=Salvar]': {
            click: "addEditResponsabilidad1"
        },
        'form-proyecto-2Edit [text=Editar]': {
            click: "isValidEquipoTrabajo"
        },
        /* FORM-3Edit */
        'form-proyecto-3Edit': {
            close: "cleanData3",
            actioncolumnClick: "removeRowGridForm3"
        },
        'form-proyecto-3Edit [text=Subir]': {
            click: "isValidFormUpload"
        },
        /* FORM-4Edit */
        'form-proyecto-4Edit': {
            close: "cleanDataObjeto",
            afterrender: "afterRenderObjetoForm",
            actioncolumnClick: "removeRowGridObjetoForm"
        },
        'form-proyecto-4Edit combobox[fieldLabel=Objetos]': {
            select: "addObjetoGrid"
        },
        'form-proyecto-4Edit [text=Editar]': {
            click: "isValidObjetoForm"
        },
        /* FORM-5Edit */
        'form-proyecto-5Edit': {
            close: "cleanDataEspecialidad",
            afterrender: "afterRenderEspecialidadForm",
            actioncolumnClick: "removeRowGridEspecialidadForm"
        },
        'form-proyecto-5Edit combobox[fieldLabel=Especialidad]': {
            select: "addEspecialidadGrid"
        },
        'form-proyecto-5Edit [text=Editar]': {
            click: "isValidEspecialidadForm"
        },
    },
    resize: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight());
    },
    afterrender: function (grid) {
        this.grid = grid;
        this.store = grid.getStore();
        this.storeEquipoTrabajo = Ext.create('SCS.store.EquipoTrabajoStore');
        this.storeFichero = Ext.create('SCS.store.FicheroStore');
        this.storeProyectoObjeto = Ext.create('SCS.store.ProyectoObjetoStore');
        this.storeProyectoEspecialidad = Ext.create('SCS.store.ProyectoEspecialidadProyectoStore');
        this.loadStore();

    },
    loadStore: function () {
        var me = this;
        me.store.load({ params:{ start: me.startNumber(), limit: 15 }});
    },
    startNumber: function () {
        var me = this, pagingtoolbar = me.grid.down('pagingtoolbar'), start = parseInt(me.store.pageSize * (pagingtoolbar.down('[itemId=inputItem]').getValue() - 1));
        return (start > 0) ? start : 0;
    },
    loadPage: function (cmb) {
        this.store.pageSize = cmb.getValue();
        this.store.loadPage(this.store.currentPage);
    },
    /* SSUUPPEERR MENU-MENU-MENU-MENU */
    itemcontextmenu: function (view, record, item, index, e) {
        this.storeEquipoTrabajo.load({params:{id:record.get('id')}});
        this.storeFichero.load({params:{id:record.get('id')}});
        this.storeProyectoObjeto.load({params:{id:record.get('id')}});
        this.storeProyectoEspecialidad.load({params:{id:record.get('id')}});
        this.record = record; this.proyectoTipoId = record.get('proyecto_tipo_id');
        if (record.get('estado') === false) {
            var estado = 'Final <b>(Terminado -> OK)</b>',
                handler = 'me.estadoFinal',
                estadoIcon = 'estado-ok';
        } else {
            estado = 'Pendiente <b>(En proceso)</b>',
            handler = 'me.estadoPendiente',
            estadoIcon = 'estado-pendiente';
        }
        var me = this;
        me.menu = Ext.create('Ext.menu.Menu', {
            width: 300,
            closeAction: 'destroy',
            style: { overflow: 'visible' },
            items: [{
                text: 'Adicionar/Editar',
                iconCls: 'add-edit',
                menu: [{
                    text: 'Proyecto',
                    iconCls: 'edit-proyecto',
                    scope: me,
                    handler: me.editarProyecto
                },{
                    text: 'Equipo de Trabajo',
                    iconCls: 'equipo-trabajo',
                    scope: me,
                    handler: me.equipoTrabajo
                },{
                    text: 'Ficheros <b>(doc, xls, pdf y otros)</b>',
                    iconCls: 'ficheros-proyecto',
                    scope: me,
                    handler: me.ficheroProyecto,
                    width: 250,
                },'-',{
                    text: 'Objetos',
                    iconCls: 'objetos-proyecto',
                    scope: me,
                    handler: me.objetosProyecto
                },{
                    text: 'Especialidad',
                    iconCls: 'especialidad-proyecto',
                    scope: me,
                    handler: me.especialidadProyecto
                },'-',{
                    text: 'Seguimiento',
                    iconCls: 'seguimiento-proyecto',
                    menu: [{
                        text: 'Activar',
                        iconCls: 'activar-seguimiento-proyecto',
                        scope: me,
                        handler: me.activarSeguimiento
                    },{
                        text: 'Desactivar',
                        iconCls: 'desactivar-seguimiento-proyecto',
                        scope: me,
                        handler: me.desactivarSeguimiento
                    }]
                }]
            },'-',{
                text: 'Estado <b>(Cambiar)</b>',
                iconCls: 'estado-menu',
                menu: [{
                    text: estado,
                    iconCls: estadoIcon,
                    scope: me,
                    handler: eval(handler)
                }]
            },'-',{
                text: 'Tipo <b>(Cambiar)</b>',
                iconCls: 'tipo-menu',
                menu: [{
                    xtype: 'combo',
                    hideLabel: true,
                    store: Ext.create('SCS.store.ProyectoTipoStore'),
                    displayField: 'nombre',
                    valueField: 'id',
                    queryMode: 'local',
                    triggerAction: 'all',
                    emptyText: 'Seleccione TIPO...',
                    editable: false,
                    id: 'combobox-tipo-proyecto',
                    width: 300
                }]
            }]
        });
        me.menu.showAt(e.getXY());
        e.stopEvent();
    },
    /* FORM-EDIT-PROYECTO */
    editarProyecto: function () {
        var me = this, form = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm1Edit', { buttons: [{ text: 'Editar', iconCls: 'fa fa-check' },{ text: 'Cancelar', iconCls: 'fa fa-times', handler: function() { Ext.getCmp('window-form-1-edit-proyecto').close(); }}] });
        form.loadRecord(me.record);
        var win = Ext.create('Ext.window.Window', {
            title: me.record.get('nombre').toUpperCase() +' <b>(Editar proyecto <=> Datos Iniciales)</b>',
            width: 920,
            items: form,
            modal: true,
            resizable: false,
            id: 'window-form-1-edit-proyecto'
        });
        win.show();
    },
    /* FORM-EQUIPO-TRABAJO */
    equipoTrabajo: function () {
        var me = this;
        me.form2 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm2Edit', {
            buttons: [{ text: 'Editar', iconCls: 'fa fa-check' },{ text: 'Cancelar', iconCls: 'fa fa-times', handler: function() { Ext.getCmp('window-form-2-equipo-trabajo').close(); }}],
            storePersona: Ext.create('SCS.store.PersonaStore'),
            proyectoId: me.record.get('id')
        });
        me.storeEquipoTrabajo.each(function (rec) {
            me.form2.myData.push([rec.get('id'), rec.get('nombre'), rec.get('cargo'), rec.get('responsabilidad'), rec.get('participacion'), rec.get('espId')]);
        });
        me.form2.gridPersonaStore.loadData(me.form2.myData);

        var win = Ext.create('Ext.window.Window', {
            title: me.record.get('nombre').toUpperCase() +' <b>(Equipo de Trabajo)</b>',
            width: 740,
            items: me.form2,
            modal: true,
            resizable: false,
            id: 'window-form-2-equipo-trabajo'
        });
        win.show();
    },
    afterRenderForm: function (form, eOpts) {
        this.gridPersonaStore = form.gridPersonaStore;
    },
    removeRowGridForm: function (value) {
        var grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (this.form2.myData[i][0] === rec.data.id) {
                this.form2.myData.splice(i,1);
                this.removeEquipoTrabajo(rec.data.espId, this.form2.proyectoId, rec.data.id);
                return this.gridPersonaStore.loadData(this.form2.myData);
            }
        }
    },
    filterStorePersona: function (cmb) {
        this.form2.storePersona.clearFilter();
        if (cmb.value) {
            this.form2.storePersona.filter({
                property: 'persona_tipo_id',
                value: cmb.value,
                anyMatch: true
            });
        };
        this.form2.down('[fieldLabel=Persona]').setValue();
    },
    addPersonaGrid: function (combo, record) {
        var row = [record.get('id'), record.get('nombre_apellidos'), record.get('cargo_id'), '<------------------------------>', '0'];
        if (this.inArray(record.get('id'))) {
            this.form2.myData.push(row);
            this.gridPersonaStore.loadData(this.form2.myData);
        }
    },
    inArray: function(id) {
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (this.form2.myData[i][0] === id) {
                return false;
            }
        }
        return true;
    },
    cleanData: function (){
        this.form2.myData = [];
        this.gridPersonaStore.loadData(this.form2.myData);
    },
    itemContextMenuForm2Grid: function (view, record, item, index, e) {
        var me = this, menu = Ext.create('Ext.menu.Menu', {
            width: 300,
            closeAction : 'destroy',
            items: [{
                text: 'Agregar/Quitar <b>(Responsabilidad)</b>',
                iconCls: 'responsabilidad-menu',
                personaId: record.get('id'),
                scope: me,
                handler: me.showResponsabilidad
            },'-',{
                text: 'Porciento de Participación <b>(%)</b>',
                iconCls: 'participacion-menu',
                menu: [{
                    text: 'Entre 0 y 10',
                    menu: [
                        { text: '1', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '2', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '3', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '4', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '5', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '6', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '7', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '8', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '9', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '10', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 10 y 20',
                    menu: [
                        { text: '11', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '12', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '13', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '14', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '15', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '16', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '17', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '18', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '19', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '20', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 21 y 30',
                    menu: [
                        { text: '21', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '22', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '23', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '24', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '25', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '26', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '27', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '28', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '29', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '30', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 31 y 40',
                    menu: [
                        { text: '31', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '32', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '33', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '34', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '35', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '36', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '37', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '38', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '39', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '40', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 41 y 50',
                    menu: [
                        { text: '41', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '42', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '43', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '44', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '45', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '46', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '47', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '48', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '49', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '50', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 51 y 60',
                    menu: [
                        { text: '51', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '52', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '53', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '54', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '55', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '56', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '57', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '58', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '59', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '60', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 61 y 70',
                    menu: [
                        { text: '61', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '62', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '63', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '64', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '65', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '66', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '67', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '68', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '69', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '70', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 71 y 80',
                    menu: [
                        { text: '71', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '72', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '73', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '74', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '75', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '76', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '77', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '78', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '79', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '80', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 81 y 90',
                    menu: [
                        { text: '81', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '82', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '83', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '84', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '85', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '86', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '87', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '88', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '89', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '90', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                },{
                    text: 'Entre 91 y 100',
                    menu: [
                        { text: '91', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '92', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '93', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '94', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '95', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '96', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '97', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '98', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '99', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me },
                        { text: '100', handler: me.addEditParticipacion, personaId: record.get('id'), scope: me }
                    ]
                }]

            }]
        });
        menu.showAt(e.getXY());
        e.stopEvent();
    },
    showResponsabilidad: function(item) {
        var me = this; Ext.Ajax.request({
            url: '../nomenclador/equipo_trabajo_especialidad/list2',
            params: { personaId: item.personaId, proyectoId: item.scope.form2.proyectoId },
            success: function (response) {
                Ext.create('SCS.view.jefedisenno.proyecto.ResponsabilidadFormEdit', {
                    especialidadStore: Ext.create('Ext.data.ArrayStore', {
                        fields: ["equipo_trabajo_id", "equipo_trabajo_especialidad_id", "nombre", "estado"],
                        data: eval(response.responseText)
                    }),
                    personaId: item.personaId
                });
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    addEditResponsabilidad1: function(btn) {
        var win = btn.up('window'), esp = '[', espId = [];
        win.especialidadStore.each(function (rec) {
            if (rec.get('estado') === true) {
                esp += rec.get('nombre') +', ';
                espId.push(rec.get('equipo_trabajo_especialidad_id'));
            }
        });
        esp = esp.substr(0, esp.length - 2) +']';
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (this.form2.myData[i][0] === win.personaId) {
                this.form2.myData[i][3] = esp;
                this.form2.myData[i][5] = espId;
                this.gridPersonaStore.loadData(this.form2.myData);
                break;
            }
        }
        win.close();
    },
    addEditParticipacion: function(item) {
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (item.scope.form2.myData[i][0] === item.personaId) {
                item.scope.form2.myData[i][4] = item.text;
                item.scope.gridPersonaStore.loadData(item.scope.form2.myData);
                break;
            }
        }
    },
    /* ADD-EDIT EQUIPO-TRABAJO */
    isValidEquipoTrabajo: function (btn) {
        var me = this, valid = true, form = btn.up('form'), win = form.up('window');
        form.myData.forEach(function (rec) {
            if (!rec[5]) {
                valid = false;
                me.message('Atención', 'Verifique la responsabilidad de las Personas!!! ', Ext.Msg.INFO);
            }
            if (rec[4] === "0") {
                valid = false;
                me.message('Atención', 'Verifique el % de participación de las Personas.<br><b> No puede estar en CERO (0)</b>', Ext.Msg.INFO);
            }
        });
        if (valid) {
            me.addEquipoTrabajo(form, win);
        }
    },
    addEquipoTrabajo: function (form, win) {
        var me = this, data = [];
        form.myData.forEach(function (rec) { console.log(rec[4]);
            data.push([rec[0], rec[4], rec[5]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add-edit/equipo/trabajo',
            params: {
                data: Ext.encode(data),
                proyectoId: form.proyectoId,
                equipoTrabajoId: 'ADD'
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
                win.close();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeEquipoTrabajo: function (ids, proyectoId, personaId) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/remove/equipo/trabajo',
            params: {
                ids:  Ext.encode(ids),
                proyectoId: proyectoId,
                personaId: personaId
            },
            success: function(response) {
                if (response.responseText !== '') {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* FORM-FILE-UPLOADED */
    ficheroProyecto: function () {
        var me = this;
        this.form3 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm3Edit', {
            proyectoId: me.record.get('id')
        });
        this.storeFichero.each(function (rec) {
            me.form3.myData.push([rec.get('id'), rec.get('fecha'), rec.get('nombre'), rec.get('descripcion')]);
        });
        this.form3.gridFileStore.loadData(me.form3.myData);

        var win = Ext.create('Ext.window.Window', {
            title: me.record.get('nombre').toUpperCase() +' <b>(Agregar/Quitar Ficheros)</b>',
            width: 840,
            items: me.form3,
            modal: true,
            resizable: false
        });
        win.show();
    },
    /* TIPO-PROYECTO */
    tipoProyecto: function (combo) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/tipo',
            params: {
                tipoId: combo.getValue(),
                proyectoId: me.record.get('id')
            },
            success: function () {
                me.menu.close();
                me.loadStore();
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* SAVE-PROYECTO */
    isValidProyectoForm: function (btn) {
        var form = btn.up('form'), win = form.up('window');
        if (form.getForm().isValid()) {
            this.saveProyecto(form.getForm().getValues(), win);
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    saveProyecto: function (record, win) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/add-edit',
            params: {
                id: record.id,
                tipo: me.proyectoTipoId,
                fecha: record.fecha,
                codigo: record.codigo,
                nombre: record.nombre,
                grupo: record.grupo,
                contrato: record.contrato,
                descripcion: record.descripcion
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
                win.close();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* OBJETOS */
    objetosProyecto: function () {
        var me = this;
        me.form4 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm4Edit', {
            buttons: [{ text: 'Editar', iconCls: 'fa fa-check' },{ text: 'Cancelar', iconCls: 'fa fa-times', handler: function() { Ext.getCmp('window-form-4-objetos').close(); }}],
            proyectoId: me.record.get('id')
        });
        me.storeProyectoObjeto.each(function (rec) {
            me.form4.myData.push([rec.get('id'), rec.get('nombre'), rec.get('descripcion')]);
        });
        me.form4.gridObjetoStore.loadData(me.form4.myData);

        var win = Ext.create('Ext.window.Window', {
            title: me.record.get('nombre').toUpperCase() +' <b>(Agregar/Quitar Objetos)</b>',
            width: 710,
            items: me.form4,
            modal: true,
            resizable: false,
            id: 'window-form-4-objetos'
        });
        win.show();
    },
    /* ESPECIALIDAD */
    especialidadProyecto: function () {
        var me = this;
        me.form5 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm5Edit', {
            buttons: [{ text: 'Editar', iconCls: 'fa fa-check' },{ text: 'Cancelar', iconCls: 'fa fa-times', handler: function() { Ext.getCmp('window-form-5-especialidad').close(); }}],
            proyectoId: me.record.get('id')
        });
        me.storeProyectoEspecialidad.each(function (rec) {
            me.form5.myData.push([rec.get('id'), rec.get('nombre'), rec.get('descripcion')]);
        });
        me.form5.gridEspecialidadStore.loadData(me.form5.myData);

        var win = Ext.create('Ext.window.Window', {
            title: me.record.get('nombre').toUpperCase() +' <b>(Agregar/Quitar Especialidades)</b>',
            width: 710,
            items: me.form5,
            modal: true,
            resizable: false,
            id: 'window-form-5-especialidad'
        });
        win.show();
    },
    /* SEGUIMIENTO */
    activarSeguimiento: function () {
        this.seguimiento(true);
    },
    desactivarSeguimiento: function () {
        this.seguimiento(false);
    },
    seguimiento: function (estado) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/seguimiento',
            params: {
                estado: estado,
                proyectoId: me.record.get('id')
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* ESTADO */
    estadoFinal: function () {
        this.estado(true);
    },
    estadoPendiente: function () {
        this.estado(false);
    },
    estado: function (estado) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/edit-estado',
            params: {
                estado: estado,
                proyectoId: me.record.get('id')
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* FORM 3 UPLOAD FILE */
    isValidFormUpload: function () {
        var rec = this.form3.getForm().getValues(),
            field1 =  this.form3.down('[name=id]'),
            field2 =  this.form3.down('[name=uploadedfile]'),
            field3 =  this.form3.down('[name=descripcion]');
        field1.setValue(this.form3.proyectoId);
        if (this.form3.getForm().isValid()) {
            this.uploadFile(field2.getValue(), field3.getValue(), field3);
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    uploadFile: function (uploadedfile, descripcion, field3) {
        var me = this, d = new Date(), date = ""+ d.getFullYear() +"-"+ d.getMonth() +1+"-"+ d.getDate() +" "+ d.getHours() +":"+ d.getMinutes() +":"+ d.getSeconds();
        if(this.form3.isValid()){
            this.form3.submit({
                url: '../proyecto/uploaded/file',
                success: function(form, action) {
                    field3.setValue();
                    me.addFileGrid(action.response.responseText, date, uploadedfile, descripcion);
                },
                failure: function(form, action) {
                    console.log(action.response.responseText);
                    me.addFileGrid(action.response.responseText, date, uploadedfile, descripcion);
                }
            });
        }
    },
    addFileGrid: function (id, date, name, desc) {
        var row = [id, date, name, desc];

        if (this.inArray3(id)) {
            this.form3.myData.push(row);
            this.form3.gridFileStore.loadData(this.form3.myData);
        }
    },
    inArray3: function(id) {
        for (var i = 0; i < this.form3.myData.length; i++) {
            if (this.form3.myData[i][0] === id) {
                return false;
            }
        }
        return true;
    },
    cleanData3: function (){
        this.form3.myData = [];
        this.form3.gridFileStore.loadData(this.form3.myData);
    },
    removeRowGridForm3: function (value) {
        var grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form3.myData.length; i++) {
            if (this.form3.myData[i][0] === rec.data.id) {
                this.form3.myData.splice(i,1);
                this.removeFile(rec.data.id);
                return this.form3.gridFileStore.loadData(this.form3.myData);
            }
        }
    },
    removeFile: function (id) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/remove/file',
            params: {
                id: id
            },
            success: function(response) {
                if (response.responseText !== '') {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* OBJETOS-ADD-REMOVE */
    afterRenderObjetoForm: function (form, eOpts) {
        this.gridObjetoStore = form.gridObjetoStore;
    },
    removeRowGridObjetoForm: function (value) {
        var me = this, grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form4.myData.length; i++) {
            if (this.form4.myData[i][0] === rec.data.id) {
                this.form4.myData.splice(i,1);
                me.removeObjeto(rec.data.id);
                return this.gridObjetoStore.loadData(this.form4.myData);
            }
        }
    },
    addObjetoGrid: function (combo, record) {
        var row = [record.get('id'), record.get('nombre'), record.get('descripcion') ];
        if (this.inArrayObjeto(record.get('id'))) {
            this.form4.myData.push(row);
            this.gridObjetoStore.loadData(this.form4.myData);
        }
    },
    inArrayObjeto: function(id) {
        for (var i = 0; i < this.form4.myData.length; i++) {
            if (this.form4.myData[i][0] === id) {
                return false;
            }
        }
        return true;
    },
    cleanDataObjeto: function (){
        this.form4.myData = [];
        this.gridObjetoStore.loadData(this.form4.myData);
    },
    isValidObjetoForm: function (btn) {
        var me = this, form = btn.up('form'), win = form.up('window');

        if (this.form4.myData.length === 0) {
            me.message('Atención', 'Agregue al menos un OBJETO!!! ', Ext.Msg.INFO);
        } else {
            me.addObjeto(win);
        }
    },
    addObjeto: function (win) {
        var me = this, data = [];
        this.form4.myData.forEach(function (rec) {
            data.push([rec[0]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add/objetos',
            params: {
                data: Ext.encode(data),
                proyectoId: me.form4.proyectoId
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
                win.close();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeObjeto: function (id) {
         var me = this;
         Ext.Ajax.request({
             url: '../proyecto/remove/objeto',
                 params: {
                     id: id,
                     proyectoId: me.form4.proyectoId
                 },
             success: function(response) {
                 if (response.responseText !== '') {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                 }
             },
             failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
             }
         });
     },
    /* ESPECIALIDAD-ADD-REMOVE */
    afterRenderEspecialidadForm: function (form, eOpts) {
        this.gridEspecialidadStore = form.gridEspecialidadStore;
    },
    removeRowGridEspecialidadForm: function (value) {
        var me = this, grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form5.myData.length; i++) {
            if (this.form5.myData[i][0] === rec.data.id) {
                this.form5.myData.splice(i,1);
                me.removeEspecialidad(rec.data.id);
                return this.gridEspecialidadStore.loadData(this.form5.myData);
            }
        }
    },
    addEspecialidadGrid: function (combo, record) {
        var row = [record.get('id'), record.get('nombre'), record.get('descripcion') ];
        if (this.inArrayEspecialidad(record.get('id'))) {
            this.form5.myData.push(row);
            this.gridEspecialidadStore.loadData(this.form5.myData);
        }
    },
    inArrayEspecialidad: function(id) {
        for (var i = 0; i < this.form5.myData.length; i++) {
            if (this.form5.myData[i][0] === id) {
                return false;
            }
        }
        return true;
    },
    cleanDataEspecialidad: function (){
        this.form5.myData = [];
        this.gridEspecialidadStore.loadData(this.form5.myData);
    },
    isValidEspecialidadForm: function (btn) {
        var me = this, form = btn.up('form'), win = form.up('window');

        if (this.form5.myData.length === 0) {
            me.message('Atención', 'Agregue al menos una ESPECIALIDAD!!! ', Ext.Msg.INFO);
        } else {
            me.addEspecialidad(win);
        }
    },
    addEspecialidad: function (win) {
        var me = this, data = [];
        this.form5.myData.forEach(function (rec) {
            data.push([rec[0]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add/especialidad',
            params: {
                data: Ext.encode(data),
                proyectoId: me.form5.proyectoId
            },
            success: function () {
                Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                me.loadStore();
                win.close();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    removeEspecialidad: function (id) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/remove/especialidad',
            params: {
                id: id,
                proyectoId: me.form5.proyectoId
            },
            success: function(response) {
                if (response.responseText !== '') {
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