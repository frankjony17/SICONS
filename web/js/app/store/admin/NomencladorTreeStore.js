
Ext.define('SCS.store.admin.NomencladorTreeStore', {
    extend : 'Ext.data.TreeStore',

    root: {
        expanded: true,
        children: [{
            text: '<b>Base</b>',
            iconCls: 'tree-base-nomenclador',
            id: 'tree-base-nomenclador',
            expanded: false,
            children: [{
                text: '<b>Entidad</b>',
                iconCls: 'tree-entidad-nomenclador',
                leaf: true
            },{
                text: '<b>Cargo</b>',
                iconCls: 'tree-cargo-nomenclador',
                leaf: true
            },{
                text: '<b>Tipo de Persona</b>',
                iconCls: 'tree-persona-tipo-nomenclador',
                leaf: true
            },{
                text: '<b>Persona</b>',
                iconCls: 'tree-persona-nomenclador',
                leaf: true
            }]
        },{
            text: '<b>Componentes</b>',
            iconCls: 'tree-componentes-nomenclador',
            expanded: true,
            children: [{
                text: '<b>Elementos de Control</b>',
                iconCls: 'tree-elemento-control-nomenclador',
                expanded: false,
                children: [{
                    text: '<b>Tipo</b>',
                    iconCls: 'tree-elemento-control-tipo-nomenclador',
                    leaf: true
                },{
                    text: '<b>Elemento</b>',
                    iconCls: 'tree-elemento-nomenclador',
                    leaf: true
                }]
            },{
                text: '<b>Aspectos a Revizar</b>',
                iconCls: 'tree-aspectos-revizar-nomenclador',
                leaf: true
            },{
                text: '<b>Consejos Técnicos</b>',
                iconCls: 'tree-consejo-tecnico-nomenclador',
                leaf: true
            },{
                text: '<b>Control de Calidad</b>',
                iconCls: 'tree-control-calidad-nomenclador',
                expanded: false,
                children: [{
                    text: '<b>Tipo</b>',
                    iconCls: 'tree-control-calidad-tipo-nomenclador',
                    leaf: true
                },{
                    text: '<b>Control</b>',
                    iconCls: 'tree-control-nomenclador',
                    leaf: true
                }]
            },{
                text: '<b>Aspectos (Servicio-Indicadores)</b>',
                iconCls: 'tree-aspectos-servicio-indicadores-nomenclador',
                leaf: true
            }]
        },{
            text: '<b>Proyecto</b>',
            iconCls: 'tree-proyecto-nomenclador',
            expanded: true,
            children: [{
                text: '<b>Tipo de Proyecto</b>',
                iconCls: 'tree-proyecto-tipo-nomenclador',
                leaf: true
            },{
                text: '<b>Objetos</b>',
                iconCls: 'tree-objetos-nomenclador',
                leaf: true
            },{
                text: '<b>Especialidades</b>',
                iconCls: 'tree-especialidades-nomenclador',
                leaf: true
            },{
                text: '<b>Especialidad (Equipo-Trabajo)</b>',
                iconCls: 'tree-especialidad-eqt-nomenclador',
                leaf: true
            }]
        },{
            text: '<b>Documentos</b>',
            iconCls: 'tree-documentos-nomenclador',
            expanded: false,
            children: [{
                text: '<b>Escala</b>',
                iconCls: 'tree-escala-nomenclador',
                leaf: true
            },{
                text: '<b>Formato</b>',
                iconCls: 'tree-formato-nomenclador',
                leaf: true
            }]
        }]
    }
});