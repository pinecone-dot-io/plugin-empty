<?

namespace plugin_empty;

require __DIR__.'/functions.php';

if( is_admin() )
	require __DIR__.'/admin.php';