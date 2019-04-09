
Ext.define('SCS.view.equipotrabajo.Viewport', {
    extend: 'Ext.container.Viewport',
    xtype: 'viewport-equipotrabajo',
    
    layout : {
        type: 'border'
    },
    initComponent: function() {
        var me = this;

        me.items = [{
            region: 'north',
            xtype: 'container',
            border: false,
            height: 54,
            style: {
                backgroundColor: '#60A3DD'
            },
            layout: {
                type: 'hbox',
                align: 'center'
            },
            items:[{
                xtype: 'tbspacer',
                width: 4
            },{
                xtype: 'buttongroup',
                items: [{
                    text: 'Gestionar-Proyecto',
                    iconCls: 'gestionar-proyecto',
                    menu: Ext.create('Ext.menu.Menu', {
                        width: 250,
                        closeAction : 'destroy',
                        items: [{
                            text: '<b>Tarea de Proyección</b>',
                            iconCls: 'viewport-menu-tarea-proyeccion',
                            id: 'viewport-menu-tarea-proyeccion'
                        }]
                    })
                }]
            },{
                xtype: 'tbfill'
            },{
                xtype: 'tbspacer',
                width: 7
            },{
                xtype: 'buttongroup',
                items: [{
                    text: 'Aplicaciones',
                    xtype: 'button',
                    //menu: Ext.create('CDT.view.AplicacionesMenu',{ appId: me.appId }),
                    iconCls: 'app'
                },{
                    text: 'Salir',
                    xtype: 'button',
                    iconCls: 'logout',
                    id: 'logout'
                }]
            }]
        },{
            region: 'center',
            xtype: 'panel',
            border: false,
            bodyStyle: 'background-image:url(../../images/square.gif);',
            id: 'center-panel-id',
        },{
            region: 'south',
            id: 'south-panel-id',
            items: Ext.create('SCS.view.StatusBarPanel')
        }];
        me.callParent(arguments);
    }
});