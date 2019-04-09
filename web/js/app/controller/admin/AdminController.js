
Ext.define('SCS.controller.admin.AdminController', {
    extend: 'Ext.app.Controller',

    control: {
        'viewport-admin': { resize: "resizeViewport" },
        '#admin-logout': { click: "logout" },
        'roles-grid': { resize: "resizeGrid" },
        'grid-users': {
            resize: "resizeGrid",
            afterrender: "afterRenderGrid",
            itemcontextmenu: "itemContextMenu"
        },
        'grid-users [text=Adicionar]': {
            click: "showWindows"
        },
        'grid-users [text=Eliminar]': {
            click: "confirmRemove"
        },
        /* Form */
        'form-users': {
            afterrender: "afterRenderForm"
        },
        'form-users [text=Salvar]': {
            click: "isValid"
        },
        'form-users [text=Editar]': {
            click: "isValid"
        },
        'users-edit-form button[iconCls=ok]': {
            click: "editUsers"
        },
        'roles-form button[iconCls=ok]': {
            click: "addRoles"
        }
    },
    /* when Resize Viewport */
    resizeViewport: function (viewport, width, height) {
        var tree = Ext.getCmp('west-nomenclador-tree');
        /* Tree Nomenclador and Tree Seguridad */
        var h1 = (height/100) * 60, h2 = height - h1;
        if (h2 > 120) {
            h1 += h2 - 205;
        }
        tree.setHeight(h1);
    },
    /* When resize Grid */
    resizeGrid: function (grid) {
        var centerpanel = Ext.getCmp('center-panel-id');
        grid.setHeight(centerpanel.getHeight() - 47);
    },
    /* Logout */
    logout: function () {
        location.href = '../../app.php/logout';
    },
    /*  */
    afterRenderGrid: function (grid) {
        this.grid = grid;
        this.store = grid.getStore();
    },
    /*  */
    afterRenderForm: function (win) {
        this.win = win;
        this.form = win.down('form');
    },
    /*  */
    showWindows: function () {
        Ext.create('SCS.view.admin.users.UsersForm', { autoShow: true, btnText: 'Salvar', title: 'Adicionar Users' });
    },
    /* Used in Add and Update > Is valid form? */
    isValid: function () {
        if (this.form.getForm().isValid()) {
            this.submitClick();
        } else {
            this.message('Atención?', '<b><span style="color:red;">Formulario no válido</span></b>, verifique las casillas en <b><span style="color:red;">rojo</span></b>.', Ext.Msg.QUESTION);
        }
    },
    /*  */
    submitClick: function () {
        var me = this;
        this.form.submit({
            success: function() {
                me.success();
            },
            failure: function(form, action) {
                me.message('Error?', action.response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    confirmRemove: function () {
        if (this.grid.selModel.getCount() >= 1) {
            Ext.MessageBox.confirm('Confirmación', 'Desea eliminar los registro seleccionado?', confirm, this);
        } else {
            this.message('Atención', 'Seleccione el o los registro que desea eliminar.', Ext.Msg.QUESTION);
        }
        function confirm (btn) {
            if (btn === 'yes') {
                this.remove();
            }
        }
    },
    /*  */
    remove: function () {
        var me = this, ids = [];
        Ext.Array.each(this.grid.selModel.getSelection(), function (row) {
            ids.push(row.get('id'));
        });
        Ext.Ajax.request({
            url: '../admin/users/remove',
            params: { ids:  Ext.encode(ids) },
            success: function(response) {
                if (response.responseText === '') {
                    me.store.load();
                } else {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function(response){
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    itemContextMenu: function (view, record, item, index, e) {
        var me = this, menu = Ext.create('SCS.view.admin.users.UsersMenu',{
            option: record.get('is_active'),
            listeners: {
                click: function (menu, item) {
                    switch (item.iconCls) {
                        case 'menu-active-item':
                        case 'menu-dasactivar-item':
                            me.activeUsers(record);
                            break;
                        case 'menu-password-item':
                            break;
                        case 'menu-edit-item':
                            me.showFormEditUsers(record);
                            break;
                        case 'menu-roles-item':
                            me.showRoles(record);
                            break;
                    }
                }
            }
        });
        menu.showAt(e.getXY());
        e.stopEvent();
    },
    /*  */
    activeUsers: function (record) {
        var me = this;
        /*  */
        Ext.Ajax.request({
            url: '../admin/users/active_users',
            params: { Id: record.get('id') },
            success: function (response) {
                if (response.responseText === '') {
                    Ext.toast('Operación realizada exitosamente.', 'Activación OK');
                    me.store.load();
                } else {
                    me.message('Error', response.responseText, Ext.Msg.ERROR);
                }
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    showFormEditUsers: function (record){
        var win = Ext.create('SCS.view.admin.users.UsersEditForm'),
            form = win.down('form');

        form.down('[fieldLabel=Usuario]').setValue(record.get('username'));
        form.down('[fieldLabel=Correo electrónico]').setValue(record.get('email'));

        win.usersId = record.get('id');
        win.store = this.store;
        win.show();
    },
    /*  */
    showRoles: function (record, store) {
        Ext.create('SCS.view.admin.roles.RolesForm',{
            usersId: record.get('id'),
            usersStore: store
        });
    },
    /*  */
    addRoles: function (btn) {
        var me = this, win = btn.up('window'), dataRows = [];

        win.rolesStore.each(function(rec){
            dataRows.push({'id': rec.get('id'), 'estado': rec.get('estado')});
        });
        Ext.Ajax.request({
            url: '../admin/users/add_roles_users',
            params: {
                Id: win.usersId,
                Roles: Ext.encode(dataRows)
            },
            success: function (response) {
                switch (response.responseText) {
                    case '':
                        Ext.toast('Operación realizada exitosamente.', 'Creación OK');
                        me.store.load();
                        win.close();
                        break;
                    default:
                        me.message('Error', response.responseText, Ext.Msg.ERROR);
                        break;
                }
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    editUsers: function (btn) {
        var me = this, win = btn.up('window'), form = win.down('form'),
            alias = form.down('[fieldLabel=Usuario]').getValue(),
            correo = form.down('[fieldLabel=Correo electrónico]').getValue();

        Ext.Ajax.request({
            url: '../admin/users/edit_users',
            params: {
                Id    : win.usersId,
                Alias : alias,
                Correo: correo
            },
            success: function (response) {
                switch (response.responseText) {
                    case '':
                        Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
                        me.store.load();
                        win.close();
                        break;
                    case 'Unico':
                        me.message('Atención', 'Ya existe un usuario con los siguientes datos:<br><b>Alias: '+alias+'<br>Correo: '+correo+'.</b>', Ext.msg.INFO);
                        form.getForm().reset();
                        break;
                    default:
                        me.message('Error', response.responseText, Ext.Msg.ERROR);
                        break;
                }
            },
            failure: function (response) {
                me.message('Error', response.responseText, Ext.Msg.ERROR);
            }
        });
    },
    /*  */
    success: function () {
        this.store.reload();
        if (this.form.btnText === 'Adicionar') {
            this.form.reset();
            Ext.toast('Operación realizada exitosamente.', 'Creación OK');
        } else {
            this.win.close();
            Ext.toast('Operación realizada exitosamente.', 'Actualización OK');
        }
    },
    /*  */
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    }
});