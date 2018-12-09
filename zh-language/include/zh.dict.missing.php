<?php
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Core:BulkExport:DateTimeFormat' => 'Date and Time format',
	'Core:BulkExport:DateTimeFormatDefault_Example' => 'Default format (%1$s), e.g. %2$s',
	'Core:BulkExport:DateTimeFormatCustom_Format' => 'Custom format: %1$s',
	'Core:DateTime:Placeholder_d' => 'DD',
	'Core:DateTime:Placeholder_j' => 'D',
	'Core:DateTime:Placeholder_m' => 'MM',
	'Core:DateTime:Placeholder_n' => 'M',
	'Core:DateTime:Placeholder_Y' => 'YYYY',
	'Core:DateTime:Placeholder_y' => 'YY',
	'Core:DateTime:Placeholder_H' => 'hh',
	'Core:DateTime:Placeholder_h' => 'h',
	'Core:DateTime:Placeholder_G' => 'hh',
	'Core:DateTime:Placeholder_g' => 'h',
	'Core:DateTime:Placeholder_a' => 'am/pm',
	'Core:DateTime:Placeholder_A' => 'AM/PM',
	'Core:DateTime:Placeholder_i' => 'mm',
	'Core:DateTime:Placeholder_s' => 'ss',
	'Class:User/Attribute:status' => 'Status',
	'Class:User/Attribute:status+' => 'Whether the user account is enabled or disabled.',
	'Class:User/Attribute:status/Value:enabled' => 'Enabled',
	'Class:User/Attribute:status/Value:disabled' => 'Disabled',
	'Class:User/Error:AtLeastOneOrganizationIsNeeded' => 'At least one organization must be assigned to this user.',
	'Class:User/Error:OrganizationNotAllowed' => 'Organization not allowed.',
	'Class:User/Error:UserOrganizationNotAllowed' => 'The user account does not belong to your allowed organizations.',
	'Expression:Unit:Short:DAY' => 'd',
	'Expression:Unit:Short:WEEK' => 'w',
	'Expression:Unit:Short:MONTH' => 'm',
	'Expression:Unit:Short:YEAR' => 'y',
	'UI:Login:Title' => 'iTop login',
	'UI:Button:Close' => 'Close',
	'UI:Button:Insert' => 'Insert',
	'UI:Button:More' => 'More',
	'UI:Button:Less' => 'Less',
	'UI:DashletUnknown:Label' => 'Unknown',
	'UI:DashletUnknown:Description' => 'Unknown dashlet (might have been uninstalled)',
	'UI:DashletUnknown:RenderText:View' => 'Unable to render this dashlet.',
	'UI:DashletUnknown:RenderText:Edit' => 'Unable to render this dashlet (class "%1$s"). Check with your administrator if it is still available.',
	'UI:DashletUnknown:RenderNoDataText:Edit' => 'No preview available for this dashlet (class "%1$s").',
	'UI:DashletUnknown:Prop-XMLConfiguration' => 'Configuration (shown as raw XML)',
	'UI:DashletProxy:Label' => 'Proxy',
	'UI:DashletProxy:Description' => 'Proxy dashlet',
	'UI:DashletProxy:RenderNoDataText:Edit' => 'No preview available for this third-party dashlet (class "%1$s").',
	'UI:DashletProxy:Prop-XMLConfiguration' => 'Configuration (shown as raw XML)',
	'UI:DashletGroupBy:Prop-Function' => 'Aggregation function',
	'UI:DashletGroupBy:Prop-FunctionAttribute' => 'Function attribute',
	'UI:DashletGroupBy:Prop-OrderDirection' => 'Direction',
	'UI:DashletGroupBy:Prop-OrderField' => 'Order by',
	'UI:DashletGroupBy:Prop-Limit' => 'Limit',
	'UI:DashletGroupBy:Order:asc' => 'Ascending',
	'UI:DashletGroupBy:Order:desc' => 'Descending',
	'UI:GroupBy:count' => 'Count',
	'UI:GroupBy:count+' => 'Number of elements',
	'UI:GroupBy:sum' => 'Sum',
	'UI:GroupBy:sum+' => 'Sum of %1$s',
	'UI:GroupBy:avg' => 'Average',
	'UI:GroupBy:avg+' => 'Average of %1$s',
	'UI:GroupBy:min' => 'Minimum',
	'UI:GroupBy:min+' => 'Minimum of %1$s',
	'UI:GroupBy:max' => 'Maximum',
	'UI:GroupBy:max+' => 'Maximum of %1$s',
	'UI:CSVImport:DateAndTimeFormats' => 'Date and time format',
	'UI:CSVImport:DefaultDateTimeFormat_Format_Example' => 'Default format: %1$s (e.g. %2$s)',
	'UI:CSVImport:CustomDateTimeFormat' => 'Custom format: %1$s',
	'UI:About:InstallationOptions' => 'Installation options',
	'UI:About:ManualExtensionSource' => 'Extension',
	'UI:About:Extension_Version' => 'Version: %1$s',
	'UI:About:RemoteExtensionSource' => 'iTop Hub',
	'UI:BrowseInlineImages' => 'Browse images...',
	'UI:UploadInlineImageLegend' => 'Upload a new image',
	'UI:SelectInlineImageToUpload' => 'Select the image to upload',
	'UI:AvailableInlineImagesLegend' => 'Available images',
	'UI:NoInlineImage' => 'There is no image available on the server. Use the "Browse" button above to select an image from your computer and upload it to the server.',
	'UI:ToggleFullScreen' => 'Toggle Maximize / Minimize',
	'UI:Button:ResetImage' => 'Recover the previous image',
	'UI:Button:RemoveImage' => 'Remove the image',
	'UI:UploadNotSupportedInThisMode' => 'The modification of images or files is not supported in this mode.',
	'UI:Search:Toggle' => 'Minimize / Expand',
	'UI:Search:AutoSubmit:DisabledHint' => 'Auto submit has been disabled for this class',
	'UI:Search:NoAutoSubmit:ExplainText' => 'Add some criterion on the search box or click the search button to view the objects.',
	'UI:Search:Criterion:MoreMenu:AddCriteria' => 'Add new criteria',
	'UI:Search:AddCriteria:List:RecentlyUsed:Title' => 'Recently used',
	'UI:Search:AddCriteria:List:MostPopular:Title' => 'Most popular',
	'UI:Search:AddCriteria:List:Others:Title' => 'Others',
	'UI:Search:AddCriteria:List:RecentlyUsed:Placeholder' => 'None yet.',
	'UI:Search:Criteria:Title:Default:Any' => '%1$s: Any',
	'UI:Search:Criteria:Title:Default:Empty' => '%1$s is empty',
	'UI:Search:Criteria:Title:Default:NotEmpty' => '%1$s is not empty',
	'UI:Search:Criteria:Title:Default:Equals' => '%1$s equals %2$s',
	'UI:Search:Criteria:Title:Default:Contains' => '%1$s contains %2$s',
	'UI:Search:Criteria:Title:Default:StartsWith' => '%1$s starts with %2$s',
	'UI:Search:Criteria:Title:Default:EndsWith' => '%1$s ends with %2$s',
	'UI:Search:Criteria:Title:Default:RegExp' => '%1$s matches %2$s',
	'UI:Search:Criteria:Title:Default:GreaterThan' => '%1$s > %2$s',
	'UI:Search:Criteria:Title:Default:GreaterThanOrEquals' => '%1$s >= %2$s',
	'UI:Search:Criteria:Title:Default:LessThan' => '%1$s < %2$s',
	'UI:Search:Criteria:Title:Default:LessThanOrEquals' => '%1$s <= %2$s',
	'UI:Search:Criteria:Title:Default:Different' => '%1$s ≠ %2$s',
	'UI:Search:Criteria:Title:Default:Between' => '%1$s between [%2$s]',
	'UI:Search:Criteria:Title:Default:BetweenDates' => '%1$s [%2$s]',
	'UI:Search:Criteria:Title:Default:BetweenDates:All' => '%1$s: Any',
	'UI:Search:Criteria:Title:Default:BetweenDates:From' => '%1$s from %2$s',
	'UI:Search:Criteria:Title:Default:BetweenDates:Until' => '%1$s until %2$s',
	'UI:Search:Criteria:Title:Default:Between:All' => '%1$s: Any',
	'UI:Search:Criteria:Title:Default:Between:From' => '%1$s from %2$s',
	'UI:Search:Criteria:Title:Default:Between:Until' => '%1$s up to %2$s',
	'UI:Search:Criteria:Title:DateTime:Between' => '%2$s <= 1$s <= %3$s',
	'UI:Search:Criteria:Title:Enum:In' => '%1$s: %2$s',
	'UI:Search:Criteria:Title:Enum:In:Many' => '%1$s: %2$s and %3$s others',
	'UI:Search:Criteria:Title:Enum:In:All' => '%1$s: Any',
	'UI:Search:Criteria:Title:ExternalKey:Empty' => '%1$s is defined',
	'UI:Search:Criteria:Title:ExternalKey:NotEmpty' => '%1$s is not defined',
	'UI:Search:Criteria:Title:ExternalKey:Equals' => '%1$s %2$s',
	'UI:Search:Criteria:Title:ExternalKey:In' => '%1$s: %2$s',
	'UI:Search:Criteria:Title:ExternalKey:In:Many' => '%1$s: %2$s and %3$s others',
	'UI:Search:Criteria:Title:ExternalKey:In:All' => '%1$s: Any',
	'UI:Search:Criteria:Title:HierarchicalKey:Empty' => '%1$s is defined',
	'UI:Search:Criteria:Title:HierarchicalKey:NotEmpty' => '%1$s is not defined',
	'UI:Search:Criteria:Title:HierarchicalKey:Equals' => '%1$s %2$s',
	'UI:Search:Criteria:Title:HierarchicalKey:In' => '%1$s: %2$s',
	'UI:Search:Criteria:Title:HierarchicalKey:In:Many' => '%1$s: %2$s and %3$s others',
	'UI:Search:Criteria:Title:HierarchicalKey:In:All' => '%1$s: Any',
	'UI:Search:Criteria:Operator:Default:Empty' => 'Is empty',
	'UI:Search:Criteria:Operator:Default:NotEmpty' => 'Is not empty',
	'UI:Search:Criteria:Operator:Default:Equals' => 'Equals',
	'UI:Search:Criteria:Operator:Default:Between' => 'Between',
	'UI:Search:Criteria:Operator:String:Contains' => 'Contains',
	'UI:Search:Criteria:Operator:String:StartsWith' => 'Starts with',
	'UI:Search:Criteria:Operator:String:EndsWith' => 'Ends with',
	'UI:Search:Criteria:Operator:String:RegExp' => 'Regular exp.',
	'UI:Search:Criteria:Operator:Numeric:Equals' => 'Equals',
	'UI:Search:Criteria:Operator:Numeric:GreaterThan' => 'Greater',
	'UI:Search:Criteria:Operator:Numeric:GreaterThanOrEquals' => 'Greater / equals',
	'UI:Search:Criteria:Operator:Numeric:LessThan' => 'Less',
	'UI:Search:Criteria:Operator:Numeric:LessThanOrEquals' => 'Less / equals',
	'UI:Search:Criteria:Operator:Numeric:Different' => 'Different',
	'UI:Search:Value:Filter:Placeholder' => 'Filter...',
	'UI:Search:Value:Search:Placeholder' => 'Search...',
	'UI:Search:Value:Autocomplete:StartTyping' => 'Start typing for possible values.',
	'UI:Search:Value:Autocomplete:Wait' => 'Please wait...',
	'UI:Search:Value:Autocomplete:NoResult' => 'No result.',
	'UI:Search:Value:Toggler:CheckAllNone' => 'Check all / none',
	'UI:Search:Value:Toggler:CheckAllNoneFiltered' => 'Check all / none visibles',
	'UI:Search:Criteria:Numeric:From' => 'From',
	'UI:Search:Criteria:Numeric:Until' => 'To',
	'UI:Search:Criteria:Numeric:PlaceholderFrom' => 'Any',
	'UI:Search:Criteria:Numeric:PlaceholderUntil' => 'Any',
	'UI:Search:Criteria:DateTime:From' => 'From',
	'UI:Search:Criteria:DateTime:FromTime' => 'From',
	'UI:Search:Criteria:DateTime:Until' => 'until',
	'UI:Search:Criteria:DateTime:UntilTime' => 'until',
	'UI:Search:Criteria:DateTime:PlaceholderFrom' => 'Any date',
	'UI:Search:Criteria:DateTime:PlaceholderFromTime' => 'Any date',
	'UI:Search:Criteria:DateTime:PlaceholderUntil' => 'Any date',
	'UI:Search:Criteria:DateTime:PlaceholderUntilTime' => 'Any date',
	'UI:Search:Criteria:HierarchicalKey:ChildrenIncluded:Hint' => 'Children of the selected objects will be included.',
	'UI:Search:Criteria:Raw:Filtered' => 'Filtered',
	'UI:Search:Criteria:Raw:FilteredOn' => 'Filtered on %1$s',
	'Expression:Operator:AND' => ' AND ',
	'Expression:Operator:OR' => ' OR ',
	'Expression:Unit:Long:DAY' => 'day(s)',
	'Expression:Unit:Long:HOUR' => 'hour(s)',
	'Expression:Unit:Long:MINUTE' => 'minute(s)',
	'Expression:Verb:NOW' => 'now',
	'Class:Person/Attribute:picture' => 'Picture',
	'Class:Person/Attribute:picture+' => '',
	'Person:personal_info' => 'Personal information',
	'config-apply-title' => 'Apply (Ctrl+S)',
	'config-saved' => 'Successfully recorded.',
	'config-reverted' => 'The configuration has been reverted.',
	'Menu:iTopHub' => 'iTop Hub',
	'Menu:iTopHub:Register' => 'Connect to iTop Hub',
	'Menu:iTopHub:Register+' => 'Go to iTop Hub to update your iTop instance',
	'Menu:iTopHub:Register:Description' => '<p>Get access to your community platform iTop Hub!</br>Find all the content and information you need, manage your instances through personalized tools & install more extensions.</br><br/>By connecting to the Hub from this page, you will push information about this iTop instance into the Hub.</p>',
	'Menu:iTopHub:MyExtensions' => 'Deployed extensions',
	'Menu:iTopHub:MyExtensions+' => 'See the list of extensions deployed on this instance of iTop',
	'Menu:iTopHub:BrowseExtensions' => 'Get extensions from iTop Hub',
	'Menu:iTopHub:BrowseExtensions+' => 'Browse for more extensions on iTop Hub',
	'Menu:iTopHub:BrowseExtensions:Description' => '<p>Look into iTop Hub’s store, your one stop place to find wonderful iTop extensions !</br>Find the ones that will help you customize and adapt iTop to your processes.</br><br/>By connecting to the Hub from this page, you will push information about this iTop instance into the Hub.</p>',
	'iTopHub:GoBtn' => 'Go To iTop Hub',
	'iTopHub:CloseBtn' => 'Close',
	'iTopHub:GoBtn:Tooltip' => 'Jump to www.itophub.io',
	'iTopHub:OpenInNewWindow' => 'Open iTop Hub in a new window',
	'iTopHub:AutoSubmit' => 'Don\'t ask me again. Next time, go to iTop Hub automatically.',
	'iTopHub:Explanation' => 'By clicking this button you will be redirected to iTop Hub.',
	'iTopHub:BackupFreeDiskSpaceIn' => '%1$s free disk space in %2$s.',
	'iTopHub:FailedToCheckFreeDiskSpace' => 'Failed to check free disk space.',
	'iTopHub:BackupOk' => 'Backup Ok.',
	'iTopHub:BackupFailed' => 'Backup failed!',
	'iTopHub:Landing:Status' => 'Deployment status',
	'iTopHub:Landing:Install' => 'Deploying extensions...',
	'iTopHub:CompiledOK' => 'Compilation successful.',
	'iTopHub:ConfigurationSafelyReverted' => 'Error detected during deployment!<br/>iTop configuration has NOT been modified.',
	'iTopHub:InstalledExtensions' => 'Extensions deployed on this instance',
	'iTopHub:ExtensionCategory:Manual' => 'Extensions deployed manually',
	'iTopHub:ExtensionCategory:Manual+' => 'The following extensions have been deployed by copying them manually in the %1$s directory of iTop:',
	'iTopHub:ExtensionCategory:Remote' => 'Extensions deployed from iTop Hub',
	'iTopHub:ExtensionCategory:Remote+' => 'The following extensions have been deployed from iTop Hub:',
	'iTopHub:NoExtensionInThisCategory' => 'There is no extension in this category.<br/><br/>Browse iTop Hub to find the extensions that will help you customize and adapt iTop to your processes.',
	'iTopHub:ExtensionNotInstalled' => 'Not installed',
	'iTopHub:GetMoreExtensions' => 'Get extensions from iTop Hub...',
	'iTopHub:LandingWelcome' => 'Congratulations! The following extensions were downloaded from iTop Hub and deployed into your iTop.',
	'iTopHub:GoBackToITopBtn' => 'Go Back to iTop',
	'iTopHub:Uncompressing' => 'Uncompressing extensions...',
	'iTopHub:InstallationWelcome' => 'Installation of the extensions downloaded from iTop Hub',
	'iTopHub:DBBackupLabel' => 'Instance backup',
	'iTopHub:DBBackupSentence' => 'Do a backup of the database and iTop configuration before updating',
	'iTopHub:DeployBtn' => 'Deploy !',
	'iTopHub:DatabaseBackupProgress' => 'Instance backup...',
	'iTopHub:InstallationEffect:Install' => 'Version: %1$s will be installed.',
	'iTopHub:InstallationEffect:NoChange' => 'Version: %1$s already installed. Nothing will change.',
	'iTopHub:InstallationEffect:Upgrade' => 'Will be <b>upgraded</b> from version %1$s to version %2$s.',
	'iTopHub:InstallationEffect:Downgrade' => 'Will be <b>DOWNGRADED</b> from version %1$s to version %2$s.',
	'iTopHub:InstallationProgress:DatabaseBackup' => 'iTop Instance backup...',
	'iTopHub:InstallationProgress:ExtensionsInstallation' => 'Installation of the extensions',
	'iTopHub:InstallationEffect:MissingDependencies' => 'This extension cannot be installed because of unmet dependencies.',
	'iTopHub:InstallationEffect:MissingDependencies_Details' => 'The extension requires the module(s): %1$s',
	'iTopHub:InstallationProgress:InstallationSuccessful' => 'Installation successful!',
	'iTopHub:InstallationStatus:Installed_Version' => '%1$s version: %2$s.',
	'iTopHub:InstallationStatus:Installed' => 'Installed',
	'iTopHub:InstallationStatus:Version_NotInstalled' => 'Version %1$s <b>NOT</b> installed.',
	'object-copier:menu_label:default' => 'Clone...',
	'object-copier:form_label:default' => 'Cloning %1$s',
	'object-copier:report_label:default' => 'Cloned from %1$s',
	'object-copier:error:preset' => 'An error has been encountered while presetting the object to create: %1$s. Please contact your administrator.',
	'object-copier:error:retrofit' => 'An error has been encountered while retrofitting some information back to the source object: %1$s. Please contact your administrator.',
	'Page:ReloadPage' => 'Reload page',
	'Portal:Button:Apply' => 'Update',
	'Portal:EnvironmentBanner:Title' => 'You are currently in <strong>%1$s</strong> mode',
	'Portal:EnvironmentBanner:GoToProduction' => 'Go back to PRODUCTION mode',
	'Error:HTTP:401' => 'Authentication',
	'Portal:ErrorUserLoggedOut' => 'You are logged out and need to log in again in order to continue.',
	'Brick:Portal:Browse:Mode:Mosaic' => 'Mosaic',
	'Brick:Portal:Manage:Table:ItemActions' => 'Actions',
	'Brick:Portal:Manage:DisplayMode:list' => 'List',
	'Brick:Portal:Manage:DisplayMode:pie-chart' => 'Pie Chart',
	'Brick:Portal:Manage:DisplayMode:bar-chart' => 'Bar Chart',
	'Brick:Portal:Manage:Others' => 'Others',
	'Brick:Portal:Manage:All' => 'All',
	'Brick:Portal:Manage:Group' => 'Group',
	'Brick:Portal:Manage:fct:count' => 'Total',
	'Brick:Portal:Manage:fct:sum' => 'Sum',
	'Brick:Portal:Manage:fct:avg' => 'Average',
	'Brick:Portal:Manage:fct:min' => 'Min',
	'Brick:Portal:Manage:fct:max' => 'Max',
	'Brick:Portal:Create:ChooseType' => 'Please, choose a type',
	'Brick:Portal:Filter:Name' => 'Prefilter a brick',
	'Brick:Portal:Filter:SearchInput:Placeholder' => 'eg. connect wifi',
	'Brick:Portal:Filter:SearchInput:Submit' => 'Search',
	'Class:Ticket/Attribute:operational_status' => 'Operational status',
	'Class:Ticket/Attribute:operational_status+' => 'Computed after the detailed status',
	'Class:Ticket/Attribute:operational_status/Value:ongoing' => 'Ongoing',
	'Class:Ticket/Attribute:operational_status/Value:ongoing+' => 'Work in progress',
	'Class:Ticket/Attribute:operational_status/Value:resolved' => 'Resolved',
	'Class:Ticket/Attribute:operational_status/Value:resolved+' => '',
	'Class:Ticket/Attribute:operational_status/Value:closed' => 'Closed',
	'Class:Ticket/Attribute:operational_status/Value:closed+' => '',
	'Class:cmdbAbstractObject/Method:ApplyStimulus' => 'ApplyStimulus',
	'Class:cmdbAbstractObject/Method:ApplyStimulus+' => 'Apply the specified stimulus to the current object',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1' => 'Stimulus code',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1+' => 'A valid stimulus code for the current class',
	'Class:TriggerOnObjectUpdate' => 'Trigger on object update',
	'Class:TriggerOnObjectUpdate/Attribute:tracked_attcodes' => 'Tracked attributes',
	'Class:TriggerOnObjectUpdate/Attribute:tracked_attcodes+' => 'Specify the comma-separated attributes which should fire the trigger',
	'Menu:Templates' => 'Templates',
	'Menu:Templates+' => 'Templates for object creation forms',
	'Templates:UserData' => 'Extra data',
	'Templates:Need' => 'Need',
	'Templates:PreviewTab:Title' => 'Preview',
	'Templates:PreviewTab:FormFields' => 'Faked form',
	'Templates:PreviewTab:HiddenFields' => 'Hidden fields',
	'Class:Template' => 'Template',
	'Class:Template+' => 'Template for creating objects from the portal',
	'Class:Template/Attribute:name' => 'Name',
	'Class:Template/Attribute:name+' => 'Internal name',
	'Class:Template/Attribute:label' => 'Label',
	'Class:Template/Attribute:label+' => 'Label used in the form',
	'Class:Template/Attribute:description' => 'Description',
	'Class:Template/Attribute:description+' => 'Description used in the form',
	'Class:Template/Attribute:field_list' => 'Fields',
	'Class:Template/Attribute:field_list+' => '',
	'Class:TemplateField' => 'Field',
	'Class:TemplateField+' => '',
	'Class:TemplateField/Attribute:template_id' => 'Template',
	'Class:TemplateField/Attribute:template_id+' => '',
	'Class:TemplateField/Attribute:template_id_finalclass_recall' => 'Type',
	'Class:TemplateField/Attribute:template_id_finalclass_recall+' => '',
	'Class:TemplateField/Attribute:code' => 'Code',
	'Class:TemplateField/Attribute:code+' => 'Attribute code or any value',
	'Class:TemplateField/Attribute:label' => 'Label',
	'Class:TemplateField/Attribute:label+' => 'Displayed to the end users',
	'Class:TemplateField/Attribute:order' => 'Order',
	'Class:TemplateField/Attribute:order+' => 'Position in the form',
	'Class:TemplateField/Attribute:mandatory' => 'Mandatory',
	'Class:TemplateField/Attribute:mandatory+' => '',
	'Class:TemplateField/Attribute:input_type' => 'Input type',
	'Class:TemplateField/Attribute:input_type+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text' => 'Text',
	'Class:TemplateField/Attribute:input_type/Value:text+' => '',
	'Class:TemplateField/Attribute:input_type/Value:text_area' => 'Text area',
	'Class:TemplateField/Attribute:input_type/Value:text_area+' => '',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list' => 'Drop-down list',
	'Class:TemplateField/Attribute:input_type/Value:drop_down_list+' => '',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons' => 'List',
	'Class:TemplateField/Attribute:input_type/Value:radio_buttons+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date' => 'Date',
	'Class:TemplateField/Attribute:input_type/Value:date+' => '',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time' => 'Date and time',
	'Class:TemplateField/Attribute:input_type/Value:date_and_time+' => '',
	'Class:TemplateField/Attribute:input_type/Value:duration' => 'Duration',
	'Class:TemplateField/Attribute:input_type/Value:duration+' => '',
	'Class:TemplateField/Attribute:input_type/Value:read_only' => 'Read-only',
	'Class:TemplateField/Attribute:input_type/Value:read_only+' => '',
	'Class:TemplateField/Attribute:input_type/Value:hidden' => 'Hidden',
	'Class:TemplateField/Attribute:input_type/Value:hidden+' => '',
	'Class:TemplateField/Attribute:values' => 'Values (OQL or CSV)',
	'Class:TemplateField/Attribute:values+' => '"SELECT myClass WHERE name LIKE \'foo\'" or "val1,val2,..."',
	'Class:TemplateField/Attribute:initial_value' => 'Initial value',
	'Class:TemplateField/Attribute:initial_value+' => '',
	'Class:TemplateField/Attribute:format' => 'Format',
	'Class:TemplateField/Attribute:format+' => 'Regular expression',
	'Class:ActionShellExec' => 'Script execution',
	'Class:ActionShellExec+' => 'Action shell-script execution',
	'Class:ActionShellExec/Attribute:script_path' => 'Path',
	'Class:ActionShellExec/Attribute:script_path+' => 'Path to the script',
	'Class:ActionShellExec/Attribute:script_path?' => 'Check the permissions on the script can be executed!!',
	'Class:ActionShellExec/Attribute:params' => 'Parameters',
	'Class:ActionShellExec/Attribute:params+' => 'Passed parameters, one per line',
	'Class:ActionShellExec/Attribute:params?' => 'Examples (how to set => how to pick up in the script):
    START = $this->start_date$ => $START
    DESC = $this->html(description)$ => $DESC
    YOUR_ENV_VAR = $this->attcode$ => $YOUR_ENV_VAR',
	'Class:EventNotificationShellExec' => 'Notification of script execution',
	'Class:EventNotificationShellExec+' => 'Notification of script execution',
	'Class:EventNotificationShellExec/Attribute:log' => 'Log',
	'Class:EventNotificationShellExec/Attribute:log+' => 'Log',
	'Class:ServiceFamily/Attribute:icon+' => '',
	'Class:Service/Attribute:icon+' => '',
	'Class:TriggerOnLogUpdate' => 'Trigger (when log is updated)',
	'Class:TriggerOnLogUpdate+' => 'Trigger on a end-user\'s update in log',
	'Class:TriggerOnLogUpdate/Attribute:target_log' => 'Log attribute code',
	'Class:TriggerOnLogUpdate/Attribute:target_log+' => 'Identifies which log will be considered',
	'UI-emry-enable' => 'Send the reply by email',
	'UI-emry-noattachment' => 'No attachment',
	'UI-emry-caselog-prompt' => 'Type your text here',
	'UI-emry-select-attachments' => 'Select Attachments...',
	'UI-emry-attachments-to-be-sent' => 'The following attachments will be sent:',
	'UI-emry-select-attachments-tooltip' => 'Click to select the attachments to be sent',
	'Class:ServiceSubcategory/Attribute:requesttemplates_list' => 'Request templates',
	'Class:ServiceSubcategory/Attribute:requesttemplates_list+' => '',
	'Class:RequestTemplate' => 'Request template',
	'Class:RequestTemplate+' => '',
	'Class:RequestTemplate/Attribute:service_id' => 'Service',
	'Class:RequestTemplate/Attribute:service_id+' => '',
	'Class:RequestTemplate/Attribute:service_name' => 'Service name',
	'Class:RequestTemplate/Attribute:service_name+' => '',
	'Class:RequestTemplate/Attribute:servicesubcategory_id' => 'Service sub category',
	'Class:RequestTemplate/Attribute:servicesubcategory_id+' => '',
	'Class:RequestTemplate/Attribute:servicesubcategory_name' => 'Service sub category name',
	'Class:RequestTemplate/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:service_details' => 'Service details',
	'Class:UserRequest/Attribute:service_details+' => 'Additionnal information depending on the service',
	'Class:Incident/Attribute:service_details' => 'Service details',
	'Class:Incident/Attribute:service_details+' => 'Additionnal information depending on the service',
	'Menu:RequestTemplate' => 'Request templates',
	'Menu:RequestTemplate+' => 'All request templates',
	'Menu:PrecannedRepliesCategories' => 'Precanned replies categories',
	'Menu:PrecannedRepliesCategories+' => 'Precanned replies categories',
	'Class:PrecannedReplyCategory' => 'Precanned reply category',
	'Class:PrecannedReplyCategory+' => 'Precanned reply',
	'Class:PrecannedReplyCategory/Attribute:name' => 'Name',
	'Class:PrecannedReplyCategory/Attribute:name+' => '',
	'Class:PrecannedReplyCategory/Attribute:description' => 'Description',
	'Class:PrecannedReplyCategory/Attribute:description+' => '',
	'Class:PrecannedReplyCategory/Attribute:replies_list' => 'Precanned Replies',
	'Class:PrecannedReplyCategory/Attribute:replies_list+' => 'Precanned Replies in this category',
	'Class:PrecannedReply/Attribute:org_id' => 'Organization',
	'Class:PrecannedReply/Attribute:org_id+' => '',
	'Class:PrecannedReply/Attribute:category_id' => 'Category',
	'Class:PrecannedReply/Attribute:category_id+' => '',
));
