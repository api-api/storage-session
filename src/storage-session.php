<?php
/**
 * Storage loader.
 *
 * @package APIAPIStorageSession
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_storage_session' ) ) {

	/**
	 * Registers the storage using PHP sessions.
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_storage_session() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->storages()->register( 'session', 'APIAPI\Storage_Session\Storage_Session' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_storages_loader'] ) ) {
				$GLOBALS['_apiapi_storages_loader'] = array();
			}

			$GLOBALS['_apiapi_storages_loader']['session'] = 'APIAPI\Storage_Session\Storage_Session';
		}
	}

	apiapi_register_storage_session();

}
