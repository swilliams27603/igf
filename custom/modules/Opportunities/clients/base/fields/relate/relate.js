({
    extendsFrom: 'RelateField',
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },
    
    getCustomFilterOptions: function(force) {
    	if ((this.name != 'ibm_legal_entity_opportunities_1_name') &&
            (this.name != 'account_name') ) {
    		return this.getFilterOptions(force);
        }
    	
    	var ent_id = this.model.get('ibm_enterprise_opportunities_1ibm_enterprise_ida');
    	if (!_.isUndefined(ent_id)) {
    		var ent_name = this.model.get('ibm_enterprise_opportunities_1_name');
    	
        	var enterprise = app.data.createBean('ibm_Enterprise', {
        		'name': ent_name,
        		'id'  : ent_id,
        	});
    	} 
    	
    	var le_id = this.model.get('ibm_legal_entity_opportunities_1ibm_legal_entity_ida');
    	if(!_.isUndefined(le_id)) {
    		var le_name = this.model.get('ibm_legal_entity_opportunities_1_name');
    	
    		var legal = app.data.createBean('ibm_Legal_Entity', {
    			'name': le_name,
    			'id'  : le_id,
    		});
    	}
    	
    	switch(this.name) {
    		case 'ibm_legal_entity_opportunities_1_name':	
    			if (_.isUndefined(ent_id)) {
    				this.getFilterOptions(force);
    			} else {	
    				this._filterOptions = new app.utils.FilterOptions()
    				.config({
    					'initial_filter': 'filterEnterpriseTemplate',
    					'initial_filter_label': 'LBL_FILTER_ENTERPRISE_TEMPLATE',
    					'filter_populate': {
    						'ibm_enterprise_ibm_legal_entity_1ibm_enterprise_ida': [ent_id],
    					},
    				})
    				.populateRelate(enterprise)
    				.format();
    			}
    			break;
    		case 'account_name':	
    			if ((!_.isUndefined(ent_id)) && (!_.isUndefined(le_id))) {
    		    	this._filterOptions = new app.utils.FilterOptions()
    				.config({
    					'initial_filter': 'filterEntLegalTemplate',
    					'initial_filter_label': 'LBL_FILTER_ENTLEGAL_TEMPLATE',
    					'filter_populate': {
    						'ibm_enterprise_accounts_1ibm_enterprise_ida': [ent_id],
    						'ibm_legal_entity_accounts_1ibm_legal_entity_ida':[le_id],
    					},
    				})
    				.populateRelate(enterprise)
    				.populateRelate(legal)
    				.format();
    			} else if (!_.isUndefined(ent_id)) {
    		    	this._filterOptions = new app.utils.FilterOptions()
    				.config({
    					'initial_filter': 'filterEntLegalTemplate',
    					'initial_filter_label': 'LBL_FILTER_ENTLEGAL_TEMPLATE',
    					'filter_populate': {
    						'ibm_enterprise_accounts_1ibm_enterprise_ida': [ent_id],
    					},
    				})
    				.populateRelate(enterprise)
    				.format();
    			} else if (!_.isUndefined(le_if)) {
    		    	this._filterOptions = new app.utils.FilterOptions()
    				.config({
    					'initial_filter': 'filterEntLegalTemplate',
    					'initial_filter_label': 'LBL_FILTER_ENTLEGAL_TEMPLATE',
    					'filter_populate': {
    						'ibm_legal_entity_accounts_1ibm_legal_entity_ida':[le],
    					},
    				})
    				.populateRelate(legal)
    				.format();
    			}
    			break;
    		default:
    			return this.getFilterOptions(force);
    	}
    	
        return this._filterOptions;
    },
    
    buildFilterDefinition: function(searchTerm) {
    	var filter = this._super('buildFilterDefinition', [searchTerm]);
    	
    	var ent = this.model.get('ibm_enterprise_opportunities_1ibm_enterprise_ida');
    	var le = this.model.get('ibm_legal_entity_opportunities_1ibm_legal_entity_ida');
    	
    	switch (this.name) {
    		case 'ibm_legal_entity_opportunities_1_name':
    			if (!_.isEmpty(ent)) {
    				filter = [{
    					'ibm_enterprise_ibm_legal_entity_1ibm_enterprise_ida': ent
    		        }].concat(filter);
    			}			
    			break;
    		
    		case 'account_name':
    			if (!_.isEmpty(ent)) {
    				filter = [{
    					'ibm_enterprise_accounts_1ibm_enterprise_ida': ent
    		        }].concat(filter);
    			} 			

    			if (!_.isEmpty(le)) {
    				filter = [{
    					'ibm_legal_entity_accounts_1ibm_legal_entity_ida': le	
    				}].concat(filter);
    			}
    			break;
    			
    		default:
    			return filter;
    	}
    	
    	return filter;
    },
    
    openSelectDrawer: function() {
        var layout = 'selection-list';
        var context = {
            module: this.getSearchModule(),
            fields: this.getSearchFields(),
            filterOptions: this.getCustomFilterOptions()
        };

        if (!!this.def.isMultiSelect) {
            layout = 'multi-selection-list';
            _.extend(context, {
                preselectedModelIds: _.clone(this.model.get(this.def.id_name)),
                maxSelectedRecords: this._maxSelectedRecords,
                isMultiSelect: true
            });
        }

        app.drawer.open({
            layout: layout,
            context: context
        }, _.bind(this.setValue, this));
    },
    

})
