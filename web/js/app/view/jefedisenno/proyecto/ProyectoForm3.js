
Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm3', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-3',

    padding: '10 10 10 10',
    fieldDefaults: {
        allowBlank: false,
        labelAlign: 'top',
        buttonAlign: 'right'
    },
    height: 480,

    initComponent: function () {
        var me = this; this.myData = [];

        this.stateEvents = 'actioncolumnClick';

        this.gridFileStore = Ext.create('Ext.data.ArrayStore', {
            fields: [ 'id', 'nombre', 'descripcion' ]
        });
        this.items = [{
            xtype:'fieldset',
            layout: 'anchor',
            items :[{
                xtype: 'filefield',
                fieldLabel: 'Fichero',
                emptyText: 'Fichero a subir',
                name: 'uploadedfile',
                msgTarget: 'side',
                anchor: '100%',
                editable: false,
                listeners: {
                    change: function(fld, value) {
                        var newValue = value.replace(/C:\\fakepath\\/g, '');
                        fld.setRawValue(newValue);
                    }
                }
            },{
                xtype: 'textareafield',
                fieldLabel: 'Descripción',
                emptyText: 'Descripción del fichero',
                grow: true,
                afterLabelTextTpl: ['<span style="color:red; font-weight:bold" data-qtip="Required">*</span>'],
                name: 'descripcion',
                anchor: '100%',
            }, {
                xtype: 'button',
                text: 'Subir',
                iconCls: 'fa fa-upload'
            }]
        },{
            xtype: 'grid',
            border: true,
            height: 180,
            selType: 'checkboxmodel',
            autoScroll: true,
            store: me.gridFileStore,
            columns: [
                { text: 'Id', dataIndex: 'id', hidden: true },
                { text: 'Nombre',  dataIndex: 'nombre', flex: 5 },
                { text: 'Descripción', dataIndex: 'descripcion', flex: 5 },
                {
                    xtype: 'actioncolumn', width: 25,
                    items: [{
                        iconCls: 'delete-row',
                        tooltip: 'Elimanar fila.',
                        handler: function(grid, rowIndex, colIndex){
                            me.fireEvent('actioncolumnClick', [grid, rowIndex]);
                        }
                    }]
                }
            ]
        },{
            xtype: 'hiddenfield',
            name: 'id'
        }];
        this.buttons = [{
            text: 'Atrás',
            iconCls: 'fa fa-chevron-left',
            id: 'back-form-3'
        },{
            text: 'Siguiente',
            iconCls: 'fa fa-chevron-right',
            id: 'next-form-3'
        }];
        this.callParent(arguments);
    }
});