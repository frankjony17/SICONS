
Ext.define('SCS.view.admin.Viewport', {
    extend: 'Ext.container.Viewport',
    xtype : 'viewport-admin',
    
    layout: 'border',
    bodyBorder: false,
    id: 'view-viewport-admin',
    
    initComponent: function() {
        this.items = [{
            region: 'west',
            title: '<center><b>Nomencladores</b></center>',
            width: 275,
            split: true,
            collapsible: true,
            id: 'west-panel-id',
            items: [{
                region: 'north',
                border: false,
                scrollable: true,
                items: Ext.create('SCS.view.admin.NomencladorTreePanel'),
                height: 430,
                id: 'west-nomenclador-tree'
            }, {
                title: '<center><b>Seguridad</b></center>',
                region: 'center',
                items: Ext.create('SCS.view.admin.SeguridadTreePanel'),
                border: false,
                id: 'west-seguridad-tree'
            }]
        }, {
            region: 'center',
            xtype: 'panel',
            border: true,
            bodyStyle: 'background-image:url(/images/square.gif);',
            id: 'center-panel-id'
        },{
            region: 'south',
            xtype: 'container',
            border: false,
            height: 40,
            layout: {
                type: 'hbox',
                align: 'middle'
            },
            style: {
                backgroundColor: '#5fa2dd'
            },
            id: 'admin-header',
            items:[{
                xtype: 'component',
                id: 'admin-header-title',
                html: "Frank"/*username*/,
                flex: 1
            },{
                text: 'Aplicaciones',
                xtype: 'button',
                //menu: Ext.create('SCS.view.AplicacionesMenu', { appId: 'admin-app-id' }),
                iconCls: 'app'
            },{
                xtype: 'tbspacer',
                width: 7
            },{
                xtype: 'button',
                text: 'Salir',
                iconCls: 'logout',
                id: 'admin-logout'
            },{
                xtype: 'tbspacer',
                width: 10
            }]
        }];
        this.callParent(arguments);
    }
});