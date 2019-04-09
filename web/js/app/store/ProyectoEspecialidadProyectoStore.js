
Ext.define('SCS.store.ProyectoEspecialidadProyectoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion"],
    autoLoad: false,
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../proyecto/list/especialidad',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
