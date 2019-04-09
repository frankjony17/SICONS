Ext.define('SCS.view.jefedisenno.proyecto.ProyectoForm6', {
    extend: 'Ext.form.Panel',
    xtype: 'form-proyecto-6',

    padding: '10 10 10 10',
    height: 480,

    initComponent: function () {
        var html = "";
        html += "<ul>";
        html += "<li>PE-06 Tarea de proyección</li>";
        html += "<li>PE-05 Plan de Calidad</li>";
        html += "<li>PE-07-2 Revisión de contrato</li>";
        html += "<li>Consejo técnico 1: Ideas Conceptúales o Anteproyecto</li>";
        html += "<ul>";
        html += "<li>PE-06 Tarea de proyección</li>";
        html += "<li>PE-05 Plan de Calidad</li>";
        html += "<li>PE-07-2 Revisión de contrato</li>";
        html += "<li>Consejo técnico 1: Ideas Conceptúales o Anteproyecto</li>";
        html += "<ul>";
        html += "<li>PE-10 Acta Consejo Técnico</li>";
        html += "<li>Control de Calidad # 1</li>";
        html += "<ul>";
        html += "<li>PE-13 Control Calidad</li>";
        html += "<li>PG-03-R2 Reporte de no conformidades medidas correctivas</li>";
        html += "</ul>";
        html += "</ul>";
        html += "<li>Consejo Técnico 2: Proyecto Técnico</li>";
        html += "<ul>";
        html += "<li>PE-10 Acta Consejo Técnico</li>";
        html += "<li>Control de Calidad # 2</li>";
        html += "<ul>";
        html += "<li>PE-13- Control Calidad</li>";
        html += "<li>PG-03-R2 Reporte de no conformidades medidas correctivas</li>";
        html += "</ul>";
        html += "</ul>";
        html += "<li>Consejo Técnico 3: Proyecto Técnico Ejecutivo</li>";
        html += "<ul>";
        html += "<li>PE-10 Acta Consejo Técnico</li>";
        html += "<li>Control de Calidad # 3</li>";
        html += "<ul>";
        html += "<li>PE-13- Control Calidad</li>";
        html += "<li>PG-03-R2 Reporte de no conformidades medidas correctivas</li>";
        html += "<li>Revision del Producto</li>";
        html += "<ul>";
        html += "<li>PE-08-R3 Revisión gráfica</li>";
        html += "<li>PE-08-R4 Revisión escrita</li>";
        html += "<li>PE-08-R5 Registro de errores</li>";
        html += "</ul>";
        html += "</ul>";
        html += "<li>Control de Calidad # 4</li>";
        html += "<ul>";
        html += "<li>PE-13 Control Calidad</li>";
        html += "</ul>";
        html += "</ul>";
        html += "</ul>";
        html += "<li>Otros</li>";
        html += "</ul>";

        this.items = [{
            xtype: 'panel',
            anchor: '100%',
            height: 370,
            html: html
        },{
            xtype: 'checkboxfield',
            hideLabel: true,
            checked: true,
            boxLabel: 'Activar Seguimiento'
        }];
        this.buttons = [{
            text: 'Atrás',
            iconCls: 'fa fa-chevron-left',
            id: 'back-form-6'
        },{
            text: 'Finalizar',
            iconCls: 'fa fa-flash',
            id: 'end-form-6'
        }];
        this.callParent(arguments);
    }
});