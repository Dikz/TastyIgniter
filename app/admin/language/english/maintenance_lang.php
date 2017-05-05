<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang = [
'text_title' 		            => 'Database Maintenance',
'text_heading' 		            => 'Database Maintenance',
'text_backup_heading' 		    => 'Database Backup',
'text_browse_heading' 		    => 'Database Browse: %s',
'text_list' 		                => 'Database Maintenance List',
'text_tab_backup' 		        => 'Backup',
'text_tab_existing_backup' 		=> 'Existing Backups',
'text_tab_migrations' 		    => 'Migrations',
'text_tab_create_backup' 		=> 'Create A New Backup',
'text_empty' 		            => 'There are no backup available.',
'text_no_backup' 		        => 'There are no backup available.',
'text_no_row' 		            => 'There are no rows available for this table.',
'text_installed_version' 		=> 'Installed Version',
'text_latest_version' 		    => 'Latest Available Version',
'text_select_version' 		    => 'Select version file',
'text_zip' 		                => 'zip',
'text_gzip' 		                => 'gzip',
'text_drop_tables' 		        => 'Add DROP TABLE statement:',
'text_add_inserts' 		        => 'Add INSERT statement for data dump:',

'button_backup' 		            => 'Backup',
'button_migrate' 		        => 'Migrate',
'button_modules' 		        => 'Modules',

'column_select_tables' 		    => 'Select tables to backup',
'column_records' 		        => '# Records',
'column_data_size' 		        => 'Data Size',
'column_index_size' 		        => 'Index Size',
'column_data_free' 		        => 'Data Free',
'column_engine' 		            => 'Engine',
'column_name' 		            => 'Name',
'column_download' 		        => 'Download',
'column_restore' 		        => 'Restore',
'column_delete' 		            => 'Delete',

'label_file_name' 		        => 'File Name',
'label_drop_tables' 		        => 'Drop Tables',
'label_add_inserts' 		        => 'Insert Data',
'label_compression' 		        => 'Compression Format',
'label_backup_table' 		    => 'Backup Tables',
'label_migrate_version' 		    => 'Migrate to verison',

'alert_info_memory_limit' 		=> '<p>Note: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible.If your database is very large you might need to backup directly from your SQL server via the command line,or have your server admin do it for you if you do not have root privileges.</p>',
'alert_warning_migration' 		=> '<b>BE CAREFUL!</b> Do not migrate unless you know what you\'re doing.',
'alert_warning_maintenance' 		=> 'Your site is live you can\'t %s the database, please enable maintenance mode. Make sure you <b>BACKUP</b> your database.',

'help_compression' 		        => 'The Restore option is only capable of reading un-compressed files. Gzip or Zip compression is good if you just want a backup to download and store on your computer.',
];

/* End of file maintenance_lang.php */
/* Location: ./admin/language/english/maintenance_lang.php */