<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Mike Schmalz <mikeschmalz@web.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\TestAppCloud\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'testappcloud';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
