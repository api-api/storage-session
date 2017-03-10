<?php
/**
 * Storage_Session class
 *
 * @package APIAPIStorageSession
 * @since 1.0.0
 */

namespace APIAPI\Storage_Session;

use APIAPI\Core\Storages\Array_Storage;
use APIAPI\Core\Exception;

if ( ! class_exists( 'APIAPI\Storage_Session\Storage_Session' ) ) {

	/**
	 * Storage implementation using PHP sessions.
	 *
	 * @since 1.0.0
	 */
	class Storage_Session extends Array_Storage {
		/**
		 * Gets the array values are stored in.
		 *
		 * @since 1.0.0
		 * @access protected
		 *
		 * @param string $basename The basename under which to store.
		 * @return array Array with stored data.
		 */
		protected function get_array( $basename ) {
			$this->maybe_start_session();

			if ( ! isset( $_SESSION[ $basename ] ) ) {
				return array();
			}

			return $_SESSION[ $basename ];
		}

		/**
		 * Updates the array values are stored in.
		 *
		 * @since 1.0.0
		 * @access protected
		 *
		 * @param string $basename The basename under which to store.
		 * @param array  $data     Array with updated data.
		 */
		protected function update_array( $basename, $data ) {
			$this->maybe_start_session();

			$_SESSION[ $basename ] = $data;
		}

		/**
		 * Deletes the array values are stored in.
		 *
		 * @since 1.0.0
		 * @access protected
		 *
		 * @param string $basename The basename under which to store.
		 */
		protected function delete_array( $basename ) {
			$this->maybe_start_session();

			unset( $_SESSION[ $basename ] );
		}

		/**
		 * Starts a session if none is running already.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function maybe_start_session() {
			if ( isset( $_SESSION ) ) {
				return;
			}

			if ( headers_sent() ) {
				throw new Exception( 'Session cannot be started as headers have already been sent.' );
			}

			session_start();
		}
	}

}
