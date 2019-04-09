
Ext.define('SCS.view.nomenclador.aspectos_servicio_indicadores.AspectosServicioIndicadoresForm', {
    extend: 'Ext.window.Window',
    xtype: 'form-aspectos_servicio_indicadores',

    iconCls: '',
    layout: 'fit',
    width: 640,
    resizable: false,
    modal: true,

    initComponent: function () {
        var me = this;

        this.items = [{
            xtype: 'form',
            url: '../nomenclador/aspectos_servicio_indicadores/add-edit',
            padding: '10 10 10 10',
            frame: false,
            fieldDefaults: {
                anchor: '100%',
                allowBlank: false,
                labelAlign: 'top'
            },
            items:[{
                xtype: 'container',
                border: false,
                layout: 'anchor',
                items: [{
                    xtype: 'textfield',
                    fieldLabel: 'Aspectos',
                    emptyText: 'Aspectos',
                    name: 'aspectos',
                    /*maskRe: MASKRe,
                     regex: REGEx,*/
                    maxLength: 126,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>']
                }]
            },{
                xtype: 'container',
                border: false,
                layout: 'hbox',
                items: [{
                    xtype: 'numberfield',
                    fieldLabel: 'Puntos',
                    name: 'puntos',
                    value: 0,
                    minValue: 0,
                    maxValue: 99,
                    flex: 1,
                    allowBlank: false,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                    margin: '0 5 0 0'
                },{
                    xtype: 'textfield',
                    fieldLabel: 'Cumplimiento',
                    emptyText: 'Cumplimiento',
                    name: 'cumplimiento',
                    /*maskRe: MASKRe,
                     regex: REGEx,*/
                    maxLength: 126,
                    allowBlank: false,
                    flex: 1,
                    afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>']
                },{
                    xtype: 'hiddenfield',
                    name: 'id'
                }]
            }]
        }];
        this.buttons = [{
            text: me.btnText,
            iconCls: 'fa fa-check'
        },{
            text: 'Cancelar',
            iconCls: 'fa fa-times',
            handler: function() {
                me.close();
            }
        }];
        this.callParent(arguments);
    }
});