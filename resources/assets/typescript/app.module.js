"use strict";
var core_1 = require('@angular/core');
var platform_browser_1 = require('@angular/platform-browser');
var forms_1 = require('@angular/forms');
var app_routing_1 = require('./app.routing');
var app_component_1 = require('./app.component');
var feature_list_component_1 = require('./features/feature-list/feature-list.component');
var feature_component_1 = require('./features/feature/feature.component');
var feature_service_1 = require('./features/shared/feature.service');
var home_component_1 = require('./home/home.component');
var sidebar_component_1 = require('./sidebar/sidebar.component');
var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            imports: [
                platform_browser_1.BrowserModule,
                forms_1.FormsModule,
                app_routing_1.routing
            ],
            declarations: [
                app_component_1.AppComponent,
                feature_list_component_1.FeatureListComponent,
                feature_component_1.FeatureComponent,
                home_component_1.HomeComponent,
                sidebar_component_1.SidebarComponent
            ],
            providers: [
                app_routing_1.appRoutingProviders,
                feature_service_1.FeatureService
            ],
            bootstrap: [
                app_component_1.AppComponent
            ]
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map