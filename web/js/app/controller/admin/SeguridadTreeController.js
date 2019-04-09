
Ext.define('SCS.controller.admin.SeguridadTreeController', {
    extend: 'Ext.app.Controller',

    control: {
        'seguridadTreePanel': {
            itemclick: "addComponent"
        }
    },
    /* Add Component in to CenterPanel */
    addComponent: function (view, record){
        var centerpanel = Ext.getCmp('center-panel-id');
        /* Remove component from centerpanel */
        centerpanel.removeAll();
        /* Add component in to centerpanel */
        centerpanel.add(this.getComponent(record.data.iconCls));
    },
    /* Get Component */
    getComponent: function (iconCls) {
        var component = {};
        /* Config component for add to centerpanel */
        component.closable = true;
        /* Add item tu component */
        switch (iconCls) {
            case 'tree-roles':
                component.title = "Listar Roles";
                component.iconCls = "fa fa-credit-card";
                component.items = Ext.create('SCS.view.admin.roles.RolesGrid');
                break;
            case 'tree-usuarios':
                component.title = "Gestionar Usuarios";
                component.iconCls = "fa fa-user";
                component.items = Ext.create('SCS.view.admin.users.UsersGrid');
                break;
        }
        return component;
    }
});