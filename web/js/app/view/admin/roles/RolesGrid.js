
Ext.define('SCS.view.admin.roles.RolesGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-roles',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.RolesStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":false},{"text":"Name","dataIndex":"name","flex":3,"hidden":false},{"text":"Role","dataIndex":"role","flex":5,"hidden":false}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar roles',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar roles',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con roles',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});