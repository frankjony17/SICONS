
Ext.define('SCS.store.ControlCalidadTipoStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion"],
    autoLoad: true,
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/control_calidad_tipo/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
