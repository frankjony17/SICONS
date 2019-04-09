
Ext.define('SCS.store.PersonaStore', {
    extend: 'Ext.data.Store',
    /* Config */
    fields: ["id","nombre_apellidos","telefonos","correo_electronico","cargo_id","entidad_id","persona_tipo_id"],
    autoLoad: true,
    sorters: 'nombre_apellidos',
    proxy : {
        type : 'ajax',
        url: '../nomenclador/persona/list',
        reader : {
            type            : 'json',
            root            : 'data',
            totalProperty   : 'total',
            successProperty : 'success'
        }
    }
});
