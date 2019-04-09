
Ext.define('SCS.store.AspectosServicioIndicadoresStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","aspectos","cumplimiento","puntos"],
    autoLoad: true,
    sorters: 'aspectos',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/aspectos_servicio_indicadores/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
