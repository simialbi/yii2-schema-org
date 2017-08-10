<?php
/**
 * Created by PhpStorm.
 * User: karlen
 * Date: 10.08.2017
 * Time: 10:15
 */

namespace simialbi\yii2\schemaorg\commands;


use yii\base\Exception;
use yii\console\Controller;

/**
 * Class SchemaOrgController
 *
 * @package simialbi\yii2\schemaorg\commands
 *
 * @property \simialbi\yii2\schemaorg\Module $module
 */
class SchemaOrgController extends Controller {
	public $defaultAction = 'generate';

	/**
	 *
	 */
	public function actionGenerate() {
		$tree = $this->loadTree();

		var_dump($tree);
	}

	protected function loadTree() {
		$source = $this->module->source;
		$this->stdout("Loading Thing tree from '{$source}'...\n");

		$dom = new \DOMDocument();
		if (!$dom->loadHTMLFile($source)) {
			throw new Exception("Failed to load source: $source");
		}
		$xquery = new \DOMXPath($dom);
		$html   = $dom->saveHTML($xquery->query('//*[@id="thing_tree"]/ul')->item(0));

		return $this->parseTree($html);
	}

	/**
	 * Parse unordered list tree structure and returns as array
	 *
	 * @param string|\SimpleXMLElement $ul
	 *
	 * @return array|bool array tree or false
	 * @throws Exception
	 */
	private function parseTree($ul) {
		if (is_string($ul)) {
			if (!$ul = simplexml_load_string($ul)) {
				throw new Exception("Syntax error in UL/LI structure");
			}

			return $this->parseTree($ul);
		} elseif (is_object($ul)) {
			$output = [];
			foreach ($ul->li as $li) {
				$content = (isset($li->ul)) ? $this->parseTree($li->ul) : (($li->count()) ? $li->children()->asXML() : (string) $li);
				if (is_string($content)) {
					if (trim($content) !== "" && $content !== null) {
						$output[] = $content;
					}
				} else {
					$output[] = $content;
				}
			}

			return $output;
		}

		return false;
	}
}