<?php
/**
 * Yaml
 */

namespace Orpheus\Config\Yaml;

use Orpheus\Config\Config;

/**
 * The Yaml configuration class
 *
 * This class is made to get Yaml configuration.
 */
class Yaml extends Config {
	
	/**
	 * Extension for this config files
	 *
	 * @var string
	 */
	protected static string $extension = 'yaml';
	
	/**
	 * Parse configuration from given source.
	 *
	 * @param string $path The path to the config file
	 * @return mixed The loaded configuration array
	 *
	 * If an identifier, load a configuration from a .yaml file in CONFIG_FOLDER.
	 * Else $source is a full path to the Yaml configuration file.
	 */
	public static function parse($path): array {
		return yaml_parse_file($path);
	}

}
