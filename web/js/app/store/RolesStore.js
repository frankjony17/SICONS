
Ext.define('SCS.store.RolesStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","name","role"],
    autoLoad: true,
    sorters: 'name',
    proxy : {
        type : 'ajax',
        url: '../admin/roles/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
