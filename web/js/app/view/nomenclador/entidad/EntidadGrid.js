
Ext.define('SCS.view.nomenclador.entidad.EntidadGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-entidad',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.EntidadStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":true},{"text":"Nombre","dataIndex":"nombre","flex":7,"hidden":false},{"text":"Telefonos","dataIndex":"telefonos","flex":7,"hidden":false},{"text":"Correo Electronico","dataIndex":"correo_electronico","flex":7,"hidden":false},{"text":"Direccion","dataIndex":"direccion","flex":7,"hidden":false},{"text":"Fax","dataIndex":"fax","flex":7,"hidden":false}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar entidad',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar entidad',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con entidad',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});