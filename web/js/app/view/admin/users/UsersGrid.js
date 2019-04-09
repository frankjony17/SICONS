
Ext.define('SCS.view.admin.users.UsersGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-users',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.UsersStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":false},{"text":"Username","dataIndex":"username","flex":2,"hidden":false},{"text":"Password","dataIndex":"password","flex":4,"hidden":false},{"text":"Email","dataIndex":"email","flex":4,"hidden":false},{"text":"Is Active","dataIndex":"is_active","flex":2,"hidden":false}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar users',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar users',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con users',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});