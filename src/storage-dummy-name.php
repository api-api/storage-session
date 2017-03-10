<?php
/**
 * Storage loader.
 *
 * @package APIAPIStorageDummyName
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_storage_dummy_name' ) ) {

	/**
	 * Registers the storage using [...].
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_storage_dummy_name() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->storages()->register( 'dummy_name', 'APIAPI\Storage_Dummy_Name\Storage_Dummy_Name' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_storages_loader'] ) ) {
				$GLOBALS['_apiapi_storages_loader'] = array();
			}

			$GLOBALS['_apiapi_storages_loader']['dummy_name'] = 'APIAPI\Storage_Dummy_Name\Storage_Dummy_Name';
		}
	}

	apiapi_register_storage_dummy_name();

}
