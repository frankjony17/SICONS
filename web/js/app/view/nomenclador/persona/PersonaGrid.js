
Ext.define('SCS.view.nomenclador.persona.PersonaGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'grid-persona',
    /* Config options */
    width: '100%',
    border: 1,
    selType: 'checkboxmodel',
    autoScroll: 1,
    scrollable: 'vertical',
    /* Store */
    store: Ext.create('SCS.store.PersonaStore'),
    /* Columns */
    columns: [{"xtype":"rownumberer","text":"No","width":45,"align":"center"},{"text":"Id","dataIndex":"id","flex":2,"hidden":true},{"text":"Nombre Apellidos","dataIndex":"nombre_apellidos","flex":7,"hidden":false},{"text":"Telefonos","dataIndex":"telefonos","flex":3,"hidden":false},{"text":"Correo Electronico","dataIndex":"correo_electronico","flex":7,"hidden":false},{"text":"Cargo Id","dataIndex":"cargo_id","flex":2,"hidden":true},{"text":"Entidad Id","dataIndex":"entidad_id","flex":2,"hidden":true},{"text":"Persona Tipo Id","dataIndex":"persona_tipo_id","flex":2,"hidden":true}],
    /* TollBar */
    tbar : [{
        text: 'Adicionar',
        tooltip: 'Adicionar persona',
        iconCls: 'fa fa-plus',
        action: 'add'
    },{
        text: 'Eliminar',
        tooltip: 'Eliminar persona',
        iconCls: 'fa fa-trash',
        action: 'remove'
    }, '->', {
        tooltip: 'Ayuda relacionada con persona',
        iconCls: 'fa fa-info',
        action: 'help'
    }]
});