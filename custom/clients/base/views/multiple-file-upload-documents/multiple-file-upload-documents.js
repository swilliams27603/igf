/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
    plugins: ['Dashlet', 'CssLoader'],

    css: [
        'custom/themes/dropzone.css',
    ],

    initialize: function(options) {
        this._super('initialize', [options]);
    },

    render: function () {
        this._super('render');

        var beforeSend = _.bind(function (file, xhr, formData) {
            formData.append('document_type', this.$el.find("input[name=template_type]").val());
            formData.append('category_id', this.$el.find("input[name=category_id]").val());
            formData.append('sub_category_id', this.$el.find("input[name=sub_category_id]").val());
        }, this);

        var successCallback = _.bind(function (file){
            app.alert.show('document_upload_success_' + file.name, {
                level: 'success',
                title: App.lang.getAppString('LBL_SUCCESS') + ' ('+ file.name+')',
                messages: App.lang.getAppString('LBL_M_FILE_UPLOAD_SUCCESS'),
                autoClose: true,
                autoCloseDelay: 5000,
            });
        });

        var errorCallback = _.bind(function (file, message){
            app.alert.show('document_upload_error' + file.name, {
                level: 'error',
                title: App.lang.getAppString('LBL_ERROR') + ' ('+ file.name+')',
                messages: _.isObject(message) ? message.error_message : message,
                autoClose: true,
                autoCloseDelay: 5000,
            });
        });

        var completeCallback = _.bind(function (file) {
            file.previewElement.remove();
            file.completed = true;

            var uncompletedFiles = _.find(this.$el.find('#file-drop-zone')[0].dropzone.files, function(dropzoneFile){
                return _.isUndefined(dropzoneFile.completed) || !dropzoneFile.completed;
            });

            if(_.isUndefined(uncompletedFiles)) {
                var subpanelCollection = this.model.getRelatedCollection('notes');
                subpanelCollection.fetch({relate: true});

                this.$el.find('#file-drop-zone').removeClass('dz-started');
            }
        }, this);

        this.$el.find("#file-drop-zone").dropzone({
            headers: {
                'OAuth-Token': App.api.getOAuthToken()
            },
            url: app.api.buildURL('createDocumentsFromFiles/' + this.module + '/' + this.model.get('id')),
            method: "POST",
            uploadMultiple: false,
            previewTemplate: this.$el.find('#template-preview').html(),
            complete: completeCallback,
            success: successCallback,
            error: errorCallback,
            maxFilesize: 99999,
            init: function() {
                this.on("sending", beforeSend);
            }
        });
    }
})
