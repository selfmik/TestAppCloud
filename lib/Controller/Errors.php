<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Mike Schmalz <mikeschmalz@web.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\TestAppCloud\Controller;

use Closure;

use OCP\AppFramework\Http;
use OCP\AppFramework\Http\DataResponse;

use OCA\TestAppCloud\Service\NoteNotFound;

trait Errors {
	protected function handleNotFound(Closure $callback): DataResponse {
		try {
			return new DataResponse($callback());
		} catch (NoteNotFound $e) {
			$message = ['message' => $e->getMessage()];
			return new DataResponse($message, Http::STATUS_NOT_FOUND);
		}
	}
}
