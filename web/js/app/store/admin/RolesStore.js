
Ext.define('SCS.store.admin.RolesStore', {
    extend: 'Ext.data.Store',
    xtype: 'rolesStore',
    
    fields: ['id', 'name', 'role'],
    
    autoLoad: true,
    sorters: 'name',
    groupField: 'name',
    
    proxy : {
        type: 'ajax',
        url: '../../app.php/admin/roles/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});