
Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm3Edit', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-3Edit',

    padding: '10 10 10 10',
    fieldDefaults: {
        allowBlank: false,
        labelAlign: 'top',
        buttonAlign: 'right'
    },
    height: 532,

    initComponent: function () {
        var me = this; this.myData = [];

        this.stateEvents = 'actioncolumnClick';

        this.gridFileStore = Ext.create('Ext.data.ArrayStore', {
            fields: [ 'id', 'fecha', 'nombre', 'descripcion' ]
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
            height: 272,
            selType: 'checkboxmodel',
            autoScroll: true,
            store: me.gridFileStore,
            columns: [
                { text: 'Id', dataIndex: 'id', hidden: true },
                { text: 'Fecha',  dataIndex: 'fecha', flex: 4 },
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
        this.callParent(arguments);
    }
});