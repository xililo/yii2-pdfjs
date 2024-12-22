<?php

namespace xililo\pdfjs;

/**
 * PdfJs Module Viewer.
 * 
 * @link [xililo.github.io](xililo.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2024
 */
class Module extends \yii\base\Module
{
	/**
	 * @var array
	 */
	public $defaultOptions = [];

	/**
	 * @var array
	 */
	public $defaultSections = [];

	/**
	 * @inheritdoc
	 */
	public $controllerNamespace = 'xililo\pdfjs\controllers';
}
