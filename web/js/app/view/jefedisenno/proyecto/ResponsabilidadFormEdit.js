
Ext.define('SCS.view.jefedisenno.proyecto.ResponsabilidadFormEdit', {
    extend: 'Ext.window.Window',
    xtype: 'responsabilidad-formEdit',

    title: 'Añadir o quitar responsabilidad.',
    iconCls: 'fa fa-fire',
    layout: 'fit',
    modal: true,
    autoShow: true,
    closable: false,
    resizable: false,
    //headerPosition: 'bottom',
    width: 570,
    height: 320,
    initComponent: function () {
        var me = this;

        me.checkcolumn = Ext.create('Ext.grid.column.CheckColumn',{
            text: 'Activar/Desactivar', dataIndex : 'estado', flex: 1
        });
        me.grid = Ext.create('Ext.grid.Panel', {
            border: false,
            autoScroll: true,
            store: me.especialidadStore,
            features: [{ groupHeaderTpl: 'Modulo: {name}', ftype: 'groupingsummary' }],
            columns: [
                { text: 'ETId', dataIndex: 'equipo_trabajo_id', width: 35, hidden: true },
                { text: 'ETEId', dataIndex: 'equipo_trabajo_especialidad_id', width: 35, hidden: true },
                { text: 'Responsabilidad', dataIndex: 'nombre', flex: 2 },
                me.checkcolumn
            ]
        });
        me.items = me.grid;
        me.buttons = [{
            text: 'Salvar',
            iconCls: 'fa fa-check'
        },{
            xtype: 'tbspacer', width: 5
        },{
            text: 'Cancelar',
            iconCls: 'fa fa-times',
            listeners: {
                click: function () { 
                    me.close();
                }
            }
        }];
        me.callParent(arguments);
    }
});