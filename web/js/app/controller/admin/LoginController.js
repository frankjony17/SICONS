
Ext.define('SCS.controller.admin.LoginController', {
    extend: 'Ext.app.Controller',

    control: {
        '#login-button': {
            click: "login"
        }
    },
    /*  */
    message: function (title, message, icon) {
        Ext.Msg.show({ title: title, message: message, buttons:Ext.MessageBox.OK, icon: icon });
    },
    /*  */
    login: function (btn) {
        var me = this, form = btn.up('form');

        form.submit({
            failure: function(form, action) {
                me.message('Error?', action.response.responseText, Ext.Msg.ERROR);
            }
        });
    }
});