Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm5', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-5',

    padding: '10 10 10 10',
    fieldDefaults: {
        anchor: '100%',
        allowBlank: false,
        labelAlign: 'top'
    },
    height: 480,

    initComponent: function () {
        var me = this; this.myData = [];

        this.stateEvents = 'actioncolumnClick';

        this.gridEspecialidadStore = Ext.create('Ext.data.ArrayStore', {
            fields: [ 'id', 'nombre', 'descripcion' ]
        });
        this.items = [{
            xtype: 'container',
            border: false,
            layout: 'hbox',
            items: [{
                xtype: 'combobox',
                fieldLabel: 'Especialidad',
                emptyText: 'Seleccione un Especialidad...',
                store: Ext.create('SCS.store.ProyectoEspecialidadStore'),
                queryMode: 'local',
                displayField: 'nombre',
                margin: '0 0 5 0',
                flex: 1,
                editable: false
            }]
        },{
            xtype: 'container',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'grid',
                border: true,
                height: 340,
                selType: 'checkboxmodel',
                autoScroll: true,
                store: me.gridEspecialidadStore,
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
            }]
        }];
        this.buttons = [{
            text: 'Atrás',
            iconCls: 'fa fa-chevron-left',
            id: 'back-form-5'
        },{
            text: 'Siguiente',
            iconCls: 'fa fa-chevron-right',
            id: 'next-form-5'
        }];
        this.callParent(arguments);
    }
});