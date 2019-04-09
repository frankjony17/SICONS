
Ext.define('SCS.store.ControlCalidadStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre","descripcion","control_calidad_tipo_id"],
    autoLoad: true,
    sorters: 'nombre',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/control_calidad/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
