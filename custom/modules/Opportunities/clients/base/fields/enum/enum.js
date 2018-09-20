({
    extendsFrom: 'EnumField',
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },


    _filterOptions: function (options) {
        var new_options = this._super('_filterOptions', [options]);
        if(this.name != 'sales_stage' || app.user.get('type') == 'admin') {
            return new_options;
        }



        var filtered_options = {};
        var disabled_options = app.config.unselectable_opportunity_status_for_normal_user;

        if(_.isEmpty(disabled_options) || !_.contains(this.view.plugins, "Editable")) {
            return new_options;
        }

        //Force the current value(s) into the availible options
        syncedVal = this.model.getSynced();
        currentValue = _.isUndefined(syncedVal[this.name]) ? this.model.get(this.name) : syncedVal[this.name];
        if (_.isString(currentValue)) {
            currentValue = [currentValue];
        }

        var currentIndex = {};

        // add current values to the index in case if current model is saved to the server in order to prevent data loss
        if (!this.model.isNew()) {
            _.each(currentValue, function(value) {
                currentIndex[value] = true;
                filtered_options[value] = options['value'];
            });
        }

        //Now remove the disabled options
        _.each(new_options, function(value, key) {
            if ((value in currentIndex) || _.isUndefined(disabled_options[key])) {
                filtered_options[key] = value;
            }
        }, this);

        return filtered_options;
    },
})
