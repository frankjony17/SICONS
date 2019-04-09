
Ext.define('SCS.view.admin.NomencladorTreePanel', {
    extend: 'Ext.tree.Panel',

    store: Ext.create('SCS.store.admin.NomencladorTreeStore'),
    useArrows: true,
    rootVisible: false 
});