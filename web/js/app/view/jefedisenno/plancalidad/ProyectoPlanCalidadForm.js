
Ext.define('SCS.view.jefedisenno.plancalidad.ProyectoPlanCalidadForm', {
    extend: 'Ext.form.Panel',
    xtype: 'plan-calidad-proyecto-form',

    padding: '10 10 10 10',
    autoShow: true,
    fieldDefaults: {
        anchor: '100%',
        allowBlank: false,
        labelAlign: 'top'
    },
    height: 95,

    initComponent: function () {
        var me = this;
        this.items = [{
            xtype: 'container',
            border: false,
            layout: 'anchor',
            items: [{
                xtype: 'combobox',
                fieldLabel: 'Proyecto',
                emptyText: 'Seleccione un Proyecto...',
                store: me.proyectoStore,
                queryMode: 'local',
                displayField: 'nombre',
                valueField: 'id',
                typeAhead: true,
                selectOnFocus: true,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                tpl: Ext.create('Ext.XTemplate',
                    '<ul class="x-list-plain"><tpl for=".">',
                    '<li role="option" class="x-boundlist-item">{codigo} - {nombre}</li>',
                    '</tpl></ul>'
                ),
                // template for the content inside text field
                displayTpl: Ext.create('Ext.XTemplate',
                    '<tpl for=".">',
                    '{codigo} - {nombre}',
                    '</tpl>'
                ),
                flex: 1,
                id: 'combobox-proyecto'
            }]
        }];
        this.callParent(arguments);
    }
});