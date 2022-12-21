<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Mike Schmalz <mikeschmalz@web.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\TestAppCloud\Tests\Unit\Controller;

use OCA\TestAppCloud\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
