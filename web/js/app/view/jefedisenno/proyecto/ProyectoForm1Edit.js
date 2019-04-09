
Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm1Edit', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-1Edit',

    padding: '10 10 10 10',
    fieldDefaults: {
        anchor: '100%',
        allowBlank: false,
        labelAlign: 'top'
    },
    height: 480,

    initComponent: function () {
        this.items = [{
            xtype: 'container',
            border: false,
            layout: 'hbox',
            items: [{
                xtype: 'combobox',
                fieldLabel: 'Tipo de Proyecto',
                emptyText: 'Tipo de Proyecto',
                store: Ext.create('SCS.store.ProyectoTipoStore'),
                queryMode: 'local',
                displayField: 'nombre',
                valueField: 'id',
                editable: false,
                allowBlank: false,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                margin: '0 5 0 0',
                name: 'tipo',
                flex: 1,
                id: 'combobox-proyecto-tipo-form-1Edit'
            },{
                xtype: 'datefield',
                fieldLabel: 'Fecha',
                emptyText: 'Fecha de creació del Proyecto',
                value: new Date(),
                format: 'Y-m-d',
                editable: false,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                name: 'fecha',
                flex: 1
            }]
        },{
            xtype: 'container',
            border: false,
            layout: 'hbox',
            items: [{
                xtype: 'textfield',
                fieldLabel: 'Código',
                emptyText: 'Código del Proyecto',
                maxLength: 48,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                margin: '0 5 0 0',
                name: 'codigo',
                flex: 1
            },{
                xtype: 'textfield',
                fieldLabel: 'Nombre',
                emptyText: 'Nombre del Proyecto',
                maxLength: 76,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                margin: '0 5 0 0',
                name: 'nombre',
                flex: 3
            }]
        },{
            xtype: 'container',
            border: false,
            layout: 'anchor',
            items: [{
                xtype: 'textareafield',
                fieldLabel: 'Grupo',
                emptyText: 'Grupo del Proyecto',
                grow: true,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                name: 'grupo',
                flex: 1
            },{
                xtype: 'textareafield',
                fieldLabel: 'Contrato',
                emptyText: 'Contrato del Proyecto',
                grow: true,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                name: 'contrato',
                flex: 1
            },{
                xtype: 'textareafield',
                fieldLabel: 'Descripción',
                emptyText: 'Descripción del Proyecto',
                grow: true,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                name: 'descripcion',
                flex: 1
            },{
                xtype: 'hiddenfield',
                name: 'id'
            }]
        }];
        this.callParent(arguments);
    }
});