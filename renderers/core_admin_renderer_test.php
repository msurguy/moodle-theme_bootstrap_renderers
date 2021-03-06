<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    theme_bootstrap_renderers
 * @copyright  2012
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('stubs.php');
require_once('core_admin_renderer.php');

class core_admin_renderer_test extends PHPUnit_Framework_TestCase {

    private $admin;

    public function setUp() {
        $this->admin = new theme_bootstrap_renderers_core_admin_renderer();
    }
    public function test_upgrade_reload() {

        $expected = '<div><a href=http://www.example.com class=btn><i class=glyphicon-refresh></i> _reload</a></div>';
        $actual = $this->admin->upgrade_reload('http://www.example.com');

        $this->assertSame($expected, $actual);
    }
}
