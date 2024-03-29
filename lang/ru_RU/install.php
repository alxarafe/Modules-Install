<?php



return [
    'ActivateModule' => 'Activate module :module',
    'AdminAccountCreation' => 'Administrator login creation',
    'AdminLogin' => 'User account for the Alxarafe database owner.',
    'AdminLoginAlreadyExists' => 'Alxarafe administrator account :admin already exists. Go back if you want to create another one.',
    'AdminLoginCreatedSuccessfuly' => 'Alxarafe administrator login :admin created successfully.',
    'AdminPassword' => 'Password for Alxarafe database owner.',
    'AlreadyDone' => 'Already migrated',
    'BecauseConnectionFailedParametersMayBeWrong' => 'The database connection failed: the host or super user parameters must be wrong.',
    'CheckThatDatabasenameIsCorrect' => 'Check that the database name `:database_name` is correct.',
    'CheckToCreateDatabase' => 'Check the box if the database does not exist yet and so must be created. In this case, you must also fill in the user name and password for the superuser account at the bottom of this page.',
    'CheckToCreateUser' => 'Check the box if: the database user account does not yet exist and so must be created, or if the user account exists but the database does not exist and permissions must be granted. In this case, you must enter the user account and password and also the superuser account name and password at the bottom of this page. If this box is unchecked, database owner and password must already exist.',
    'CheckToForceHttps' => 'Check this option to force secure connections (https). This requires that the web server is configured with an SSL certificate.',
    'ChooseYourSetupMode' => 'Choose your setup mode and click "Start"...',
    'ChoosedMigrateScript' => 'Choose migration script',
    'ClickHereToGoToApp' => 'Click here to go to your application',
    'ClickOnLinkOrCreateUnlockFileManualy' => 'If an upgrade is in progress, please wait... If not, you must remove the file install.lock or create a file upgrade.unlock into the Alxarafe documents directory.',
    'ClickOnLinkOrRemoveManualy' => 'If an upgrade is in progress, please wait. If not, click on the following link. If you always see this same page, you must remove/rename the file install.lock in the documents directory.',
    'ConfFileCouldBeCreated' => 'Configuration file `:configfile` could be created.',
    'ConfFileDoesNotExistsAndCouldNotBeCreated' => 'Configuration file `:configfile` does not exist and could not be created!',
    'ConfFileExists' => 'Configuration file **:configfile** exists.',
    'ConfFileIsNotWritable' => 'Configuration file `:configfile` is not writable. Check permissions. For first install, your web server must be able to write into this file during configuration process ("chmod 666" for example on a Unix like OS).',
    'ConfFileIsWritable' => 'Configuration file `:configfile` is writable.',
    'ConfFileMustBeAFileNotADir' => 'Configuration file `:configfile` must be a file, not a directory.',
    'ConfFileReload' => 'Reloading parameters from configuration file.',
    'ConfigFileNotReadable' => 'Te config_file is not readable or it does not exist.',
    'ConfigurationFile' => 'Configuration file',
    'CorrectProblemAndReloadPage' => 'Please fix the problem and press F5 to reload the page.',
    'CreateDatabase' => 'Create database',
    'CreateDatabaseObjects' => 'Database objects creation',
    'CreateOtherKeysForTable' => 'Create foreign keys and indexes for table :tablename',
    'CreateTableAndPrimaryKey' => 'Create a table :tablename',
    'CreateUser' => 'Create user account or grant user account permission on the Alxarafe database',
    'DBSortingCollation' => 'Character sorting order',
    'DataMigration' => 'Database migration (data)',
    'DatabaseCreation' => 'Database creation',
    'DatabaseMigration' => 'Database migration (structure + some data)',
    'DatabaseName' => 'Database name',
    'DatabasePrefix' => 'Database table prefix',
    'DatabasePrefixDescription' => 'Database table prefix. If empty, defaults to llx_.',
    'DatabaseRootLoginDescription' => 'Superuser account name (to create new databases or new users), mandatory if the database or its owner does not already exist.',
    'DatabaseServer' => 'Database server',
    'DatabaseSuperUserAccess' => 'Database server - Superuser access',
    'DatabaseType' => 'Database type',
    'DatabaseVersion' => 'Database version',
    'DirectoryRecommendation' => 'IMPORTANT: You must use a directory that is outside of the web pages (so do not use a subdirectory of previous parameter).',
    'DocumentsDirectory' => 'Directory to store uploaded and generated documents',
    'DolibarrAdminLogin' => 'Alxarafe admin login',
    'DolibarrDatabase' => 'Alxarafe Database',
    'DriverType' => 'Driver type',
    'ErrorConnectedButDatabaseNotFound' => 'Connection to server successful but database `:version` not found.',
    'ErrorConnection' => 'Server `:server`, database name `:database_name`, login :user, or database password may be wrong or the PHP client version may be too old compared to the database version.',
    'ErrorDatabaseAlreadyExists' => 'Database `:database_name` already exists.',
    'ErrorDatabaseVersionForbiddenForMigration' => 'Your database version is `:database_version`. It has a critical bug, making data loss possible if you make structural changes in your database, such as is required by the migration process. For his reason, migration will not be allowed until you upgrade your database to a layer (patched) version (list of known buggy versions: :error)',
    'ErrorDatabaseVersionTooLow' => 'Database version (:db_version) too old. Version :required_db_version or higher is required.',
    'ErrorDirDoesNotExists' => 'Directory `:directory` does not exist.',
    'ErrorFailedToConnectToDatabase' => 'Failed to connect to database `:database_name`.',
    'ErrorFailedToCreateDatabase' => 'Failed to create database `:database_name`.',
    'ErrorFoundDuringMigration' => 'Error(s) were reported during the migration process so next step is not available. To ignore errors, you can :ignore_url, but the application or some features may not work correctly until the errors are resolved.',
    'ErrorGoBackAndCorrectParameters' => 'Go back and check/correct the parameters.',
    'ErrorNoMigrationFilesFoundForParameters' => 'No migration file found for the selected versions',
    'ErrorPHPDoesNotSupport' => 'Your PHP installation does not support :functions functions.',
    'ErrorPHPDoesNotSupportSessions' => 'Your PHP installation does not support sessions. This feature is required to allow Alxarafe to work. Check your PHP setup and permissions of the sessions directory.',
    'ErrorPHPVersionTooHigh' => 'PHP version too high. Version `:version` or lower is required.',
    'ErrorPHPVersionTooLow' => 'PHP version too old. Version :version or higher is required.',
    'ErrorWrongValueForParameter' => 'You may have typed a wrong value for parameter `:parameter`.',
    'FailedToCreateAdminLogin' => 'Failed to create Alxarafe administrator account.',
    'FieldRenamed' => 'Field renamed',
    'ForceHttps' => 'Force secure connections (https)',
    'FreshInstall' => 'Fresh install',
    'FreshInstallDesc' => 'Use this mode if this is your first install. If not, this mode can repair a incomplete previous install. If you want to upgrade your version, choose "Upgrade" mode.',
    'FunctionNotAvailableInThisPHP' => 'Not available in this PHP',
    'FunctionTest' => 'Function test',
    'FunctionsCreation' => 'Functions creation',
    'GoToDolibarr' => 'Go to Alxarafe',
    'GoToSetupArea' => 'Go to Alxarafe (setup area)',
    'GoToUpgradePage' => 'Go to upgrade page again',
    'HideNotAvailableOptions' => 'Hide unavailable options',
    'IfAlreadyExistsCheckOption' => 'If this name is correct and that database does not exist yet, you must check option "Create database".',
    'IfDatabaseExistsGoBackAndCheckCreate' => 'If database already exists, go back and uncheck "Create database" option.',
    'IfDatabaseNotExistsGoBackAndUncheckCreate' => 'If the database does not exist, go back and check option "Create database".',
    'IfLoginDoesNotExistsCheckCreateUser' => 'If the user does not exist yet, you must check option "Create user"',
    'InstallChoiceRecommanded' => 'Recommended choice to install version `:new_version` from your current version `:version`',
    'InstallChoiceSuggested' => 'Install choice suggested by installer.',
    'InstallEasy' => 'Just follow the instructions step by step.',
    'InstallNotAllowed' => 'Setup not allowed by `conf.php` permissions',
    'KeepDefaultValuesDeb' => 'You used the Alxarafe setup wizard from a Linux package (Ubuntu, Debian, Fedora...), so the values proposed here are already optimized. Only the password of the database owner to create must be entered. Change other parameters only if you know what you are doing.',
    'KeepDefaultValuesMamp' => 'You used the Alxarafe setup wizard from DoliMamp, so the values proposed here are already optimized. Change them only if you know what you are doing.',
    'KeepDefaultValuesProxmox' => 'You used the Alxarafe setup wizard from a Proxmox virtual appliance, so the values proposed here are already optimized. Change them only if you know what you are doing.',
    'KeepDefaultValuesWamp' => 'You used the Alxarafe setup wizard from DoliWamp, so values proposed here are already optimized. Change them only if you know what you are doing.',
    'KeepEmptyIfNoPassword' => 'Leave empty if superuser has no password (NOT recommended)',
    'LastStepDesc' => 'Last step: Define here the login and password you wish to use to connect to Alxarafe. Do not lose this as it is the main account to administer all other/additional user accounts.',
    'License' => 'Using license',
    'Loaded' => 'Loaded',
    'LoginAlreadyExists' => 'Already exists',
    'MigrateIsDoneStepByStep' => 'The targeted version (:target_version) has a gap of several versions. The install wizard will come back to suggest a further migration once this one is complete.',
    'MigrationActioncommElement' => 'Update data on actions',
    'MigrationBankTransfertsNothingToUpdate' => 'All links are up to date',
    'MigrationBankTransfertsUpdate' => 'Update links between bank entry and a bank transfer',
    'MigrationCategorieAssociation' => 'Migration of categories',
    'MigrationContract' => 'Data migration for contracts',
    'MigrationContractLineRank' => 'Migrate Contract Line to use Rank (and enable Reorder)',
    'MigrationContractsEmptyCreationDatesNothingToUpdate' => 'No contract creation date to correct',
    'MigrationContractsEmptyDatesNothingToUpdate' => 'No contract empty date to correct',
    'MigrationContractsEmptyDatesUpdate' => 'Contract empty date correction',
    'MigrationContractsEmptyDatesUpdateSuccess' => 'Contract empty date correction done successfully',
    'MigrationContractsFieldDontExist' => 'Field fk_facture does not exist anymore. Nothing to do.',
    'MigrationContractsIncoherentCreationDateNothingToUpdate' => 'No bad value for contract creation date to correct',
    'MigrationContractsIncoherentCreationDateUpdate' => 'Bad value contract creation date correction',
    'MigrationContractsIncoherentCreationDateUpdateSuccess' => 'Bad value contract creation date correction done successfully',
    'MigrationContractsInvalidDateFix' => 'Correct contract :contract (Contract date=:contract_date, Starting service date min=:min_date)',
    'MigrationContractsInvalidDatesNothingToUpdate' => 'No date with bad value to correct',
    'MigrationContractsInvalidDatesNumber' => ':count contracts modified',
    'MigrationContractsInvalidDatesUpdate' => 'Bad value date contract correction',
    'MigrationContractsLineCreation' => 'Create contract line for contract ref :reference',
    'MigrationContractsNothingToUpdate' => 'No more things to do',
    'MigrationContractsNumberToUpdate' => ':number contract(s) to update',
    'MigrationContractsUpdate' => 'Contract data correction',
    'MigrationCustomerOrderShipping' => 'Migrate shipping for sales orders storage',
    'MigrationDeliveryAddress' => 'Update delivery address in shipments',
    'MigrationDeliveryDetail' => 'Delivery update',
    'MigrationDeliveryOrderMatching' => 'Delivery receipt update',
    'MigrationEvents' => 'Migration of events to add event owner into assignment table',
    'MigrationEventsContact' => 'Migration of events to add event contact into assignment table',
    'MigrationFieldsSocialNetworks' => 'Migration of users fields social networks (:users)',
    'MigrationFinished' => 'Migration finished',
    'MigrationFixData' => 'Fix for denormalized data',
    'MigrationImportOrExportProfiles' => 'Migration of import or export profiles (:profile)',
    'MigrationInvoice' => 'Data migration for customer\'s invoices',
    'MigrationMenusDetail' => 'Update dynamic menus tables',
    'MigrationNotFinished' => 'The database version is not completely up to date: run the upgrade process again.',
    'MigrationOrder' => 'Data migration for customer\'s orders',
    'MigrationPaymentMode' => 'Data migration for payment type',
    'MigrationPaymentsNothingToUpdate' => 'No more things to do',
    'MigrationPaymentsNothingUpdatable' => 'No more payments that can be corrected',
    'MigrationPaymentsNumberToUpdate' => ':number payment(s) to update',
    'MigrationPaymentsUpdate' => 'Payment data correction',
    'MigrationProcessPaymentUpdate' => 'Update payment(s) :number',
    'MigrationProjectTaskActors' => 'Data migration for table llx_projet_task_actors',
    'MigrationProjectTaskTime' => 'Update time spent in seconds',
    'MigrationProjectUserResp' => 'Data migration field fk_user_resp of llx_projet to llx_element_contact',
    'MigrationProposal' => 'Data migration for commercial proposals',
    'MigrationRelationshipTables' => 'Data migration for relationship tables (:relationship)',
    'MigrationReloadModule' => 'Reload module :module',
    'MigrationRemiseEntity' => 'Update entity field value of llx_societe_remise',
    'MigrationRemiseExceptEntity' => 'Update entity field value of llx_societe_remise_except',
    'MigrationReopenThisContract' => 'Reopen contract :contract',
    'MigrationReopenedContractsNumber' => ':number contracts modified',
    'MigrationReopeningContracts' => 'Open contract closed by error',
    'MigrationReopeningContractsNothingToUpdate' => 'No closed contract to open',
    'MigrationResetBlockedLog' => 'Reset module BlockedLog for v7 algorithm',
    'MigrationShipmentOrderMatching' => 'sendings receipt update',
    'MigrationShippingDelivery' => 'Upgrade storage of shipping',
    'MigrationShippingDelivery2' => 'Upgrade storage of shipping 2',
    'MigrationStockDetail' => 'Update stock value of products',
    'MigrationSuccessfullUpdate' => 'Upgrade successful',
    'MigrationSupplierOrder' => 'Data migration for vendor\'s orders',
    'MigrationUpdateFailed' => 'Failed upgrade process',
    'MigrationUserGroupRightsEntity' => 'Update entity field value of llx_usergroup_rights',
    'MigrationUserPhotoPath' => 'Migration of photo paths for users',
    'MigrationUserRightsEntity' => 'Update entity field value of llx_user_rights',
    'MiscellaneousChecks' => 'Prerequisites check',
    'NextStepMightLastALongTime' => 'The current step may take several minutes. Please wait until the next screen is shown completely before continuing.',
    'NoConfigFile' => 'You must specify a config_file to run installation.',
    'NoReadableConfFileSoStartInstall' => 'The configuration file `conf/conf.php` does not exists or is not readable. We will run the installation process to try to initialize it.',
    'NodoUpgradeAfterDB' => 'No action requested by external modules after upgrade of database',
    'NodoUpgradeAfterFiles' => 'No action requested by external modules after upgrade of files or directories',
    'NothingToDelete' => 'Nothing to clean/delete',
    'NothingToDo' => 'Nothing to do',
    'OpenBaseDir' => 'PHP openbasedir parameter',
    'OrphelinsPaymentsDetectedByMethod' => 'Orphans payment detected by method :method',
    'OtherKeysCreation' => 'Foreign keys and indexes creation',
    'PHPMemoryOK' => 'Your PHP max session memory is set to `:memory`. This should be enough.',
    'PHPMemoryTooLow' => 'Your PHP max session memory is set to `:max_sesion_memory` bytes. This is too low. Change your `php.ini` to set `memory_limit` parameter to at least `:memory_amount` bytes.',
    'PHPSupport' => 'This PHP supports %s functions.',
    'PHPSupportPOSTGETKo' => 'It\'s possible your PHP setup does not support variables POST and/or GET. Check the parameter `variables_order` in php.ini.',
    'PHPSupportPOSTGETOk' => 'This PHP supports variables POST and GET.',
    'PHPSupportSessions' => 'This PHP supports sessions.',
    'PHPVersion' => 'PHP Version',
    'PasswordsMismatch' => 'Passwords differs, please try again!',
    'PleaseTypeALogin' => 'Please type a login!',
    'PleaseTypePassword' => 'Please type a password, empty passwords are not allowed!',
    'ProcessMigrateScript' => 'Script processing',
    'Recheck' => 'Click here for a more detailed test',
    'ReferenceDataLoading' => 'Reference data loading',
    'RemoveItManuallyAndPressF5ToContinue' => 'Remove it manually and press F5 to continue.',
    'SaveConfigurationFile' => 'Saving parameters to',
    'Server' => 'Server',
    'ServerAddressDescription' => 'Name or ip address for the database server. Usually `localhost` when the database server is hosted on the same server as the web server.',
    'ServerConnection' => 'Server connection',
    'ServerPortDescription' => 'Database server port. Keep empty if unknown.',
    'ServerVersion' => 'Database server version',
    'SetAtLeastOneOptionAsUrlParameter' => 'Set at least one option as a parameter in URL. For example: `...repair.php?standard=confirmed`',
    'SetupEnd' => 'End of setup',
    'ShowEditTechnicalParameters' => 'Click here to show/edit advanced parameters (expert mode)',
    'ShowNotAvailableOptions' => 'show unavailable options',
    'Start' => 'Start',
    'SystemIsInstalled' => 'This installation is complete.',
    'SystemIsUpgraded' => 'Alxarafe has been upgraded successfully.',
    'TablesAndPrimaryKeysCreation' => 'Tables and Primary keys creation',
    'URLRoot' => 'URL Root',
    'Upgrade' => 'Upgrade',
    'UpgradeDesc' => 'Use this mode if you have replaced old Alxarafe files with files from a newer version. This will upgrade your database and data.',
    'UpgradeExternalModule' => 'Run dedicated upgrade process of external module',
    'WarningBrowserTooOld' => 'Version of browser is too old. Upgrading your browser to a recent version of Firefox, Chrome or Opera is highly recommended.',
    'WarningRemoveInstallDir' => 'Warning, for security reasons, once the installation process is complete, you must add a file called `install.lock` into the Alxarafe document directory in order to prevent the accidental/malicious use of the install tools again.',
    'WarningUpgrade' => 'Warning:\nDid you run a database backup first?\nThis is highly recommended. Loss of data (due to for example bugs in mysql version 5.5.40/41/42/43) may be possible during this process, so it is essential to take a complete dump of your database before starting any migration.\n\nClick OK to start migration process...',
    'WebPagesDirectory' => 'Directory where web pages are stored',
    'WithNoSlashAtTheEnd' => 'Without the slash "/" at the end',
    'YouAskDatabaseCreationSoDolibarrNeedToConnect' => 'You selected create database `:database_name`, but for this, Alxarafe needs to connect to server `:server` with super user `:superuser` permissions.',
    'YouAskLoginCreationSoDolibarrNeedToConnect' => 'You selected create database user `:database_name`, but for this, Alxarafe needs to connect to server `:server` with super user `:superuser` permissions.',
    'YouAskToCreateDatabaseSoRootRequired' => 'You checked the box "Create database". For this, you need to provide the login/password of superuser (bottom of form).',
    'YouAskToCreateDatabaseUserSoRootRequired' => 'You checked the box "Create database owner". For this, you need to provide the login/password of superuser (bottom of form).',
    'YouMustCreateItAndAllowServerToWrite' => 'You must create this directory and allow for the web server to write into it.',
    'YouMustCreateWithPermission' => 'You must create file `:filename` and set write permissions on it for the web server during install process.',
    'YouNeedToPersonalizeSetup' => 'You need to configure Alxarafe to suit your needs (appearance, features, ...). To do this, please follow the link below:',
    'YouTryInstallDisabledByDirLock' => 'The application tried to self-upgrade, but the install/upgrade pages have been disabled for security (directory renamed with .lock suffix).',
    'YouTryInstallDisabledByFileLock' => 'The application tried to self-upgrade, but the install/upgrade pages have been disabled for security (by the existence of a lock file `install.lock` in the Alxarafe documents directory).',
    'YouTryUpgradeDisabledByMissingFileUnLock' => 'The application tried to self-upgrade, but the upgrade process is currently not allowed.',
];
