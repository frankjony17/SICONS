
Ext.define('SCS.store.EquipoTrabajoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ['id', 'nombre', 'cargo', 'responsabilidad', 'participacion', 'espId'],
    sorters: 'nombre',
    autoLoad: false,
    proxy : {
        type : 'ajax',
        url: '../proyecto/list/equipo/trabajo',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
