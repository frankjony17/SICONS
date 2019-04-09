
Ext.define('SCS.view.admin.LoginViewport', {
    extend: 'Ext.container.Viewport',
    xtype : 'viewport-admin',
    
    layout: 'border',
    bodyBorder: false,
    id: 'view-viewport-admin',
    
    initComponent: function() {
        this.items = [{
            region: 'center',
            xtype: 'panel',
            bodyStyle: 'background-image:url(/images/square.gif);',
            id: 'center-panel-id',
            items: Ext.create('Ext.window.Window', {
                width: '95%',
                height: 600,
                layout: 'fit',
                autoShow: true,
                plain: true,
                resizable: false,
                closable: false,
                draggable: false,
                items: Ext.create('SCS.view.admin.LoginPanel')
            })
        }];
        this.callParent(arguments);
    }
});