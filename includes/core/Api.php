<?php

class Api {

	/**
	 * get decoded JSON from php://input if present, otherwide, return $_POST data
	 */
	public function getJSON() {
		if (!empty($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] == 'application/json') {
			$json = file_get_contents('php://input');
			$json = json_decode($json, true);
			return $json;
		} else {
			return $_POST;
		}
	}

	public function ok($data = []): void {
		header('HTTP/1.0 200 OK');
		header('Content-type: application/json');
		die(json_encode($data));
	}

	public function created($data = []): void {
		header('HTTP/1.0 201 CREATED');
		header('Content-type: application/json');
		die(json_encode($data));
	}

	public function download($data, string $type, string $disposition, string $filename): void {
		header("Content-Type: $type");
		header("Content-Disposition: $disposition; filename=$filename");
		die($data);
	}

	public function error(int $response_code = 500, string $msg = ''): void {
		if (!empty($msg)) {
			error_log('API error: ' . $msg);
		}

		header('Content-type: application/json');

		$response_headers = [
			400 => 'Bad Request',
			403 => 'Forbidden',
			404 => 'Not Found',
			405 => 'Method Not Allowed',
			418 => 'I\'m a teapot',
			500 => 'Internal Server Error',
		];

		header("HTTP/1.0 $response_code " . $response_headers[$response_code] ?? 'Unknown Error');

		die(json_encode([
			'message'  => $msg ?? '',
			'status'   => $response_code,
		]));
	}
}
