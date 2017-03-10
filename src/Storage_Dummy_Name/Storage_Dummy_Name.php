<?php
/**
 * Storage_Dummy_Name class
 *
 * @package APIAPIStorageDummyName
 * @since 1.0.0
 */

namespace APIAPI\Storage_Dummy_Name;

use APIAPI\Core\Storages\Storage;

if ( ! class_exists( 'APIAPI\Storage_Dummy_Name\Storage_Dummy_Name' ) ) {

	/**
	 * Storage implementation using [...].
	 *
	 * @since 1.0.0
	 */
	class Storage_Dummy_Name extends Storage {
		/**
		 * Stores a single value.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename The basename under which to store.
		 * @param string $group    The group identifier of the group in which to store.
		 * @param string $key      The key to store a value for.
		 * @param scalar $value    The value to store.
		 */
		public function store( $basename, $group, $key, $value ) {

		}

		/**
		 * Stores multiple values.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename        The basename under which to store.
		 * @param string $group           The group identifier of the group in which to store.
		 * @param array  $keys_and_values Associative array of `$key => $value` pairs.
		 */
		public function store_multi( $basename, $group, $keys_and_values ) {

		}

		/**
		 * Retrieves a single value.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename The basename under which to store.
		 * @param string $group    The group identifier of the group in which to store.
		 * @param string $key      The key to retrieve its value.
		 * @return scalar|null The value, or null if not stored.
		 */
		public function retrieve( $basename, $group, $key ) {

		}

		/**
		 * Retrieves multiple values.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename The basename under which to store.
		 * @param string $group    The group identifier of the group in which to store.
		 * @param array  $keys     The keys to retrieve their values.
		 * @return array Associative array of `$key => $value`. The $value might is null, if
		 *               none is stored.
		 */
		public function retrieve_multi( $basename, $group, $keys ) {

		}

		/**
		 * Deletes a single value.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename The basename under which to store.
		 * @param string $group    The group identifier of the group in which to store.
		 * @param string $key      The key to delete its value.
		 */
		public function delete( $basename, $group, $key ) {

		}

		/**
		 * Deletes multiple values.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param string $basename The basename under which to store.
		 * @param string $group    The group identifier of the group in which to store.
		 * @param array  $keys     The keys to delete their values.
		 */
		public function delete_multi( $basename, $group, $keys ) {

		}
	}

}
