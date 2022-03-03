<?php

class MySQLiHelpers {
	private $db = null;

	public function __construct(\mysqli $conn) {
		$this->db = $conn;
	}

	/**
	 * helper function for MySQLi db queries
	 *
	 * @param string $query
	 * @param string|null $types
	 * @param array|null $params
	 * @param bool $one
	 * @return mixed an associative array of results for selects, affected rows for updates, insert_id for inserts and null on any error
	 */
	public function query(string $query, string $types = null, array $params = null, bool $single = false) {
		try {
			if (!$this->db) {
				throw new \Exception('no database connection established');
			}

			if (($types || $params) && strlen($types) !== count($params)) {
				throw new \Exception('db query error: type/param mismatch');
			}

			$stmt = $this->db->prepare($query);

			if (!$stmt) {
				throw new \Exception($this->db->error);
			}

			if (!empty($types) && !empty($params)) {
				$stmt->bind_param($types, ...$params);
			}

			$stmt->execute();

			if (preg_match('/^INSERT/i', $query)) {
				$data = $stmt->insert_id;
			} else if (preg_match('/^SELECT/i', $query)) {
				$data = $single
					? $stmt->get_result()->fetch_array(MYSQLI_ASSOC)
					: $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
			} else {
				$data = $stmt->affected_rows;
			}

			$stmt->close();
			return $data;
		} catch (\Exception $e) {
			error_log($e->getMessage() . $query);
		}
		return null;
	}

	// get a single result as an associative array for selects
	public function queryOne(string $query, string $types = null, array $params = null) {
		return $this->query($query, $types, $params, true);
	}
}
