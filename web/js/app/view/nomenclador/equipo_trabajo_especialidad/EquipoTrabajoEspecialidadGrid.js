
Ext.define('SCS.view.nomenclador.equipo_trabajo_especialidad.EquipoTrabajoEspecialidadGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-equipo_trabajo_especialidad',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.EquipoTrabajoEspecialidadStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":false},{"text":"Nombre","dataIndex":"nombre","flex":3,"hidden":false},{"text":"Descripcion","dataIndex":"descripcion","flex":7,"hidden":false}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar equipo_trabajo_especialidad',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar equipo_trabajo_especialidad',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con equipo_trabajo_especialidad',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});