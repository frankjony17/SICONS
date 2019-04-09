
Ext.define('SCS.view.nomenclador.aspectos_servicio_indicadores.AspectosServicioIndicadoresGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-aspectos_servicio_indicadores',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.AspectosServicioIndicadoresStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":true},{"text":"Aspectos","dataIndex":"aspectos","flex":7,"hidden":false},{"text":"Cumplimiento","dataIndex":"cumplimiento","flex":7,"hidden":false},{"text":"Puntos","dataIndex":"puntos","flex":2,"hidden":false}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar aspectos_servicio_indicadores',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar aspectos_servicio_indicadores',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con aspectos_servicio_indicadores',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});