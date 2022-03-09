<?php
/**
 * YAML
*/

namespace Orpheus\Config\YAML;

use Orpheus\Config\Config;

/**
 * The YAML configuration class
 *
 * This class is made to get YAML configuration.
 */
class YAML extends Config {

	/**
	 * Extension for this config files
	 *
	 * @var string
	 */
	protected static $extension = 'yaml';

	/**
	 * Parse configuration from given source.
	 *
	 * @param string $path The path to the config file
	 * @return mixed The loaded configuration array
	 *
	 * If an identifier, load a configuration from a .yaml file in CONFIG_FOLDER.
	 * Else $source is a full path to the YAML configuration file.
	 */
	public static function parse($path) {
		return yaml_parse_file($path);
	}

}
