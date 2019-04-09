
Ext.define('SCS.view.especialistacalidad.revisioncontrato.RevisionContratoGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'revision-contrato-grid',

    width: '100%',
    border: false,
    selModel: {
        type: 'cellmodel'
    },
    autoScroll: true,
    stripeRows: true,

    initComponent: function() {
        var me = this; // Scope from component
        // Store
        me.store = Ext.create('SCS.store.RevisionContratoStore');
        me.proyectoStore = Ext.create('SCS.store.ProyectoStore');
        me.proyectoStore.load({ params:{ start: 0, limit: 250 }});
        // cellEditing
        this.plugins = new Ext.grid.plugin.CellEditing({
            clicksToEdit: 1
        });
        // CSS a los usuarios que no estan activos o no tienen roles activos.
        this.viewConfig = {
            getRowClass: function(record) {
                if(record.get('estado') === false) {
                    return 'x-grid-row-estado-pendiente';
                }
            }
        };
        // Column Model
        me.columns = [{
            xtype: 'rownumberer',
            text: 'No',
            width: 45,
            align: 'center'
        }, {
            text: 'Id',
            dataIndex: 'id',
            width: 35,
            hidden: true
        }, {
            text: 'Fecha',
            dataIndex: 'fecha',
            flex: 1
        }, {
            text: 'Aspectos a Revisar',
            dataIndex: 'aspecto_revisar',
            flex: 5
        }, {
            text: 'Estado Inicial',
            columns: [{
                text: 'Si',
                xtype: 'checkcolumn',
                dataIndex: 'estado_inicial_si',
                editor: {
                    xtype: 'checkbox'
                },
                width: 60,
            },{
                text: 'No',
                xtype: 'checkcolumn',
                dataIndex: 'estado_inicial_no',
                editor: {
                    xtype: 'checkbox'
                },
                width: 60,
            }]
        }, {
            text: 'Observación',
            dataIndex: 'observacion',
            flex: 6,
            editor: {
                xtype: 'textfield',
                maxLength: 250,
            }
        }, {
            text: 'Estado Final',
            columns: [{
                text: 'Si',
                xtype: 'checkcolumn',
                dataIndex: 'estado_final_si',
                editor: {
                    xtype: 'checkbox'
                },
                width: 60,
            },{
                text: 'No',
                xtype: 'checkcolumn',
                dataIndex: 'estado_final_no',
                editor: {
                    xtype: 'checkbox'
                },
                width: 60,
            }]
        },{
            text: 'proyecto_id',
            dataIndex: 'proyecto_id',
            flex: 1,
            hidden: true
        }];
        me.tbar = [{
            xtype: 'buttongroup',
            title: 'Seleccione un Proyecto (FILTRO)',
            padding: 5,
            items: [{
                xtype: 'combobox',
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
                displayTpl: Ext.create('Ext.XTemplate',
                    '<tpl for=".">',
                    '{codigo} - {nombre}',
                    '</tpl>'
                ),
                width: 570,
                id: 'toolbar-combobox-revision-contrato'
            }]
        },'->',{
            xtype: 'buttongroup',
            title: 'Ayuda',
            padding: 5,
            items: [{
                tooltip: 'Ayuda general.',
                iconCls: 'fa fa-info',
                iconAlign: 'top'
            }]
        }];
        me.callParent(arguments);
    }
});