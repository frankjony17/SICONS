
Ext.define('SCS.controller.proyecto.ProyectoFormController', {
    extend: 'Ext.app.Controller',

    control: {
        'grid-proyecto': {
            afterrender: "afterrender"
        },
        'grid-proyecto [action=add-total]': {
            click: "showWindow"
        },
        'grid-proyecto [action=add-parcial]': {
            click: "addParcialProyecto"
        },
        '#new-proyecto-id': {
            click: "showWindow"
        },
        '#next-form-1': {
            click: "isValidProyectoForm"
        },
        '#save-proyecto': {
            click: "isValidParcialProyectoForm"
        },
        '#back-form-2': {
            click: "backForm2"
        },
        '#next-form-2': {
            click: "isValidEquipoTrabajo"
        },
        '#back-form-3': {
            click: "backForm3"
        },
        '#next-form-3': {
            click: "nextForm3"
        },
        '#next-form-4': {
            click: "isValidObjetoForm"
        },
        '#back-form-4': {
            click: "backForm4"
        },
        '#next-form-5': {
            click: "isValidEspecialidadForm"
        },
        '#back-form-5': {
            click: "backForm5"
        },
        '#back-form-6': {
            click: "backForm6"
        },
        '#end-form-6': {
            click: "seguimiento"
        },
        /* FORM-2 */
        'form-proyecto-2': {
            close: "cleanData1",
            afterrender: "afterRenderForm2",
            actioncolumnClick: "removeRowGridForm1"
        },
        'form-proyecto-2 combobox[fieldLabel=Tipo de Persona]': {
            select: "filterStorePersona"
        },
        'form-proyecto-2 combobox[fieldLabel=Persona]': {
            select: "addPersonaGrid"
        },
        'form-proyecto-2 [xtype=grid]': {
            itemcontextmenu: "itemContextMenuForm2Grid1"
        },
        'responsabilidad-form [text=Salvar]': {
            click: "addEditResponsabilidad"
        },
        /* FORM-3 */
        'form-proyecto-3 button[text=Subir]': {
            click: "isValidFormUpload"
        },
        'form-proyecto-3': {
            close: "cleanData3",
            actioncolumnClick: "removeRowGridForm3"
        },
        /* FORM-4 */
        'form-proyecto-4': {
            close: "cleanDataObjeto",
            afterrender: "afterRenderObjetoForm",
            actioncolumnClick: "removeRowGridObjetoForm"
        },
        'form-proyecto-4 combobox[fieldLabel=Objetos]': {
            select: "addObjetoGrid"
        },
        /* FORM-5 */
        'form-proyecto-5': {
            close: "cleanDataEspecialidad",
            afterrender: "afterRenderEspecialidadForm",
            actioncolumnClick: "removeRowGridEspecialidadForm"
        },
        'form-proyecto-5 combobox[fieldLabel=Especialidad]': {
            select: "addEspecialidadGrid"
        }
    },
    afterrender: function (grid) {
        this.grid = grid;
        this.store = grid.store;

    },
    loadStore: function () {
        var me = this;
        this.store.load({ params:{ start: startNumber(me), limit: 15 }});

        function startNumber(me) {
            var pagingtoolbar = me.grid.down('pagingtoolbar'), start = parseInt(me.store.pageSize * (pagingtoolbar.down('[itemId=inputItem]').getValue() - 1));
            return (start > 0) ? start : 0;
        };
    },
    /* Show Window Proyecto */
    showWindow: function () {
        this.form1 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm1', {
            buttons: [{text: 'Siguiente',iconCls: 'fa fa-chevron-right',id: 'next-form-1'}]
        });
        this.form2 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm2', {
            storePersona: Ext.create('SCS.store.PersonaStore'),
            buttons: [{text: 'Atrás',iconCls: 'fa fa-chevron-left',id: 'back-form-2'},{text: 'Siguiente',iconCls: 'fa fa-chevron-right',id: 'next-form-2'}]
        });
        this.form3 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm3');
        this.form4 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm4');
        this.form5 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm5');
        this.form6 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm6');

        this.win = Ext.create('Ext.window.Window', {
            title: 'Crear Nuevo Proyecto <b>(Datos Iniciales)</b>',
            width: 920,
            items: [ this.form1, this.form2.hide(), this.form3.hide(), this.form4.hide(), this.form5.hide(), this.form6.hide() ],
            modal:true,
            resizable: false
        });
        this.win.show();
    },
    addParcialProyecto: function () {
        this.form1 = Ext.create('SCS.view.jefedisenno.proyecto.ProyectoForm1', {
            buttons: [{text: 'Salvar',iconCls: 'fa fa-check', id: 'save-proyecto'}]
        });
        this.win = Ext.create('Ext.window.Window', {
            title: 'Crear Nuevo Proyecto <b>(Datos Iniciales)</b>',
            width: 920,
            items: [ this.form1 ],
            modal: true,
            resizable: false
        });
        this.win.show();
    },
    /* NEXT-AND-BACK-FORM-FROM-1-TO-6 */
    nextForm1: function (id) {
        this.form1.hide();
        this.form2.proyectoId = id;
        this.form2.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Equipo de Trabajo)</b>');
    },
    backForm2: function () {
        this.form2.hide();
        this.form1.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Datos Iniciales)</b>');
    },
    nextForm2: function (proyectoId, id) {
        this.form1.hide();
        this.form2.hide();
        this.form3.proyectoId = id;
        this.form3.equipoTrabajoId = id;
        this.form3.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Ficheros)</b>');
    },
    backForm3: function () {
        this.form3.hide();
        this.form1.hide();
        this.form2.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Equipo de Trabajo)</b>');
    },
    nextForm3: function () {
        this.form1.hide();
        this.form2.hide();
        this.form3.hide();
        this.form4.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Objetos)</b>');
    },
    backForm4: function () {
        this.form4.hide();
        this.form1.hide();
        this.form2.hide();
        this.form3.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Ficheros)</b>');
    },
    nextForm4: function () {
        this.form4.hide();
        this.form1.hide();
        this.form2.hide();
        this.form3.hide();
        this.form5.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Especialidad)</b>');
    },
    backForm5: function () {
        this.form5.hide();
        this.form1.hide();
        this.form2.hide();
        this.form3.hide();
        this.form4.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Objetos)</b>');
    },
    nextForm5: function () {
        this.form1.hide();
        this.form2.hide();
        this.form3.hide();
        this.form4.hide();
        this.form5.hide();
        this.form6.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Condiciones de Seguimiento)</b>');
    },
    backForm6: function () {
        this.form1.hide();
        this.form2.hide();
        this.form3.hide();
        this.form4.hide();
        this.form6.hide();
        this.form5.show();
        this.win.setTitle('Crear Nuevo Proyecto <b>(Agregar Especialidad)</b>');
    },
    /* FORM 2 EQUIPO TRABAJO */
    afterRenderForm2: function (form, eOpts) {
        this.gridPersonaStore = form.gridPersonaStore;
    },
    removeRowGridForm1: function (value) {
        var grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (this.form2.myData[i][0] === rec.data.id) {
                this.form2.myData.splice(i,1);
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

        if (this.inArray1(record.get('id'))) {
            this.form2.myData.push(row);
            this.gridPersonaStore.loadData(this.form2.myData);
        }
    },
    inArray1: function(id) {
        for (var i = 0; i < this.form2.myData.length; i++) {
            if (this.form2.myData[i][0] === id) {
                return false;
            }
        }
        return true;
    },
    cleanData1: function (){
        this.form2.myData = [];
        this.gridPersonaStore.loadData(this.form2.myData);
    },
    /* EQUIPO-TRABAJO MENU-CONTEXTUAL */
    itemContextMenuForm2Grid1: function (view, record, item, index, e) {
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
                Ext.create('SCS.view.jefedisenno.proyecto.ResponsabilidadForm', {
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
    addEditResponsabilidad: function(btn) {
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
    /* ADD-EDIT PROYECTO */
    isValidProyectoForm: function () {
        if (this.form1.getForm().isValid()) {
            this.addProyecto(this.form1.getForm().getValues());
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    addProyecto: function (record) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/add-edit',
            params: {
                id: me.form2.proyectoId ? me.form2.proyectoId : 'ADD',
                tipo: record.tipo,
                fecha: record.fecha,
                codigo: record.codigo,
                nombre: record.nombre,
                grupo: record.grupo,
                contrato: record.contrato,
                descripcion: record.descripcion
            },
            success: function (response) {
                me.nextForm1(response.responseText);
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    isValidParcialProyectoForm: function (btn) {
        var form = btn.up('form'), win = form.up('window');
        if (this.form1.getForm().isValid()) {
            this.addPParcialProyecto(this.form1.getForm().getValues(), win);
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    addPParcialProyecto: function (record, win) {
        var me = this;
        Ext.Ajax.request({
            url: '../proyecto/add-edit',
            params: {
                id: 'ADD',
                tipo: record.tipo,
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
    /* VALID EQUIPO TRABAJO, AND ADD */
    isValidEquipoTrabajo: function () {
        var me = this, valid = true;

        if (this.form2.myData.length === 0) {
            me.message('Atención', 'Agregue al menos una Persona al Equipo de Trabajo!!! ', Ext.Msg.INFO);
        } else {
            this.form2.myData.forEach(function (rec) {
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
                me.addEquipoTrabajo();
            }
        }
    },
    addEquipoTrabajo: function () {
        var me = this, data = [];
        this.form2.myData.forEach(function (rec) {
            data.push([rec[0], rec[4], rec[5]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add/equipo/trabajo',
            params: {
                data: Ext.encode(data),
                proyectoId: me.form2.proyectoId,
                equipoTrabajoId: me.form3.equipoTrabajoId ? me.form3.equipoTrabajoId : 'ADD'
            },
            success: function (response) {
                me.nextForm2(me.form2.proyectoId, response.responseText);
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
        field1.setValue(this.form2.proyectoId);
        if (this.form3.getForm().isValid()) {
            this.uploadFile(field2.getValue(), rec.descripcion, field3);
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    uploadFile: function (uploadedfile, descripcion, field3) {
        var me = this;
        if(this.form3.isValid()){
            this.form3.submit({
                url: '../proyecto/uploaded/file',
                success: function(form, action) {
                    field3.setValue();
                    me.addFileGrid(action.response.responseText, uploadedfile, descripcion);
                },
                failure: function(form, action) {
                    console.log(action.response.responseText);
                    me.addFileGrid(action.response.responseText, uploadedfile, descripcion);
                }
            });
        }
    },
    addFileGrid: function (id, name, desc) {
        var row = [id, name, desc];

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
    /* FORM-4 OBJETOS ADD-REMOVE */
    afterRenderObjetoForm: function (form, eOpts) {
        this.gridObjetoStore = form.gridObjetoStore;
    },
    removeRowGridObjetoForm: function (value) {
        var grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form4.myData.length; i++) {
            if (this.form4.myData[i][0] === rec.data.id) {
                this.form4.myData.splice(i,1);
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
    isValidObjetoForm: function () {
        var me = this;

        if (this.form4.myData.length === 0) {
            me.message('Atención', 'Agregue al menos un OBJETO!!! ', Ext.Msg.INFO);
        } else {
            me.addObjeto();
        }
    },
    addObjeto: function () {
        var me = this, data = [];
        this.form4.myData.forEach(function (rec) {
            data.push([rec[0]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add/objetos',
            params: {
                data: Ext.encode(data),
                proyectoId: me.form2.proyectoId
            },
            success: function () {
                me.nextForm4();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* FORM-5 ESPECIALIDAD ADD-REMOVE */
    afterRenderEspecialidadForm: function (form, eOpts) {
        this.gridEspecialidadStore = form.gridEspecialidadStore;
    },
    removeRowGridEspecialidadForm: function (value) {
        var grid = value[0], rowIndex = value[1], rec = grid.getStore().getAt(rowIndex);
        for (var i = 0; i < this.form5.myData.length; i++) {
            if (this.form5.myData[i][0] === rec.data.id) {
                this.form5.myData.splice(i,1);
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
    isValidEspecialidadForm: function () {
        var me = this;

        if (this.form5.myData.length === 0) {
            me.message('Atención', 'Agregue al menos una ESPECIALIDAD!!! ', Ext.Msg.INFO);
        } else {
            me.addEspecialidad();
        }
    },
    addEspecialidad: function () {
        var me = this, data = [];
        this.form5.myData.forEach(function (rec) {
            data.push([rec[0]]);
        });
        Ext.Ajax.request({
            url: '../proyecto/add/especialidad',
            params: {
                data: Ext.encode(data),
                proyectoId: me.form2.proyectoId
            },
            success: function () {
                me.nextForm5();
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /* FORM-6 TERMINOS-SEGUIMIENTO */
    seguimiento: function (btn) {
        var me = this, form = btn.up('form'), checkbox = form.down('[xtype=checkboxfield]');
        console.log(checkbox.getValue());
        if (checkbox.getValue()) {
            Ext.Ajax.request({
                url: '../proyecto/add/seguimiento',
                params: {
                    proyectoId: me.form2.proyectoId
                },
                success: function () {
                    me.loadStore();
                    Ext.toast({
                        html: '<b>El proyecto ha sido creado correctamente.</b>',
                        title: 'Operación realizada exitosamente.',
                        width: 325,
                        align: 't'
                    });
                },
                failure: function (response) {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            });
        } else {
            me.loadStore();
            Ext.toast({
                html: 'El proyecto ha sido creado correctamente.<br><b>Pero no se activó el seguimiento!</b>',
                title: 'Operación realizada exitosamente.',
                width: 325,
                align: 't'
            });
        }
        this.win.close();
    },
    /* SHOW MESSAGE */
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    }
});