
Ext.define('SCS.view.nomenclador.control_calidad.ControlCalidadGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-control_calidad',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.ControlCalidadStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":true},{"text":"Nombre","dataIndex":"nombre","flex":3,"hidden":false},{"text":"Descripcion","dataIndex":"descripcion","flex":7,"hidden":false},{"text":"Control Calidad Tipo Id","dataIndex":"control_calidad_tipo_id","flex":2,"hidden":true}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar control_calidad',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar control_calidad',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con control_calidad',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});