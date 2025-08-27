<?php
/**
 * -----------------------------------------------------------------------------
 * Copyright (C) 2025 Moko Consulting <jmiller@mokoconsulting.tech>
 *
 * This file is part of a Moko Consulting project.
 *
 * SPDX-License-Identifier: GPL-3.0-or-later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 * -----------------------------------------------------------------------------
 *
 * FILE INFORMATION
 * DEFGROUP:    Joomla
 * INGROUP:     Joomla Plugin Default
 * FILE:        example.php
 * VERSION:     1.0.0
 * BRIEF:       Minimal Joomla system plugin skeleton (PSR-14 subscriber)
 * PATH:        ./plugins/system/example/mokoskeleton.php
 * NOTE:        Works on Joomla 4/5 (requires PHP 8.1+ typical)
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Event\SubscriberInterface;
use Joomla\CMS\Factory;

/**
 * Class PlgSystemExample
 *
 * Minimal PSR-14 event subscriber. Add your logic inside the handlers.
 *
 * @property-read \Joomla\Registry\Registry $params Plugin parameters
 */
final class PlgSystemExample extends CMSPlugin implements SubscriberInterface
{
	/**
	 * Ensure we have no direct output buffering.
	 * @var boolean
	 */
	protected $autoloadLanguage = true;

	/**
	 * Enumerates events this plugin subscribes to.
	 *
	 * @return array<string, string> Map of event name => handler method
	 *
	 * Available example events:
	 * - onAfterInitialise
	 * - onAfterRoute
	 * - onAfterDispatch
	 * - onAfterRender
	 */
	public static function getSubscribedEvents(): array
	{
		return [
			'onAfterInitialise' => 'handleAfterInitialise',
		];
	}

	/**
	 * Handle the onAfterInitialise event.
	 *
	 * Parameters/Options (from manifest):
	 * - enabled_feature (int: 0|1) Enable demo behavior; default 1
	 * - log_level       (string: debug|info|warning|error) Demo option
	 *
	 * @return void
	 */
	public function handleAfterInitialise(): void
	{
		// Respect the toggle
		if ((int) $this->params->get('enabled_feature', 1) !== 1) {
			return;
		}

		// Example: write a quick debug message (visible if debug logging is configured)
		$app = Factory::getApplication();

		// Only run on site application for this demo
		if ($app->isClient('administrator')) {
			return;
		}

		// Do tiny, harmless demo work: set a custom header once per request
		$logLevel = (string) $this->params->get('log_level', 'info');
		header('X-MokoSkeleton: active; level=' . $logLevel);
	}
}
