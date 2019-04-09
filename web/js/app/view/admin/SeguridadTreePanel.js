
Ext.define('SCS.view.admin.SeguridadTreePanel', {
    extend: 'Ext.tree.Panel',
    xtype: 'seguridadTreePanel',

    store: Ext.create('SCS.store.admin.SeguridadTreeStore'),
    useArrows: true,
    rootVisible: false 
});